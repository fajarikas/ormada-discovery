<!-- FILEPATH: /home/fajarikasaputra/Dokumen/RKSIU/Project/ormada-expo/index.html -->

<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    @include('partial.head')
</head>

<body class="font-roboto mt-0 md:mt-[40px] bg-green-3">
    @include('partial.navbar')

    @yield('content')

    @include('partial.footer')
</body>

<script>
    ScrollReveal().reveal("#top", {
        delay: 300,
        duration: 1000,
        origin: "top",
        distance: "50px",
        opacity: 0,
        reset: true,
    });

    ScrollReveal().reveal("#bottom", {
        delay: 300,
        duration: 1000,
        origin: "bottom",
        distance: "50px",
        opacity: 0,
        reset: true,
    });

    ScrollReveal().reveal("#left", {
        delay: 300,
        duration: 1000,
        origin: "left",
        distance: "50px",
        opacity: 0,
        reset: true,
    });

    ScrollReveal().reveal("#right", {
        delay: 300,
        duration: 1000,
        origin: "right",
        distance: "50px",
        opacity: 0,
        reset: true,
    });

    function Menu(x) {
        x.classList.toggle("change");
        x.classList.toggle("add");
        var menu = document.querySelector("#navbar");
        menu.classList.toggle("hidden");
    }
</script>

</html>
