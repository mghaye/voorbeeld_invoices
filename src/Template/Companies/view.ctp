<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="companies view large-10 medium-9 columns">
    <h2><?= h($company->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($company->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($company->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($company->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($company->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Invoices') ?></h4>
    <?php if (!empty($company->invoices)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Company Id') ?></th>
            <th><?= __('Invoice Type Id') ?></th>
            <th><?= __('Invoice Number Int') ?></th>
            <th><?= __('Invoice Number Ext') ?></th>
            <th><?= __('Amount Excl') ?></th>
            <th><?= __('VAT') ?></th>
            <th><?= __('Amount Incl') ?></th>
            <th><?= __('Date') ?></th>
            <th><?= __('Date Exp') ?></th>
            <th><?= __('Paydate') ?></th>
            <th><?= __('Virtual') ?></th>
            <th><?= __('Paid') ?></th>
            <th><?= __('Workmonth') ?></th>
            <th><?= __('Hourrate') ?></th>
            <th><?= __('Hours') ?></th>
            <th><?= __('Days') ?></th>
            <th><?= __('Descr') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($company->invoices as $invoices): ?>
        <tr>
            <td><?= h($invoices->id) ?></td>
            <td><?= h($invoices->company_id) ?></td>
            <td><?= h($invoices->invoice_type_id) ?></td>
            <td><?= h($invoices->invoice_number_int) ?></td>
            <td><?= h($invoices->invoice_number_ext) ?></td>
            <td><?= h($invoices->amount_excl) ?></td>
            <td><?= h($invoices->VAT) ?></td>
            <td><?= h($invoices->amount_incl) ?></td>
            <td><?= h($invoices->date) ?></td>
            <td><?= h($invoices->date_exp) ?></td>
            <td><?= h($invoices->paydate) ?></td>
            <td><?= h($invoices->virtual) ?></td>
            <td><?= h($invoices->paid) ?></td>
            <td><?= h($invoices->workmonth) ?></td>
            <td><?= h($invoices->hourrate) ?></td>
            <td><?= h($invoices->hours) ?></td>
            <td><?= h($invoices->days) ?></td>
            <td><?= h($invoices->descr) ?></td>
            <td><?= h($invoices->created) ?></td>
            <td><?= h($invoices->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Invoices', 'action' => 'view', $invoices->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Invoices', 'action' => 'edit', $invoices->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invoices', 'action' => 'delete', $invoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoices->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
