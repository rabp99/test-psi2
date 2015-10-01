<?php
namespace App\Model\Table;

use App\Model\Entity\Matricula;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matriculas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Grados
 * @property \Cake\ORM\Association\BelongsTo $Aniolectivos
 * @property \Cake\ORM\Association\BelongsTo $Alumnos
 */
class MatriculasTable extends Table
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

        $this->table('matriculas');
        $this->displayField('id');
        $this->primaryKey(['id', 'grado_id', 'aniolectivo_id', 'alumno_id']);

        $this->belongsTo('Grados', [
            'foreignKey' => 'grado_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Aniolectivos', [
            'foreignKey' => 'aniolectivo_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Alumnos', [
            'foreignKey' => 'alumno_id',
            'joinType' => 'INNER'
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
            ->add('fecha', 'valid', ['rule' => 'date'])
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['grado_id'], 'Grados'));
        $rules->add($rules->existsIn(['aniolectivo_id'], 'Aniolectivos'));
        $rules->add($rules->existsIn(['alumno_id'], 'Alumnos'));
        return $rules;
    }
}
