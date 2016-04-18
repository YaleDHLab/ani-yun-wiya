

<?php echo head(array(
    'title' => metadata('simple_pages_page', 'title'),
    'bodyclass' => 'page simple-page',
    'bodyid' => metadata('simple_pages_page', 'slug')
)); ?>

<style type="text/javascript">

</style>

    <?php
    $text = metadata('simple_pages_page', 'text', array('no_escape' => true));
    if (metadata('simple_pages_page', 'use_tiny_mce')) {
        echo $text;
    } else {
        echo eval('?>' . $text);
    }
    ?>

<?php echo foot(); ?>
