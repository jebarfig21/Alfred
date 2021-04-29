

function sendCredentials(){

    var emailIn = $('#inputEmail').val();
    var passIn = $('#inputPassword').val();
    var user = {
        email: emailIn,
        password: passIn
    }
    sendToServer(user,'User','index');
}




/*
$( document ).ready(function() {
	$('#openModal').click(function(){
		$('#nodeName').val('');
	})

});
*/
