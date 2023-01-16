function checkPassword(){
    let password = document.getElementById(“password”).value;
    let cnfrmPassword = document.getElementById(“cnfrm-password”).value;
    let message = document.getElementById(“message”);
    console.log(” Password:”, password,’\n’,”Confirm Password:”,cnfrmPassword);
    if(password.length != 0){
        if(password == cnfrmPassword){
            message.textContent = “Wow, Passwords match”;
            message.style.backgroundColor = “#1dcd59”;
        }
        else{
            message.textContent = “Sorry, Password don’t match”;
            message.style.backgroundColor = “#ff4d4d”;
        }
    }
    else{
        alert(“Password can’t be empty!”);
        message.textContent = “”;
    }
}
