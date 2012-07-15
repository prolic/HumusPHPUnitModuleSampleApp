<?php

namespace ApplicationTest\Controller;

use Application\Controller\IndexController;
use Zend\View\ViewModel;

class TestIndexController extends PHPUnit_Framework_TestCase
{
    protected $utt;

    protected function setUp()
    {
        $this->utt = new IndexController();
    }

    public function testIndexAction()
    {
        $result = $this->utt->indexAction();
        $viewModel = new ViewModel();
        $this->assertEquals($viewModel, $result);
    }
}