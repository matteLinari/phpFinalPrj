
<?php $this->layout('layout', ['title' => 'Home']) ?>

<div class="container text-center" style="margin-top: 50;">
    <h1>Home page</h1>
    <h4>Articoli del <?= date("d-m-y")?></h4>
    <?php foreach($articleList as $value): ?>
        <div>
            <a href="/article?id=<?= $this->e($value['Id'])?>">
                <h2><?= $this->e($value['Title'])?></h2>
            </a>
            <h4><?= $this->e($value['Description'])?></h4>
            <p><?= $this->e($value['InsDate'])?></p>

        </div>
    <?php endforeach; ?>

</div>