
@extends('layouts.master')
   
@section('title','Presiden dan Wakil')

@section('content')

<div class="bradcam_area ">
        
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">

                    <div class="container-fluid"><br>
                      {{-- <input type="file" id="real-file" hidden="hidden" />
                            <button type="button" id="custom-button">
                              <i class="fa fa-edit"></i>
                              EDIT GAMBAR</button>
                            <span id="custom-text">Pilih file.</span>
                            <button type="button" class="btn btn-primary">
                              <i class="fa fa-download"></i>
                              Simpan</button> --}}

                              <a href="" class="btn btn-primary"> 
                                <i class="fa fa-edit"></i>
                                Edit Gambar </a>

                              <a href="{{url('crud/createpresiden')}}" class="btn btn-success my-3">Create</a>
                        <!-- COLOR PALETTE -->
                        <div class="card card-default color-palette-box">
                          <div class="card-header"> 
                            <h1 class="card-title">
                              Presiden dan Wakil
                            </h1>
                          </div>
                          <div class="card-body">
                            <!-- /.col-12 -->
                            @foreach ($image as $img)
                              <img src=" {{asset('imagesPres/' . $img->image)}} " class="img-fluid" alt="Responsive image">
                            @endforeach
                            <!-- /.row -->
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- START ALERTS AND CALLOUTS -->
                        
                      </div><!-- /.container-fluid -->
                    
                </div>
            </div>
        </div>
</div>

@endsection