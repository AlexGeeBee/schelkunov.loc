<h1><?= $article->getName() ?></h1>
<?php var_dump($article->getImg()) ?>
<?php if($article->getImg() !== null) : ?>
    <img src="<?= $article->getImg() ?>" width="400px" alt="">
<?php endif; ?>

<p><?= $article->getText() ?></p>

<p>Автор: <?= $article->getAuthor()->getNickname() ?></p>