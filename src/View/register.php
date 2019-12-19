<?php $this->layout('layout', ['title' => 'Nuovo Utente']) ?>

<<<<<<< HEAD
<h1>Registrazione</h1>
<p><?= $this->e($msg)?></p>
<form action="register" method="POST">
    Nome:<br>
    <input type="text" name="name" value="<?= $this->e($article['Name'])?>"><br><br>
    Surname<br>
    <textarea rows="3" cols="40" name="surname"><?= $this->e($article['Surname'])?></textarea><br><br>
    Mail:<br>
    <textarea rows="6" cols="40" name="content"><?= $this->e($article['Mail'])?></textarea><br><br>
    Password:<br>
    <input type="text" name="author" value="<?= $this->e($article['Pass'])?>"><br><br>

    <input type="submit" value="Register">
</form>
=======
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
>>>>>>> 95dccd8e3a41a94e878d62459a1e31125ed82d6b
