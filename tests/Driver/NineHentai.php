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

class NineHentai extends TestCase
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
        $url = 'https://9hentai.ru/g/52203/';
        $driver = new \Yamete\Driver\NineHentai();
        $driver->setUrl($url);
        $this->assertTrue($driver->canHandle());
        $this->assertEquals(16, count($driver->getDownloadables()));
    }
}
