<div class="wrap">
    <h1>Haber Düzenleme Paneli'ne Hoşgeldin!</h1>
    <?php settings_errors(); ?>



    <ul class="nav nav-tabs">
        <li class="<?php echo !isset($_POST["edit_post"]) ? 'active' : ''  ?>"><a href="#tab-1"> İl - İlçe Seçimi</a></li>
        <li class="<?php echo isset($_POST["edit_post"]) ? 'active' : ''  ?>">
            <a href="#tab-2"> 
             <?php echo isset($_POST["edit_post"]) ? 'Edit' : 'Add'  ?> Custom Post Type 
            </a>
        </li>
        
        <li><a href="#tab-3"> Export </a></li>
        <li><a href="#tab-4"> Export </a></li>
    </ul>

    <div class="tab-content">
        <div id="tab-1" class="tab-pane <?php echo !isset($_POST["edit_post"]) ? 'active' : ''  ?>">
            
            <div class="tab-main-page-top">
                    <div class="container">
                        <h2>İl Kategorisi</h2>
                        <div class="select-box">
                            <div class="options-container">
                            <div class="option">
                                <input
                                type="radio"
                                class="radio"
                                id="automobiles"
                                name="category"
                                />
                                <label for="automobiles">Automobiles</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="film" name="category" />
                                <label for="film">Film & Animation</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="science" name="category" />
                                <label for="science">Science & Technology</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="art" name="category" />
                                <label for="art">Art</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="music" name="category" />
                                <label for="music">Music</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="travel" name="category" />
                                <label for="travel">Travel & Events</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="sports" name="category" />
                                <label for="sports">Sports</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="news" name="category" />
                                <label for="news">News & Politics</label>
                            </div>

                            <div class="option">
                                <input type="radio" class="radio" id="tutorials" name="category" />
                                <label for="tutorials">Tutorials</label>
                            </div>
                            </div>

                            <div class="selected" >
                            İl Seçimi
                            </div>

                            <div class="search-box">
                            <input type="text" placeholder="Aramaya Başla" />
                            </div>
                        </div>
                    </div>
            </div>




            <?php
                // $options = get_option('ibbhaber_plugin_cpt' ) ?: array();
                // $sehirler = array('ANKARA','ADIYAMAN','ANTALYA','AMASYA','ARDAHAN','GÜMÜŞHANE','İSTANBUL','KOCAELİ');

                // foreach ($sehirler as $sehir) { 
                //     echo '<div class="main-dist">
                //         <img class="dist-photo" src="https://www.ozyegin.edu.tr/sites/default/files/upload/Uluslararasi/ozu-istanbul.png">'
                //         .'<b>'.$sehir.' HABERLERİ </b>
                //         </div>';}





                // echo '<table class="cpt-table"><tr><th>ID</th><th>Singular Name</th><th>Plural Name</th><th class="text-center">Public</th><th class="text-center">Archive</th><th class="text-center">Actions</th></tr>';

                // foreach ($options as $option) {
                //     $public = isset($option['public']) ? 'TRUE' : 'FALSE';
                //     $archive = isset($option['has_archive']) ? 'TRUE' : 'FALSE';
                //     echo "<tr><td>{$option['post_type']}</td><td>{$option['singular_name']}</td><td>{$option['plural_name']}</td><td class=\"text-center\">{$public}</td><td class=\"text-center\">{$archive}</td><td class=\"text-center\">"; 
                    
                //     echo '<form method="post" action="" class="inline-block">';
                //     echo '<input type="hidden" name="edit_post" value="' . $option['post_type'] . '">';
                //     submit_button('Edit', 'primary small', 'submit', false);
                //     echo '</form> ';


                //     echo '<form method="post" action="options.php" class="inline-block">';
                //     settings_fields('ibbhaber_plugin_cpt_settings');

                //     echo '<input type="hidden" name="remove" value="' . $option['post_type'] . '">';
                //     submit_button('Delete', 'delete small', 'submit', false, array(
                //         'onclick' => 'return confirm("Are you sure you want delete this Custom Post Type? The data associadet with it will not be deleted.");'
                //     ));

                //     echo '</form></td></tr>';


                
                // }
                // echo '</table>';
            ?>

        </div>

        <div id="tab-2" class="tab-pane <?php echo isset($_POST["edit_post"]) ? 'active' : ''  ?>">
            <form method="post" action="options.php">
                <?php 
                    settings_fields('ibbhaber_plugin_cpt_settings');
                    do_settings_sections('ibbhaber_cpt');
                    submit_button();
                ?>
            </form>
        </div>

        <div id="tab-3" class="tab-pane">
            <h3>Export Your Custom Post Types</h3>

        </div>

        <div id="tab-4" class="tab-pane">
            <h3>Export Your Custom Post Types</h3>

        </div>
        
    </div>
</div>