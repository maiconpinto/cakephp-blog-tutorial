<?php
namespace App\Model\Table;

use App\Model\Entity\Article;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 *
 */
class ArticlesTable extends Table
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

        $this->table('articles');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
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
            ->allowEmpty('title');

        $validator
            ->allowEmpty('body');

        return $validator;
    }

    public function isOwnedBy($articleId, $userId)
    {
        return $this->exists(['id' => $articleId, 'user_id' => $userId]);
    }
}
