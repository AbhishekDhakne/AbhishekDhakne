function evalidation(){
    var form = document.getElementById("form");
    var email= document.getElementById("email").value;
    var text= document.getElementById("text");
    var pattern = /^\w+@[^ ]+\.[a-z]{1,5}$/;

    
    if(email.match(pattern))
    {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text.innerHTML="Your email address is valid";
        text.style.color="#00ff00";
    }
    else
    {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text.innerHTML="Please enter valid email address";
        text.style.color="#ff0000";
    }
    if(email == " ")
    {
        form.classList.remove("valid");
        form.classList.remove("invalid");
        text.innerHTML="";
    }
}

function pvalidation(){
   var form = document.getElementById("form");
  var phoneno = document.getElementById('phoneno').value;
  var text= document.getElementById("text");
  var pattern1 = /^[6-9]\d{9}$/;
  if(phoneno.match(pattern1))
    {
        form.classList.add("valid");
        form.classList.remove("invalid1");
        text.innerHTML="Your Number is valid";
        text.style.color="#00ff00";
    }
    else
    {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text.innerHTML="Please enter valid number";
        text.style.color="#ff0000";
    }
    if(phoneno == " ")
    {
        form.classList.remove("valid");
        form.classList.remove("invalid");
        text.innerHTML="";
    }
}

function psvalidation(){
    var form = document.getElementById("form");
    var password= document.getElementById("password").value;
    var text= document.getElementById("text");
    var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,32}$/;

    
    if(password.match(pattern2))
    {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text.innerHTML="Your password is strong";
        text.style.color="#00ff00";
    }
    else
    {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text.innerHTML="Your password is little weak";
        text.style.color="#ffff00";
    }
    if(email == " ")
    {
        form.classList.remove("valid");
        form.classList.remove("invalid");
        text.innerHTML="";
    }
}

function returnvalidateForm()
{
    var x= document.forms["myForm"]["first"]["last"]["email"]["password"].value;
    if(x == "")
    {
        alert("Name must be filled out");
        return false;
    }
}