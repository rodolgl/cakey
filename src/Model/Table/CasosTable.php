<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Casos Model
 *
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\TipoAsistenciasTable|\Cake\ORM\Association\BelongsTo $TipoAsistencias
 * @property \App\Model\Table\GravedadesTable|\Cake\ORM\Association\BelongsTo $Gravedades
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsTo $Usuarios
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsTo $Usuarios
 *
 * @method \App\Model\Entity\Caso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Caso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Caso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Caso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Caso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Caso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Caso findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CasosTable extends Table
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

        $this->setTable('casos');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id']);

        $this->addBehavior('Timestamp');

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TipoAsistencias', [
            'foreignKey' => 'tipo_asistencia_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Gravedades', [
            'foreignKey' => 'gravedad_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_departamento_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('num_caso')
            ->maxLength('num_caso', 45)
            ->requirePresence('num_caso', 'create')
            ->notEmpty('num_caso');

        $validator
            ->scalar('solicitud')
            ->requirePresence('solicitud', 'create')
            ->notEmpty('solicitud');

        $validator
            ->integer('tiempo')
            ->allowEmpty('tiempo');

        $validator
            ->boolean('si_solucionado')
            ->requirePresence('si_solucionado', 'create')
            ->notEmpty('si_solucionado');

        $validator
            ->scalar('observaciones')
            ->allowEmpty('observaciones');

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
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));
        $rules->add($rules->existsIn(['tipo_asistencia_id'], 'TipoAsistencias'));
        $rules->add($rules->existsIn(['gravedad_id'], 'Gravedades'));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));
        $rules->add($rules->existsIn(['usuario_departamento_id'], 'Usuarios'));

        return $rules;
    }
}
