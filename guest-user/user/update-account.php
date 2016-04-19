<?php

$js = "
var guestUserPasswordAgainText = '" . __('Password again for match') . "'; 
var guestUserPasswordsMatchText = '" . __('Passwords match!') . "'; 
var guestUserPasswordsNoMatchText = '" . __("Passwords do not match!") . "'; ";

queue_js_string($js);
queue_js_file('guest-user-password');
queue_css_file('skeleton');
$css = "form > div { clear: both; padding-top: 10px;} .two.columns {width: 30%;}";
queue_css_string($css);
$pageTitle = __('Update Account');
echo head(array('bodyclass' => 'update-account', 'title' => $pageTitle));
?>
<style type="text/css">
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

#primary {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
	width: 50%;
    margin: 0 auto;

}

h1 {
	width: 50%;
    margin: 0 auto;
}

form {
	  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
  width: 100%;
  margin-right: 0 auto;
  margin-left: 25% auto;
}




</style>
<script>$("#searchbox").remove();</script>
<br /><br /><br /><br />

<h1><?php echo $pageTitle; ?></h1>
<div id='primary'>
<?php echo flash(); ?>
<?php echo $this->form; ?>
</div>
<?php echo foot(); ?>