<?php

namespace App\Http\Controllers;

use App\Models\Ormada;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $ormada = Ormada::where('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('regional', 'LIKE', '%' . request('search') . '%')
                ->orWhere('instagram', 'LIKE', '%' . request('search') . '%')
                ->orderBy('regional', 'ASC')
                ->paginate(5);
        } else {
            $ormada = Ormada::orderBy('regional', 'ASC')->paginate(5);
        }
        return view('admin.dashboard', ['ormada' => $ormada]);
        // return view('admin.dashboard');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'regional' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'instagram' => 'required',
            'whatsapp' => 'required',
        ]);

        $fileName = time() . '.' . $request->logo->extension();
        $request->logo->storeAs('public/images', $fileName);
        $ormada = new \App\Models\Ormada;
        $ormada->name = $request->get('name');
        $ormada->regional = $request->get('regional');
        $ormada->logo = $fileName;
        $ormada->instagram = $request->get('instagram');
        $ormada->whatsapp = $request->get('whatsapp');
        $ormada->save();

        // $dd = $request->all();

        return redirect('dashboard')->with('status', 'Ormada berhasil ditambahkan!');
    }

    public function show($id)
    {
        $ormada = \App\Models\Ormada::findOrFail($id);
        return view('admin.show', ['ormada' => $ormada]);
    }


    public function edit($id)
    {
        $ormada = \App\Models\Ormada::findOrFail($id);
        return view('admin.edit', ['ormada' => $ormada]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'regional' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'instagram' => 'required',
            'whatsapp' => 'required',
        ]);

        $fileName = time() . '.' . $request->logo->extension();
        $request->logo->storeAs('public/images', $fileName);
        $ormada = \App\Models\Ormada::findOrFail($id);
        $ormada->name = $request->get('name');
        $ormada->regional = $request->get('regional');
        $ormada->logo = $fileName;
        $ormada->instagram = $request->get('instagram');
        $ormada->whatsapp = $request->get('whatsapp');
        $ormada->save();


        return redirect('admin.dashboard')->with('status', 'Ormada berhasil diubah!');
    }

    public function destroy($id)
    {
        $ormada = \App\Models\Ormada::findOrFail($id);
        $ormada->delete();

        return redirect('dashboard');
    }
}
