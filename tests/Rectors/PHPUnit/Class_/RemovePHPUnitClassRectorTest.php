<?php

namespace Pest\Drift\Testing\Rectors\PHPUnit\Class_;

use Iterator;
use Pest\Drift\PHPUnit\Class_\RemovePHPUnitClassRector;
use Pest\Drift\Testing\Rectors\PHPUnit\BasePHPUnitRectorTest;
use Symplify\SmartFileSystem\SmartFileInfo;

class RemovePHPUnitClassRectorTest extends BasePHPUnitRectorTest
{
    protected function getRectorClass(): string
    {
        return RemovePHPUnitClassRector::class;
    }

    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(
            __DIR__ . '/../../../fixtures/PHPUnit/Class_/RemovePHPUnitClassRector'
        );
    }
}
