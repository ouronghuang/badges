<?php

use Yaf\Controller_Abstract;

class SvgController extends Controller_Abstract
{
    public function init()
    {
        $this->getResponse()->setHeader('Content-Type', 'image/svg+xml;charset=utf-8');
    }
}
