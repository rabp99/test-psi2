<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AniolectivosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AniolectivosTable Test Case
 */
class AniolectivosTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aniolectivos',
        'app.matriculas',
        'app.grados',
        'app.alumnos',
        'app.tests',
        'app.alumnos_tests'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Aniolectivos') ? [] : ['className' => 'App\Model\Table\AniolectivosTable'];
        $this->Aniolectivos = TableRegistry::get('Aniolectivos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aniolectivos);

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
