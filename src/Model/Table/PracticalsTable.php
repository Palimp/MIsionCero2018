<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Practicals Model
 *
 * @method \App\Model\Entity\Practical get($primaryKey, $options = [])
 * @method \App\Model\Entity\Practical newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Practical[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Practical|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Practical patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Practical[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Practical findOrCreate($search, callable $callback = null, $options = [])
 */
class PracticalsTable extends Table
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

        $this->setTable('practicals');
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
            ->scalar('trouble')
            ->allowEmpty('trouble');

        $validator
            ->scalar('answer1')
            ->allowEmpty('answer1');

        $validator
            ->scalar('answer2')
            ->allowEmpty('answer2');

        $validator
            ->scalar('answer3')
            ->allowEmpty('answer3');

        $validator
            ->scalar('answer4')
            ->allowEmpty('answer4');

        return $validator;
    }
}
