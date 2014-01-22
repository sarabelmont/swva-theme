<article class="<?php print $classes ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['top']): ?>
  <header class="row-fluid clearfix">
    <div class="container">
      <?php print $content['top']; ?>
    </div>
  </header>
  <?php endif ?>

  <?php if ($content['left'] || $content['middle'] || $content['right']): ?>
  <div class="row-fluid clearfix">
    <section class="container">
      <?php print $content['left']; ?>
      <?php print $content['middle']; ?>
      <?php print $content['right']; ?>
    </section>
  </div>
  <?php endif ?>

  <?php if ($content['bottom']): ?>
  <footer class="row-fluid clearfix">
	<section class="container">
      <?php print $content['bottom']; ?>
    </section>
  </footer>
  <?php endif ?>
</article>
