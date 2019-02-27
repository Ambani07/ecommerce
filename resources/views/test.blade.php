@extends('layouts.app')

@section('content')
    <!-- Main Container -->
    <div class="container mt-5 pt-3">


            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark primary-color mt-5 mb-5">
    
                <!-- Navbar brand -->
                <a class="font-weight-bold white-text mr-4" href="#">Categories</a>
    
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    
                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
    
                       
                        
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accesories</a>
                            <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="navbarDropdownMenuLink1">
                                <div class="row mx-md-4 mx-1">
                                    <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">
                                        <h6 class="sub-title text-uppercase font-weight-bold blue-text">Featured</h6>
                                        <ul class="caret-style pl-0">
                                            <li class=""><a class="menu-item mb-0" href="">Mouse</a></li>
                                            <li class=""><a class="menu-item" href="">Printer</a></li>
                                            <li class=""><a class="menu-item" href="">Laptop bags</a></li>
                                            <li class=""><a class="menu-item" href="">Software</a></li>
                                            <li class=""><a class="menu-item" href="">Headphones</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">
                                        <h6 class="sub-title text-uppercase font-weight-bold blue-text">Related</h6>
                                        <!--Featured image-->
                                        <div class="view overlay mb-3 z-depth-1">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(43).jpg" class="img-fluid" alt="First sample image">
                                            <div class="mask flex-center rgba-white-slight">
                                                <p></p>
                                            </div>
                                        </div>
                                        <h4 class="mb-2"><a class="news-title-2 pl-0" href="">Lorem ipsum dolor sit</a></h4>
                                        <p class="font-small text-uppercase dark-grey-text"><i class="far fa-clock-o pr-2" aria-hidden="true"></i>July 17, 2017 / <i class="far fa-comments px-1"
                                                aria-hidden="true"></i> 20</p>
                                    </div>
                                    <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                        <h6 class="sub-title text-uppercase font-weight-bold blue-text">Bestseller</h6>
                                        <!--Featured image-->
                                        <div class="view overlay mb-3 z-depth-1">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" class="img-fluid" alt="First sample image">
                                            <div class="mask flex-center rgba-white-slight">
                                                <p></p>
                                            </div>
                                        </div>
                                        <h4 class="mb-2"><a class="news-title-2 pl-0" href="">Ut labore et dolore magna</a></h4>
                                        <p class="font-small text-uppercase dark-grey-text"><i class="far fa-clock-o pr-2" aria-hidden="true"></i>July 16, 2017 / <i class="far fa-comments px-1"
                                                aria-hidden="true"></i> 25</p>
                                    </div>
                                    <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                        <h6 class="sub-title text-uppercase font-weight-bold blue-text">
                                            Customers opinion</h6>
                                        <ul class="caret-style pl-0">
                                            <li class=""><a class="menu-item" href="">Totam rem aperiam eaque</a></li>
                                            <li class=""><a class="menu-item" href="">Beatae vitae dicta sun</a></li>
                                            <li class=""><a class="menu-item" href="">Quae ab illo inventore</a></li>
                                            <li class=""><a class="menu-item" href="">Nemo enim ipsam</a></li>
                                            <li class=""><a class="menu-item" href="">Neque porro quisquam est</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
    
                    </ul>
                    <!-- Links -->
    
                    <!-- Search form -->
                    <form class="search-form" role="search">
                        <div class="form-group md-form my-0 waves-light">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </div>
                <!-- Collapsible content -->
    
            </nav>
            <!--/.Navbar-->
    
    
            <div class="row pt-4">
    
                <!-- Sidebar -->
                <div class="col-lg-3">
    
                    <div class="">
                        <!-- Grid row -->
                        <div class="row">

    
                            <!-- Filter by category-->
                            <div class="col-md-6 col-lg-12 mb-5">
                                <h5 class="font-weight-bold dark-grey-text"><strong>Category</strong></h3>
                                    <div class="divider"></div>
    
                                    <!--Radio group-->
                                    <div class="form-group ">
                                        <input class="form-check-input" name="group100" type="radio" id="radio100">
                                        <label for="radio100" class="form-check-label dark-grey-text">All</label>
                                    </div>
    
                                    
                                    <!--Radio group-->
                            </div>
                            <!-- /Filter by category-->
                        </div>
                        <!-- /Grid row -->

                    </div>
    
                </div>
                <!-- /.Sidebar -->
    
                <!-- Content -->
                <div class="col-lg-9">
    
                    <!-- Filter Area -->
                    <div class="row">
    
                        <div class="col-md-4 mt-3">

                        </div>
                        <div class="col-md-8 text-right">
    
                            <!-- View Switcher -->
                            <a class="btn btn-blue-grey btn-sm"><i class="fas fa-th mr-2" aria-hidden="true"></i><strong> Grid</strong></a>
                            <a class="btn btn-blue-grey btn-sm"><i class="fas fa-th-list mr-2" aria-hidden="true"></i><strong> List</strong></a>
                            <!-- /.View Switcher -->
    
                        </div>
    
                    </div>
                    <!-- /.Filter Area -->
    
                    <!-- Products Grid -->
                    <section class="section pt-4">
    
                        <!-- Grid row -->
                        <div class="row">
    
                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4">
    
                                <!--Card-->
                                <div class="card card-ecommerce">
    
                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" class="img-fluid" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->
    
                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->
    
                                        <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">iPad</a></strong></h5><span class="badge badge-danger mb-2">bestseller</span>
                                        <hr>
                          <div class="row pl-2 dark-grey-text">
                              
                                  <span class="float-left">
                                      <strong>R 654</strong>
                                  </span>
                                  <span class="float-right">
    
                                      <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                          <i class="fas fa-shopping-cart ml-3"></i>
                                      </a>
                                  </span>
                              
                          </div>

    
                                    </div>
                                    <!--Card content-->
    
                                </div>
                                <!--Card-->
    
                            </div>
                            <!--Grid column-->
    
                           
    
                           
                        </div>
                        <!--Grid row-->
    
                        <!--Grid row-->
                        <div class="row justify-content-center mb-4">
    
                            <!--Pagination -->
                            <nav class="mb-4">
                                <ul class="pagination pagination-circle pg-blue mb-0">
    
                                    <!--First-->
                                    <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">First</a></li>
    
                                    <!--Arrow left-->
                                    <li class="page-item disabled">
                                        <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
    
                                    <!--Numbers-->
                                    <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
                                    <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
                                    <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
                                    <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
                                    <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>
    
                                    <!--Arrow right-->
                                    <li class="page-item">
                                        <a class="page-link waves-effect waves-effect" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
    
                                    <!--First-->
                                    <li class="page-item clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">Last</a></li>
    
                                </ul>
                            </nav>
                            <!--/Pagination -->
    
                        </div>
                        <!--Grid row-->
                    </section>
                    <!-- /.Products Grid -->
    
                </div>
                <!-- /.Content -->
    
            </div>
    
        </div>
        <!-- /.Main Container -->

@endsection

@section('extra-js')
<script type="text/javascript">
    /* WOW.js init */
    new WOW().init();

    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<script>
    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });
</script>
<script>
    // SideNav Initialization
    $(".button-collapse").sideNav();
</script>
@endsection