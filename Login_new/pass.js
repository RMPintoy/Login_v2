
function formvalid() {
    var vaildpass = document.getElementById("password").value;
    
    if (vaildpass.length <= 8 || vaildpass.length >= 20) {
      document.getElementById("vaild-pass").innerHTML = "Minimum 8 characters";
      return false;
 
    }else {
      document.getElementById("vaild-pass").innerHTML = "";
    }
  
  }

  function formvlid() {
    var vaildemail = document.getElementById("email").value;
    
    if (vaildemail.length <= 0 ) {
      document.getElementById("vaild-email").innerHTML = "Required email";
      return false;
    } else {
      document.getElementById("vaild-email").innerHTML = "";
    }
    
    }
  
  function show() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
      document.getElementById("showimg").src =
        "https://static.thenounproject.com/png/777494-200.png";
    } else {
      x.type = "password";
      document.getElementById("showimg").src =
        "https://cdn2.iconfinder.com/data/icons/basic-ui-interface-v-2/32/hide-512.png";
    }
  }