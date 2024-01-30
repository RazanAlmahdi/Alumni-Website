window.onload = function()
{
  var myform = document.getElementById("contactForm");
 myform.onsubmit = function(e)
 {

   var allRequired = document.querySelectorAll(".form-control");

   for (var i=0; i<allRequired.length; i++)
   {
     if (allRequired[i].value == '' || allRequired[i].value == null)
     {
       allRequired[i].style.backgroundColor = "#F7BDBD";
       allRequired[i].style.borderColor = "#FC0303";
       e.preventDefault();
     }
     else
       allRequired[i].style.backgroundColor = "#FFFFFF";
   }

 }


 var required = document.getElementsByClassName("form-control");

 function myFun(required)
 {
   required.style.backgroundColor = "#FFFFFF";
   required.style.borderColor = "black";
 }

 for (let i = 0; i < required.length; i++)
 {
   required[i].addEventListener("keyup", () => myFun(required[i]));
 }

}
