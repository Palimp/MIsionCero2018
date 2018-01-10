<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tecos Model
 *
 * @property \App\Model\Table\GamesTable|\Cake\ORM\Association\BelongsTo $Games
 *
 * @method \App\Model\Entity\Teco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Teco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Teco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Teco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Teco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Teco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Teco findOrCreate($search, callable $callback = null, $options = [])
 */
class TecosTable extends Table
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

        $this->setTable('tecos');
        $this->setDisplayField('name');

        $this->belongsTo('Games', [
            'foreignKey' => 'games_id'
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
            ->allowEmpty('id');

        $validator
            ->integer('team')
            ->allowEmpty('team');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->scalar('members')
            ->allowEmpty('members');

        $validator
            ->allowEmpty('taken');

        $validator
            ->integer('bikles')
            ->allowEmpty('bikles');

        $validator
            ->requirePresence('num', 'create')
            ->notEmpty('num');

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
        $rules->add($rules->existsIn(['games_id'], 'Games'));

        return $rules;
    }
}
