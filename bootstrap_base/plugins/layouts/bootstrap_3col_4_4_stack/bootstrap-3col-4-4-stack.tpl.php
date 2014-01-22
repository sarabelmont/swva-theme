<article class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if ($content['top']): ?>
    <header class="panel-top row-fluid clearfix">
      <div class="container">
      	<section class="span12"><?php print $content['top']; ?></section>
      </div>
    </header>
  <?php endif ?>

  <section class="panel-main row-fluid clearfix">
  	<div class="container">
	  <?php if ($content['sidebar']): ?>
      <section class="span4 panel-left"><?php print $content['sidebar']; ?></section>
      <?php endif ?>
      
        <div class="span8 panel-right">
          <?php if ($content['left1'] || $content['right1']): ?>
            <section class="panel-row1 row-fluid clearfix"> 
              <section class="span4 panel-left"><?php print $content['left1']; ?></section>
              <section class="span4 panel-right"><?php print $content['right1']; ?></section>
            </section>
          <?php endif ?>
          
          <?php if ($content['left2'] || $content['right2']): ?>
            <section class="panel-row2 row-fluid clearfix">
              <section class="span4 panel-left"><?php print $content['left2']; ?></section>
              <section class="span4 panel-right"><?php print $content['right2']; ?></section>
            </section>
          <?php endif ?>  
        </div>
      </div>
    </section>

  <?php if ($content['bottom']): ?>
  <footer class="panel-bottom row-fluid clearfix">
  	<div class="container">
	    <div class="span12"><?php print $content['bottom']; ?></div>
    </div>
  </footer>
  <?php endif ?>
  
</article>


