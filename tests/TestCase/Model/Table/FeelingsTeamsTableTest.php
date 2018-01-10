<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeelingsTeamsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeelingsTeamsTable Test Case
 */
class FeelingsTeamsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FeelingsTeamsTable
     */
    public $FeelingsTeams;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.feelings_teams',
        'app.feelings',
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
        $config = TableRegistry::exists('FeelingsTeams') ? [] : ['className' => FeelingsTeamsTable::class];
        $this->FeelingsTeams = TableRegistry::get('FeelingsTeams', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FeelingsTeams);

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
