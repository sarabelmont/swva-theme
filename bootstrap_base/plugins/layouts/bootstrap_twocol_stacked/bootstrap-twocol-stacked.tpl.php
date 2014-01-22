<div class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['top']): ?>
  <div class="row-fluid clearfix">
  	<div class="container">
	  <?php print $content['top']; ?>
    </div>
  </div>
  <?php endif ?>
  
   <?php if ($content['left'] || $content['right']): ?>
  <div class="row-fluid clearfix">
    <div class="container">
      <?php print $content['left']; ?>
      <?php print $content['right']; ?>
    </div>
  </div>
  <?php endif ?>
  
  <?php if ($content['bottom']): ?>
  <div class="row-fluid clearfix">
    <div class="container">
      <?php print $content['bottom']; ?>
    </div>
  </div>
   <?php endif ?>
</div>
