<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeelingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeelingsTable Test Case
 */
class FeelingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FeelingsTable
     */
    public $Feelings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.feelings',
        'app.teams',
        'app.games',
        'app.comments',
        'app.feelings_teams'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Feelings') ? [] : ['className' => FeelingsTable::class];
        $this->Feelings = TableRegistry::get('Feelings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Feelings);

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
