<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<form action="LoginUser.php" method="POST" onsubmit="return validasi()">

 <div class="left-page">
  <form action="loginMultiProses.php" method="POST">

 <div class="login-kotak-kotak">
  <font size="64px">Sign in</font><br><br><br>
  <div class="kotakteks">
    <input type="text" placeholder="Username " name="username" id="username">
  </div>

  <br><br>
  
  <div class="kotakteks">
    <input type="password" placeholder="Password" name="password" id="password">
  </div>
  
  <div class="masuk">
  <input type="submit" class="Sigin" value="Sign in" name="Sigin" id="Sigin" >
  </div>
  
  <div class="newacc">
  <a href="../Register/index.php">Create New Acc</a>
  </div>
</div>
</div>
</form>
</form>

 <div class="right-page">
  <p><img src="gambar.svg" width="600"height ="300" style="margin-left: px;"></p>
 </div>
 
</div>

  </body>

</html>

<script>

function validasi() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username != "" && password !="") {
    return true;
  }else{
    alert('Silahkan mengisi data dengan lengkap');
  }
}

</script>