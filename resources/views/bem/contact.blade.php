@extends('layouts.master')
   
@section('title','Contact')

@section('content')
    <!-- header-end -->
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Contact</h3>

                        <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
                            <div class="overlay"></div>
                            <div class="container">
                              <div class="row no-gutters slider-text align-items-center justify-content-center">
                                <div class="col-md-9 ftco-animate text-center"> 
                                  </div>
                              </div>
                            </div>
                          </section>
                      
                          <section class="ftco-section contact-section">
                            <div class="container">
                              <div class="row d-flex mb-5 contact-info justify-content-center">
                                  <div class="col-md-8">
                                      <div class="row mb-5">
                                        <div class="col-md-4 text-center py-4">
                                            <div class="icon">
                                                <span class="icon-map-o"></span>
                                            </div>
                                          <p><span>BEM FIK</span> </p>
                                        </div>
                                        <div class="col-md-4 text-center border-height py-4">
                                            <div class="icon">
                                                <span class="icon-mobile-phone"></span>
                                            </div>
                                          <p><span>Phone:</span> <a href="tel://1234567920">+ 62-xxxx-xxxx</a></p>
                                        </div>
                                        <div class="col-md-4 text-center py-4">
                                            <div class="icon">
                                                <span class="icon-envelope-o"></span>
                                            </div>
                                          <p><span>Email:</span> <a href="mailto:bem_fik@student.ubl.ac.id">bem_fik@student.ubl.ac.id</a></p>
                                        </div>
                                      </div>
                                </div>
                              </div>
                              <div class="row block-9 justify-content-center mb-5">
                                <div class="col-md-8 mb-md-5">
                                    <h3 class="text-center">Jika Anda memiliki pertanyaan <br> jangan ragu untuk mengirim kami pesan</h2>

                                      {{-- Form --}}
                                  <form action="#" class="bg-light p-5 contact-form">
                                    <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                      <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Kirim" class="btn btn-primary py-3 px-5">
                                    </div>
                                  </form>
                                  {{-- end form  --}}
                                
                                </div>
                              </div>
                            </div>
                          </section>
                      
                          <section class="ftco-section ftco-no-pb ftco-no-pt">
                              <div class="container-fluid px-0">
                                  <div class="row justify-content-center">
                                  <div class="col-md-12">
                                      <div id="map" class="bg-white"></div>
                                  </div>
                              </div>
                              </div>
                          </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

@endsection