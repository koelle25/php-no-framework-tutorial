<?php
declare(strict_types=1);

namespace NFT\Template;

use Twig\Environment;

class TwigRenderer implements Renderer
{
  private Environment $twig;

  public function __construct(Environment $twig)
  {
    $this->twig = $twig;
  }

  public function render($template, $data = []): string
  {
    return $this->twig->render("$template.html", $data);
  }
}
