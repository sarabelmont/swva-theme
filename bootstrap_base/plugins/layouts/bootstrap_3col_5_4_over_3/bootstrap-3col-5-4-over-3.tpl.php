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
      <section class="span3 panel-left"><?php print $content['sidebar']; ?></section>
      <?php endif ?>
        
        <section class="span9 panel-right">
          <?php if ($content['header']): ?>
          <header class="panel-top row-fluid clearfix">
            <section class="span9"><?php print $content['header']; ?></section>
          </header>
          <?php endif ?>
        
          <?php if ($content['left1'] || $content['right1']): ?>
            <section class="panel-row1 row-fluid clearfix">
              <?php if(empty($content['left1'])): ?>
                <aside class="span7 panel-right"><?php print $content['right1']; ?></aside>     
              <?php else: ?>
                <section class="span7 panel-left"><?php print $content['left1']; ?></section>
                <aside class="span5 panel-right"><?php print $content['right1']; ?></aside>
              <?php endif ?>
            </section>
          <?php endif ?>
          
          <?php if ($content['left2'] || $content['middle2'] || $content['right2']): ?>
            <section class="panel-row2 row-fluid clearfix">
              <aside class="span4 panel-left"><?php print $content['left2']; ?></aside>
              <aside class="span4 panel-middle"><?php print $content['middle2']; ?></aside>
              <aside class="span4 panel-right"><?php print $content['right2']; ?></aside>
            </section>
          <?php endif ?>  
        </section>
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


