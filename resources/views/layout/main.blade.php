{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @include('layout.nav')
    <main>
        
        @yield('content')

    </main>
    @include('layout.footer')
     

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> 

 --}}
<!doctype html>
<html lang="en">

<head>
    <title>FPT POLYTECHNIC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>

    <script src="lib/angular.min.js"></script>
    <script src="lib/angular-route.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="https://caodang.fpt.edu.vn/wp-content/uploads/cropped-logo-fpt-192x192.png"
        sizes="192x192" />
</head>
<style>
    ul,
    li,
    a {
        font-size: 20px;
        margin: 0 -10px 0 20px;
    }

    #offcanvasTop {
        --bs-offcanvas-height: 35vh;
        background-color: #c5e1d4;
    }
</style>

<body>
    {{-- <div ng-app="appRouter">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#!/home"><img src="/image/logo.png" alt=""
                        style="width: 150px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#!/home" data-reload>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!/shop" data-reload>Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!/list_category" data-reload>Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!/list_product" data-reload>Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!/contact" data-reload>Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <button class="btn btn-sm btn-outline-light" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                            <i class="fa-solid fa-magnifying-glass"></i> Search
                        </button>
                    </div>
                </div>


            </div>
        </nav>
        <!-- Offcanvas Block -->
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="container pt-5">
                <div class="offcanvas-header">
                    <h2 class="fw-bold pb-3">Search here</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <form class="position-relative" action="#" method="post">
                        <input type="tel" class="form-control" id="exampleFormControlInput1"
                            placeholder="Examples: posts, services,..">
                        <button class="position-absolute top-0 end-0 border-0 bg-transparent py-2 pe-2 text-secondary"
                            type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <header>
            <!-- place navbar here -->
            <img class="banner-desktop" src="/image/banner.png" alt width="100%">
        </header>
        <main>
            <div ng-view=""></div>
        </main>

    </div> --}}

    @include('layout.nav')
    <main>
        
        @yield('content')

    </main>
    @include('layout.footer')
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    {{-- <script src="route/route.js"></script>
        <script src="controller/ShopController.js"></script>
        <script src="controller/CateController.js"></script>
        <script src="controller/AddController.js"></script>
        <script src="controller/ListController.js"></script>
        <script src="controller/DetailController.js"></script> --}}
</body>

</html>
