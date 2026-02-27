<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

require_once BELLA_DIR . '/plugin/attachall.php';

function bella_plugin_call(string $type, string $hook_name, bella_app $app): mixed
{
  bella_plugin_attachall($app->config['plugins'][$hook_name] ?? [], $hook_name, $app->config['plugin_dir']);
  switch($type) {
    case 'procedure':
      sesto_hook::getme()->procedure($hook_name, $app);
      return null;
    case 'function':
      return sesto_hook::getme()->function($hook_name, $app);
  }
}
