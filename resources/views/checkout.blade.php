@extends('layouts.app')

@section('content')

<!--Main layout-->
<main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout form</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body" id="form" action="{{ route('checkout.create') }}" method="POST">
                {{ csrf_field() }}
              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--firstName-->
                  <div class="md-form ">
                        <input type="text" name="firstName" id="firstName" class="form-control" >
                        <label for="firstName" >First Name</label>
                    </label>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--lastName-->
                  <div class="md-form">
                    <input type="text" name="lastName" id="lastName" class="form-control" >
                    <label for="lastName" >Last Name</label>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--email-->
              <div class="md-form mb-5">
                <input type="text" name="email" id="email" class="form-control">
                <label for="email" >Email </label>
              </div>

             <!--email-->
             <div class="md-form mb-5">
                    <input type="text" name="mobile_no" id="mobile_no" class="form-control">
                    <label for="mobile_no" >Mobile Number </label>
                  </div>
              <!--address-->
              <div class="md-form mb-5">
            
                <input type="text" name="address" id="address" class="form-control" >
                <label for="address" >Address</label>
                        
                      
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                    <input type="text" name="address2" id="address2" class="form-control" >
                    <label for="address2" >Address (Optional)</label>
              </div>

              <!--Grid row-->
              <div class="row">


                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="state">Province</label>
                  <select class="custom-select d-block w-100" id="state" required>
                    <option value="">Choose...</option>
                    <option>Gauteng</option>
                    <option>Limpopo</option>
                    <option>North West</option>
                    <option>Northern Cape</option>
                    <option>Western Cape</option>
                    <option>Eastern Cape</option>
                    <option>Mpumalanga</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid province.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="zip">Zip</label>
                  <input type="text" name="zip" class="form-control" id="zip" required>
                  

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <hr>

              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Save this information for next time</label>
              </div>

              <hr>

              <div class="d-block my-3">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                  <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="paypal">Paypal</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="ccName">Name on card</label>
                  <input type="text" name="ccName" class="form-control" id="ccName" required>
                  <br>
                  <small class="text-muted">Full name as displayed on card</small>

                </div>
                <div class="col-md-6 mb-3">
                  <label for="ccNumber">Credit card number</label>
                  <input  class="form-control" id="ccNumber" name="ccNumber" required>
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="ccExpiration">Expiration</label>
                  <input type="text" class="form-control" id="ccExpiration" name="ccExpiration" required>
                  
                </div>
                <div class="col-md-3 mb-3">
                  <label for="cvv">CVV</label>
                  <input  class="form-control" id="cvv" name="cvv" required>
                  
                </div>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          @if (Cart::instance('default')->count() > 0)
              <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge  badge-pill mdb-color">{{ Cart::instance('default')->count() }}</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            @foreach (Cart::instance('default')->content() as $product)
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ $product->model->name }}</h6>
                        @foreach ($product->model->categories as $category)
                            <small class="text-muted">
                                {{$category->name}}
                            </small>
                        @endforeach
                    </div>
                    <span class="text-muted">R {{ $product->model->price }}</span>
                </li>
            @endforeach
            
            
            {{-- <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>CSF500</small>
              </div>
              <span class="text-success">-R 50</span>
            </li> --}}
            <li class="list-group-item d-flex justify-content-between">
              <span>Subtotal </span>
              <strong>R {{Cart::subtotal()}}</strong>
            </li>
            {{-- @if (session()->has('coupon'))
            <li class="list-group-item d-flex justify-content-between">
                <span>Discount ({{ session()->get('coupon')['name'] }}) 
                  <form action="{{route('coupon.destroy')}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button type="submit" class="btn btn-primary btn-sm btn-block">remove</button>
                  </form>
                </span>
                
                <strong> -R {{ session()->get('coupon')['discount'] }}</strong> 
                
              </li>
            @endif
            <li class="list-group-item d-flex justify-content-between">
                <span>New Subtotal </span>
                <strong>R {{Cart::subtotal()}}</strong>
              </li> --}}
            <li class="list-group-item d-flex justify-content-between">
              <span>Tax </span>
              <strong>R {{Cart::tax()}}</strong>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total </span>
              <strong>R {{Cart::total()}}</strong>
            </li>
          </ul>
          <!-- Cart -->
          @if (!session()->has('coupon'))
          <!-- Promo code -->
          {{-- <form class="card p-2" action="{{route('coupon.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Coupon code" id="coupon_code" name="coupon_code" >
              <div class="input-group-append">
                <button class="btn btn-secondary btn-md waves-effect m-0" type="submit">Redeem</button>
              </div>
            </div>
          </form> --}}
          <!-- Promo code -->
            @endif
          @endif

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
    
@endsection

@section('extra-js')

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
   <script src="{{ asset('js/validate.js') }}">
   </script>

   <script>

     @if(session()->has('coupon_success'))
         toastr.success("Coupon has been successfully redeemed");
     @endif

     @if(session()->has('coupon_error'))
         toastr.error("Invalid coupon code. Please try again.");
     @endif

     @if(session()->has('coupon_remove'))
         toastr.error("Coupon removed successfully");
     @endif
 
 
 </script>
 
@endsection

