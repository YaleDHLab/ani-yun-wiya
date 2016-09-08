
<?php
$pageTitle = __('Register');
echo head(array('bodyclass' => 'login', 'title' => $pageTitle));
?>

<script type="text/javascript">         
    jQuery(function($){             
        $.supersized({              
            // Functionality
            slideshow               :   1,          // Slideshow on/off
            autoplay                :   1,          // Slideshow starts playing automatically
            start_slide             :   1,          // Start slide (0 is random)
            stop_loop               :   0,          // Pauses slideshow on last slide
            random                  :   0,          // Randomize slide order (Ignores start slide)
            slide_interval          :   8000,       // Length between transitions
            transition              :   1,          // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed        :   1000,       // Speed of transition
            new_window              :   0,          // Image links open in new window/tab
            pause_hover             :   0,          // Pause slideshow on hover
            keyboard_nav            :   1,          // Keyboard navigation on/off
            performance             :   1,          // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
            image_protect           :   1,          // Disables image dragging and right click with Javascript
                                                               
            // Size & Position                         
            min_width               :   0,          // Min width allowed (in pixels)
            min_height              :   0,          // Min height allowed (in pixels)
            vertical_center         :   1,          // Vertically center background
            horizontal_center       :   1,          // Horizontally center background
            fit_always              :   0,          // Image will never exceed browser width or height (Ignores min. dimensions)
            fit_portrait            :   1,          // Portrait images will not exceed browser height
            fit_landscape           :   0,          // Landscape images will not exceed browser width
                                                               
            // Components                           
            slide_links             :   'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
            thumb_links             :   1,          // Individual thumb links for each slide
            thumbnail_navigation    :   0,          // Thumbnail navigation
            slides                  :   [           // Slideshow Images
                                                    {image : '<?php echo img("slideshow_cherokee.jpg"); ?>', title : 'Cherokee Manuscript', alt: 'Cherokee Manuscript'},
                                                    {image : '<?php echo img("slideshow_starr.jpg"); ?>', title : 'Starr Reading Room', alt: 'Starr Reading Room'},
                                                    {image : '<?php echo img("slideshow_sterling.jpg"); ?>', title : 'Sterling Memorial Library', alt: 'Sterling Memorial Library'},
                                                    {image : '<?php echo img("slideshow_beinecke.jpg"); ?>', title : 'Beinecke Rare Book & Manuscript Library', alt: 'Beinecke Rare Book & Manuscript Library'},
                                                    {image : '<?php echo img("slideshow_gilmore.jpg"); ?>', title : 'Gilmore Music Library', alt: 'Gilmore Music Library'},

                                        ],

            // Theme Options               
            progress_bar            :   1,          // Timer for each slide                         
            mouse_scrub             :   0
                                                

                    
        });
    });         
</script>       

<style>
div.loginbox {
	background-color:rgba(0,0,0,.7);
	color:white;
	width:590px;
	padding:35px;
}

 div.loginbox a {
	 color:white;
 }
 
div.loginbox .btn {
	background-color: #d7d7d7;
	width:80%;
	margin: 40px auto 0 auto;
	font-weight: bold;
	color:#666666;
	font-size:18px;
}

 
div.loginbox input#submit {
	background-color: #d7d7d7;
	width:80%;
	margin: 40px 20px 0px 20px;
	border-radius: 4px;
	border:none;
	color:#666666;
	font-size:18px;
	font-family:"InterstateBold"
}
div.loginbox input#submit:hover {
 background-color:#f6a947;
 color:white;
}

div.loginbox input {width:100%;
	color:black;
	font-family:"InterstateLight";
	line-height: normal;
	height:30px;
	font-size:14px;
	padding-left:8px;
	padding-top:6px;
	padding-bottom:2px;
	margin-bottom:10px;
}

div.two {
	display:none;
}
p.explanation {
	line-height: normal;
	font-size:12px;
	color:#cccccc;
	
	
}

 div.loginbox .btn:hover {
	 background-color:#f6a947;
	 color:white;
 }

div.loginbox .form-control {
	margin-bottom:5px;
	background-color:#d7d7d7;
	border-radius: 0;
}
div.loginbox h4 {
	font-family: YaleDesign;
	font-size:24px;
	text-align: center;
	margin-bottom:30px;
}
div.loginbox label, div.checkbox {	font-family: InterstateLight;
	font-size:12px;

}
div.loginbox p {

	text-align: justify;
}


div.loginbox p, div.loginbox li {
	font-family: InterstateLight;
	font-size:14px;
}
div.loginbox li {
	margin-bottom:20px;
}


#remember {
margin-top:2px;
}

label#rememberMe {
	color:#999;
}

#forgot {
	text-align: right;
	float:right;
}

div.vcenter {
 position: absolute;
  top: 50%;
  left:50%;
  transform: translate(-50%,-50%);
}


#content #flash ul {
    list-style-type: none;
    margin-top: 0;
    padding: 0;
}

    ul.error {
        list-style-type: none;
        margin-top: 20px;
        padding: 0;
    }
    
    #content #flash li, ul.error li {
		background-color:white;
		color:red;
		font-weight:bold;
		

        margin-top: 20px;
        padding: .5em;            
    }


</style>

 
<div class="container loginbox vcenter">
	<div class="row">
		<div class="col-sm-6" style="border-right: 1px solid white;padding-right:30px;">
			<h4>
				Register now
			</h4>
			<p>
				<?php echo $this->form; ?>  
			</p>
			 
		</div>
		<div class="col-sm-6" style="padding-left:30px;">
			<div class="form-heading">
				<h4 class="header">
					Important Info
				</h4>
			</div>
		
			<ul>
				                            <li>
                              No Yale affiliation is required.
                            </li>
			   <li>
                              The transcriptions you contribute will be licensed under <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">CC-0 »</a>.

                            </li>


              
                          </ul>
			
		</div>

			<div class="form-footer">
				
<?php echo flash(); ?>
			</div>
		
		
	</div>
	<div class="row">
		<div class="col-sm-6" style="padding-right:30px;">
<!-- 			<a href="<?php echo WEB_ROOT ?>/guest-user/user/register" class="btn btn-large btn-block btn-fb">Sign Up</a> -->
		</div>
		<div class="col-sm-6" style="padding-left:30px;">
		</div>
	</div>
</div>
</div>





</div> 


<div id="slideshow"></div>







<?php echo foot(); ?>
