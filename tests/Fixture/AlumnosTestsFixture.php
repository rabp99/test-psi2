<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlumnosTestsFixture
 *
 */
class AlumnosTestsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'alumno_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'test_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'estado' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_alumnos_tests_alumnos_idx' => ['type' => 'index', 'columns' => ['alumno_id'], 'length' => []],
            'fk_alumnos_tests_tests1_idx' => ['type' => 'index', 'columns' => ['test_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'alumno_id', 'test_id'], 'length' => []],
            'fk_alumnos_tests_alumnos' => ['type' => 'foreign', 'columns' => ['alumno_id'], 'references' => ['alumnos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_alumnos_tests_tests1' => ['type' => 'foreign', 'columns' => ['test_id'], 'references' => ['tests', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'alumno_id' => 1,
            'test_id' => 1,
            'fecha' => '2015-08-31',
            'estado' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
