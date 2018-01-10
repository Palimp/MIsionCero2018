<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Feelings Model
 *
 * @property \App\Model\Table\TeamsTable|\Cake\ORM\Association\BelongsToMany $Teams
 *
 * @method \App\Model\Entity\Feeling get($primaryKey, $options = [])
 * @method \App\Model\Entity\Feeling newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Feeling[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Feeling|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feeling patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Feeling[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Feeling findOrCreate($search, callable $callback = null, $options = [])
 */
class FeelingsTable extends Table
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

        $this->setTable('feelings');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Teams', [
            'foreignKey' => 'feeling_id',
            'targetForeignKey' => 'team_id',
            'joinTable' => 'feelings_teams'
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
            ->allowEmpty('type');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        return $validator;
    }
}
