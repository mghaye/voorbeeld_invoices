<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Invoice Types'), ['controller' => 'InvoiceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invoice Type'), ['controller' => 'InvoiceTypes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="invoices index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('company_id') ?></th>
            <th><?= $this->Paginator->sort('invoice_type_id') ?></th>
            <th><?= $this->Paginator->sort('invoice_number_int') ?></th>
            <th><?= $this->Paginator->sort('invoice_number_ext') ?></th>
            <th><?= $this->Paginator->sort('amount_excl') ?></th>
            <th><?= $this->Paginator->sort('VAT') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($invoices as $invoice): ?>
        <tr>
            <td><?= $this->Number->format($invoice->id) ?></td>
            <td>
                <?= $invoice->has('company') ? $this->Html->link($invoice->company->name, ['controller' => 'Companies', 'action' => 'view', $invoice->company->id]) : '' ?>
            </td>
            <td>
                <?= $invoice->has('invoice_type') ? $this->Html->link($invoice->invoice_type->name, ['controller' => 'InvoiceTypes', 'action' => 'view', $invoice->invoice_type->id]) : '' ?>
            </td>
            <td><?= h($invoice->invoice_number_int) ?></td>
            <td><?= h($invoice->invoice_number_ext) ?></td>
            <td><?= $this->Number->format($invoice->amount_excl) ?></td>
            <td><?= $this->Number->format($invoice->VAT) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $invoice->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoice->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
