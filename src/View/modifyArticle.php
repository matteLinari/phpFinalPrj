<?php $this->layout('layout', ['title' => 'Modifica Articolo']) ?>

<h1>Modifica articolo</h1>

<form action="modify-article" method="POST">
    Titolo:<br>
    <input type="text" name="title" value="<?= $this->e($article['Title'])?>"><br><br>
    Descrizione:<br>
    <textarea rows="3" cols="40" name="description"><?= $this->e($article['Description'])?></textarea><br><br>
    Contenuto:<br>
    <textarea rows="6" cols="40" name="content"><?= $this->e($article['Content'])?></textarea><br><br>
    Autore:<br>
    <input type="text" name="author" value="<?= $this->e($article['Author'])?>"><br><br>

    <input type="submit" value="Invio">
</form>