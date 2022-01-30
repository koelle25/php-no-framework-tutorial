<?php
declare(strict_types=1);

namespace NFT\Controllers;

use Http\Response;
use NFT\Page\InvalidPageException;
use NFT\Page\PageReader;
use NFT\Template\Renderer;

class Page
{
  /**
   * Constructor with property promotion.
   *
   * @param Response   $response
   * @param Renderer   $renderer
   * @param PageReader $pageReader
   */
  public function __construct(
      private Response $response,
      private Renderer $renderer,
      private PageReader $pageReader,
  ) {}

  public function show($params)
  {
    $slug = $params['slug'];

    $data = [];
    try {
      $data['content'] = $this->pageReader->readBySlug($slug);
    } catch (InvalidPageException $e) {
      $this->response->setStatusCode(404);
      $this->response->setContent('404 - Page not found');
      return;
    }

    $html = $this->renderer->render('Page', $data);
    $this->response->setContent($html);
  }
}
