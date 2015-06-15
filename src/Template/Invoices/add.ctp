<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Invoice Types'), ['controller' => 'InvoiceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invoice Type'), ['controller' => 'InvoiceTypes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="invoices form large-10 medium-9 columns">
    <?= $this->Form->create($invoice) ?>
    <fieldset>
        <legend><?= __('Add Invoice') ?></legend>
        <?php
            echo $this->Form->input('company_id', ['options' => $companies]);
            echo $this->Form->input('invoice_type_id', ['options' => $invoiceTypes]);
            echo $this->Form->input('invoice_number_int');
            echo $this->Form->input('invoice_number_ext');
            echo $this->Form->input('amount_excl');
            echo $this->Form->input('VAT');
            echo $this->Form->input('amount_incl');
            echo $this->Form->input('date');
            echo $this->Form->input('date_exp');
            echo $this->Form->input('paydate');
            echo $this->Form->input('virtual');
            echo $this->Form->input('paid');
            echo $this->Form->input('workmonth');
            echo $this->Form->input('hourrate');
            echo $this->Form->input('hours');
            echo $this->Form->input('days');
            echo $this->Form->input('descr');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
