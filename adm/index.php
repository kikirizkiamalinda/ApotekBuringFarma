
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Log in - Apotek Buring Farma</title>
    <link rel='shortcut icon' type='assets/img/logo.png' href='style="padding-top: 50px; width:40%"'/>
    <link rel="stylesheet" href="assets/css/adm.css" type='text/css'>
</head>
<body class="body" style="background: url('assets/img/apotek.jpeg')">
  
<section class="bg">
  <div class="content">
    <div class="header-icon">
      <a href="#">
        <img style="padding-top: 50px; width:50%" src="assets/img/logo.png">
      </a>
    </div>
    <div class="from-content">
      <?php 
      if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
          echo "<div class='msg-box'>Username dan Password tidak sesuai !</div>";
        }
      }
      ?>
      <h1>Sign in to Apotek Buring Farma</h1>
      <div class="from">
        <form method="post" action="cek_login.php">
        <div class="from-list">
          <input type="text" id="username" name="username" placeholder="username" data-text="">
        </div>
        <div class="from-list">
          <input type="password" id="password" name="password" placeholder="password" data-text="">
        </div>
        <p class="error-message">&nbsp;</p>
        <div class="submit-btn">
          <button class="submit-btn" type="submit" value="LOGIN" id="login">Login</button>
        </div>
      </form>
              </div>
    </div>
  </div>
</section>
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/public.js?v=49"></script>
</body>
</html>
