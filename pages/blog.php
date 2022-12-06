<?php
include '../functions/blog.func.php';
?>
<head>
<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="../assets/Fonts/PAPYRUS.TTF">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/style-mobile.css">
<link rel="stylesheet" href="../assets/css/animations.css">
<link rel="stylesheet" href="../assets/css/materialize.min.css">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>BLOG de Valerie Reversat Sophrologue à contes, 06</title>
</head>

<?php 
include '../head/head-blog.php';
?>
<center>
<h2>Blog</h2>
</center>

<div class="container">
<?php

$posts = get_posts();
foreach($posts as $post){
    ?>
    <div class="row">
        <div class="col s12 m12 l12">
            <h4><?= $post->title ?></h4>

            <div class="row">
                <div class="col s12 m6 l8">
                    <?= substr(nl2br($post->content),0,1200) ?>...
                </div>
                <div class="col s12 m6 l4">
                    <img style="width: 30em ;" src="../assets/Images-Blog/<?= $post->image ?>" class="materialboxed responsive-img" alt="<?= $post->title ?>"/>
                    <br/><br/>
                    <a class="btn light-blue waves-effect waves-light" href="index.php?page=post&id=<?= $post->id ?>">Lire l'article complet</a>
                </div>
            </div>
        </div>
    </div>

    <?php
}
?>
</div>
