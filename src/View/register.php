<?php $this->layout('layout', ['title' => 'Nuovo Utente']) ?>

<h1>Inserisci utente</h1>
<p><?= $this->e($msg)?></p>

<form action="register" method="POST">
    Nome:<br>
    <input type="text" name="name"><br><br>
    Cognome:<br>
    <input type="text" name="surname"><br><br>
    E-mail:<br>
    <input type="text" name="mail"><br><br>
    Password:<br>
    <input type="password" name="password"><br><br>

    <input type="submit" value="Invio">
</form>