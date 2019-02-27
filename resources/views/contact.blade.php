@extends('layouts.app')

@section('content')

{{-- <section>
    <!--Google map-->
    <div id="map-container" class="z-depth-1-half map-container" style="height: 500px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d28681.97175763074!2d27.92104350000001!3d-26.025490500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e6!4m3!3m2!1d-26.0254905!2d27.9210435!4m3!3m2!1d-26.0254905!2d27.9210435!5e0!3m2!1sen!2sza!4v1551047333101" frameborder="0" style="border:0"
        allowfullscreen></iframe>
        
    </div>
</section> --}}

  <!--Main Layout-->
  <main>

        <div class="container mb-5 ">
    
          <!--Grid row-->
          <div class="row" style="margin-top: 15%;">
    
            <!--Grid column-->
            <div class="col-md-12">
             
    
                  <div class="container">
    
                    <!-- Section: Contact v.3 -->
                    <section class="contact-section my-5">
    
                      <!-- Form with header -->
                      <div class="card">
    
                        <!-- Grid row -->
                        <div class="row">
    
                          <!-- Grid column -->
                          <div class="col-lg-8">
    
                            <div class="card-body form">
    
                              <!-- Header -->
                              <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>
    
                              <!-- Grid row -->
                              <div class="row">
    
                                <!-- Grid column -->
                                <div class="col-md-6">
                                  <div class="md-form mb-0">
                                    <input type="text" id="form-contact-name" class="form-control">
                                    <label for="form-contact-name" class="">Your name</label>
                                  </div>
                                </div>
                                <!-- Grid column -->
    
                                <!-- Grid column -->
                                <div class="col-md-6">
                                  <div class="md-form mb-0">
                                    <input type="text" id="form-contact-email" class="form-control">
                                    <label for="form-contact-email" class="">Your email</label>
                                  </div>
                                </div>
                                <!-- Grid column -->
    
                              </div>
                              <!-- Grid row -->
    
                              <!-- Grid row -->
                              <div class="row">
    
                                <!-- Grid column -->
                                <div class="col-md-6">
                                  <div class="md-form mb-0">
                                    <input type="text" id="form-contact-phone" class="form-control">
                                    <label for="form-contact-phone" class="">Your phone</label>
                                  </div>
                                </div>
                                <!-- Grid column -->
    
                                <!-- Grid column -->
                                <div class="col-md-6">
                                  <div class="md-form mb-0">
                                    <input type="text" id="form-contact-company" class="form-control">
                                    <label for="form-contact-company" class="">Your company</label>
                                  </div>
                                </div>
                                <!-- Grid column -->
    
                              </div>
                              <!-- Grid row -->
    
                              <!-- Grid row -->
                              <div class="row">
    
                                <!-- Grid column -->
                                <div class="col-md-12">
                                  <div class="md-form mb-0">
                                    <textarea type="text" id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                                    <label for="form-contact-message">Your message</label>
                                    <a class="btn-floating btn-lg mdb-color text-white"> 
                                      Contact us <i class="far fa-paper-plane"></i>
                                    </a>
                                  </div>
                                </div>
                                <!-- Grid column -->
    
                              </div>
                              <!-- Grid row -->
    
                            </div>
    
                          </div>
                          <!-- Grid column -->
    
                          <!-- Grid column -->
                          <div class="col-lg-4 mdb-color">
    
                            <div class="card-body contact text-center h-100 text-white">
    
                              <h3 class="my-4 pb-2">Contact information</h3>
                              <ul class="text-lg-left list-unstyled ml-4">
                                <li>
                                  <p><i class="fas fa-map-marker-alt pr-2 mb-4"></i>Cosmo City, Roodeport, 2188</p>
                                </li>
                                <li>
                                  <p><i class="fas fa-phone pr-2 mb-4"></i>+27 11 234 5678</p>
                                </li>
                                <li>
                                  <p><i class="fas fa-envelope pr-2"></i>contact@example.com</p>
                                </li>
                              </ul>
                              <hr class="hr-light my-4">
                              <ul class="list-inline text-center list-unstyled">
                                <li class="list-inline-item">
                                  <a class="p-2 fa-lg tw-ic">
                                    <i class="fab fa-twitter"></i>
                                  </a>
                                </li>
                                <li class="list-inline-item">
                                  <a class="p-2 fa-lg li-ic">
                                    <i class="fab fa-linkedin-in"> </i>
                                  </a>
                                </li>
                                <li class="list-inline-item">
                                  <a class="p-2 fa-lg ins-ic">
                                    <i class="fab fa-instagram"> </i>
                                  </a>
                                </li>
                              </ul>
    
                            </div>
    
                          </div>
                          <!-- Grid column -->
    
                        </div>
                        <!-- Grid row -->
    
                      </div>
                      <!-- Form with header -->
    
                    </section>
                    <!-- Section: Contact v.3 -->
    
                  </div>
    
                </div>
              
            <!--Grid column-->
    
          </div>
          <!--Grid row-->
    
        </div>
    
      </main>
      <!--Main Layout-->

  
  
    
@endsection
