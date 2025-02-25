<?php 
    session_start();
    include "connection/connection.php";
    if(isset($_POST['login'])){
        $email = htmlspecialchars($_POST['email']); 
        $password = sha1($_POST['password']);

        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE user.email = '$email'");
        if(mysqli_num_rows($query) > 0){
            $dataUser = mysqli_fetch_assoc($query);
            if($dataUser['password'] == $password){
                $_SESSION['nama'] = $dataUser['nama'];
                $_SESSION['email'] = $dataUser['email'];
                header('location:index.php'); 
                exit;      
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../asset/adm/vendors/feather/feather.css">
  <link rel="stylesheet" href="../asset/adm/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../asset/adm/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../asset/adm/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../asset/adm/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../asset/adm/images/logo.svg" alt="logo">
              </div>
              <?php if(isset($_GET['access'])) : ?>
                <div class="alert alert-danger">Silakan Login</div>
              <?php endif ?>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="" method="post">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../asset/adm/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../asset/adm/js/off-canvas.js"></script>
  <script src="../asset/adm/js/hoverable-collapse.js"></script>
  <script src="../asset/adm/js/template.js"></script>
  <script src="../asset/adm/js/settings.js"></script>
  <script src="../asset/adm/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
