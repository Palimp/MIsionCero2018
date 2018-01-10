<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PainpointsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PainpointsTable Test Case
 */
class PainpointsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PainpointsTable
     */
    public $Painpoints;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.painpoints',
        'app.teams',
        'app.games',
        'app.comments',
        'app.interactions',
        'app.ppchallenges'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Painpoints') ? [] : ['className' => PainpointsTable::class];
        $this->Painpoints = TableRegistry::get('Painpoints', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Painpoints);

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
