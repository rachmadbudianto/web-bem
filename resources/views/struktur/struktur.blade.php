@extends('layouts.master')
   
@section('title','Ini Index2')

@section('content')

<div class="bradcam_area ">

  @include('sweetalert::alert')
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <div class="container-fluid"><br>
                      <a href="{{url('crud/editstruktur')}}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit Gambar </a>
                      <a href="{{url('crud/create')}}" class="btn btn-success my-3">Create</a>
                        <!-- COLOR PALETTE -->
                        @foreach ($images as $img) <div class="card card-default color-palette-box">
                          <div class="card-header"> 
                            <h1 class="card-title">
                              Struktur Kepengurusan
                            </h1>
                          </div>
                          <div class="card-body">
                            
                            <!-- /.col-12 -->
                          <a href="/image/{{ $img->id}}" class="btn btn-primary">Detail</a>
                              <img src=" {{asset('images/' . $img->image)}} " class="img-fluid" alt="Responsive image">
                            <!-- /.row -->
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        @endforeach
                        <!-- START ALERTS AND CALLOUTS -->
                        
                      </div><!-- /.container-fluid -->
                </div>
            </div>
        </div>
</div>

@endsection