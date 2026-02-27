<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

require_once SESTO_DIR . '/util/hook.php';

function bella_plugin_attach(string|array $plugin_data, string $hook_name, string $app_plugin_dir): void
{
  if (is_string($plugin_data)) {
    $plugin_dir = $app_plugin_dir . '/' . $plugin_data;
    $plugin_args = [];
  } else {
    $plugin_dir = $plugin_data[0] ?? '';
    $plugin_args = $plugin_data[1] ?? [];
  }
  $plugin_initme_path = $plugin_dir . '/initme.php';
  if (is_file($plugin_initme_path) && is_readable($plugin_initme_path)) {
    require_once $plugin_initme_path;
    if (isset($config) && is_array($config)) {
      $scd = $config['scd'] ?? false;
      if ($scd instanceof sesto_scd) {
        sesto_hook::getme()->attach($hook_name, $scd);
      }
    }
  }
}
