<?php

declare(strict_types=1);

namespace Rector\CodeQuality\Tests\Rector\FuncCall\IntvalToTypeCastRector;

use Iterator;
use Rector\CodeQuality\Rector\FuncCall\IntvalToTypeCastRector;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;

final class IntvalToTypeCastRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return IntvalToTypeCastRector::class;
    }
}
