@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay2"> {{--Background --}}
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> Selamat <br>
                                    Datang Di </h3>
                                <h3>website Resmi</h3>  <br>
                                <h3>BADAN EKSEKUTIF MAHASISWA.</h3>
                                <div class="video_service_btn">
                                    <a href="videoProfile.avi" class="boxed-btn3-white"> <i class="fa fa-play"></i>Lihat Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> Fakultas Ilmu Komputer <br>
                                    Universitas Bandar Lampung </h3>
                                <div class="video_service_btn">
                                    <a href="videoProfile.avi" class="boxed-btn3-white"> <i class="fa fa-play"></i>Tentang BEM</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
@endsection