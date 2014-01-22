<article class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if ($content['left1'] || $content['right1']): ?>
  <div class="row-primary">
    <section class="row-fluid clearfix"> 
    
      <div class="container">
      	<div id="bkg-left"></div>
        <section class="span4 panel-left"><?php print $content['left1']; ?></section>
        <section class="span8 panel-right"><?php print $content['right1']; ?></section>
        <div id="bkg-right"></div>
      </div>
  
    </section>
  </div>
  <?php endif ?>
  
  <?php if ($content['left2'] || $content['right2']): ?>
  <div class="row-secondary">
    <section class="row-fluid clearfix"> 
      <div class="container">
            <section class="span4 panel-left"><?php print $content['left2']; ?></section>
          <section class="span8 panel-right"><?php print $content['right2']; ?></section>
      </div>
    </section>
  </div>
  <?php endif ?>
  
  <?php if ($content['left3'] || $content['right3']): ?>
  <div class="row-tertiary">
    <section class="row-fluid clearfix"> 
      <div class="container">
          <section class="span4 panel-left"><?php print $content['left3']; ?></section>
          <section class="span8 panel-right"><?php print $content['right3']; ?></section>
      </div>
    </section>
  </div>
  <?php endif ?>

  <?php if ($content['bottom']): ?>
  <footer class="panel-bottom row-fluid clearfix">
  	<div class="container">
	    <div class="span12"><?php print $content['bottom']; ?></div>
    </div>
  </footer>
  <?php endif ?>
  
</article>


