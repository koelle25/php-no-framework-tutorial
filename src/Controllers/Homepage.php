<?php
declare(strict_types=1);

namespace NFT\Controllers;

use Http\Response;

class Homepage
{
  private $response;

  public function __construct(Response $response)
  {
    $this->response = $response;
  }

  public function show()
  {
    $this->response->setContent('<h1>Homepage</h1>');
  }
}
