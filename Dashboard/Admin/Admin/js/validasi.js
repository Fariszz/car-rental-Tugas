  
    function validasi() {      
      var password = document.getElementsByName("passAdmin").value;
      if (username != "" && password!="") {
        return true;
      }else{
        alert('Silahkan mengisi data dengan lengkap');
      }
    }
