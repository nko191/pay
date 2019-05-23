<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
echo $this->Session->flash();

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>

 
<div class="jumbotron">
    <div class="row">
        <div class="col-lg-6">
            <?= $this->Form->create($user, array('type' => 'file')) ?>
            <fieldset>
                <legend><?= __('Agregar usuario al sistema') ?></legend>
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
                <?= $this->Form->control(('run1'),['class'=>'form-control','type'=>'text','placeholder'=>'rut','maxlength'=>'8']); ?>
                </div>
                <div class="form-group">
                <?= $this->Form->control(('run2'),['class'=>'form-control','placeholder'=>'digito verificador']); ?>
                </div>
                <div class="form-group">
                <?= $this->Form->input('file',array( 'type' => 'file')); ?>
                </div>
                
            </fieldset>
            <?php echo $this->HTML->link(('Regresar'),['action'=>'index'],['class'=>'btn btn-danger']);?>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>