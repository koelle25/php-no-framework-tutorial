<?php
declare(strict_types=1);

namespace NFT\Template;

interface Renderer
{
  public function render($template, $data = []): string;
}
