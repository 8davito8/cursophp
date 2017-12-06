function validateLogin(){

  var expresion = /^[a-zA-Z0-9]*$/ ;

  if(!expresion.test($("#user").val())||!expresion.test($("#pass").val())){
    return false;
  }
  return true;
}