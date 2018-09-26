<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleOrgansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleOrgansTable Test Case
 */
class PeopleOrgansTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleOrgansTable
     */
    public $PeopleOrgans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.people_organs',
        'app.organs',
        'app.people'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PeopleOrgans') ? [] : ['className' => PeopleOrgansTable::class];
        $this->PeopleOrgans = TableRegistry::get('PeopleOrgans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleOrgans);

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
