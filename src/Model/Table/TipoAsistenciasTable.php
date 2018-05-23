<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoAsistencias Model
 *
 * @property \App\Model\Table\CasosTable|\Cake\ORM\Association\HasMany $Casos
 *
 * @method \App\Model\Entity\TipoAsistencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoAsistencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TipoAsistencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoAsistencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoAsistencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoAsistencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoAsistencia findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TipoAsistenciasTable extends Table
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

        $this->setTable('tipo_asistencias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Casos', [
            'foreignKey' => 'tipo_asistencia_id'
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
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->allowEmpty('nombre');

        return $validator;
    }
}
