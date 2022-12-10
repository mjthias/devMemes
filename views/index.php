<?php
require_once __DIR__.'/../_x.php';

_validate_session();
$spa = true; //This is a spa page
if (!IS_SPA()): //Exlude this from respond if spa request
require_once __DIR__.'/templates/header.php';
require_once __DIR__.'/templates/main_nav.php';
?>

<div id="content">
    <div id="spa">
<?php endif;?>
        <main 
        data-can_append_post="1"
        data-page_title="devmemes"
        >
            <div class="posts-container">
            <?php
            $posts = _get_newest_posts();
            foreach($posts as $post) {
                require __DIR__.'/templates/post.php';
            }
            ?>
            </div>
        </main>
<?php if (!IS_SPA()): ?>
    </div>
    <?php require_once __DIR__.'/templates/sidebar.php'; ?>
</div>

<?php 
$_SESSION ? require_once __DIR__.'/templates/create_post_modal.php' : '';
require_once __DIR__.'/templates/footer.php';
endif;