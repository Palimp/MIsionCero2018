<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PpchallengesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PpchallengesTable Test Case
 */
class PpchallengesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PpchallengesTable
     */
    public $Ppchallenges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ppchallenges',
        'app.painpoints',
        'app.teams',
        'app.games',
        'app.comments',
        'app.interactions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ppchallenges') ? [] : ['className' => PpchallengesTable::class];
        $this->Ppchallenges = TableRegistry::get('Ppchallenges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ppchallenges);

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
