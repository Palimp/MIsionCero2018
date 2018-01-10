<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TopsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TopsTable Test Case
 */
class TopsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TopsTable
     */
    public $Tops;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tops',
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
        $config = TableRegistry::exists('Tops') ? [] : ['className' => TopsTable::class];
        $this->Tops = TableRegistry::get('Tops', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tops);

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
