
<?php $this->layout('layout', ['title' => 'Home']) ?>

<h1>Home page</h1>

<?php foreach($articleList as $value): ?>
    <div>
        <a href="/article?id=<?= $this->e($value['id'])?>">
            <h3><?= $this->e($value['title'])?></h3>
        </a>
        <p><?= $this->e($value['description'])?></p>
    </div>
<?php endforeach; ?>

