function validation(){
    var form = document.getElementById("form");
    var email= document.getElementById("email").value;
    var text= document.getElementById("text");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    
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
function returnvalidateForm()
{
    var x= document.forms["myForm"]["first"]["last"]["email"]["password"].value;
    if(x == "")
    {
        alert("Name must be filled out");
        return false;
    }
}