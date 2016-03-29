<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( $description = option('description')): ?>
        <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <!-- Will build the page <title> -->
    <?php
        if (isset($title)) { $titleParts[] = strip_formatting($title); }
        $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>
    <?php echo auto_discovery_link_tags(); ?>

    <!-- Will fire plugins that need to include their own files in <head> -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>


    <!-- Need to add custom and third-party CSS files? Include them here -->
    <?php
        queue_css_file('lib/bootstrap.min');
        queue_css_file('style');
         
    

        queue_css_file('supersized');

        echo head_css();
    ?>

    <!-- Need more JavaScript files? Include them here -->
    <?php
        queue_js_file('vendor/jquery-1.11.1.min'); 
        queue_js_file('vendor/jquery-ui.min');
        queue_js_file('lib/bootstrap.min');
        queue_js_file('globals');
        queue_js_file('vendor/supersized.3.2.7.min');
		queue_js_file('vendor/jquery.smoothZoom'); 	
		queue_js_file('vendor/modernizr.custom');
        

        echo head_js();
    ?>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
    <header role="banner">
		<nav class="navbar">
		  <div class="container-fluid">
			  <div class="row">
			    <div class="navbar-header" role="navigation">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#transcribeNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>                        
						</button>
						
						<div id="header-allbox" class="pull-left">
							<div id="header-dhlabbox">
							    <div id="header-dhlabbox-dh">DH</div>
							    <div id="header-dhlabbox-lab">Lab</div>
							</div>
							<div id="header-transcribebox" >
							    <?php echo link_to_home_page("Transcribe"); ?>
							</div>
							
						</div>

						</div>
					    <div class="collapse navbar-collapse" id="transcribeNavbar">
					      <ul class="nav nav-justified">
					        <li class="dropdown">
					          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Collections&nbsp;<span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="<?php echo WEB_ROOT; ?>/collections/show/2">Cherokee</a></li>
		
					          </ul>
					        </li>
					        <li><a href="<?php echo WEB_ROOT; ?>/about">About</a></li>
<!-- 					        <li><a href="#">Dashboard</a></li> -->
					        <li>
					        <?php if (!current_user()) { ?>
					        	<a href="<?php echo WEB_ROOT; ?>/guest-user/user/login">Login</a>
					        <?php }; ?>
					        <?php if (current_user()) { ?>
					        	<a href="<?php echo WEB_ROOT; ?>/users/logout">Logout</a>
					        <?php }; ?>
					        </li>
					        <li>
						        <div  class="navbar-form" >
									<?php echo search_form(array('show_advanced' => false, 'submit_value' => 'I Feel Lucky')); ?>
								</div>
					        </li>
			
					      </ul>

					    </div>
			  </div>
			  </div>
			  
		</nav>	    
	    
<!--
        <div class="container" >

            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>            
        </div>
-->
    </header>
    <main id="content" role="main">
    
          <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
		  