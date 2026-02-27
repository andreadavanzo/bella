<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

require_once SESTO_DIR . '/filesystem/path.php';
require_once BELLA_DIR . '/page/page.php';

function bella_page_init(bella_app $app): bella_page {
  $page = new bella_page();

  /* load template views */
  $page->views = sesto_config_php(sesto_path($app->config['template_dir'], '_config.php')) ?: [];

  /* context */
  $page->context = bella_plugin_call('function', 'bella.webpage_context', $app);

  $page->head = new bella_page_head();
  $page->config = sesto_config_php($app->route->dirname . '/_config.php') ?: [];

  /* init views */
  foreach ($page->config['views'] ?? [] as $name => $filename) {
    $page->views[$name] = $filename;
  }

  return $page;
}
