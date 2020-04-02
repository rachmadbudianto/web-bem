 @extends('layouts.master')

@section('title', 'Detail foto')

@section('content')
    <!-- header-end -->
    <!-- bradcam_area  -->

    


    <div class="bradcam_area bradcam_bg_1">
        <div class="container my-3">

            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header bg-transparent border-success text-center"><h5>Nama File Foto</h5></div>
                <div class="card-body text-success">
                  <h4 class="card-title">{{ $images->image}}</h4> </div>
                <div class="card-footer bg-transparent border-success">
                    <a href="/struktur/struktur" class="btn btn-success"><- Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
              </div>
                {{-- <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title text-center">Nama File foto</h5>
                      <h5 class=" mt-2">{{ $images->image}}</h5>
                      <p class="card-text"></p><br>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div> --}}
        </div>
    </div>
    <!--/ bradcam_area  -->
@endsection