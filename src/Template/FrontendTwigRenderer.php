<?php
declare(strict_types=1);

namespace NFT\Template;

use NFT\Menu\MenuReader;

class FrontendTwigRenderer implements FrontendRenderer
{
  public function __construct(
      private Renderer $renderer,
      private MenuReader $menuReader,
  ) {}

  public function render($template, $data = []): string
  {
    $data = array_merge($data, [
        'menuItems' => $this->menuReader->readMenu(),
    ]);
    return $this->renderer->render($template, $data);
  }
}
