<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 04/02/2018
 * Time: 11:41
 */
?>
<h2>single page</h2>

<?php
$post = $db->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);
?>

<h1><?= $post->titre; ?></h1>

<p><?= $post->contenu; ?></p>