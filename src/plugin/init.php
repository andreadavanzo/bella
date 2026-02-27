<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

require_once SESTO_DIR . '/path/path.php';

function bella_plugin_init(bella_app $app, string $hook_name, string $plugin_dir, array $plugin_args = []): void
{
  $plugin_path = sesto_path($plugin_dir, 'initme.php');
  if (is_file($plugin_path) && is_readable($plugin_path)) {
    require_once $plugin_path;
    if (isset($config) && is_array($config)) {
      $scd = $config['scd'] ?? false;
      if ($scd instanceof sesto_scd) {
        sesto_hook::getme()->attach($hook_name, $scd);
      }
    }
  }
}
