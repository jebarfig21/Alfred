
String.prototype.hashCode = function() {
  var hash = 0, i, chr;
  if (this.length === 0) return hash;
    for(i = 0; i < this.length; i++){
        chr=this.charCodeAt(i);
        hash  = ((hash << 5) - hash) + chr;
        hash |= 0; // Convert to 32bit integer
    }
  return hash;
};
function sendCredentials(){

    var emailIn = $('#inputEmail').val();
    var passIn = $('#inputPassword').val();
    console.log(passIn);
    var user = {
        email: emailIn,
        password: passIn
    }
    sendToServer(user,'User','index');
}



