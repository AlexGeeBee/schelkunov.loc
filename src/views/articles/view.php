
<a href="/articles"><= ко всем статьям</a>

<h1><?= htmlspecialchars($article->getName()) ?></h1>


<?php if($article->getImg() !== null) : ?>
    <img src="/<?= $article->getImg() ?>" width="400px" alt="">
<?php endif; ?>

<p><?= htmlspecialchars($article->getText()) ?></p>

<p>Автор: <?= htmlspecialchars($article->getAuthor()->getNickname()) ?></p>

<?php if ($user): ?>
    <br>
    <a class="post_link edit" href="/article/<?= htmlspecialchars($article->getId()) ?>/edit">Редактировать</a>
    <br>
    <a class="post_link delete" href="/article/<?= htmlspecialchars($article->getId()) ?>/delete">Удалить</a>
<?php endif ?>