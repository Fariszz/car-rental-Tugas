  
    function validasi() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      if (username != "" && password!="") {
        return true;
      }else{
        alert('Silahkan mengisi data dengan lengkap');
      }
    }
 