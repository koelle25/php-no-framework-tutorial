<?php
declare(strict_types=1);

namespace NFT\Controllers;

use Http\Request;
use Http\Response;

class Homepage
{
  private Request $request;
  private Response $response;

  public function __construct(Request $request, Response $response)
  {
    $this->request = $request;
    $this->response = $response;
  }

  public function show()
  {
    $content = '<h1>Homepage</h1>';
    $content .= 'Hello ' . $this->request->getParameter('name', 'stranger');
    $this->response->setContent($content);
  }
}
