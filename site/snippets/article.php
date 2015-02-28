<h1>
  <a href="<?php echo $article->url() ?>">
    <?php echo markdown($article->title()) ?>
  </a>
</h1>
<time><?php echo $article->date('d/m/Y') ?></time>
<?php echo markdown($article->intro()) ?></p>
<a href="<?php echo $article->url() ?>">Read more…</a>
