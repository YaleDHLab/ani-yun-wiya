<?php echo head(array('bodyid'=>'home')); ?>
<div class="container">
<?php echo get_theme_option('Homepage About'); ?>
<style>

</style>


<div class="container calltoactionbox vcenter">
    <div class="row">
        <div class="col-sm-12">                            
            <h1>Pages to Words.</h1>
            <p>
                Help build a digital corpus of text from the world-class collections of Yale University Library. 
            </p>
            <a href="<?php echo WEB_ROOT ?>/collections/show/2" class="btn btn-large btn-block btn-fb">Start Transcribing</a> 
        </div>
            
    </div>
        
     
</div>

<script type="text/javascript">         
    jQuery(function($){             
        $.supersized({              
            // Functionality
            slideshow               :   1,          // Slideshow on/off
            autoplay                :   1,          // Slideshow starts playing automatically
            start_slide             :   1,          // Start slide (0 is random)
            stop_loop               :   0,          // Pauses slideshow on last slide
            random                  :   0,          // Randomize slide order (Ignores start slide)
            slide_interval          :   5000,       // Length between transitions
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
<div id="slideshow"></div>

</div>
<?php echo foot(); ?>
