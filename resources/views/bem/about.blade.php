@extends('layouts.master')
   
@section('title','Ini Dari About')

@section('content')


    <!-- header-end -->
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Tentang BEM FIK-UBL</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->


    <!-- financial_solution -->
    <div class="financial_solution_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="financial_active owl-carousel">
                        <div class="single_finalcial_wrap">
                            <h3>Visi Dan Misi BEM FIK UBL<br>
                                    -------------------------</h3>
                        </div>
                        <div class="single_finalcial_wrap">
                            <h3>Visi: <br>
                                    </h3>
                                    <p>Sarana pembinaan, pengembangan dan pemberdayaan mahasiswa/i dalam pengusaan ilmu pengetahuan dan teknologi serta menampung, mengarahkan, menyalurkan dan memperjuangkan aspirasi mahasiswa/i dalam mewujudkan tujuan organisasi di bidang internal maupun eksternal ..</p>
                        </div>
                        <div class="single_finalcial_wrap">
                            <h3>Misi: <br>
                                    </h3>
                                    <p>1.  Membentuk  mahasiswa/i  yang berkualitas, akademis, profesional, religious dan bertanggung jawab yang berbasis pada kreatifitas mahasiswa/i  FIK UBL.</p>
                                    <p>2.	Menciptakan menciptakan mahasiswa/i yang berjiwa pemimpin serta berintegritas tinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="finance_thumb">
                        <img src="../img_bem/logobem.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ financial_solution -->


    <!-- project  -->
    <div class="project_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project_info text-center">
                        <h3>Apakah Anda Memiliki Saran untuk Pengembangan Website kami?</h3>
                        <p>Mohon Hubungi Kontak kami</p>
                        <a href=" {{url('bem/contact')}} " class="boxed-btn3-white">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ project  -->

    

@endsection
