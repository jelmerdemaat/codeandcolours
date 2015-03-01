<?php snippet('header') ?>

<?php

foreach($page->children() as $article) :

  snippet('list-article', array('article' => $article));

endforeach;

snippet('footer');

?>
