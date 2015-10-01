<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MatriculasFixture
 *
 */
class MatriculasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'grado_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'aniolectivo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'alumno_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'estado' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_matriculas_grados1_idx' => ['type' => 'index', 'columns' => ['grado_id'], 'length' => []],
            'fk_matriculas_aniolectivos1_idx' => ['type' => 'index', 'columns' => ['aniolectivo_id'], 'length' => []],
            'fk_matriculas_alumnos1_idx' => ['type' => 'index', 'columns' => ['alumno_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'grado_id', 'aniolectivo_id', 'alumno_id'], 'length' => []],
            'fk_matriculas_alumnos1' => ['type' => 'foreign', 'columns' => ['alumno_id'], 'references' => ['alumnos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_matriculas_aniolectivos1' => ['type' => 'foreign', 'columns' => ['aniolectivo_id'], 'references' => ['aniolectivos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_matriculas_grados1' => ['type' => 'foreign', 'columns' => ['grado_id'], 'references' => ['grados', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'grado_id' => 1,
            'aniolectivo_id' => 1,
            'alumno_id' => 1,
            'fecha' => '2015-08-31',
            'estado' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
