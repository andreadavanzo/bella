<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

class bella_target
{
  public string $dirname = '';
  public string $filename = '';
  public string $callable = '';
  public array $args = [];
  public string $require = '';
}
