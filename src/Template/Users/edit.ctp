<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>

<div class="jumbotron">
    <div class="row">
        <div class="col-lg-12">

    <?= $this->Form->create($user, array('type' => 'file')) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        </div>
        <div class="col-lg-6">
        <div class="form-group">
                <?= $this->Form->control(('email'),['class'=>'form-control','placeholder'=>'email']); ?>
                </div>
                <div class="form-group">
                <?= $this->Form->control(('password'),['class'=>'form-control','placeholder'=>'pass']); ?>
                </div>
                <div class="form-group">
                <?= $this->Form->control(('name'),['class'=>'form-control','placeholder'=>'nombre']); ?>
                </div>
                <div class="form-group">
                <?= $this->Form->control(('surname1'),['class'=>'form-control','placeholder'=>'apellido paterno']); ?>
                </div>
                <div class="form-group">
                <?= $this->Form->control(('surname2'),['class'=>'form-control','placeholder'=>'segundo materno']); ?>
                </div>
                <div class="form-group">
                <div class="input-group">
                <?= $this->Form->control(('run1'),['class'=>'form-control','type'=>'text','placeholder'=>'rut','maxlength'=>'8']); ?>
                <?= $this->Form->control(('run2'),['class'=>'form-control','placeholder'=>'digito']); ?>
                </div>
            
                </div>
               
                <div class="form-group">
                <?= $this->Form->input('file',array( 'type' => 'file')); ?>

                </div>
                
    </fieldset>
    </div>
           
    
            
            <div class="col-md-6">
            
                    <img class="rounded mx-auto d-block" src="<?= h($user->avatar); ?>" >
            </div>

            <div class="col-lg-6">
            <?php echo $this->HTML->link(('Regresar'),['action'=>'index'],['class'=>'btn btn-danger']);?>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
            </div>

            
</div></div>
