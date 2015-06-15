<?php
namespace App\Model\Table;

use App\Model\Entity\Invoice;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Invoices Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Companies
 * @property \Cake\ORM\Association\BelongsTo $InvoiceTypes
 */
class InvoicesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('invoices');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('InvoiceTypes', [
            'foreignKey' => 'invoice_type_id',
            'joinType' => 'INNER'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->allowEmpty('invoice_number_int');
            
        $validator
            ->allowEmpty('invoice_number_ext');
            
        $validator
            ->add('amount_excl', 'valid', ['rule' => 'numeric'])
            ->requirePresence('amount_excl', 'create')
            ->notEmpty('amount_excl');
            
        $validator
            ->add('VAT', 'valid', ['rule' => 'numeric'])
            ->requirePresence('VAT', 'create')
            ->notEmpty('VAT');
            
        $validator
            ->add('amount_incl', 'valid', ['rule' => 'numeric'])
            ->requirePresence('amount_incl', 'create')
            ->notEmpty('amount_incl');
            
        $validator
            ->add('date', 'valid', ['rule' => 'date'])
            ->requirePresence('date', 'create')
            ->notEmpty('date');
            
        $validator
            ->add('date_exp', 'valid', ['rule' => 'date'])
            ->requirePresence('date_exp', 'create')
            ->notEmpty('date_exp');
            
        $validator
            ->add('paydate', 'valid', ['rule' => 'date'])
            ->requirePresence('paydate', 'create')
            ->notEmpty('paydate');
            
        $validator
            ->add('virtual', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('virtual');
            
        $validator
            ->add('paid', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('paid');
            
        $validator
            ->allowEmpty('workmonth');
            
        $validator
            ->add('hourrate', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('hourrate');
            
        $validator
            ->add('hours', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('hours');
            
        $validator
            ->add('days', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('days');
            
        $validator
            ->allowEmpty('descr');

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
        $rules->add($rules->existsIn(['company_id'], 'Companies'));
        $rules->add($rules->existsIn(['invoice_type_id'], 'InvoiceTypes'));
        return $rules;
    }
}
