<?php

/**
 * Social Share theme options
 *
 * @package Blank Child Theme
 * @author  Patrick Boehner
 * @license GPL-2.0+
 * @link    http://example.com/
 */

 /**
  * Notes
  *
  * http://justintadlock.com/archives/2015/05/26/multiple-checkbox-customizer-control
  */


// If this file is called directly, abort.
//**********************
if( !defined( 'ABSPATH' ) ) exit;


// Add Social Share Section

$wp_customize->add_section(
  'ct_social_share_settings' ,
  array(
    'title'      => __( 'Social Share Links', 'blank-child-theme' ),
    'panel'			 => 'genesis',
  // 'priority'   => 30,
  )
);

// Turn on and off
$wp_customize->add_setting(
  'social_share_option',
  array(
    'default'   => 1,
    'transport' => 'refresh',
  )
);

$wp_customize->add_control(
  'social_share_option',
  array(
    'label'         => __( 'Show Social Sharing?', 'blank-child-theme' ),
  	'section'       => 'ct_social_share_settings',
    'type'          => 'checkbox',
    'description'   => __( 'Check this box to allow and show social sharing features for blog posts.', 'blank-child-theme' ),
  )
);


// Title
$wp_customize->add_setting(
  'social_title',
  array(
    'default' => '',
    'transport' => 'refresh',
  )
);


$wp_customize->add_control(
  'social_title',
  array(
    'label'         => __( 'Sharing Options', 'blank-child-theme' ),
  	'section'       => 'ct_social_share_settings',
    'type'          => 'hidden',
    'description'   => __( 'Check which social sharing sharing services you want to allow.', 'blank-child-theme' ),
  )
);


// Facebook option
$wp_customize->add_setting(
  'social_share_facebook_option',
  array(
    'default'   => 1,
    'transport' => 'refresh',
  )
);

$wp_customize->add_control(
  'social_share_facebook_option',
  array(
    'label'         => __( 'Facebook', 'blank-child-theme' ),
  	'section'       => 'ct_social_share_settings',
    'type'          => 'checkbox',
  )
);


// Pinterest option
$wp_customize->add_setting(
  'social_share_pinterest_option',
  array(
    'default'   => 1,
    'transport' => 'refresh',
  )
);

$wp_customize->add_control(
  'social_share_pinterest_option',
  array(
    'label'         => __( 'Pinterest', 'blank-child-theme' ),
  	'section'       => 'ct_social_share_settings',
    'type'          => 'checkbox',
  )
);


// Twitter option
$wp_customize->add_setting(
  'social_share_twitter_option',
  array(
    'default'   => 1,
    'transport' => 'refresh',
  )
);

$wp_customize->add_control(
  'social_share_twitter_option',
  array(
    'label'         => __( 'Twitter', 'blank-child-theme' ),
  	'section'       => 'ct_social_share_settings',
    'type'          => 'checkbox',
  )
);


// Linkedin option
$wp_customize->add_setting(
  'social_share_linkedin_option',
  array(
    'default'   => 1,
    'transport' => 'refresh',
  )
);

$wp_customize->add_control(
  'social_share_linkedin_option',
  array(
    'label'         => __( 'Linkedin', 'blank-child-theme' ),
  	'section'       => 'ct_social_share_settings',
    'type'          => 'checkbox',
  )
);


// Email option
$wp_customize->add_setting(
  'social_share_email_option',
  array(
    'default'   => 1,
    'transport' => 'refresh',
  )
);

$wp_customize->add_control(
  'social_share_email_option',
  array(
    'label'         => __( 'Email', 'blank-child-theme' ),
  	'section'       => 'ct_social_share_settings',
    'type'          => 'checkbox',
  )
);

// Title
$wp_customize->add_setting(
  'network_title',
  array(
    'default' => '',
    'transport' => 'refresh',
  )
);


$wp_customize->add_control(
  'network_title',
  array(
    'label'         => __( 'Additional Settings', 'blank-child-theme' ),
  	'section'       => 'ct_social_share_settings',
    'type'          => 'hidden',
    'description'   => __( 'Customize the options for sharing on Twitter and via email.', 'blank-child-theme' ),
  )
);


// Set twitter handle
$wp_customize->add_setting(
  'social_share_twitter_account',
  array(
    'default'   => '',
    'transport' => 'refresh',
  )
);

$wp_customize->add_control(
  'social_share_twitter_account',
  array(
    'label'       => __( 'Twitter Handle', 'blank-child-theme' ),
    'section'     => 'ct_social_share_settings',
    'type'        => 'text',
    'description' => '',
  )
);


  // Set Email Subject
  $wp_customize->add_setting(
    'social_share_email_subject',
    array(
      'default'   => __( 'Shared Post:', 'blank-child-theme' ),
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    'social_share_email_subject',
    array(
      'label'       => __( 'Email Subject', 'blank-child-theme' ),
      'section'     => 'ct_social_share_settings',
      'type'        => 'text',
      'description' => __( 'The post title will be appended to the subject.', 'blank-child-theme' ),
    )
  );


  // Set Email Body
  $wp_customize->add_setting(
    'social_share_email_body',
    array(
      'default'   => __( 'I want to share this post with you. Here is the link to the article:', 'blank-child-theme' ),
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    'social_share_email_body',
    array(
      'label'       => __( 'Email Body', 'blank-child-theme' ),
      'section'     => 'ct_social_share_settings',
      'type'        => 'textarea',
      'description' => __( 'The post url will be appended to the body text you add.', 'blank-child-theme' ),
    )
  );
