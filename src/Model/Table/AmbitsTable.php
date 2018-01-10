<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ambits Model
 *
 * @method \App\Model\Entity\Ambit get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ambit newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ambit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ambit|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ambit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ambit[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ambit findOrCreate($search, callable $callback = null, $options = [])
 */
class AmbitsTable extends Table
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

        $this->setTable('ambits');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('ambit')
            ->allowEmpty('ambit');

        return $validator;
    }
}
