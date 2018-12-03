<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlayerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlayerTable Test Case
 */
class PlayerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlayerTable
     */
    public $Player;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.player'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Player') ? [] : ['className' => PlayerTable::class];
        $this->Player = TableRegistry::getTableLocator()->get('Player', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Player);

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
