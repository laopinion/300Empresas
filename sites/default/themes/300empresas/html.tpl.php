<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <!-- <meta name="viewport" content="width=device-width, height=device-height" > -->
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
  <meta name="robots" content="index, follow">
  <meta itemprop="genre" content="Food" />
  <meta itemprop="inLanguage" content="es-ES" />
  <meta property="og:locale:alternate" content="es_CO" />
  <meta property="og:locale" content="es_CO" />
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php print $head_title; ?></title>

  <!--Icono precomposed-->
  <link rel="apple-touch-icon-precomposed" href="<?php print base_path(); ?>sites/default/themes/300empresas/images/icon/touch-icon-iphone.png">
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php print base_path(); ?>sites/default/themes/300empresas/images/icon/touch-icon-ipad.png">
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php print base_path(); ?>sites/default/themes/300empresas/images/icon/touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php print base_path(); ?>sites/default/themes/300empresas/images/icon/touch-icon-ipad-retina.png">
  <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php print base_path(); ?>sites/default/themes/300empresas/images/icon/touch-icon-iphone-6-plus.png">
  <!--FIN Icono precomposed-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php print base_path(); ?>sites/default/themes/300empresas/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php print base_path(); ?>sites/default/themes/300empresas/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php print base_path(); ?>sites/default/themes/300empresas/css/hamburger.css">

  <meta name="description" content="Tu portal de 300 empresas"/>
  <meta name="keywords" content="empresas, negocios, competitividad, economía, energía, agricultura, mercado laboral, vehículos, indrustria, vivienda, indicadores, aseguradoras, empleos, e-commerce, textil y confecciones, comercio exterior, exportaciones, empresarios, liderazgo, establecimientos financieros, administración" />
  <meta name="author" content="Diario La Opinión" />
  <link rel="canonical" href="https://300empresas.laopinion.com.co">
  <link rel="image_src" href="https://300empresas.laopinion.com.co/sites/default/themes/300empresas/images/compartir.jpg" />


  <meta name="twitter:widgets:csp" content="on">
  <meta name="twitter:image" content="https://300empresas.laopinion.com.co/sites/default/themes/300empresas/images/compartir.jpg" />
  
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://300empresas.laopinion.com.co/" />
  <meta property="og:description" content="Las mejores empresas de Norte de Santander" />
  <meta name="author" content="Diario La Opinión"/>
  <meta name="google" content="notranslate" />
  <meta name="geo.region" content="CO" />
  <meta name="geo.placename" content="Colombia" />
  <meta name="language" content="spanish" />
  <!-- twit card-->

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="Las mejores empresas de Norte de Santander">
  <meta name="twitter:url" content="https://300empresas.laopinion.com.co"> 
  <meta name="twitter:site" content="@laopinioncucuta" />
  <meta name="twitter:title" content="Las mejores empresas de Norte de Santander">
  <meta name="twitter:creator" content="@laopinioncucuta"> 
  
  <meta property="fb:pages" content="110045065716092"/>

  <!-- ANALYTICS CODE -->
  <?php include_once("mailchimp.php") ?>
  <!-- FIN ANALYTICS CODE -->

  <?php print $styles; ?>
  <?php print $scripts; ?>

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <!--CONTENT GENERAL-->
  <?php print $page_top; ?>
  <div class="centerContent borderContent">
    <div class="head_desktop"><?php include("header.tpl.php"); ?></div>

    <?php print $page; ?>
    <?php // print $page_bottom; ?>
    
    <div class="footer_desktop"><?php include("footer.tpl.php"); ?></div>
  </div>
  <!--END CONTENT GENERAL-->
  <script type="text/javascript" src="<?php print base_path(); ?>sites/default/themes/300empresas/js/script.js"></script>
</body>
</html>