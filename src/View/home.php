
<?php $this->layout('layout', ['title' => 'Home']) ?>

<h1>Home page</h1>

<?php foreach($articleList as $value): ?>
    <div>
        <a href="/article?id=<?= $this->e($value['Id'])?>">
            <h2><?= $this->e($value['Title'])?></h2>
        </a>
        <h4><?= $this->e($value['Description'])?></h4>
        <p><?= $this->e($value['Author'])?></p>

    </div>
<?php endforeach; ?>

