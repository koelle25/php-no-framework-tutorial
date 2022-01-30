<?php
declare(strict_types=1);

namespace NFT\Page;

use Exception;
use Throwable;

class InvalidPageException extends Exception
{
  public function __construct($slug, $code = 0, Throwable $previous = null)
  {
    $message = "No page with the slug `$slug` was found";
    parent::__construct($message, $code, $previous);
  }
}
