<h1>Пользователи</h1>

<div class="all_users">

<?php foreach($users as $user): ?>

<div class="user_card">
    <p>ID: <?= htmlspecialchars($user->getId()) ?></p>
    <p>Логин: <?= htmlspecialchars($user->getNickname()) ?></p>
    <p>Email: <?= htmlspecialchars($user->getEmail()) ?></p>
    <p>Роль: <?= htmlspecialchars($user->getRole()) ?></p>
    <p>Дата регистрации: <?= htmlspecialchars($user->getCreatedAt()) ?></p>
</div>

<?php endforeach; ?>

</div>