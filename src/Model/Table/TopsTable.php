<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tops Model
 *
 * @property \App\Model\Table\GamesTable|\Cake\ORM\Association\BelongsTo $Games
 *
 * @method \App\Model\Entity\Top get($primaryKey, $options = [])
 * @method \App\Model\Entity\Top newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Top[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Top|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Top patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Top[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Top findOrCreate($search, callable $callback = null, $options = [])
 */
class TopsTable extends Table
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

        $this->setTable('tops');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Games', [
            'foreignKey' => 'game_id'
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
            ->scalar('question')
            ->allowEmpty('question');

        $validator
            ->allowEmpty('sel');

        $validator
            ->allowEmpty('amb');

        $validator
            ->allowEmpty('nor');

        $validator
            ->allowEmpty('qui');

        $validator
            ->allowEmpty('votes');

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
        $rules->add($rules->existsIn(['game_id'], 'Games'));

        return $rules;
    }
}
