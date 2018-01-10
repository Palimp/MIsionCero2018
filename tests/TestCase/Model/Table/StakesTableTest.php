<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StakesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StakesTable Test Case
 */
class StakesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StakesTable
     */
    public $Stakes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stakes',
        'app.teams',
        'app.games',
        'app.comments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Stakes') ? [] : ['className' => StakesTable::class];
        $this->Stakes = TableRegistry::get('Stakes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Stakes);

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
