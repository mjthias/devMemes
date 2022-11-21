<?php
if ( _is_validate_session() ) header('Location: /');

$page_title = 'Sign up | devmemes';
$body_cls = 'sign-page';
require_once __DIR__.'/templates/header.php'; 
?>

<main>
    <?php require_once __DIR__.'/templates/main_nav.php' ?>
    <div class="bg-gradient">
        <img class="bg-image" src="/public/images/bg.jpg" alt="Cute little meme dog">
    </div>
    <div class="sign-form-container">
        <h1>devmemes</h1>
        <form class="sign-form" action="/create-user" method="POST">
            <input type="text" name="alias" required placeholder="Alias">
            <input type="email" name="email" required placeholder="Email">
            <input type="password" name="password" required placeholder="Password">
            <p></p>
            <button onclick="formValidation( postUser )">Sign up</button>
        </form>
    </div>
</main>

<?php require_once __DIR__.'/templates/footer.php';
