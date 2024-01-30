window.onload = function() {
 
  var ID = document.forms["form"]["SID"];
  var password = document.getElementById("password");
  var myForm = document.getElementById("form");
   
  ID.addEventListener('keyup', function(){
      ID.style.backgroundColor = "#FFFFFF";
      ID.style.borderColor = "black";
      if(ID.value == ""){
        ID.style.backgroundColor = "#F7BDBD";
        ID.style.borderColor = "#FC0303";
      }
  });
  
  password.addEventListener('keyup', function(){
    password.style.backgroundColor = "#FFFFFF";
    password.style.borderColor = "black";
    if(password.value.length == 0){
      password.style.backgroundColor = "#F7BDBD";
      password.style.borderColor = "#FC0303";
    }
  });
  
  myForm.onsubmit = function(e){
    
    if (ID.value == "") {
      ID.style.backgroundColor = "#F7BDBD";
      ID.style.borderColor = "#FC0303";
      e.preventDefault();
  }

    if (password.value.length == 0) {
      password.style.backgroundColor = "#F7BDBD";
      password.style.borderColor = "#FC0303";
      e.preventDefault();
    }
  }

  }

