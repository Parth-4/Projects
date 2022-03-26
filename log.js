document.getElementById("Sign").style.display="none";
function log_sign()
{
   let a= document.getElementById("Sign")
   let b=a.style.display
    if(b==="none")
    {
        document.getElementById("Sign").style.display="inline";
        document.getElementById("login").style.display="none";
    }
    else
    {
        document.getElementById("Sign").style.display="none";
        document.getElementById("login").style.display="inline";

    }
}