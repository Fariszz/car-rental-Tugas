  
    function validasi() {
      var username = document.getElementsByName("username").value;
      var password = document.getElementsByName("password").value;
      var name = document.getElementsByName("name").value;
      var email = document.getElementsByName("email").value;
      var Rpassword = document.getElementsByName("Rpassword").value;

      if (username != "" && password!="" && email !="" && name !="" && Rpassword !="") {
        return true;
      }else{
        alert('Silahkan mengisi data dengan lengkap');
      }
    }
 