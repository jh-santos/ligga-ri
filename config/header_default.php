<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php if (get_field('gtm_head')) : ?>
      <!-- gtm head -->
      <?php the_field('gtm_head'); ?>
      <!-- fim gtm head -->
   <?php endif; ?>
   <?php if (get_field('seo_head_pagina')) : ?>
      <!-- seo_head_pagina -->
      <?php the_field('seo_head_pagina'); ?>
      <!-- fim seo_head_pagina -->
   <?php endif; ?>
   <title><?php wp_title(); ?></title>
   <!-- wp_head -->
   <?php wp_head(); ?>
   <!-- fim wp_head -->

</head>

<body <?php body_class(); ?> style="overflow: hidden;">
   <?php if (get_field('gtm_body')) : ?>
      <!-- gtm_body -->
      <?php the_field('gtm_body'); ?>
      <!-- fim gtm_body -->
   <?php endif; ?>
   <?php if (get_field('seo_body_pagina')) : ?>
      <!-- seo_body_pagina -->
      <?php the_field('seo_body_pagina'); ?>
      <!-- fim seo_body_pagina -->
   <?php endif; ?>
   <?php if (get_field('dados_estruturados')) : ?>
      <!-- dados estruturados -->
      <?php the_field('dados_estruturados'); ?>
      <!-- fim dados estruturados -->
   <?php endif; ?>

   <?php if (get_field('preload_ativo') == 1) : ?>
      <!-- preload -->
      <?php get_template_part('config/preload_01'); ?>
      <!-- fim preload -->
   <?php endif; ?>
   <!-- fim head default -->