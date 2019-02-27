@extends('layouts.app')

@section('content')
    <!-- Main Container -->
    <div class="container mt-5 pt-3">


            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark mdb-color mt-5 mb-5">
    
               <span>
                   <h5 class="text-center text-white">{{ strtoupper($categoryName) }}</h5>
               </span>
    
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    
                    
                    <!-- Search form -->
                    <form class="search-form ml-auto" role="search">
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
    
                                    <div class="list-group">
                                        @foreach ($categories as $category)
                                            <a href="{{route('shop.index', ['category' => $category->slug])}}" class="list-group-item list-group-item-action {{ request()->category == $category->slug ? 'mdb-color text-white' : '' }}">{{ $category->name }}</a>
                                        @endforeach
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
                            <a class="btn  mdb-color text-white btn-sm"><i class="fas fa-th mr-2" aria-hidden="true"></i><strong> Grid</strong></a>
                            <a class="btn  mdb-color text-white btn-sm"><i class="fas fa-th-list mr-2" aria-hidden="true"></i><strong> List</strong></a>
                            <!-- /.View Switcher -->
    
                        </div>
    
                    </div>
                    <!-- /.Filter Area -->
    
                    <!-- Products Grid -->
                    <section class="section pt-4">
    
                        <!-- Grid row -->
                        <div class="row">
    



                            @foreach ($products as $product)
                                <!--Grid column-->
                  <div class="col-lg-4 col-md-12 mb-4">
    
                        <!--Card-->
                        <div class="card card-ecommerce">
  
                            <!--Card image-->
                            <div class="view overlay">
                                <img src="{{ productImage($product->image) }}" class="img-fluid" alt="">
                               
                            </div>
                            <!--Card image-->
  
                            <!--Card content-->
                            <div class="card-body">
                                <!--Category & Title-->
  
                                <h6 class="card-title mb-1 text-muted"><strong><a href="{{ route('shop.show', $product->slug) }}" class="dark-grey-text product-title">{{ $product->name }}</a></strong></h6>
                                <hr>
                              <div class="row pl-2 text-muted">
                                  
                                      <span class="float-left mt-3">
                                          <strong>R {{ $product->price }}</strong>
                                      </span>
                                      <span class="ml-auto ">
  
                                          
  
                                          <form action="{{route('cart.store')}}" method="POST">
                                                  {{ csrf_field() }}
                                                  <input type="hidden" name="id" value="{{ $product->id }}">
                                                  <input type="hidden" name="name" value="{{ $product->name }}">
                                                  <input type="hidden" name="price" value="{{ $product->price }}">
                                                  <button class="btn btn-link btn-md" type="submit" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                      <i class="fas fa-shopping-cart text-muted"></i>
                                                  </button>
                                              </form>
                                      </span>
                                  
                              </div>
  
  
                            </div>
                            <!--Card content-->
  
                        </div>
                        <!--Card-->
  
                    </div>
                  <!--Grid column-->
                            @endforeach
    
                           
    
                           
                        </div>
                        <!--Grid row-->
    
                        <!--Grid row-->
                        <div class="row justify-content-center mb-4">
    
                                {{ $products->appends(request()->input())->links() }}
    
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