
<?php $this->layout('layout', ['title' => 'Article']) ?>

<div class="container text-center" style="margin-top: 50; background-color:white;">
    <h1>Articolo</h1>
    <h2>Title:<?= $this->e($article['Title'])?></h2>
    <h4>Description:<?= $this->e($article['Description'])?></h4>
    <p>Content:<?= $this->e($article['Content'])?></p>
    <br>
    <p>Author:<?= $this->e($article['Author'])?></p>
</div>