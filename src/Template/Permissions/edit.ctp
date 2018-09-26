    <ul class="page-breadcrumb breadcrumb">
        <li>
            <?php echo  $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $permission->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]
                )
            ?>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <?php echo  $this->Html->link(__('List Permissions'), ['action' => 'index']) ?>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <?php echo  $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?>

            <i class="fa fa-circle"></i>
        </li>
        <li>
            <?php echo  $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?>

            <i class="fa fa-circle"></i>
        </li>
        <li>
            <?php echo  $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?>

            <i class="fa fa-circle"></i>
        </li>
        <li>
            <?php echo  $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?>

            <i class="fa fa-circle"></i>
        </li>
    </ul>
<!--/nav-->
                
<!--div class="permissions form large-9 medium-8 columns content joelson"-->
        
<div class="permissions row">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> <?php echo  __('Edit Permission') ?>
                </div>
                <div class="tools">
                    <a href="" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="" class="reload">
                    </a>
                    <a href="" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body form">
        
    <?php echo  $this->Form->create($permission) ?>
        <!--<legend><?php echo  __('Edit Permission') ?></legend>-->
    
    <div class="form-body">
        <div class="form-group">
        <?php
                    echo $this->Form->input('profile_id', ['class' => ['form-control'],'options' => $profiles]);
                    echo $this->Form->input('menu_id', ['class' => ['form-control'],'options' => $menus]);
                    echo $this->Html->div(['input-icon', 'right', 'margin-top-10'], $this->Form->input('action', ['class' => ['form-control'], 'placeholder' => __('Action')]), ['id' => 'action']);
        ?>
            <hr/>
        </div>
    </div>
    <div class="form-actions right">
        <?php echo $this->Form->button(__('Cancel'), ['type' => 'button','class' => ['btn', 'default']]) ?>
        <?php echo $this->Form->button(__('Submit'), ['class' => ['btn', 'green']]) ?>
    </div>
    <?php echo  $this->Form->end() ?>
</div>
