<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

require_once SESTO_DIR . '/scd/call.php';
require_once SESTO_DIR . '/util/hook.php';
require_once SESTO_DIR . '/url/init.php';
require_once SESTO_DIR . '/string/spacetrim.php';

require_once BELLA_DIR . '/app/app.php';
require_once BELLA_DIR . '/plugin/call.php';

function bella_engine(array $args, array $config): void
{
  /* define the $app array */
  $app = new bella_app();
  $app->args = $args;
  $app->config = array_merge(
    $config,
    sesto_config_php(SESTO_APP_CONF_DIR .'/bella.php') ?: []);

  $app->url = sesto_url_init($app->config['site_url'], '', $app->config['route_base'] ?? '');

  /* locale */
  $app->locale = bella_plugin_call('function', 'bella.app_locale', $app);

  /* context */
  $app->context = bella_plugin_call('function', 'bella.app_context', $app);

  /* route */
  $app->route = bella_plugin_call('function', 'bella.app_route', $app);

  /* dispatch */
  bella_plugin_call('procedure', 'bella.app_dispatch', $app);

}

