
<?php $this->layout('layout', ['title' => 'Article']) ?>

<h1>Articolo</h1>

<h2><?= $this->e($article['Title'])?></h2>
<h4><?= $this->e($article['Description'])?></h4>
<p><?= $this->e($article['Content'])?></p>
<br>
<p><?= $this->e($article['Author'])?></p>

