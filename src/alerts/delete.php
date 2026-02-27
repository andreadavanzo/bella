<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

function bella_alerts_delete(): void
{
  if (isset($_SESSION['bella']['alerts'])) {
    $_SESSION['bella']['alerts'] = [];
    unset($_SESSION['bella']['alerts']);
  }
}
