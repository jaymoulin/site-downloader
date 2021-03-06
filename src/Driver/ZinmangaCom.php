<?php

namespace Yamete\Driver;

class ZinmangaCom extends IsekaiScanCom
{
    private const DOMAIN = 'zinmanga.com';

    protected function getDomain(): string
    {
        return self::DOMAIN;
    }

    protected function getChapterRule(): string
    {
        return '.wp-manga-chapter a';
    }
}
