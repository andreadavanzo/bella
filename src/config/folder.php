<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

require_once SESTO_DIR . '/config/php.php';

function bella_config_folder(string $dirname): array
{
  return  sesto_config_php($dirname . DIRECTORY_SEPARATOR . '_config.php') ?: [];
}