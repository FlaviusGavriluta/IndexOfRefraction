<?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use Reflection\Glass;
use Reflection\Oil;

final class TestOil extends TestCase
{
    private $oil;

    protected function setUp() : void
    {
        $this->oil = new Oil();
    }

    protected function tearDown() : void
    {
        $this->oil = null;
    }

    public function testNewOilInstance_Create() : void
    {
        $this->assertInstanceOf(Oil::class, $this->oil);
    }

    public function testNewOilInstance_IsEmpty() : void
    {
        $this->assertTrue($this->oil->isEmpty());
    }

    public function testAfterOnePut_OilIsNotEmpty() : void
    {
        $this->oil->put(new Glass());
        $this->assertFalse($this->oil->isEmpty());
    }

    public function testGetBrokenIndexesReturnsAnArray()
    {
        $this->assertIsArray($this->oil->getBrokenIndexes());
    }

    public function testAfterPuttingOneBrokenGlass_GetBrokenIndexesReturnsZero()
    {
        $this->oil->put((new Glass())->break());
        $this->assertEquals(array(0), $this->oil->getBrokenIndexes());
    }

    public function testAfterPuttingOneUnbroken_ThenTwoBrokenGlasses_GetBrokenIndexesReturnsOneAndTwo()
    {
        $this->oil->put(new Glass());
        $this->oil->put((new Glass())->break());
        $this->oil->put((new Glass())->break());
        $this->assertEquals(array(1, 2), $this->oil->getBrokenIndexes());
    }

    public function testAfterPuttingSixGlasses_AndEachOddIsBroken_GetBrokenIndexesReturnsZeroAndTwoAndFour()
    {
        $this->oil->put((new Glass())->break());
        $this->oil->put(new Glass());
        $this->oil->put((new Glass())->break());
        $this->oil->put(new Glass());
        $this->oil->put((new Glass())->break());
        $this->oil->put(new Glass());
        $this->assertEquals(array(0, 2, 4), $this->oil->getBrokenIndexes());
    }

    public function testReflectionUseCasesMarkdown_IsNotEmpty()
    {
        $this->assertNotEmpty(file_get_contents(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'reflection_use_cases.md'));
    }
}
