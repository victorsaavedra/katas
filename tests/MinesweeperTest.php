<?php namespace Katas\tests;

use InvalidArgumentException;
use Katas\FileConverter;
use Katas\Kata;
use PHPUnit\Framework\TestCase;

final class MinesweeperTest extends TestCase
{
    /** @var array */
    private $minesMap;

    /** @var int */
    private $numberOfRows;

    /** @var int */
    private $numberOfBombs;

    public function testhappyPath(): void
    {
        [$numRows, $numMines, $minesMap] = FileConverter::getVariables('mines1.txt');

        $mapResult = MineSweeper::processMap($numRows, $numMines, $minesMap);

        $this->assertEquals($mapResult, '12*12* 1*214* 112*3* 001121');
    }
}
