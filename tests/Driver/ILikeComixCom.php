<?php

namespace YameteTests\Driver;


use GuzzleHttp\Exception\GuzzleException;
use PHPHtmlParser\Exceptions\ChildNotFoundException;
use PHPHtmlParser\Exceptions\CircularException;
use PHPHtmlParser\Exceptions\ContentLengthException;
use PHPHtmlParser\Exceptions\LogicalException;
use PHPHtmlParser\Exceptions\NotLoadedException;
use PHPHtmlParser\Exceptions\StrictException;
use PHPUnit\Framework\TestCase;

class ILikeComixCom extends TestCase
{
    /**
     * @throws GuzzleException
     * @throws ChildNotFoundException
     * @throws CircularException
     * @throws ContentLengthException
     * @throws LogicalException
     * @throws NotLoadedException
     * @throws StrictException
     */
    public function testDownload()
    {
        $url = 'https://ilikecomix.com/porncomix/batboys-phausto-batman/';
        $driver = new \Yamete\Driver\ILikeComixCom();
        $driver->setUrl($url);
        $this->assertTrue($driver->canHandle());
        $this->assertEquals(15, count($driver->getDownloadables()));
    }

    public function testDownloadOtherCategory()
    {
        $url = 'https://ilikecomix.com/adultcomics/pet-girlfriend-3/';
        $driver = new \Yamete\Driver\ILikeComixCom();
        $driver->setUrl($url);
        $this->assertTrue($driver->canHandle());
        $this->assertEquals(29, count($driver->getDownloadables()));
    }
}
