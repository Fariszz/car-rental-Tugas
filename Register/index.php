<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <form action="Register.php" method="POST" onsubmit="return validasi()">
  <div class="left-page">

    <div class="login-kotak-kotak">
      <font size="64px">Register</font><br><br><br>
      <div class="kotakteks">
        <input type="text" placeholder="Full Name " name="name" id="name">
      </div>

      <br><br>

      <div class="kotakteks">
        <input type="text" placeholder="Email" name="email" id="email">
      </div>

      <br><br>

      <div class="kotakteks">
        <input type="text" placeholder="Username" name="username" id="username">
      </div>

      <br><br>

      <div class="kotakteks">
        <input type="password" placeholder="Password" name="password" id="password">
      </div>

      <br><br>

      <div class="kotakteks">
        <input type="password" placeholder="Repeat Password" name="Rpassword" id="Rpassword">
      </div>
 
      <div class="newacc">
        <input type="submit" class="Sigin" value="Register" name="sigin">
      </div>
    </div>
  </form>
  
    <div class="right-page">
      <img src="aaaa.svg" alt="">
    
    </div>

  </div>

</body>

</html>

<script >


function validasi() {
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      var Rpassword = document.getElementById("Rpassword").value;

      if (name != "" && email !="" && username !="" && password !="" && Rpassword !="") {
        return true;
      }else{
        alert('Silahkan mengisi data dengan lengkap');
      }
    }

  
  </script>