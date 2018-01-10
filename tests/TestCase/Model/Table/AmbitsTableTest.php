<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AmbitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AmbitsTable Test Case
 */
class AmbitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AmbitsTable
     */
    public $Ambits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ambits'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ambits') ? [] : ['className' => AmbitsTable::class];
        $this->Ambits = TableRegistry::get('Ambits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ambits);

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
