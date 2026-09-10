<h1>Статьи</h1>

<?php if ($user): ?>
    <p><a href="articles/add">Добавить статью</a></p>
<?php endif ?>

<div class="all_posts">

    <?php foreach($articles as $article): ?>

        <div class="post">
            <div>
                <h2><?= htmlspecialchars($article->getName()) ?></h2>

                <?php if($article->getImg() !== null) : ?>
                    <img class="post_img" src="<?= $article->getImg() ?>" width="200px" alt="">
                <?php endif; ?>
                
                <p><?= htmlspecialchars($article->getText()) ?></p>
            </div>

            <div>
                <p class="post_author">Автор: <?= htmlspecialchars($article->getAuthor()->getNickname()) ?></p>
                
                <div class="post_actions">
                    <a class="post_link" href="article/<?= htmlspecialchars($article->getId()) ?>">Подробнее</a>

                    <?php if ($user): ?>
                        <a class="post_link edit" href="article/<?= htmlspecialchars($article->getId()) ?>/edit">Редактировать</a>
                        <a class="post_link delete" href="article/<?= htmlspecialchars($article->getId()) ?>/delete">Удалить</a>
                    <?php endif ?>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>