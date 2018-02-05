<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 04/02/2018
 * Time: 11:41
 */
?>
<h1>Je suis la home page</h1>
<p><a href="index.php?p=single">Single</a></p>

<?php foreach ($db->query('SELECT * FROM articles', 'App\Table\Article') as $post):?>

    <h2><a href="<?= $post->url ?>"><?= $post->titre; ?></a> </h2>
    <p><?= $post->extrait;  ?></p>

<?php endforeach; ?>
