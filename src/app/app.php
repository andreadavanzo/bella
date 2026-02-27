<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

require_once SESTO_DIR . '/util/struct.php';
require_once SESTO_DIR . '/locale/locale.php';
require_once SESTO_DIR . '/url/url.php';
require_once BELLA_DIR . '/target/target.php';
require_once BELLA_DIR . '/page/page.php';

final class bella_app extends sesto_struct
{

  public array $args = [];
  public array $config = [];
  public ?sesto_locale $locale;
  public ?sesto_url $url;
  public mixed $route;
  public string $plugin_dir = '';
  public string $response = '';
  public array $alerts = [];
  public array $plugins = [];
  public array $store = [];
  public ?bella_target $target;
  public ?bella_page $page;
  public mixed $context;
}
