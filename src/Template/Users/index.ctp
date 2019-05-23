<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
// Custom limits and set the selected option

?>

<div class="jumbotron">
    <h3><?= __('Users') ?></h3>
    <table class="table table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr class="table-dark">
                
                <th scope="col" lass="actions"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= $this->Paginator->sort('creado') ?></th>
                <th scope="col" class="actions"><?= $this->Paginator->sort('actualizado') ?></th>
                <th scope="col" class="actions"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" class="actions"><?= $this->Paginator->sort('apellido PP') ?></th>
                <th scope="col" class="actions"><?= $this->Paginator->sort('apellido MM') ?></th>
                <th scope="col" class="actions"><?= $this->Paginator->sort('run') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                
                <td><?= h($user->email) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->surname1) ?></td>
                <td><?= h($user->surname2) ?></td>
                <td><?= $this->Number->format($user->run1).' - '.h($user->run2) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id],['class'=>'btn btn-primary']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id],['class'=>'btn btn-primary']) ?>
                    <?= $this->Form->postLink(__('X'), ['action' => 'delete', $user->id],['block' => true,'class'=>'btn btn-danger','confirm' => __('estas seguro de eliminar {0}?', $user->name.' '.$user->surname1)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
   
 
    <div class="paginator">
        <ul class="pagination">
           
            <?= $this->Paginator->first(' << ') ?>
            <?= $this->Paginator->prev(' < '); ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(' > ') ?>
            <?= $this->Paginator->last(' >> ') ?>
            <?php // $this->Paginator->limitControl([5 => 5, 10 => 10,25=>25]); ?>
        </ul> //pendiente de mejorar la paginacion  
        <p><?= $this->Paginator->counter(['format' => __('pagina {{page}} de {{pages}}, mostrando {{current}} de un total de {{count}}')]) ?></p>
    </div>
    <?= $this->Html->link(__('New User'), ['action' => 'add'],['class'=>'btn btn-primary']) ?>
</div>
