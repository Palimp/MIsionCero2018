<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PuzzlesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PuzzlesTable Test Case
 */
class PuzzlesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PuzzlesTable
     */
    public $Puzzles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.puzzles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Puzzles') ? [] : ['className' => PuzzlesTable::class];
        $this->Puzzles = TableRegistry::get('Puzzles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Puzzles);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
