<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

function bella_alerts_read(): array
{
  return $_SESSION['bella']['alerts'] ?? [];
}
