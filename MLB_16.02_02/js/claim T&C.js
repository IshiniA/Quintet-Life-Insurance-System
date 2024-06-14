function enableButton()
{
    var response = document.getElementById("response");
    var proceed = document.getElementById("proceed");

    if(response.checked == true){
        proceed.disabled = false;
    }

    else{
        proceed.disabled = true;
    }
}