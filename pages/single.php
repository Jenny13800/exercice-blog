<?php

use App\App;
use App\Table\Article;
use App\Table\Categorie;

$post = Article::find($_GET['id']);
if($post === null){
    App::notFound();
}

App::setTitle($post->titre);
//$categorie = Categorie::find($post->category_id);

?>

<h1><?= $post->titre; ?></h1>

<p><em><?= $post->categorie; ?></em></p>

<p><?= $post->contenu; ?></p>