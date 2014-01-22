<article class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if ($content['top']): ?>
    <header class="panel-top row-fluid clearfix">
      	<section class="span12"><?php print $content['top']; ?></section>
    </header>
  <?php endif ?>

  <?php if ($content['left'] || $content['right']): ?>
   <section class="panel-main row-fluid clearfix">
          <section class="span9 panel-left"><?php print $content['left']; ?></section>
          <aside class="span3 panel-right"><?php print $content['right']; ?></aside>
    </section>
  <?php endif ?>

  <?php if ($content['bottom']): ?>
  <footer class="panel-bottom row-fluid clearfix">
	    <section class="span12"><?php print $content['bottom']; ?></section>
  </footer>
  <?php endif ?>
  
</article>


