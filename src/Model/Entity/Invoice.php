<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity.
 */
class Invoice extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'company_id' => true,
        'invoice_type_id' => true,
        'invoice_number_int' => true,
        'invoice_number_ext' => true,
        'amount_excl' => true,
        'VAT' => true,
        'amount_incl' => true,
        'date' => true,
        'date_exp' => true,
        'paydate' => true,
        'virtual' => true,
        'paid' => true,
        'workmonth' => true,
        'hourrate' => true,
        'hours' => true,
        'days' => true,
        'descr' => true,
        'company' => true,
        'invoice_type' => true,
    ];
}
