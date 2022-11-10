function validateNum(num){
    if(isNaN(num)){
        return false;
    }else if(num < 0){
        return false;
    }else{
        return true;
    }
}
const validateEmail = (email) => {
  return String(email)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};



function verifyForm(event){
    var rtx3060qty = parseInt(document.getElementById("rtx3060").value);
    var rtx3080qty = parseInt(document.getElementById("rtx3080").value);
    var rtx3090qty = parseInt(document.getElementById("rtx3090").value);
    var free7day = document.getElementById("free7day").checked;
    var overnight50 = document.getElementById("50overnight").checked;
    var threeday = document.getElementById("5threeday").checked;
    var email = document.getElementById("email").value;
    var password = document.getElementById("pass").value;
    if(!validateNum(rtx3060qty)){
        event.preventDefault();
        alert("Invalid quantity");
        return(false);
    }
    if(!validateNum(rtx3080qty)){
        event.preventDefault();
        alert("Invalid quantity");
        return(false);
    }
    if(!validateNum(rtx3090qty)){
        event.preventDefault();
        alert("Invalid quantity");
        return(false);
    }
    if((free7day == false) && (overnight50 == false) && (threeday == false)){
        event.preventDefault();
        alert("Please select a shipping option");
    }
    if(validateEmail(email) == null){
        event.preventDefault();
        alert("Please enter a valid email address");
        return(false);
    }
    if(password == ""){
        event.preventDefault();
        alert("Please enter password");
    }
}
