<article class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if ($content['top']): ?>
    <header class="panel-top row-fluid clearfix">
      <div class="container">
      	<section class="span12"><?php print $content['top']; ?></section>
      </div>
    </header>
  <?php endif ?>

  <?php if ($content['left1'] || $content['middle1'] || $content['right1']): ?>
    <section class="panel-row1 row-fluid clearfix">
    	<div class="container">
          <section class="span3 panel-left"><?php print $content['left1']; ?></section>
          <section class="span5 panel-middle"><?php print $content['middle1']; ?></section>
          <section class="span4 panel-right"><?php print $content['right1']; ?></section>
        </div>
    </section>
  <?php endif ?>
  
    <?php if ($content['left2'] || $content['middle2'] || $content['right2']): ?>
    <section class="panel-row2 row-fluid clearfix">
    	<div class="container">
          <section class="span3 panel-left"><?php print $content['left2']; ?></section>
          <section class="span5 panel-middle"><?php print $content['middle2']; ?></section>
          <section class="span4 panel-right"><?php print $content['right2']; ?></section>
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


