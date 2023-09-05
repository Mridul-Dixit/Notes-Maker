function validate_name(id)
{
    var value = document.getElementById(id).value;
    if (value.match(/^[a-zA-Z]+$/))
    {

    }
    else
    {
      alert("Not a Valid Name");
    }
    

}

function validate_reg(id)
 {
    var value = document.getElementById(id).value;
    if (value.match(/^[0-9]{2}[a-zA-Z]{4}[0-9]{2,}$/)) {
        
    } else {
        alert("Not a Valid Registration No.")
    }
}

function validate_pass(id)
{
    var value = document.getElementById(id).value;
    if (value.length < 6) {
        alert("passward must contain atleast 6 digits ");
        return false;
    }
    return true;
}

function check(id)
{
    if(validate_pass(id)) {   
        var num1 = document.getElementById("password").value;
        var num2 = document.getElementById("cpassword").value;
        
        if (num1 === num2) {}
        else { alert("Password and confirm password must be same"); }
    } else {
        alert("Password is not same");
    }
}