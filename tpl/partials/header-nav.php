<?php if($page_header['show_nav']) { ?>
    <div class="header-item header-item--nav nav uk-visible@m">
        <?php $homeActive = is_front_page() ? 'nav-home current_page_item' : 'nav-home'; ?>
        <div class="<?= $homeActive ?>">
            <a aria-label="zur Startseite" alt="zur Startseite" href="<?= home_url() ?>">
                <svg id="home-4-line" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path id="Pfad_19" data-name="Pfad 19" d="M0,0H24V24H0Z" fill="none"/>
                    <path id="Pfad_20" data-name="Pfad 20" d="M19,21H5a1,1,0,0,1-1-1V11H1L11.327,1.612a1,1,0,0,1,1.346,0L23,11H20v9A1,1,0,0,1,19,21Zm-6-2h5V9.157L12,3.7,6,9.157V19h5V13h2Z" fill="#008a90"/>
                </svg>

            </a>
        </div>
        <nav class="nav-list" role="navigation">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => '')); ?>
        </nav>
    </div>
<?php } ?>
