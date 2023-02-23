<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <title>Portafolio</title>


    <!-- Navbar content -->

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('menu.menu') }}" >LOOPSTUDIOS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Portafolio
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/reclutamientos">Reclutamiento</a></li>
                            <li><a class="dropdown-item" href="/respuestas">Respuestas taller</a></li>
                            <li><a class="dropdown-item" href="{{route('show.respuestas')}}">Respuestas hechas</a></li>
                            <li><a class="dropdown-item" href="{{ route('pdf.pdf') }}">PDF</a></li>
                            <li><a class="dropdown-item" href="/">Home</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--   Tarjetas-->
    <div class="title-cards">
        <h2>Bienvenido a nuestro portafolio de servicios virtuales</h2>
    </div>
    <div class="container-card">

        <div class="card">
            <figure>
                <img src="img/hqdefault.jpg">
            </figure>
            <div class="contenido-card">
                <h3>Diseño Gràfico</h3>
                <p>Podemos crear la identidad corporativa de tu empresa. Diseño , Maquetación de folletos, Catálogos,
                    Papelería y mucho más.</p>
                <a
                    href="https://articulo.mercadolibre.com.co/MCO-891829173-lentes-de-realidad-virtual-oculus-quest-2-todo-en-uno-_JM?matt_tool=47620768&matt_word=&matt_source=google&matt_campaign_id=14634237776&matt_ad_group_id=150779608488&matt_match_type=&matt_network=g&matt_device=c&matt_creative=644759451829&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=701660918&matt_product_id=MCO891829173&matt_product_partition_id=404867651511&matt_target_id=pla-404867651511&gclid=CjwKCAiAl9efBhAkEiwA4ToritrW5H9XWXZLJa-VC6-dKzMt1iZYfpqNKYgyHwzNiV3eLjDcfQZ6uxoCvEIQAvD_BwE">Leer
                    Màs</a>
            </div>
        </div>
				
        <div class="card">
            <figure>
                <img src="img/D_NQ_NP_785931-MCO44964919930_022021-W.jpg">
            </figure>
            <div class="contenido-card">
                <h3>Gestión de Redes</h3>
                <p>Nosotros creamos y optimizamos tus perfiles en las Redes Sociales. Importantes para que tu presencia
                    online sea completa.</p>
                <a
                    href="https://articulo.mercadolibre.com.co/MCO-808372788-oculus-quest-2-gafas-realidad-virtual-vr-todo-en-uno-128-gb-_JM?matt_tool=47620768&matt_word=&matt_source=google&matt_campaign_id=14634237776&matt_ad_group_id=142467807982&matt_match_type=&matt_network=g&matt_device=c&matt_creative=644826552134&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=660261657&matt_product_id=MCO808372788&matt_product_partition_id=1941898895240&matt_target_id=pla-1941898895240&gclid=CjwKCAiAl9efBhAkEiwA4TorimNjRMvFFTPMiUkdgBikF-LN0FAHGrVQ9Tn9XzmFN3S580COhE48qRoCDd0QAvD_BwE">Leer
                    Màs</a>
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="img/presentacion.jpg">
            </figure>
            <div class="contenido-card">
                <h3>Desarrollo Web</h3>
                <p>Creamos tu página web utilizando las últimas tecnologías disponibles. Una Web adaptativa a tu móvil o
                    Tablet y con un gestor de contenido fácil.</p>
                <a
                    href="https://www.elconfidencial.com/decompras/gadgets/2022-01-24/gafas-de-realidad-virtual-usan-youtubers_3363055/">Leer
                    Màs</a>
            </div>
        </div>
    </div>

    <!--   Tarjetas-->
    <div class="title-cards">
        <h2>Donde podras encontrar la mejor experiencia</h2>
    </div>
    <div class="container-card">

        <div class="card">
            <figure>
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRZ9DMNFHxwZcfPXJrJeBMITxPMP3FMZk_ixXzTfzt4G_C-G058">
            </figure>
            <div class="contenido-card">
                <h3>Diseño Gràfico</h3>
                <p>Podemos crear la identidad corporativa de tu empresa. Diseño , Maquetación de folletos, Catálogos,
                    Papelería y mucho más.</p>
                <a href="https://www.forbes.com.mx/forbes-life/tecnologia-gafas-de-realidad-virtual-para-metaverso/">Leer
                    Màs</a>
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="img/1620711856_306032_1620711989_noticia_normal.jpg">
            </figure>
            <div class="contenido-card">
                <h3>Gestión de Redes</h3>
                <p>Nosotros creamos y optimizamos tus perfiles en las Redes Sociales. Importantes para que tu presencia
                    online sea completa.</p>
                <a
                    href="https://www.elconfidencial.com/decompras/gadgets/2022-01-24/gafas-de-realidad-virtual-usan-youtubers_3363055/">Leer
                    Màs</a>
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="img/2272469.webp">
            </figure>
            <div class="contenido-card">
                <h3>Desarrollo Web</h3>
                <p>Creamos tu página web utilizando las últimas tecnologías disponibles. Una Web adaptativa a tu móvil o
                    Tablet y con un gestor de contenido fácil.</p>
                <a
                    href="https://www.elconfidencial.com/decompras/gadgets/2022-01-24/gafas-de-realidad-virtual-usan-youtubers_3363055/">Leer
                    Màs</a>
            </div>
        </div>
    </div>


    </div>
</body>

</html>
