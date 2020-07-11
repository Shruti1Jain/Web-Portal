function login()
{
  var usr=document.loginform.username;

  var pwd=document.loginform.password;
if(usr.value=="")
{
window.alert("please enter username");
usr.focus();
return false;
}

if(pwd.value=="")
{
window.alert("please enter password");
pwd.focus();
return false;
}
return true;
}
