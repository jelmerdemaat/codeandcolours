<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <link rel="stylesheet" href="/assets/css/main.css" media="screen" charset="utf-8">
  <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,300italic,600italic' rel='stylesheet' type='text/css'>
</head>
<body class="page-<?= $page->slug() ?> template-<?= $page->template() ?>">

<div class="wrap">

  <?php if($page->isHomePage()) : ?>
    <h1><?= $site->title() ?></h1>
  <?php else : ?>
    <h2>
      <a href="<?php echo url::home(); ?>">
        <?= $site->title() ?>
      </a>
    </h2>
  <?php endif; ?>

  <?php

  echo $site->intro()->kirbytext();

  ?>
