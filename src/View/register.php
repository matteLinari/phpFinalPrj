<?php $this->layout('layout', ['title' => 'Nuovo Utente']) ?>

<div class="container-fluid" style="margin-top: 50;">
<h1 class ="text-center">Registrazione nuovo Utente</h1></br></br></br>
<p><?= $this->e($msg)?></p>
<form role="form" action="/register" method="POST">
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input name="name" class="form-control" id="inputName" placeholder="Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputSurname" class="col-sm-2 col-form-label">Surname</label>
        <div class="col-sm-10">
            <input name="surname" class="form-control" id="inputSurname" placeholder="Surname">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="mail" class="form-control" id="inputEmail" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <input type="submit" value="Register" name="submit" class="btn btn-success"/>
        </div>
    </div>
</form>
</div> 