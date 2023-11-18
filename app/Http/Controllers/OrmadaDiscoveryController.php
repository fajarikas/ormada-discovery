<?php

namespace App\Http\Controllers;

use App\Models\Ormada;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrmadaDiscoveryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $ormada = Ormada::where('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('regional', 'LIKE', '%' . request('search') . '%')
                ->orWhere('instagram', 'LIKE', '%' . request('search') . '%')
                ->orderBy('regional', 'ASC')
                ->paginate(10000);
        } else {
            $ormada = Ormada::orderBy('regional', 'ASC')->paginate(10000);
        }
        // return view('admin.dashboard', ['ormada' => $ormada]);
        return view('page.ormadaDiscoveryPage', ['ormada' => $ormada]);
    }
}
