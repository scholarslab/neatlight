<?php echo head(array(
  'title' => nl_getExhibitField('title'))
); ?>

<div class="exhibit">
  <?php echo nl_getExhibitMarkup(); ?>
</div>

<div class="narrative">
  <h1 class="title"><?php echo nl_getExhibitField('title'); ?></h1>
  <?php echo nl_getNarrativeMarkup(); ?>
</div>

<?php echo foot(); ?>
