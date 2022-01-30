<?php
declare(strict_types=1);

namespace NFT\Menu;

interface MenuReader
{
  public function readMenu(): array;
}
