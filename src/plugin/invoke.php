<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

require_once BELLA_DIR . '/plugin/attachall.php';

function bella_plugin_invoke(string $type, string|array $plugin_data, bella_app $app): mixed
{
  $hook_name = uniqid();
  $args = (func_num_args() > 3) ? array_slice(func_get_args(), 3) : [];

  bella_plugin_attach($plugin_data, $hook_name, $app->config['plugin_dir']);

  switch($type) {
    case 'procedure':
      sesto_hook::getme()->procedure($hook_name, $app, ...$args);
      return null;
    case 'function':
      return sesto_hook::getme()->function($hook_name, $app, ...$args);
  }
  sesto_hook::getme()->del($hook_name);
}
