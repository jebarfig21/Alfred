function addNewUser(){
   modalView(null, 'User', 'addUser',null);
}

function addUser(){
    console.log("Hola")
    var email = $('#inputEmail').val();
    var password = $('#inputPassword').val();
    var rol = $('#inputRol').val();
    var name = $('#inputName').val();

    var newUser = {
        name:name,
        email: email,
        password: password,
        rol : rol
    }

sendToServer(newUser,'User','addUserDB');
}
                                                            



