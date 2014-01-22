
    
    <!--header content-->  
    <header role="banner" id="page-header">
      <div class="container">
        <div class="row-fluid">
          <div class="header-container">
          	<div class="logo span4">
			  <?php if (!empty($logo)): ?>
                <a class="pull-left" href="/tcr" title="<?php print t('Home'); ?>">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
              <?php endif; ?>
            </div>
            <?php if (!empty($site_name)): ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
              </h1>
            <?php endif; ?>

            
            <!-- messages -->
            <section class="<?php print _bootstrap_content_span($columns); ?>">  
              <?php print $messages; ?>
              <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
              <?php endif; ?>
              <?php if (!empty($page['help'])): ?>
                <div class="well"><?php print render($page['help']); ?></div>
              <?php endif; ?>
          </section>
          
          </div>
        </div>
      </div>
    </header>
    
    <div class="main-container">
      <div class="row-fluid">
      
        <section>
          <a id="main-content"></a>
          <?php print render($page['content']); ?>
        </section> 
          
      </div>
      
    </div>
    
  