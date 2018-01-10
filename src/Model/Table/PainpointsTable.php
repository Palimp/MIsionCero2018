<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Painpoints Model
 *
 * @property \App\Model\Table\TeamsTable|\Cake\ORM\Association\BelongsTo $Teams
 * @property \App\Model\Table\InteractionsTable|\Cake\ORM\Association\BelongsTo $Interactions
 * @property \App\Model\Table\PpchallengesTable|\Cake\ORM\Association\HasMany $Ppchallenges
 *
 * @method \App\Model\Entity\Painpoint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Painpoint newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Painpoint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Painpoint|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Painpoint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Painpoint[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Painpoint findOrCreate($search, callable $callback = null, $options = [])
 */
class PainpointsTable extends Table
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

        $this->setTable('painpoints');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Teams', [
            'foreignKey' => 'team_id'
        ]);
        $this->belongsTo('Interactions', [
            'foreignKey' => 'interaction_id'
        ]);
        $this->hasMany('Ppchallenges', [
            'foreignKey' => 'painpoint_id'
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
            ->scalar('challenge')
            ->allowEmpty('challenge');

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
        $rules->add($rules->existsIn(['team_id'], 'Teams'));
        $rules->add($rules->existsIn(['interaction_id'], 'Interactions'));

        return $rules;
    }
}
