<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Upload</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('../css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('../css/adminlte.min.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('../css/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    #custom-button {
      padding: 10px;
      color: white;
      background-color: #009578;
      border: 1px solid #000;
      border-radius: 5px;
      cursor: pointer;
    }

    #custom-button:hover {
      background-color: #00b28f;
    }

    #custom-text {
      margin-left: 10px;
      font-family: sans-serif;
      color: #aaa;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">

  <!-- Main content -->
  <section class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-outline card-info">
          <div class="card-header text-center">
            <h2>
              Lihat ketentuan Upload Sebelum mengupload sesuatu ke website BEM
            </h2>

            {{--  Modal --}}
            <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#konten">
            Judul Konten
          </button>
          <button type="button" class="btn btn-primary my2" data-toggle="modal" data-target="#foto">
            Foto
          </button>
          <button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#deskripsi">
            Deskripsi
          </button>

          </div>
          
          <div class="modal fade" id="konten" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Judul Konten</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h4>
                  -> Setiap Kata Diawali dengan Huruf Besar <br>
                  -> Tulisan Maksimal 255 karakter
                </h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div> {{-- End Modal --}}

          <div class="modal fade" id="foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Foto</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h4>
                  -> Merekomendasikan Foto dengan kapasitas HD <br>
                  -> Foto berukuran 540px X 400px <br>
                  -> Size foto maksimal 4b <br>
                </h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div> {{-- End Modal --}}
          <div class="modal fade" id="deskripsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h4>
                  -> Tulisan yang baku sangat di rekomendasikan <br>
                  -> Maksimal karakter 255 <br>
                </h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div> {{-- End Modal --}}

          <!-- /.card-header -->
          <div class="card-body text-center">
            <div class="mb-3">
          <input type="text" class="text-center" placeholder="Massukan Judul Konten"
                        style="width: 50%; height: 90px; font-size: 14px; line-height: 18px; border: 5px solid #0592fa; padding: 10px;">
            </div>
                <input type="file" id="real-file" hidden="hidden" />
                <button type="button" id="custom-button">Cari File</button>
                <span id="custom-text">Belum ada file.</span>
            
          </div>

          <div class="card-body"> 
            <div class="mb-3">
              <h4>Masukkan Deskripsi</h4>
              <input type="text" class="textarea" placeholder="Masukkan Deskripsi"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 5px solid #dddddd; padding: 10px;">
            </div>
            <button type="submit" class="btn btn-secondary">
                Upload
            </button>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->

<!-- jQuery -->
<script src="{{asset('../js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('../js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('../js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('../js/demo.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('../js/summernote-bs4.min.js')}}"></script>

<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<script>
  const realFileBtn = document.getElementById("real-file");
  const customBtn = document.getElementById("custom-button");
  const customTxt = document.getElementById("custom-text");

  customBtn.addEventListener("click", function() {
    realFileBtn.click();
  });

  realFileBtn.addEventListener("change", function() {
    if (realFileBtn.value) {
      customTxt.innerHTML = realFileBtn.value.match(
        /[\/\\]([\w\d\s\.\-\(\)]+)$/
      )[1];
    } else {
      customTxt.innerHTML = "No file chosen, yet.";
    }
  });
</script>
</body>
</html>