<?php
namespace App\Model\Table;

use App\Model\Entity\Alumno;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alumnos Model
 *
 * @property \Cake\ORM\Association\HasMany $Matriculas
 * @property \Cake\ORM\Association\BelongsToMany $Tests
 */
class AlumnosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('alumnos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Matriculas', [
            'foreignKey' => 'alumno_id'
        ]);
        $this->belongsToMany('Tests', [
            'foreignKey' => 'alumno_id',
            'targetForeignKey' => 'test_id',
            'joinTable' => 'alumnos_tests'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nombres', 'create')
            ->notEmpty('nombres');

        $validator
            ->requirePresence('apellido_paterno', 'create')
            ->notEmpty('apellido_paterno');

        $validator
            ->requirePresence('apellido_materno', 'create')
            ->notEmpty('apellido_materno');

        $validator
            ->add('fecha_nac', 'valid', ['rule' => 'date'])
            ->requirePresence('fecha_nac', 'create')
            ->notEmpty('fecha_nac');

        return $validator;
    }
}
