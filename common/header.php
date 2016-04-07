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
    
<nav class="navbar navbar-default">
  <div class="container-fluid" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#transcribeNavbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
		<div id="header-allbox">
			<div id="header-dhlabbox">
			    <div id="header-dhlabbox-dh">DH</div>
			    <div id="header-dhlabbox-lab">Lab</div>
			</div>
			<div id="header-transcribebox" >
			    <?php echo link_to_home_page("Transcribe"); ?>
			</div>
		</div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse"  id="transcribeNavbar">
      <ul class="nav navbar-nav">
	      

          
          
          
	      
	      
	      
	      
        <li class="dropdown">
        
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Collections <span class="caret"></span></a>
          <ul class="dropdown-menu">
	         <li><a href="<?php echo WEB_ROOT; ?>/collections/show/2">Cherokee</a></li>
          </ul>
          
          
        </li>
        
        
        
        
        
        
        <li><a href="<?php echo WEB_ROOT; ?>/about">About</a></li>
        <li>
		<?php if (!current_user()) { ?>
		<a href="<?php echo WEB_ROOT; ?>/guest-user/user/login">Login</a>
		<?php }; ?>
		<?php if (current_user()) { ?>
		<a href="<?php echo WEB_ROOT; ?>/users/logout">Logout</a>
		<?php }; ?>
		</li>
      </ul>
<!--
       <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" style="width:120px;" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
-->
<!--
      <ul class="nav navbar-nav navbar-right">
	      <li>
	        <div class="form-group">
	          <?php echo search_form(array('show_advanced' => false, 'submit_value' => 'I Feel Lucky')); ?>
	        </div>
	        
	      </li>
      </ul>
-->


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <main id="content" role="main">
    
          <?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
		  