<?php $this->layout('layout', ['title' => 'Dashboard']) ?>
<div class="container center">
    <h1>Dashboard</h1>
</div>
<div class="container center">
    <form action="/crud-article" method="GET">
        <input type="submit" value="Inserisci nuovo articolo">
    </form>
</div>
<h3>Articoli</h3>
<?php foreach ($articleList as $value) : ?>
    <div class="conatiner center">
        <span><?= $this->e($value['Id']) ?></span>
        <span><?= $this->e($value['Title']) ?></span>
        <form action="/crud-article">
            <input type="submit" value="Modifica">
            <input type="hidden" name="id" value="<?= $this->e($value["Id"])?>">
            <input type="hidden" name="modifyId">

        </form>
        <form action="/crud-article">
            <input type="submit" value="Elimina">
            <input type="hidden" name="id" value="<?= $this->e($value["Id"])?>">
            <input type="hidden" name="deleteId">
        </form>
    </div>
    <br>
<?php endforeach; ?>