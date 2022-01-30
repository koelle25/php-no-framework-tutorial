<?php
declare(strict_types=1);

namespace NFT\Template;

use Twig\Environment;

class TwigRenderer implements Renderer
{
  public function __construct(
      private Environment $renderer
  ) {}

  public function render($template, $data = []): string
  {
    return $this->renderer->render("$template.html", $data);
  }
}
