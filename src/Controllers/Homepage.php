<?php
declare(strict_types=1);

namespace NFT\Controllers;

use Http\Request;
use Http\Response;
use NFT\Template\FrontendRenderer;

class Homepage
{
  public function __construct(
      private Request $request,
      private Response $response,
      private FrontendRenderer $renderer
  ) {}

  public function show()
  {
    $data = [
        'name' => $this->request->getParameter('name', 'stranger'),
    ];
    $html = $this->renderer->render('Homepage', $data);
    $this->response->setContent($html);
  }
}
