window.onload = function() {
 
  var firstname = document.forms["form"]["fname"];
  var lastname = document.forms["form"]["lname"];
  var email = document.forms["form"]["email"];
  var ID = document.forms["form"]["sID"];
  var message = document.forms["form"]["message"];
  var major = document.forms["form"]["major"];
  var year = document.forms["form"]["year"];
  var genre = document.forms["form"]["genre"];
  var password = document.getElementById("pass");
  var Conpassword = document.getElementById("Confirmpass");
  var myForm = document.getElementById("form");
 
  firstname.addEventListener('keyup', function(){
    firstname.style.backgroundColor = "#FFFFFF";
    firstname.style.borderColor = "black";
    if(firstname.value == ""){
      firstname.style.backgroundColor = "#F7BDBD";
      firstname.style.borderColor = "#FC0303";
    }
  });
  
  lastname.addEventListener('keyup', function(){
    lastname.style.backgroundColor = "#FFFFFF";
    lastname.style.borderColor = "black";
    if(lastname.value == ""){
      lastname.style.backgroundColor = "#F7BDBD";
      lastname.style.borderColor = "#FC0303";
    }
  });

  email.addEventListener('keyup', function(){
      email.style.backgroundColor = "#FFFFFF";
      email.style.borderColor = "black";
      if(email.value == ""){
        email.style.backgroundColor = "#F7BDBD";
        email.style.borderColor = "#FC0303";
      }
  });
  
  ID.addEventListener('keyup', function(){
      ID.style.backgroundColor = "#FFFFFF";
      ID.style.borderColor = "black";
      if(ID.value == ""){
        ID.style.backgroundColor = "#F7BDBD";
        ID.style.borderColor = "#FC0303";
      }
  });
  
  major.addEventListener('change', function(){
    major.style.backgroundColor = "#FFFFFF";
    major.style.borderColor = "black";
    if(major.value == ""){
      major.style.backgroundColor = "#F7BDBD";
      major.style.borderColor = "#FC0303";
    }
  });
  
  year.addEventListener('change', function(){
    year.style.backgroundColor = "#FFFFFF";
    year.style.borderColor = "black";
    if(year.value == ""){
      year.style.backgroundColor = "#F7BDBD";
      year.style.borderColor = "#FC0303";
    }
  });
  
  genre.addEventListener('change', function(){
    genre.style.backgroundColor = "#FFFFFF";
    genre.style.borderColor = "black";
    if(genre.value == ""){
      genre.style.backgroundColor = "#F7BDBD";
      genre.style.borderColor = "#FC0303";
    }
  });
  
  message.addEventListener('keyup', function(){
    message.style.backgroundColor = "#FFFFFF";
    message.style.borderColor = "black";
    if(message.value == ""){
      message.style.backgroundColor = "#F7BDBD";
      message.style.borderColor = "#FC0303";
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

  Conpassword.addEventListener('keyup', function(){
    Conpassword.style.backgroundColor = "#FFFFFF";
    Conpassword.style.borderColor = "black";
    if(Conpassword.value.length == 0){
      Conpassword.style.backgroundColor = "#F7BDBD";
      Conpassword.style.borderColor = "#FC0303";
    }
  });
  
  myForm.onsubmit = function(e){
    
      if (firstname.value == "") {
          firstname.style.backgroundColor = "#F7BDBD";
          firstname.style.borderColor = "#FC0303";
          e.preventDefault();
      }
       
      if (lastname.value == "") {
        lastname.style.backgroundColor = "#F7BDBD";
        lastname.style.borderColor = "#FC0303";
        e.preventDefault();
    }
    if (email.value == "") {
      email.style.backgroundColor = "#F7BDBD";
      email.style.borderColor = "#FC0303";
      e.preventDefault();
  }

    if (ID.value == "") {
      ID.style.backgroundColor = "#F7BDBD";
      ID.style.borderColor = "#FC0303";
      e.preventDefault();
  }
  var first = ID.value[0];
    if ((first != "S") && (ID.value != "")) {
      ID.style.backgroundColor = "#F7BDBD";
      ID.style.borderColor = "#FC0303";
      alert("ID should start with S");
      e.preventDefault();
  }
    if ((ID.value.length < 9) && (ID.value != "")) {
      ID.style.backgroundColor = "#F7BDBD";
      ID.style.borderColor = "#FC0303";
      alert("ID should be 9 characters");
      e.preventDefault();
  }
    if (ID.value.length > 9) {
      ID.style.backgroundColor = "#F7BDBD";
      ID.style.borderColor = "#FC0303";
      alert("ID should be 9 characters");
      e.preventDefault();
  }
    if (message.value == "") {
      message.style.backgroundColor = "#F7BDBD";
      message.style.borderColor = "#FC0303";
      e.preventDefault();
  }
    if (major.value == "") {
      major.style.backgroundColor = "#F7BDBD";
      major.style.borderColor = "#FC0303";
      e.preventDefault();
    }
    if (year.value == "") {
      year.style.backgroundColor = "#F7BDBD";
      year.style.borderColor = "#FC0303";
      e.preventDefault();
    }
    if (genre.value == "") {
      genre.style.backgroundColor = "#F7BDBD";
      genre.style.borderColor = "#FC0303";
      e.preventDefault();
    }
    if (password.value.length == 0) {
      password.style.backgroundColor = "#F7BDBD";
      password.style.borderColor = "#FC0303";
      e.preventDefault();
    }
    if (Conpassword.value.length == 0) {
      Conpassword.style.backgroundColor = "#F7BDBD";
      Conpassword.style.borderColor = "#FC0303";
      e.preventDefault();
    }

    if ((Conpassword.value == password.value) && (Conpassword.value.length != 0)) {
      Conpassword.style.backgroundColor = "#DAFBD7";
      Conpassword.style.borderColor = "#1AFD05";
      alert("Password and Confirm Password are matching");
  }
    if (Conpassword.value != password.value){
        Conpassword.style.backgroundColor = "#F7BDBD";
        Conpassword.style.borderColor = "#FC0303";
        alert("Password and Confirm Password are not matching");
        e.preventDefault();
      }
  }

  }

