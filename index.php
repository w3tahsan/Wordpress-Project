<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=bloginfo('name');?> - <?=bloginfo('description');?></title>
    <?php wp_head();?>
</head>
<body>
<section class="py-1">
    <div class="container" id="header-top">
        <div class="row">
            <div class="col-lg-6">
                <div class="head-left">
                    <p class="mb-0 text-white">বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="head-right text-right">
                    <p class="mb-0 text-white"><?=  get_the_date( 'd-M-Y' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<header class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="logo">
                    <a href="#">
                      <?php
                        the_custom_logo();
                       ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="search pt-3">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="<?=get_search_query();?>" name="search string">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="social text-right pt-3">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg">
    <div class="container bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
      			wp_nav_menu(
      				array(
      					'theme_location' => 'menu-1',
      					'menu_id'        => 'primary-menu',
                'menu_class'     => 'navbar-nav mr-auto',
      				)
      			);
  		    ?>
        </div>
    </div>
</nav>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 pl-0">
                <div class="banner">
                  <img src="<?=get_theme_mod('mahadi_banner_setting'); ?>" alt="" class="img-fluid">
                </div>
                <div class="marquee mt-2 py-2">
                    <marquee class="mb-0">
                      <?=get_theme_mod('mahadi_marquee_setting'); ?>
                    </marquee>
                </div>
                <div class="banner-slider mt-2">
                  <?php
                    $args = array( 'post_type' => 'slider', 'posts_per_page' => 10 );
                    $the_query = new WP_Query( $args );
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?= the_post_thumbnail();?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                    <?php else:  ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                  <?php endif; ?>
                </div>
                <div class="tabs-main mt-3">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tab1</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tab2</a>
                          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Tab3</a>
                        </div>
                      </nav>
                      <div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="tab-img">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/tab3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>

                <div class="uddog mt-5">
                    <h3>উদ্যোগ</h3>
                    <ul>
                      <?php
                        $args = array(
                        'post_type'=> 'post',
                        'orderby'    => 'ID',
                        'post_status' => 'publish',
                        'order'    => 'DESC',
                        'posts_per_page' => -1 // this will retrive all the post that is published
                        );
                        $result = new WP_Query( $args );
                        if ( $result-> have_posts() ) : ?>
                        <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                        <li><a href="<?= get_permalink();?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                        <?php endif; wp_reset_postdata();
                      ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 px-0">
                <div class="sidebar-main">
                    <div class="sidebar-item">
                        <?php dynamic_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container px-0">
        <img src="<?= get_template_directory_uri();?>/assets/images/footer-bfg.png" alt="" class="img-fluid w-100">
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 px-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <?php
                    			wp_nav_menu(
                    				array(
                    					'theme_location' => 'menu-2',
                    					'menu_id'        => 'footer-menu',
                              'menu_class'     => 'navbar-nav mr-auto',
                    				)
                    			);
                		    ?>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
