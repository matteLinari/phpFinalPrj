<?php $this->layout('layout', ['title' => 'Dashboard']) ?>

<h1>Dashboard</h1>

<form action="">
    <input type="submit" value="Inserisci nuovo articolo">
</form>


<h4>Articoli</h4>
<?php foreach ($articleList as $value) : ?>
    <div>
        <span><?= $this->e($value['id']) ?></span>
        <span><?= $this->e($value['title']) ?></span>
        <form action="">
            <input type="submit" value="Modifica">
        </form>
    </div>
    <br>
<?php endforeach; ?>