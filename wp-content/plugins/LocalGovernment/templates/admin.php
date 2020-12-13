<div class="wrap">
    <h1>IBB Haber Eklentisinin Anasayfasına Hoşgeldiniz!</h1>
    <?php settings_errors(); ?>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-1"> Ayarları Yönetme Sayfası </a></li>
        <li><a href="#tab-2"> Güncellemeler </a></li>
        <li><a href="#tab-3"> Hakkında </a></li>
    </ul>

    <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
            <form method="post" action="options.php">
                <?php 
                    settings_fields('ibbhaber_plugin_settings');
                    do_settings_sections('ibbhaber_plugin');
                    submit_button();
                ?>
            </form>
        </div>

        <div id="tab-2" class="tab-pane">
            <h3>Güncellemeler Hakkında Bilgilendirmeler</h3>
        </div>

        <div id="tab-3" class="tab-pane">
            <h3>Uygulama Hakkında Bilgiler</h3>
        </div>
        
    </div>


</div>

