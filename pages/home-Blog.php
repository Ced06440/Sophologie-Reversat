<?php
include '../functions/home-blog.func.php';
include '../head/head-blog.php';
?>

<section class="posts-blog">
    <main class="container">
        <div class="row mb-2">

            <?php
            $posts = get_posts();
            foreach ($posts as $post) {
            ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-content">
                            <h2><?= $post->title ?></h2>
                            <p style="font-size: small;" class="d-flex justify-content-end">Le <?= date("d/m/y à H:i", strtotime($post->date)) ?> par <?= $post->name ?></p>
                        </div>

                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="../assets/Images-Blog/<?= $post->image ?>" alt="<?= $post->title ?>">
                        </div>

                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                            <span><a class="btn" href="index.php?page=post&id=<?= $post->id ?>">Voir l'article complet</a></span>
                        </div>

                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><i class="material-icons right ">close</i></span>
                            <span class="card-title text-darken-4"><?= $post->title ?><i class="material-icons right"></i></span>
                            <p><?= substr(nl2br($post->content), 0, 1000); ?>...</p>
                        </div>

                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </main>
</section>

<link rel="stylesheet" href="assets/js/scripts.js">
<script src="../assets/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>