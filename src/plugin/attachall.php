<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

require_once BELLA_DIR . '/plugin/attach.php';

function bella_plugin_attachall(array $plugins, string $hook_name, string $app_plugin_dir): void
{
  foreach ($plugins as $plugin_data) {
    bella_plugin_attach($plugin_data, $hook_name, $app_plugin_dir);
  }
}
