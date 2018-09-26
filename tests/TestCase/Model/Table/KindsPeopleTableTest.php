<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KindsPeopleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KindsPeopleTable Test Case
 */
class KindsPeopleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KindsPeopleTable
     */
    public $KindsPeople;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.kinds_people'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('KindsPeople') ? [] : ['className' => KindsPeopleTable::class];
        $this->KindsPeople = TableRegistry::get('KindsPeople', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->KindsPeople);

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
