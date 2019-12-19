<?php $this->layout('layout', ['title' => 'Login']) ?>

<div class="container-fluid" style="margin-top: 50;">
<h1 class ="text-center">Login</h1></br></br></br>
<p><?= $this->e($msg)?></p>
<form role="form" action="/login" method="POST">

    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
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
            <input type="submit" value="Sign in" name="submit" class="btn btn-primary"/>
        </div>
    </div>
</form>
</div> 