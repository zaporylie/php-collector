<?php

namespace Collector\Request;

use Collector\Data\ArticleList;
use Collector\Data\HeaderTrait;
use Collector\Data\InvoiceTrait;
use Collector\InvoiceService;
use Collector\ServiceInterface;

class PartActivateInvoice extends InvoiceService implements ServiceInterface {

  use HeaderTrait;
  use InvoiceTrait;

  /**
   * Collector method.
   */
  const METHOD = 'PartActivateInvoice';

  /**
   * @var ArticleList[]
   */
  protected $ArticleList;

  /**
   * @param \Collector\Data\ArticleList[] $ArticleList
   */
  public function setArticleList(array $ArticleList) {
    $this->ArticleList = $ArticleList;
  }

  /**
   * @return string
   */
  public function getMethod() {
    return self::METHOD;
  }

}
