
<?php $this->layout('layout', ['title' => 'Dashboard']) ?>

<h1>Dashboard</h1>

<a href="">Inserisci nuovo articolo</a>


<h4>Articoli</h4>
<?php foreach($articleList as $value): ?>
    <div>
        <h3><?= $this->e($value['id'])?></h3>
        <p><?= $this->e($value['title'])?></p>
        <a href="">Modifica</a>
    </div>
<?php endforeach; ?>

