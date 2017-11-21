<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login Form></title>
  
  
  
      <link rel="stylesheet" href="<?php echo base_url() ?>assets6/css/style.css">

  
</head>

<body>
    <br><br>
    <h1><center>Login Admin</center></h1>
  <div class="login-page">
  <div class="form">
    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
      <input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="="<?php echo base_url() ?>assets6/js/index.js"></script>

</body>
</html>
