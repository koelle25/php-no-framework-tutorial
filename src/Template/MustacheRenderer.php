<?php
declare(strict_types=1);

namespace NFT\Template;

use Mustache_Engine;

class MustacheRenderer implements Renderer
{
  public function __construct(
      private Mustache_Engine $engine
  ) {}

  public function render($template, $data = []): string
  {
    return $this->engine->render($template, $data);
  }
}
