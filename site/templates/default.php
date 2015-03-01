<?php snippet('header') ?>

<article>

<?php
$time = $page->date('F d, Y');
if(strlen($time) > 0) :
?>
<time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?= $time; ?></time>
<?php endif; ?>

<h1><?= $page->title() ?></h1>

<?= $page->text()->kirbytext() ?>

</article>

<?php snippet('footer') ?>
