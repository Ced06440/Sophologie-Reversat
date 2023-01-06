<head>
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/Fonts/PAPYRUS.TTF">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style-mobile.css">
    <link rel="stylesheet" href="../assets/css/animations.css">
    <link rel="stylesheet" href="../assets/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>BLOG de Valérie Reversat Sophrologue à contes, 06</title>
</head>


<section class="header-blog" style="background-image: url(../assets/images/beach.jpg);">
    <div class="d-flex justify-content-end">
        <a class="btn m-1" href="../admin/index.php"><i class="material-icons">account_circle</i></a>
    </div>
    <div class="p-3 p-md-4 mb-3 rounded text-center d-flex justify-content-center">
        <div class="col-md-6 px-0 ">
            <h1 class="display-4 fst-italic">Blog Valérie Reversat sophrologue</h1>
            <p class="lead my-3">Découvrez mes différentes interventions ainsi que différents articles</p>
            <div class="d-flex justify-content-center">
            <a class="btn m-1" href="../pages/blog.php">Retour aux articles</a>
            </div>

        </div>
    </div>
</section>
<?php

$post = get_post();
if($post == false){
    header("Location:index.php?page=error");
}else{
    ?>
        </div>
    <div class="container">
        <div class="">
            <img src="../img/posts/<?= $post->image ?>" alt="<?= $post->title ?>"/>
        </div>
    </div>
        <div class="container">

            <h2><?= $post->title ?></h2>
            <h6>Par <?= $post->name ?> le <?= date("d/m/Y à H:i", strtotime($post->date)) ?></h6>
            <p><?= nl2br($post->content); ?></p>
    <?php
}
?>

            <hr>
            <h4>Commentaires:</h4>
            <?php
                $responses = get_comments();
                if($responses != false){
                    foreach($responses as $response){
                        ?>
                            <blockquote>
                                <strong><?= $response->name ?> (<?= date("d/m/Y", strtotime($response->date)) ?>)</strong>
                                <p><?= nl2br($response->comment); ?></p>
                            </blockquote>
                        <?php
                    }
                }else echo "Aucun commentaire n'a été publié... Soyez le premier!";
            ?>

            <h4>Commenter:</h4>

            <?php
                if(isset($_POST['submit'])){
                    $name = htmlspecialchars(trim($_POST['name']));
                    $email = htmlspecialchars(trim($_POST['email']));
                    $comment = htmlspecialchars(trim($_POST['comment']));
                    $errors = [];

                    if(empty($name) || empty($email) || empty($comment)){
                        $errors['empty'] = "Tous les champs n'ont pas été remplis";
                    }else{
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $errors['email'] = "L'adresse email n'est pas valide";
                        }
                    }


                    if(!empty($errors)){
                        ?>
                            <div class="card red">
                                <div class="card-content white-text">
                                    <?php
                                        foreach($errors as $error){
                                            echo $error."<br/>";
                                        }
                                    ?>
                                </div>
                            </div>
                        <?php
                    }else{
                        comment($name,$email,$comment);
                        ?>
                            <script>
                                window.location.replace("index.php?page=post&id=<?= $_GET['id'] ?>");
                            </script>
                        <?php
                    }

                }

            ?>

            <form method="post">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input type="text" name="name" id="name" placeholder="Nom"/>
                        <label for="name"></label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input type="email" name="email" id="email" placeholder="Adresse E-Mail"/>
                        <label for="email"></label>
                    </div>
                    <div class="input-field col s12">
                        <textarea name="comment" id="comment" class="materialize-textarea" placeholder="Commentaires"></textarea>
                        <label for="comment"></label>
                    </div>

                    <div class="col s12">
                        <button type="submit" name="submit" class="btn waves-effect">
                            Commenter ce post
                        </button>
                    </div>
                </div>
            </form>


<script type="text/javascript" src="../assets/js/materialize.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>