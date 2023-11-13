<!DOCTYPE html>
<html class="bg-background-color">

<head>
    @include('admin.head')
</head>

<body class="bg-white font-roboto text-green-2">
    @include('admin.nav')
    @yield('content')
    @include('admin.footer')
</body>

<script>
    function Menu(x) {
        x.classList.toggle("change");
        x.classList.toggle("add");
        var menu = document.querySelector("#navbar");
        menu.classList.toggle("hidden");
    }

    // const menu = document.querySelector("#menu");
    // const navbar = document.querySelector("#navbar");
    // let menuOpen = false;

    // menu.addEventListener("click", () => {
    //   if (!menuOpen) {
    //     menu.classList.add("inline");
    //     menuOpen = true;
    //   } else {
    //     menu.classList.remove("hidden");
    //     menuOpen = false;
    //   }
    // });
</script>

</html>
