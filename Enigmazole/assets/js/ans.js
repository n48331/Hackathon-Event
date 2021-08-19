function val(){
    // assets/php/check.php
    var ans = document.getElementById("search-str").value;
    if(ans == "MNP")
    {
        document.getElementById("validate").style.color = "GREEN";
        document.getElementById("validate").innerHTML = "Right";
    // document.getElementById("validate").style.color = "lightblue";
    // document.getElementById("validate").innerHTML = "Hurray right Answer";
    return false;
    }
    else
    {
        document.getElementById("validate").style.color = "RED";
        document.getElementById("validate").innerHTML = "Wrong!";
    // document.getElementById("validate").innerHTML = "Wrong";
    return false;
    }

    
}