<article class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if ($content['top']): ?>
  <header class="panel-top row-fluid clearfix">
  	<div class="container">
	    <section class="span12"><?php print $content['top']; ?></section>
    </div>
  </header>
  <?php endif ?>
  
  <div class="container-fluid">
    <section class="row-fluid clearfix">
    	<div class="container">
        
          <section class="span8 panel-left">
          
            <div class="container-fluid">
              <?php if ($content['col1-top']): ?>
              <section class="panel-row1 row-fluid clearfix">
                <section class="span12"><?php print $content['col1-top']; ?></section>
              </section>
              <?php endif ?>
              <div class="panel-row2 row-fluid clearfix">
                <aside class="span4 panel-left"><?php print $content['col1-left']; ?></aside>
                <section class="span8 panel-right"><?php print $content['col1-right']; ?></section>
              </div>
            </div>
            
          </section>
          
          <aside class="span4 panel-right"><?php print $content['col2']; ?></aside>
          
		</div>      
    </section>
  </div>
  
  <?php if ($content['bottom']): ?>
  <footer class="panel-bottom row-fluid clearfix">
  	<div class="container">
	    <div class="span12"><?php print $content['bottom']; ?></div>
    </div>
  </footer>
  <?php endif ?>
  
</article>
