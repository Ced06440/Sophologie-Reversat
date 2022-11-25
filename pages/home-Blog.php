<?php
include '../head/head-blog.php';
include '../functions/main-function.php';
?>


<section class="header-blog">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark text-center">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Blog Valerie Reversat sophrologue</h1>
      <p class="lead my-3">Decouvrez mes différents interventions et divers articles</p>
      <button class="btn">
        <a href="../index.php">Retour</a>
      </button>
    </div>
  </div>
</section>

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
            <h5><?= $post->title ?></h5>
            <p style="font-size: small;" class="d-flex justify-content-end">Le <?= date("d/m/y à H:i", strtotime($post->date)) ?> par <?= $post->name ?></p>
          </div>

          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="./assets/Images-Blog/<?= $post->image ?>" alt="<?= $post->title ?>">
          </div>

          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
            <span><a class="btn" href="blog.php?page=post&id=<?= $post->id ?>">Voir l'article complet</a></span>
          </div>

          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"><i class="material-icons right ">close</i></span>
            <span class="card-title text-darken-4"><?= $post->title ?><i class="material-icons right"></i></span>
            <p><?= substr(nl2br($post->content),0,1000); ?>...</p>
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
