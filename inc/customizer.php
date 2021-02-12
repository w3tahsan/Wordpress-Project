<?php
function mahadi_customize_register( $wp_customize ) {
  // for marquee
  $wp_customize->add_section( 'mahadi_marquee_section' , array(
   'title'      => __( 'Marquee Section', 'mahadi' ),
   'priority'   => 30,
  ) );

  $wp_customize->add_setting( 'mahadi_marquee_setting' , array(
    'default'   => 'Your Text Here',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( 'mahadi_marquee_setting', array(
  'type' => 'text',
  'section'    => 'mahadi_marquee_section',
  'settings'   => 'mahadi_marquee_setting',
  'label' => __( 'Add Marquee text here' ),
  ) );

  // for banner
  $wp_customize->add_section( 'mahadi_banner_section' , array(
   'title'      => __( 'Banner Section', 'mahadi' ),
   'priority'   => 30,
  ) );

  $wp_customize->add_setting( 'mahadi_banner_setting' , array(
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control(
     new WP_Customize_Image_Control(
         $wp_customize,
         'banner',
         array(
             'label'      => __( 'Upload a Banner', 'mahadi' ),
             'section'    => 'mahadi_banner_section',
             'settings'   => 'mahadi_banner_setting',
         )
     )
 );
}
add_action( 'customize_register', 'mahadi_customize_register' );
