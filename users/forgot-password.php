<?php
$pageTitle = __('Forgot Password');
echo head(array('title' => $pageTitle, 'bodyclass' => 'login'), $header);
?>
<style type="text/css">

body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

form  {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
  margin-bottom: 10px;
  font-weight: normal;
}

#login-links {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
  margin-bottom: 10px;
  font-weight: normal;
}

h1 {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
  margin-bottom: 10px;  
}


</style>
<br /><br /><br />
<h1><?php echo $pageTitle; ?></h1>
<p id="login-links">
<span id="backtologin"><?php echo link_to('users', 'login', __('Back to Log In')); ?></span>
</p>

<p class="clear"><?php echo __('Enter your email address to retrieve your password.'); ?></p>
<?php echo flash(); ?>
<form method="post" accept-charset="utf-8">
    <div class="field">        
        <label for="email"><?php echo __('Email'); ?></label>
        <?php echo $this->formText('email', @$_POST['email']); ?>
    </div>

    <input type="submit" class="submit" value="<?php echo __('Submit'); ?>" />
</form>
<?php echo foot(array(), $footer); ?>
