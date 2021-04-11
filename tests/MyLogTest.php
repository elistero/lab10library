<?php

use Krauskeite\MyLog;
use PHPUnit\Framework\TestCase;

class MyLogTest extends TestCase
{

    public function testWrite()
    {
        MyLog::ClearLogArray();
        MyLog::log('1234');
        MyLog::write();
        $this->assertEquals(['1234'], MyLog::getWriteLogArray());
        MyLog::ClearLogArray();
        MyLog::log('1');
        MyLog::log('2');
        MyLog::write();
        $this->assertEquals(['1','2'], MyLog::getWriteLogArray());
        MyLog::ClearLogArray();
        MyLog::write();
        $this->assertEquals([], MyLog::getWriteLogArray());

    }

    public function testMyLog()
    {
        MyLog::ClearLogArray();
        MyLog::log('1234');
        $this->assertEquals(['1234'], MyLog::getLogArray());
        MyLog::ClearLogArray();
        MyLog::log('1');
        MyLog::log('2');
        $this->assertEquals(['1','2'], MyLog::getLogArray());
        MyLog::ClearLogArray();
        $this->assertEquals([], MyLog::getLogArray());
    }
}