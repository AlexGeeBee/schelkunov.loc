<h1>Пользователи</h1>

<div class="all_users">

<?php foreach($users as $user): ?>

<div class="user_card">
    <p>ID: <?= $user->getId() ?></p>
    <p>Логин: <?= $user->getNickname() ?></p>
    <p>Email: <?= $user->getEmail() ?></p>
    <p>Роль: <?= $user->getRole() ?></p>
    <p>Дата регистрации: <?= $user->getCreatedAt() ?></p>
</div>

<?php endforeach; ?>

</div>