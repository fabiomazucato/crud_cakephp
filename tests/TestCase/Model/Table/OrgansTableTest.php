<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrgansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrgansTable Test Case
 */
class OrgansTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrgansTable
     */
    public $Organs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Organs') ? [] : ['className' => OrgansTable::class];
        $this->Organs = TableRegistry::get('Organs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Organs);

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
