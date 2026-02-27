<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

require_once BELLA_DIR . '/page/head.php';

final class bella_page {
  public string $id = '';
  public string $headline = '';
  public array $views = [];
  public array $config = [];
  public array $store = [];
  public bella_page_head $head;
  public mixed $context;
}
