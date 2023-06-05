const signUpButton = document.getElementById('signUp')
const signInButton = document.getElementById('signIn')
const container = document.getElementById('container')

signUpButton.addEventListener('click' , () => {
    container.classList.add("right-panel-active")
})

signInButton.addEventListener('click' , () => {
    container.classList.remove("right-panel-active")
})
function veri()
{
    var v=document.getElementById("emai").value
    var s=document.getElementById("pwd").value;
    if((v=="get@gmail.com" && s=="1234567") || (v=="vamshi@gmail.com" && s=="1234567") ||(v=="vinay@gmail.com" && s=="1234567") ||(v=="avinash@gmail.com" && s=="1234567"))
    { window.alert("correct");
        
        window.open('index.html');
    }
    
}
function check()
{
    var m=document.getElementById("name").value
    var n=document.getElementById("email").value;
    var o=document.getElementById("password").value
    if(m!=null && m!=null && m!=null )
    {
        window.alert("correct");
        
        window.open('index.html');
    }
    else{
        window.alert("wrong inputs");
    }
    
}




