<div class="card">  
    <div class="card-header">Agregar Usuario</div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="inputRol">Example select</label>
                <select class="form-control" id="inputRol">
                    <option value="Admin">Administrador</option>
                    <option value="Editor">Editor</option>
                    <option value="Lector">Lector</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" onClick="addUser()">Agregar Usuario</button>
        </form>
    </div>
</div>


