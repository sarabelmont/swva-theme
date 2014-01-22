<article class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if ($content['top']): ?>
    <div class="panel-top row-fluid clearfix">
      	<div class="span12"><?php print $content['top']; ?></div>
    </div>
  <?php endif ?>

  <?php if ($content['left'] || $content['right']): ?>
    <section class="panel-main row-fluid clearfix">
          <section class="span5 panel-left"><?php print $content['left']; ?></section>
          <section class="span7 panel-right"><?php print $content['right']; ?></section>
    </section>
  <?php endif ?>

  <?php if ($content['bottom']): ?>
  <footer class="panel-bottom row-fluid clearfix">
	    <section class="span12"><?php print $content['bottom']; ?></section>
  </footer>
  <?php endif ?>
  
</article>


