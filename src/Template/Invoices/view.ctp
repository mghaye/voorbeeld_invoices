<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoice Types'), ['controller' => 'InvoiceTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice Type'), ['controller' => 'InvoiceTypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="invoices view large-10 medium-9 columns">
    <h2><?= h($invoice->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Company') ?></h6>
            <p><?= $invoice->has('company') ? $this->Html->link($invoice->company->name, ['controller' => 'Companies', 'action' => 'view', $invoice->company->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Invoice Type') ?></h6>
            <p><?= $invoice->has('invoice_type') ? $this->Html->link($invoice->invoice_type->name, ['controller' => 'InvoiceTypes', 'action' => 'view', $invoice->invoice_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Invoice Number Int') ?></h6>
            <p><?= h($invoice->invoice_number_int) ?></p>
            <h6 class="subheader"><?= __('Invoice Number Ext') ?></h6>
            <p><?= h($invoice->invoice_number_ext) ?></p>
            <h6 class="subheader"><?= __('Workmonth') ?></h6>
            <p><?= h($invoice->workmonth) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($invoice->id) ?></p>
            <h6 class="subheader"><?= __('Amount Excl') ?></h6>
            <p><?= $this->Number->format($invoice->amount_excl) ?></p>
            <h6 class="subheader"><?= __('VAT') ?></h6>
            <p><?= $this->Number->format($invoice->VAT) ?></p>
            <h6 class="subheader"><?= __('Amount Incl') ?></h6>
            <p><?= $this->Number->format($invoice->amount_incl) ?></p>
            <h6 class="subheader"><?= __('Hourrate') ?></h6>
            <p><?= $this->Number->format($invoice->hourrate) ?></p>
            <h6 class="subheader"><?= __('Hours') ?></h6>
            <p><?= $this->Number->format($invoice->hours) ?></p>
            <h6 class="subheader"><?= __('Days') ?></h6>
            <p><?= $this->Number->format($invoice->days) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($invoice->date) ?></p>
            <h6 class="subheader"><?= __('Date Exp') ?></h6>
            <p><?= h($invoice->date_exp) ?></p>
            <h6 class="subheader"><?= __('Paydate') ?></h6>
            <p><?= h($invoice->paydate) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($invoice->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($invoice->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Virtual') ?></h6>
            <p><?= $invoice->virtual ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Paid') ?></h6>
            <p><?= $invoice->paid ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Descr') ?></h6>
            <?= $this->Text->autoParagraph(h($invoice->descr)) ?>
        </div>
    </div>
</div>
