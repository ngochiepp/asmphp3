{{-- <nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Lọc theo danh mục</a>
          </li> --}}
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Danh mục
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('product-cate',['cate_id'=>'1'])}}">Canon</a></li>
              <li><a class="dropdown-item" href="{{route('product-cate',['cate_id'=>'2'])}}">Sony</a></li>
              <li><a class="dropdown-item" href="{{route('product-cate',['cate_id'=>'3'])}}">Digital</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>  --}}


   <div ng-app="appRouter">
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
                            <a class="nav-link" href="{{route('home')}}" data-reload>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!/shop" data-reload>Shop</a>
                        </li>
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="#!/list_category" data-reload>Category</a>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                               <li class="nav-item">
                                <a class="nav-link" href="#">Lọc theo danh mục</a>
                              </li>  --}}
                               <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Danh mục
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{route('product-cate',['cate_id'=>'1'])}}">Canon</a></li>
                                  <li><a class="dropdown-item" href="{{route('product-cate',['cate_id'=>'2'])}}">Sony</a></li>
                                  <li><a class="dropdown-item" href="{{route('product-cate',['cate_id'=>'3'])}}">Digital</a></li>
                                </ul>
                              </li>
                            </ul>
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

    </div> 