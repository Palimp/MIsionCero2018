<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TecosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TecosTable Test Case
 */
class TecosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TecosTable
     */
    public $Tecos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tecos',
        'app.games'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tecos') ? [] : ['className' => TecosTable::class];
        $this->Tecos = TableRegistry::get('Tecos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tecos);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
