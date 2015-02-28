<?php snippet('header') ?>

<h1><?= $site->title() ?></h1>

<?php

echo markdown($page->text());

foreach($page->children() as $article) :

  snippet('article', array('article' => $article));

endforeach;

snippet('footer');

?>
