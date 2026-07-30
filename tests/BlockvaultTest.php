<?php
/**
 * Tests for BlockVault
 */

use PHPUnit\Framework\TestCase;
use Blockvault\Blockvault;

class BlockvaultTest extends TestCase {
    private Blockvault $instance;

    protected function setUp(): void {
        $this->instance = new Blockvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
