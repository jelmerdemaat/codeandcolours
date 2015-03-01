<article>
  <time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate">
    <?php echo $article->date('F d, Y') ?>
  </time>
  <h2>
    <a href="<?php echo $article->url() ?>">
      <?php echo $article->title()->html() ?>
    </a>
  </h2>
  <?php

  $intro = $article->intro()->kirbytext();

  if(strlen($intro) > 0) {
    echo $intro;
  } else {
    echo '<p>' . $article->text()->excerpt(200) . '</p>';
  }
  ?>

  <a href="<?php echo $article->url() ?>" class="read-more">Read article</a>
</article>
