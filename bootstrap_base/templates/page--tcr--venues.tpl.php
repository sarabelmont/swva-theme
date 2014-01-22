
    <!--site nav bar -->
    <div class="navbar navbar-static-top">
      <div class="top-navbar-inner">
        <div class="container">
          <ul class="nav pull-right">
          	<li class="swva"><a href="/swva">Southwest Virginia</a></li>
            <li class="rtm"><a href="/rtm">Round the Mountain</a></li>
            <li class="tcr"><a href="/tcr">The Crooked Road</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <!--header content-->  
    <header role="banner" id="page-header">
      <div class="container">
        <div class="row-fluid">
          <div class="header-container">
          	<div class="logo span3">
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
            <div class="span9 pull-right">
              <?php print render($page['header']); ?>
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <!--main navigation-->
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">


                <?php if (!empty($page['navigation'])): ?>
                  <?php print render($page['navigation']); ?>
                <?php endif; ?>


        </div>
      </div>
    </div>
    
    <!--breadcrumb and title -->
    <div class="page-breadcrumb row-fluid">
    	<div class="container">
        	<section class="span12">
				<?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
             </section>
        </div>
    </div>
    
    <div class="page-title row-fluid">
    	<div class="container">
        	<section class="span12">
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if (!empty($title)): ?>
                	<div class="header-bkg">
                    	<div class="header-title">
	                  		<h1><?php print $title; ?></h1>
                         </div>
                    </div>
                <?php endif; ?>
             </section>
        </div>
    </div>
    
    <div class="main-container">
      <div class="row-fluid">
        <div class="container">

   		  <?php if (!empty($page['sidebar_first'])): ?>
          <aside class="span3" role="complementary">
            <?php print render($page['sidebar_first']); ?>
          </aside>  <!-- /#sidebar-first -->
          <?php endif; ?>

          <section class="<?php print _bootstrap_content_span($columns); ?>">  

            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php if (!empty($tabs)): ?>
              <?php print render($tabs); ?>
            <?php endif; ?>
            <?php if (!empty($page['help'])): ?>
              <div class="well"><?php print render($page['help']); ?></div>
            <?php endif; ?>
            <?php if (!empty($action_links)): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
                
            <section>
              <?php print render($page['content']); ?>
            </section>
            
            <?php if (!empty($page['sidebar_second'])): ?>
              <aside class="span3" role="complementary">
                <?php print render($page['sidebar_second']); ?>
              </aside>  <!-- /#sidebar-second -->
            <?php endif; ?>
          </section>
        </div>
          
      </div>
      
    </div>
    
    <footer class="footer">
      <section class="footer-main">
          <div class="container"
            <?php print render($page['footer']); ?>
          </div>
      </section>
      
      <section class="footer-bottom">
          <div class="container">
            <?php print render($page['footer_bottom']); ?>
          </div>
      </section>
    </footer>
