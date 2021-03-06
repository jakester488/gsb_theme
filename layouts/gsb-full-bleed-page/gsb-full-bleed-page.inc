<?php
// Plugin definition
$plugin = array(
  'title' => t('GSB Full Bleed Page'),
  'icon' => 'gsb-full-bleed-page.png',
  'category' => t('GSB'),
  'theme' => 'gsb-full-bleed-page',
  'regions' => array(
    'full_bleed_header' => t('Full Bleed Header'),
    'featured_content' => t('Featured Content'),
    'maintop' => t('Main Top'),
    'mainmiddlefirst' => t('Main Middle 1'),
    'mainmiddlesecond' => t('Main Middle 2'),
    'mainbottom' => t('Main Bottom'),
    'quicklinks' => t('Quick Links'),
    'sidebar' => t('Sidebar content'),
  ),
);
