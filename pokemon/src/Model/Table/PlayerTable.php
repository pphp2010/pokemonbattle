<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Player Model
 *
 * @method \App\Model\Entity\Player get($primaryKey, $options = [])
 * @method \App\Model\Entity\Player newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Player[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Player|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Player|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Player patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Player[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Player findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlayerTable extends Table
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

        $this->setTable('player');
        $this->setDisplayField('name');
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
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmpty('name');

        $validator
            ->scalar('rate')
            ->maxLength('rate', 5)
            ->allowEmpty('rate');

        $validator
            ->scalar('pokemon1')
            ->maxLength('pokemon1', 6)
            ->allowEmpty('pokemon1');

        $validator
            ->scalar('item1')
            ->maxLength('item1', 10)
            ->allowEmpty('item1');

        $validator
            ->scalar('ability1')
            ->maxLength('ability1', 10)
            ->allowEmpty('ability1');

        $validator
            ->scalar('memo1')
            ->maxLength('memo1', 200)
            ->allowEmpty('memo1');

        $validator
            ->scalar('pokemon2')
            ->maxLength('pokemon2', 6)
            ->allowEmpty('pokemon2');

        $validator
            ->scalar('item2')
            ->maxLength('item2', 10)
            ->allowEmpty('item2');

        $validator
            ->scalar('ability2')
            ->maxLength('ability2', 10)
            ->allowEmpty('ability2');

        $validator
            ->scalar('memo2')
            ->maxLength('memo2', 200)
            ->allowEmpty('memo2');

        $validator
            ->scalar('pokemon3')
            ->maxLength('pokemon3', 6)
            ->allowEmpty('pokemon3');

        $validator
            ->scalar('item3')
            ->maxLength('item3', 10)
            ->allowEmpty('item3');

        $validator
            ->scalar('ability3')
            ->maxLength('ability3', 10)
            ->allowEmpty('ability3');

        $validator
            ->scalar('memo3')
            ->maxLength('memo3', 200)
            ->allowEmpty('memo3');

        $validator
            ->scalar('pokemon4')
            ->maxLength('pokemon4', 6)
            ->allowEmpty('pokemon4');

        $validator
            ->scalar('item4')
            ->maxLength('item4', 10)
            ->allowEmpty('item4');

        $validator
            ->scalar('ability4')
            ->maxLength('ability4', 10)
            ->allowEmpty('ability4');

        $validator
            ->scalar('memo4')
            ->maxLength('memo4', 200)
            ->allowEmpty('memo4');

        $validator
            ->scalar('pokemon5')
            ->maxLength('pokemon5', 6)
            ->allowEmpty('pokemon5');

        $validator
            ->scalar('item5')
            ->maxLength('item5', 10)
            ->allowEmpty('item5');

        $validator
            ->scalar('ability5')
            ->maxLength('ability5', 10)
            ->allowEmpty('ability5');

        $validator
            ->scalar('memo5')
            ->maxLength('memo5', 200)
            ->allowEmpty('memo5');

        $validator
            ->scalar('pokemon6')
            ->maxLength('pokemon6', 6)
            ->allowEmpty('pokemon6');

        $validator
            ->scalar('item6')
            ->maxLength('item6', 10)
            ->allowEmpty('item6');

        $validator
            ->scalar('ability6')
            ->maxLength('ability6', 10)
            ->allowEmpty('ability6');

        $validator
            ->scalar('memo6')
            ->maxLength('memo6', 200)
            ->allowEmpty('memo6');

        $validator
            ->scalar('winlose')
            ->maxLength('winlose', 3)
            ->allowEmpty('winlose');

        $validator
            ->scalar('playermemo')
            ->maxLength('playermemo', 200)
            ->allowEmpty('playermemo');

        return $validator;
    }
}
