 @extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    <!-- header-end -->
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container my-3">
            {{-- <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Tentang BEM FIK-UBL</h3>
                    </div>
                </div>
            </div> --}}
                <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                <div class="row">
                  <div class="btn btn-success my-3 col-12 col-md-8">.col-12 .col-md-8</div>
                  <div class="btn btn-success my-3 col-6 col-md-4">.col-6 .col-md-4</div>
                </div>
              
                <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                <div class="row">
                  <div class="btn btn-success my-3 col-6 col-md-4">.col-6 .col-md-4</div>
                  <div class="btn btn-success my-3 col-6 col-md-4">.col-6 .col-md-4</div>
                  <div class="btn btn-success my-3 col-6 col-md-4">.col-6 .col-md-4</div>
                </div>
              
                <!-- Columns are always 50% wide, on mobile and desktop -->
                <div class="row">
                  <div class="btn btn-success my-3 col-6">.col-6</div>
                  <div class="btn btn-success my-3 col-6">.col-6</div>
                </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
@endsection