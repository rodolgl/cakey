<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gravedades Model
 *
 * @property \App\Model\Table\CasosTable|\Cake\ORM\Association\HasMany $Casos
 *
 * @method \App\Model\Entity\Gravedad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gravedad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gravedad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gravedad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gravedad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gravedad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gravedad findOrCreate($search, callable $callback = null, $options = [])
 */
class GravedadesTable extends Table
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

        $this->setTable('gravedades');
        $this->setDisplayField('nivel');
        $this->setPrimaryKey('id');

        $this->hasMany('Casos', [
            'foreignKey' => 'gravedad_id'
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
            ->scalar('nivel')
            ->maxLength('nivel', 60)
            ->requirePresence('nivel', 'create')
            ->notEmpty('nivel');

        return $validator;
    }
}
