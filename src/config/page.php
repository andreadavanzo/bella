<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

function bella_config_page(string $filename): array
{
  $ini_file = $filename . '.ini';
  $ini_data = [];
  if (is_file($ini_file) && is_readable($ini_file)) {
    $ini_data = @parse_ini_file($ini_file ,true, INI_SCANNER_TYPED) ?: [];
  }
  return  $ini_data;
}
