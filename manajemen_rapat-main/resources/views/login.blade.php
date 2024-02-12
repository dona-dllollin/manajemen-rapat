
<!DOCTYPE html>
<html lang="en">
<title>Halaman Login</title>

<head>

    <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('niceadmin/assets/img/favicon.png ')}}" rel="icon">
  <link href="{{ asset('niceadmin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('niceadmin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('niceadmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('niceadmin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('niceadmin/assets/vendor/quill/quill.snow.css')}} " rel ="stylesheet">
  <link href="{{ asset('niceadmin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('niceadmin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('niceadmin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('niceadmin/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <main>
        <div class="container">
    
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    
                  <div class="d-flex justify-content-center py-4">
                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                      <img src="assets/img/logo.png" alt="">
                      <span class="d-none d-lg-block">Manajemen Rapat</span>
                    </a>
                  </div><!-- End Logo -->
    
                  <div class="card mb-3">
    
                    <div class="card-body">
    
                      <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Login Account</h5>
                        <p class="text-center small">Masukkan Email dan Password untuk login !!</p>
                      </div>

                      {{-- Menampilkan notifikasi jika gagal login --}}
                      @if (session('message'))
                          
                      @endif
    
                      <form class="row g-3 needs-validation" action="/postlogin" method="POST">
                        @csrf

                        <div class="col-12">
                          <label for="yourUsername" class="form-label">Email</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="email" class="form-control" id="yourUsername" autofocus placeholder="Masukkan Email" required>
                            <div class="invalid-feedback">Email</div>
                          </div>
                        </div>
    
                        <div class="col-12">
                          <label for="yourPassword" class="form-label">Password</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-key-fill"></i></span>
                            <input type="password" name="password" class="form-control" id="yourUsername" autofocus placeholder="Masukkan Password" required>
                            <div class="invalid-feedback">Email</div>
                          </div>
                          
                          
                        
                        </div>
                        
    
                        {{-- <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                          </div>
                        </div> --}}
                        <div class="col-12">
                          <button class="mt-0 btn btn-primary w-100" type="submit">Login</button>
                        </div>
                        <div class="text-center small" >
                        <span>Belum punya Akun? <a href="/register_akun" class="mb-0 text-center" for="rememberMe"> Daftar Disini</a></span>
                      </div>
                        {{-- <div class="col-12">
                          <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                        </div> --}}
                      </form>

    
                    </div>
                  </div>
    
                  <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                    {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
                  </div>
    
                </div>
              </div>
            </div>
    
          </section>
    
        </div>
      </main><!-- End #main -->

    
    

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('niceadmin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('niceadmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('niceadmin/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('niceadmin/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('niceadmin/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('niceadmin/assets/vendor/simple-datatables/simple-datatables.js')}} "></script>
  <script src="{{ asset('niceadmin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('niceadmin/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('niceadmin/assets/js/main.js') }}"></script>

  @include('sweetalert::alert')
</body>

</html>