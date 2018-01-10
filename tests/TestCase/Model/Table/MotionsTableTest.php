<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MotionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MotionsTable Test Case
 */
class MotionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MotionsTable
     */
    public $Motions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.motions',
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
        $config = TableRegistry::exists('Motions') ? [] : ['className' => MotionsTable::class];
        $this->Motions = TableRegistry::get('Motions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Motions);

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
