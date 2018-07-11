<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categorizaciones Model
 *
 * @method \App\Model\Entity\Categorizacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categorizacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Categorizacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categorizacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categorizacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categorizacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categorizacion findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CategorizacionesTable extends Table
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

        $this->setTable('categorizaciones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('urgencia')
            ->maxLength('urgencia', 45)
            ->requirePresence('urgencia', 'create')
            ->notEmpty('urgencia');

        $validator
            ->scalar('impacto')
            ->maxLength('impacto', 45)
            ->requirePresence('impacto', 'create')
            ->notEmpty('impacto');

        return $validator;
    }
}
