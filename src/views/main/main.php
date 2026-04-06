<h1>Статьи</h1>

<?php if ($user): ?>
    <p><a href="/schelkunov.loc/articles/add">Добавить статью</a></p>
<?php endif ?>

<div class="all_posts">

    <?php foreach($articles as $article): ?>

        <div class="post">
            <h2><?= $article->getName() ?></h2>
            <p><?= $article->getText() ?></p>
            <p class="post_author">Автор: <?= $article->getAuthor()->getNickname() ?></p>
            
            <div class="post_actions">
                <a class="post_link" href="article/<?= $article->getId() ?>">Подробнее</a>
            </div>
        </div>

    <?php endforeach; ?>

</div>