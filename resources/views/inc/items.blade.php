        <!--Section: Products v.3-->
        <section class="text-center mb-4">


            <!--Grid row-->
            <div class="row wow fadeIn">

              @foreach ($products as $product)
                  <!--Grid column-->
                  <div class="col-lg-3 col-md-12 mb-4">
    
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
            <div class="row text-center">
              <div class="col-md-12">
                  <p>{{ $products->links() }}</p>
              </div>
            </div>
    
          </section>
          <!--Section: Products v.3-->

          <!--Pagination-->
          
          <!--Pagination-->