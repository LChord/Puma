<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head();?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/static/img/favicon.ico" type="image/vnd.microsoft.icon">
    
    <meta name="baidu-site-verification" content="u2ViigXTfb" />
    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-107747261-1', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
    <!-- Baidu Tongji -->
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?424c4198b89f083d29969fa0c3d9b2ae";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <!-- End Baidu Tongji -->
</head>
<body <?php body_class();?>>
<div class="surface-content">
    <header class="site-header u-textAlignCenter container">
    <div class="header-inner">
        <h1 class="site-title">
            <a href="<?php echo home_url();?>" title="<?php bloginfo( 'name' ); ?>"><?php if ( !get_option('header_logo_image') ) { bloginfo( 'name' ); } else { echo '<img src="' . get_option('header_logo_image') .'">';} ?></a>
        </h1>
        <?php $description = get_bloginfo( 'description', 'display' );
        if ( $description ) : ?>
            <p class="site-description"><?php echo $description; ?></p>
        <?php endif;?>
        <div class="social-links">
          <?php echo header_social_link();?>
        </div>
        <div class="">
            <?php get_search_form();?>
        </div>
    </div>
    </header>
    <nav class="topNav u-textAlignCenter container">
        <div class="layoutSingleColumn">
            <?php wp_nav_menu( array( 'theme_location' => 'puma','menu_class'=>'topNav-items','container'=>'ul','fallback_cb' => 'link_to_menu_editor')); ?>
        </div>
    </nav>