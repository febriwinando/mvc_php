  <?php 
    if (isset($_SESSION['username'])) {
        $id = $_SESSION['id'];
        $nama_acoount =  $_SESSION['username'];
        $display = "";

        if ($_SESSION['account'] == "admin") {
          $account = "";
        }else{
          $account = "none"; 
        }
    }else{
        $display = "none";
    }

      date_default_timezone_set('Asia/Jakarta');
      $now = date("H:i:s");
      // $now = '12:05:06';
      
      //pagi
      $pagi_start = '01:00:00';
      $pagi_end = '10:59:59';
      //siang
      $siang_start = '11:00:00';
      $siang_end = '14:59:59';
      //senja
      $senja_start = '15:00:00';
      $senja_end = '18:59:59';
      //malam
      $malam_start = '19:00:00';
      $malam_end = '24:59:59';

      if($now >= $malam_start && $now <= $malam_end){
          $background = BASEURL."/images/malam.jpg";
      }elseif ($now >= $senja_start && $now <= $senja_end) {
          $background = BASEURL."/images/senja.jpg";
      }elseif ($now >= $siang_start && $now <= $siang_end) {
          $background = BASEURL."/images/siang.jpg";
      }elseif ($now >= $pagi_start && $now <= $pagi_end) {
          $background = BASEURL."/images/pagi.jpg";
      }
  ?>
<!DOCTYPE html>
<html>
<head>
      <title>Admin</title>
       <link rel="icon" href="<?= BASEURL;  ?>/icon/logotab.png" sizes="16x16 32x32" type="image/png">
      <link rel="stylesheet" type="text/css" href="<?= BCSS;  ?>">
      <script src="<?= JQ;  ?>"></script>
      <script src="<?= BJ;  ?>"></script>
</head>
<!--  -->
<body style="background-image: url(<?= $background; ?>);">
      <link rel="stylesheet" type="text/css" href="<?= BASEURL;  ?>/css/style.css">
      <div class="container">
            <nav class="navbar-expand-lg navbar-dark navbar" style="display: <?= $display;  ?>">
                  <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                        <img src="<?= BASEURL;  ?>/icon/logo.png" style="max-width: 150px;">
                  <!-- <span class="navbar-brand">Navbar</span> -->
        
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item" style="display: <?= $account;  ?>">
                                        <a class="nav-link" href="<?= BASEURL;  ?>/user">User</a>
                                    </li>
                                    <li class="nav-item" style="display: <?= $account;  ?>">
                                        <a class="nav-link" href="<?= BASEURL;  ?>/referal">Referal</a>
                                    </li>
                                </ul>
                          </form>
                          <div class="form-inline my-2 my-lg-0 mr-2">
                              <span style="color: #fff;font-weight: bold;"><?= $nama_acoount;  ?></span>
                          </div>

                          <div class="btn-group dropdown">
                              <img src="<?= BASEURL;  ?>/icon/people.png" width="30" class="rounded-circle shadow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 3px">
                              <div class="dropdown-menu">
                                  <ul>
                                    <li>Profile</li>
                                    <li>Setting Profile</li>
                                  </ul>
                                  <hr>
                                  <ul>
                                    <li><a href="<?= BASEURL;  ?>/home/logout" style="color: #000;">Keluar</a></li>
                                  </ul>
                              </div>
                          </div>
                        </div>
                  </div>  
            </nav>


