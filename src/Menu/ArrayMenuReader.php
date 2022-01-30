<?php
declare(strict_types=1);

namespace NFT\Menu;

class ArrayMenuReader implements MenuReader
{
  public function readMenu(): array
  {
    return [
        ['href' => '/', 'text' => 'Homepage'],
        ['href' => '/page-one', 'text' => 'Page One'],
        ['href' => '/foo', 'text' => 'Foo'],
    ];
  }
}
