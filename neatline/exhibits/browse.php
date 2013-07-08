<?php

/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 cc=76; */

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<?php echo head(array('bodyclass' => 'neatline browse')); ?>

<!-- Site Title -->
<h1 class="title"><?php echo get_option('site_title'); ?></h1>

<?php if (nl_exhibitsHaveBeenCreated()): ?>
  <div class="list">

  <!-- Exhibit List -->
  <?php foreach (loop('NeatlineExhibit') as $e): ?>
    <div class="exhibit">

      <span class="date">
        <?php echo format_date($e->added, 'FF'); ?>
      </span>

      <span class="title">
        <?php echo nl_getExhibitLink(
          $e, 'show', nl_getExhibitField('title'),
          array('class' => 'neatline'), true
        );?>
      </span>

    </div>
  <?php endforeach; ?>

  </div>
<?php endif; ?>

<!-- Colophon -->
<?php echo common('colophon'); ?>

<?php echo foot(); ?>
