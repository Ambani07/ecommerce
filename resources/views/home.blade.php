@extends('layouts.app')

@section('carousel')
  @include('inc.carousel')
@endsection


@section('content')

<main>
  <div class="container">

<div class="pos-f-t">
  <div class="collapse mt-3 show" id="navbarToggleExternalContent">
    <div class="mdb-color  p-4">
      <h4 class="text-white">Categories</h4>
      <h5>
          <strong>
            
            @foreach ($categories as $category)
              <a href="{{route('shop.index', ['category' => $category->slug])}}" class="dark-grey-text">
                <span class="badge badge-pill primary-color">{{ $category->name }}</span>
              </a>
            @endforeach
            
          </strong>
        </h5>
    </div>
  </div>
  <nav class="navbar navbar-dark mdb-color  mt-3 mb-5">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
      aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="search-form" role="search">
      <div class="form-group md-form my-0 waves-light">
          <input type="text" class="form-control" placeholder="Search">
      </div>
  </form>
  </nav>
</div>
  

  <!--Section: Products v.3-->
  <section class="text-center mb-4">
    @include('inc.items')
  </section>
  <!--Section: Products v.3-->

  </div>
</main>
  
    
@endsection

@section('extra-js')

    
@endsection