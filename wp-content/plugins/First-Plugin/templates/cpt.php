<div class="wrap">
    <h1>Burası CPT</h1>
    <?php settings_errors(); ?>

    <form method="post" action="options.php">
       <?php 
           settings_fields('ibbhaber_plugin_cpt_settings');
           do_settings_sections('ibbhaber_cpt');
           submit_button();
       ?>
    </form>
</div>