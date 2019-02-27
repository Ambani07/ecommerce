@extends('layouts.app')

@section('content')

<!--Main Layout-->
<main class="pt-5">

        <!-- Main Container -->
        <div class="container">
    
          <!-- Section cart -->
          <section class="section my-5 pb-5 ">
    
            <div class="card card-ecommerce mt-5">
              <div class="card-body">
    
                @if (Cart::count() > 0)
                    <h5>{{Cart::count() }} item(s) in shopping cart</h5>
                    <!-- Shopping Cart table -->
                <div class="table-responsive table-hover">
    
                        <table class="table product-table">
          
                          <!-- Table head -->
                          <thead class="mdb-color lighten-5">
                            <tr>
                              <th></th>
                              <th class="font-weight-bold">
                                <strong>Product</strong>
                              </th>
                              
                              <th></th>
                              <th class="font-weight-bold">
                                <strong>Price</strong>
                              </th>
                              <th class="font-weight-bold">
                                <strong>QTY</strong>
                              </th>
                              <th class="font-weight-bold">
                                <strong>Amount</strong>
                              </th>
                              <th></th>
                            </tr>
                          </thead>
                          <!-- /.Table head -->
          
                          <!-- Table body -->
                          <tbody class="table-hover">
          
                            
      
                            @foreach (Cart::content() as $product)
                                <!-- First row -->
                            <tr>
                                  <th scope="row">
                                    <img style="max-width: 35%;" src="{{ asset('storage/' . $product->model->image ) }}" alt="Product image" class="img-fluid z-depth-0">
                                  </th>
                                  <td>
                                    <h5 class="mt-3">
                                      <strong>{{ $product->model->name }}</strong>
                                    </h5>
                                    <p class="text-muted">
                                        @foreach ($product->model->categories as $category)
                                            {{ $category->name }}
                                        @endforeach
                                    </p>
                                  </td>
                                  
                                  <td></td>
                                  <td>R {{ $product->model->price }}</td>
                                  <td class="text-center text-md-left">

                                      <form>
                                        <div class="form-group">
                                          <input type="number" data-id="{{$product->rowId}}" class="form-control quantity" value="{{$product->qty}}" max="20" min="1">
                                        </div>
                                        
                                      </form>
                                  </td>
                                  <td class="font-weight-bold">
                                    <strong>R {{ $product->qty * $product->price }}</strong>
                                  </td>
                                  <td>

                                   

                                    <form class="form-inline" action="{{ route('cart.destroy', $product->rowId)}}" method="POST">
                                      {{ csrf_field() }}
                                      {{ method_field('DELETE') }}
                                      <button type="submit" class="btn btn-sm mdb-color text-white">
                                        <i class="fa fa-trash ml-1"></i>
                                      </button>
                                    </form>


                                  </td>
                                </tr>
                            @endforeach
      
      
                            
                          </tbody>
                          <!-- /.Table body -->
                          <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <ul class="list-group list-group-flush pull-right">
                                            <li class="list-group-item">Subtotal <span>R {{Cart::subtotal()}}</span></li>
                                            <li class="list-group-item">Tax(18%) <span>R {{Cart::tax()}}</span></li>
                                            <li class="list-group-item"> <strong>Total R {{Cart::total()}}</strong> </li>
                                        </ul>
                                    </td>
                                </tr>

                            </tfoot>
          
                        </table>

                        
          
                      </div>
                      <!-- /.Shopping Cart table -->
                @else
                    <h6>No item(s) in shopping cart</h6>
                @endif
    
              </div>
              <div class="card-footer">
                    <div class="row">
                            <div class="col-md-6 ">
                                <a href="{{ route('home') }}" class="btn btn-warning bg-block ml-auto"> <i class="fa fa-chevron-left"></i> Continue Shopping</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('checkout.index') }}" class="btn btn-success bg-block mr-auto">Checkout <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
              </div>
    
            </div>
    
          </section>
          <!-- /Section cart -->
    

    
        </div>
        <!-- /.Main Container -->
    
      </main>
      <!--Main Layout-->

    
@endsection

@section('extra-js')
  <script>
      $(document).ready(function(){
        $('.info-pills li').click(function() {
              $(this).siblings('li').removeClass('active');
              $(this).siblings('li').removeClass('info');
              $(this).addClass('info');
          });
      });
  </script>
  <script>
    @if(session()->has('success_destroy_message'))
        toastr.warning("Item removed from cart!...");
    @endif

    @if(session()->has('success_message'))
        toastr.success("Item successfully added to cart!...");
    @endif

    @if(session()->has('warning'))
        toastr.warning("Incorrect password or email");
    @endif

    @if(session()->has('error'))
        toastr.error("Not Found");
    @endif


</script>

<script>
			
    (function(){
      const classname = document.querySelectorAll('.quantity')
      Array.from(classname).forEach(function(element){
        const id = element.getAttribute('data-id');

        element.addEventListener('input', function(){
            axios.patch( `/cart/${id}`, {
            quantity: this.value
          })
          .then(function (response) {
            console.log(response);

            window.location.href = '{{ route('cart.index')}}'
          })
          .catch(function (error) {
            console.log(error);
            window.location.href = '{{ route('cart.index')}}'
          });
        })
        
      });
    })();
  </script>
@endsection

