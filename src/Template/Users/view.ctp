<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>



<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                    <img class="rounded mx-auto d-block" src="<?= h($user->avatar); ?>" >
            </div>

    
            <div class="col-md-6">
                <table class="table table-hover">
                    <tr class="table-dark">
                        <th scope="row"><?= __('Email') ?></th>
                        <td><?= h($user->email) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Nombre') ?></th>
                        <td><?= h($user->name) ?></td>
                    </tr>
                    <tr class="table-dark">
                        <th scope="row"><?= __('Apellido paterno') ?></th>
                        <td><?= h($user->surname1) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Apellido Materno') ?></th>
                        <td><?= h($user->surname2) ?></td>
                    </tr>
                    <tr class="table-dark">
                        <th scope="row"><?= __('Run') ?></th>
                        <td><?= $this->Number->format($user->run1).'-'.h($user->run2) ?></td>
                    </tr>
                
                    <tr>
                        <th scope="row"><?= __('Registrado') ?></th>
                        <td><?= h($user->created) ?></td>
                    </tr>
                    <tr class="table-dark">
                        <th scope="row"><?= __('Última actualización') ?></th>
                        <td><?= h($user->modified) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
