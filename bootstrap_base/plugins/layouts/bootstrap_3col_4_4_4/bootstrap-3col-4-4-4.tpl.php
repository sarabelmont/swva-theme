<article class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if ($content['top']): ?>
    <header class="panel-top row-fluid clearfix">
      <div class="container">
      	<section class="span12"><?php print $content['top']; ?></section>
      </div>
    </header>
  <?php endif ?>

  <?php if ($content['left'] || $content['middle'] || $content['right']): ?>
    <section class="panel-main row-fluid clearfix">
    	<div class="container">
          <section class="span4 panel-left"><?php print $content['left']; ?></section>
          <?php if ($content['middle']): ?>
              <section class="span4 panel-middle"><?php print $content['middle']; ?></section>
              <section class="span4 panel-right"><?php print $content['right']; ?></section>
          <?php else: ?>
              <section class="span4 panel-right"><?php print $content['right']; ?></section>
          <?php endif; ?>
        </div>
    </section>
  <?php endif ?>

  <?php if ($content['bottom']): ?>
  <footer class="panel-bottom row-fluid clearfix">
  	<div class="container">
	    <div class="span12"><?php print $content['bottom']; ?></div>
    </div>
  </footer>
  <?php endif ?>
  
</article>


