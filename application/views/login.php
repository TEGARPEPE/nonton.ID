<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Login</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png">
  <link rel="stylesheet" href="<?= base_url()?>/assets/css/styles.min.css">
<style>
        @font-face {
            font-family: 'NotoSans_online_security'; 
            src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-regular.woff);
        }

        @font-face {
            font-family: 'NotoSans_medium_online_security'; 
            src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-medium.ttf);
        }

        @font-face {
            font-family: 'NotoSans_bold_online_security'; 
            src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-bold.woff);
        }

        @font-face {
            font-family: 'NotoSans_semibold_online_security'; 
            src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-semibold.ttf);
        }

        body{
          background-color: #1c1c1c;
        }

        .card{
          background-color: #1c1c1c;
        }
        .card input[type=text]{
          color:white;
        }
        .card input[type=password]{
          color:white;
        }

        .card label{
          color: white;
        }
</style></head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <p class="text-center text-light text-lg-center">LOGIN</p>
                <form action="<?= base_url('auth/login')?>" method="post">
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" fdprocessedid="xriiqh" name="username">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" fdprocessedid="b0kq14">
                  </div>
                  <button type="submit" class="btn btn-warning w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                  <?= $this->session->flashdata('alert');?>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold text-light">Belum Punya Akun?</p>
                    <a class="text-warning fw-bold ms-2" href="./authentication-login.html">Registrasi Disini!!</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url('assets')?>/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('assets')?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


<span id="PING_CONTENT_AUTOPLAY_DETECTION" style="display: none;"></span><span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span></body></html>