<?php

/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 cc=76; */

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<?php queue_js_file('show'); ?>

<?php echo head(array(
  'title' => nl_getExhibitField('title'),
  'bodyclass' => 'neatline show'
)); ?>

<!-- Exhibit -->
<div class="exhibit"><?php echo nl_getExhibitMarkup(); ?></div>

<div id="neatline-narrative" class="narrative">

  <!-- Back Link -->
  <a href="<?php echo html_escape(WEB_ROOT); ?>" class="back">
    <span class="arrow">&larr;</span> View all Exhibits
  </a>

  <!-- Narrative -->
  <div class="content">
    <h1 class="title"><?php echo nl_getExhibitField('title'); ?></h1>
    <?php echo nl_getExhibitField('narrative'); ?>
  </div>

  <!-- Colophon -->
  <?php echo common('colophon'); ?>

</div>

<?php echo foot(); ?>
