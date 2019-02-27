@extends('layouts.app')

@section('content')

  <!--Main layout-->
<main class="mt-5 pt-4">
    

  <div class="container dark-grey-text mt-5">

    
    
    <!--Product card-->
    <div class="card mt-5 hoverable">

        
        @if ($product)
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="row mx-2">
                  <div class="col-md-12 text-center">
                      {{-- <img src="{{ asset('img/products/'. $product->slug .'.png') }}" alt="First slide" class="img-fluid"> --}}
                      <img src="{{ asset('storage/' . $product->image ) }}" alt="First slide" class="img-fluid">
                  </div>
                </div>

                <!--Grid row-->
                <div class="row mb-4">

                    <div class="col-md-12">

                    <div id="mdb-lightbox-ui"></div>

                        
                    </div>
                </div>
                <!--Grid row-->
            </div>
            <div class="col-lg-5 mr-3 text-center ">
                <h2 class="h2-responsive text-center  product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                    <strong>{{ $product->name }}</strong>
                </h2>
                
                  @foreach ($product->categories as $category)
                    <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">
                      {{$category->name}}
                    </span>
                  @endforeach
                
                </strong>
                </h2>
                <span class="badge badge-success product mb-4 ml-2">SALE</span>
                <h3 class="h3-responsive text-center  mb-5 ml-xl-0 ml-4">
                    <span class="red-text font-weight-bold">
                        <strong>R {{ $product->price }}</strong>
                    </span>
                    {{-- <span class="grey-text">
                        <small>
                            <s>$1789</s>
                        </small>
                    </span> --}}
                </h3>
                <p class="lead font-weight-bold">Description</p>

                <p>{!! $product->description !!}</p>


                <!-- Add to Cart -->
                <section class="color">
                    <div class="mt-5">
                        
                        <div class="row text-center ">

                            

                        <div class="row mt-3 mb-4">
                            <div class="col-md-12 text-center  text-md-right text-xs-right ml-auto">
                                
                                  <form action="{{route('cart.store')}}" method="POST">
                                      {{ csrf_field() }}
                                      <input type="hidden" name="id" value="{{ $product->id }}">
                                      <input type="hidden" name="name" value="{{ $product->name }}">
                                      <input type="hidden" name="price" value="{{ $product->price }}">
                                      <button class="btn mdb-color btn-md text-white my-0 p" type="submit">Add to cart
                                          <i class="fas fa-shopping-cart ml-1"></i>
                                        </button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Add to Cart -->
            </div>
        </div>
        @endif
    </div>
    <!--Product card-->

    <!--Grid row-->
    <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4">Additional information</h4>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row ">

          <ul class="nav info-pills">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#panel11" role="tab">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel12" role="tab">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel13" role="tab">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel14" role="tab">Help</a>
              </li>
            </ul>
            
            <!-- Tab panels -->
            <div class="tab-content pt-0">
            
              <!--Panel 1-->
              <div class="tab-pane fade in show active" id="panel11" role="tabpanel">
                <br>
            
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                  reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                  porro voluptate odit minima.</p>
            
              </div>
              <!--/.Panel 1-->
            
              <!--Panel 2-->
              <div class="tab-pane fade" id="panel12" role="tabpanel">
                <br>
            
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                  reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                  porro voluptate odit minima.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                  reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                  porro voluptate odit minima.</p>
            
              </div>
              <!--/.Panel 2-->
            
              <!--Panel 3-->
              <div class="tab-pane fade" id="panel13" role="tabpanel">
                <br>
            
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                  reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                  porro voluptate odit minima.</p>
            
              </div>
              <!--/.Panel 3-->
            
              <!--Panel 4-->
              <div class="tab-pane fade" id="panel14" role="tabpanel">
                <br>
            
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                  reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                  porro voluptate odit minima.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                  reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                  porro voluptate odit minima.</p>
            
              </div>
              <!--/.Panel 4-->
            
            </div>
      </div>
      <!--Grid row-->

                <!-- Section products -->
                

                    <h4 class="font-weight-bold mt-4 title-1">
                      <strong>YOU MAY BE INTERESTED IN</strong>
                    </h4>
                    <hr class="blue mb-5">
            
                    <!-- Grid row -->
                    <div class="row mb-3">

                      @if ($related_products)
                          @foreach ($related_products as $product)
                              <!--Grid column-->
                      <div class="col-lg-3 col-md-6 mb-4">
            
                          <!--Card-->
                          <div class="card card-ecommerce text-center">
              
                            <!--Card image-->
                            <div class="view overlay">
                              <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                                alt="">
                              <a>
                                <div class="mask rgba-white-slight"></div>
                              </a>
                            </div>
                            <!--Card image-->
              
                            <!--Card content-->
                            <div class="card-body">
                              <!--Category & Title-->
              
                              <h5 class="card-title mb-1">
                                <strong>
                                  <a href="" class="dark-grey-text">{{ $product->name }}</a>
                                </strong>
                              </h5>
                              <span class="badge badge-info mb-2">new</span>
                              
              
                              <!--Card footer-->
                              
                                <div class="row mb-0">
                                    <div class="col-md-12">
                                      <p class="lead">
                                          R 564654
                                      </p>
                                    </div>
          
                                    <div class="col-md-12">
                                          <form class="d-flex justify-content-left add-to-cart">
                                              <div class="row">
                                                  <div class="col-md-12 col-xs-12 col-sm-12">
                                                      <button class="btn btn-primary btn-sm btn-block my-0 text-center" type="submit">Add to cart
                                                          <i class="fas fa-shopping-cart ml-1"></i>
                                                          </button>
                                                  </div>
                                              </div>
                                          </form>
                                    </div>
                                  
                                  
                                  
                                  
                                </div>
                              
              
                            </div>
                            <!--Card content-->
              
                          </div>
                          <!--Card-->
              
                        </div>
                        <!--Grid column-->
                          @endforeach
                      @endif  
            
                    </div>
                    <!--Grid row-->
            
            
                    <!--Grid row-->
                    <div class="row flex-center mb-5">
            
                      <p>
                        <a class="btn btn-primary btn-rounded mb-5"  href="#" aria-expanded="false">More products</a>
                      </p>
        
            
                    </div>
                    <!--Grid row-->
            

                  <!-- Section products -->


              </div>
        </div>
        <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div class="toast" style="position: absolute; top: 0; right: 0;" data-autohide="false">
    <div class="toast-header">
      <svg class="rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
        focusable="false" role="img">
        <rect fill="#007aff" width="100%" height="100%" /></svg>
      <strong class="mr-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
</main>
  <!--Main layout-->

  
  
    
@endsection

@section('extra-js')
  <script>
      $(document).ready(function(){
        $('.info-pills li').click(function() {
              $(this).siblings('li').removeClass('active');
              $(this).siblings('li').removeClass('info');
              $(this).addClass('info');
          });

          $('.toast').toast('show');
      });
  </script>
  

@endsection