<?php $this->layout('layout', ['title' => 'Login']) ?>

<h1>Login</h1>
<p><?= $this->e($msg)?></p>
<form name="login" action="/login" method="POST">
    <input type="text" name="email" placeholder="email"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="submit" value="Invio" />
</form>