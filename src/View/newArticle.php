<?php $this->layout('layout', ['title' => 'Nuovo Articolo']) ?>

<h1>Inserisci nuovo articolo</h1>
<p><?= $this->e($msg)?></p>
<form action="new-article" method="POST">
    Titolo:<br>
    <input type="text" name="title"><br><br>
    Descrizione:<br>
    <textarea rows="3" cols="40" name="description"></textarea><br><br>
    Contenuto:<br>
    <textarea rows="6" cols="40" name="content"></textarea><br><br>
    Autore:<br>
    <input type="text" name="author"><br><br>

    <input type="submit" value="Invio">
</form>