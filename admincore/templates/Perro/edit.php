<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Perro $perro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $perro->perroId],
                ['confirm' => __('Are you sure you want to delete # {0}?', $perro->perroId), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Perro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="perro form content">
            <?= $this->Form->create($perro) ?>
            <fieldset>
                <legend><?= __('Edit Perro') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('size');
                    echo $this->Form->control('vacunas');
                    echo $this->Form->control('dieta');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
