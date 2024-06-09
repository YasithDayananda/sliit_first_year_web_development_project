$(document).ready(function(){
    if (window.location.search.indexOf('error=email_exists') > -1){
        $("#notification").html('<div class="error">Email already exsists. Please choose a different email.</div>');
        
    }
    else{
        $("#notification").html('<div class="error">You are successfully registered. Please login.</div>');
    }
});