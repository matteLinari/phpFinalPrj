<?php $this->layout('layout', ['title' => 'Login']) ?>

<h1>Login</h1>
<form name="login" action="/dashboard" method="POST">
    <input type="text" name="email" placeholder="email"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="submit" name="Invio" />
</form>