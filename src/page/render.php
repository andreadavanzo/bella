<?php

// Bella CMS - https://github.com/andreadavanzo/bella
// SPDX-License-Identifier: MPL-2.0
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

require_once SESTO_DIR . '/view/render.php';

function bella_page_render(bella_app $app): void
{
  ob_start();
  sesto_view_render($app->page->views, 'layout', $app->page);
  $app->response = ob_get_contents();
  ob_end_clean();

  $app->response = sesto_hook::getme()->filter('bella.output.replace', $app->response, $app);
  echo $app->response;
}
