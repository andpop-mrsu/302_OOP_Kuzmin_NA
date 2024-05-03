<?php

namespace App;

use PHPUnit\Framework\TestCase;

class TruncaterTest extends TestCase
{
    public function testEmpty()
    {
        $truncater = new Truncater();
        $this->assertSame($truncater->truncate(''), '');
    }

    public function testDefaultOptions()
    {
        $truncater = new Truncater();
        $this->assertSame(
            $truncater->truncate('Иванов Иван Иванович'),
            'Иванов Иван Иванович'
        );

        $truncater2 = new Truncater(['length' => 10]);
        $this->assertSame(
            $truncater2->truncate('Иванов Иван Иванович'),
            'Иванов Ива...'
        );
    }

    public function testLessLength()
    {
        $truncater = new Truncater();
        $this->assertSame($truncater->truncate(
            'Иванов Иван Иванович',
            ['length' => 10]
        ), 'Иванов Ива...');
    }

    public function testLongerLength()
    {
        $truncater = new Truncater();
        $this->assertSame($truncater->truncate(
            'Иванов Иван Иванович',
            ['length' => 50]
        ), 'Иванов Иван Иванович');
    }

    public function testNegativeLength()
    {
        $truncater = new Truncater();
        $this->assertSame($truncater->truncate(
            'Иванов Иван Иванович',
            ['length' => -10]
        ), 'Иванов Ива...');
    }

    public function testNewSeparation()
    {
        $truncater = new Truncater();
        $this->assertSame($truncater->truncate(
            'Иванов Иван Иванович',
            ['length' => 10, 'separator' => '*']
        ), 'Иванов Ива*');
    }
    public function testNewSeparationAndDefSetting()
    {
        $truncater = new Truncater();
        $this->assertSame($truncater->truncate(
            'Иванов Иван Иванович',
            ['separator' => '*']
        ), 'Иванов Иван Иванович');
    }

    public function testSettingsOverrides()
    {
        $truncater = new Truncater(['length' => 10, 'separator' => ' :)']);
        $this->assertSame(
            $truncater->truncate('Иванов Иван Иванович',),
            'Иванов Ива :)'
        );
        $this->assertSame($truncater->truncate(
            'Иванов Иван Иванович',
            ['length' => 6, 'separator' => '*_*']
        ), 'Иванов*_*');
        $this->assertSame(
            $truncater->truncate('Иванов Иван Иванович',),
            'Иванов Ива :)'
        );
    }
}
