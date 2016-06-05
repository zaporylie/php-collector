<?php

namespace Collector\Data;

class ArticleListTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var ArticleList;
     */
    protected $articleList;

    public function setUp()
    {
        $this->articleList = new ArticleList(
            'ArticleId',
            'Description',
            'Quantity'
        );
    }

    public function testArticleId()
    {
        $this->assertEquals('ArticleId', $this->articleList->getArticleId());
    }

    public function testDescription()
    {
        $this->assertEquals('Description', $this->articleList->getDescription());
    }

    public function testQuantity()
    {
        $this->assertEquals('Quantity', $this->articleList->getQuantity());
    }
}
