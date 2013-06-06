<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">

  <head>

    <meta charset="utf-8">

    <title>
      <?php echo option('site_title');
      echo isset($title) ? ' | ' . $title : ''; ?>
    </title>

    <?php fire_plugin_hook('public_head', array('view' => $this)); ?>

    <?php queue_css_file('style'); ?>
    <?php echo head_css(); ?>
    <?php echo head_js(); ?>

  </head>

  <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view' => $this)); ?>
    <div class="container">
