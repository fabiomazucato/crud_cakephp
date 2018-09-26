<ul class="page-breadcrumb breadcrumb">
    <li>
        <?php echo $this->Html->link(__('New Permission'), ['action' => 'add']) ?>
        <i class="fa fa-circle"></i>
    </li>
        <li>
            <?php echo $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <?php echo $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?>
            <i class="fa fa-circle"></i>            
        </li>
        <li>
            <?php echo $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <?php echo $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?>
            <i class="fa fa-circle"></i>            
        </li>
</ul>

<!-- BEGIN PAGE CONTENT-->
<div class="permissions row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-edit"></i><?php echo __('Permissions') ?>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body  table-responsive">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn green">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="sample_editable_1">            
                    <thead>
                        <tr>
                                                            <th><?php echo __('id') ?></th>
                                                            <th><?php echo __('profile_id') ?></th>
                                                            <th><?php echo __('menu_id') ?></th>
                                                            <th><?php echo __('action') ?></th>
                                                        <th class="actions"><?php echo __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($permissions as $permission): ?>
                        <tr>
                                        <td><?php echo $this->Number->format($permission->id) ?></td>
                                        <td><?php echo   $permission->has('profile') ? $this->Html->link($permission->profile->name, ['controller' => 'Profiles', 'action' => 'view', $permission->profile->id]) : '' ?></td>
                                        <td><?php echo   $permission->has('menu') ? $this->Html->link($permission->menu->name, ['controller' => 'Menus', 'action' => 'view', $permission->menu->id]) : '' ?></td>
                                        <td><?php echo h($permission->action) ?></td>
                                        <td class="actions">
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', ['action' => 'view', $permission->id], ['escape' => false]) ?>
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil font-green"></span>', ['action' => 'edit', $permission->id], ['escape' => false] ) ?>
                                <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash font-red"></span>', ['action' => 'delete', $permission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END PAGE CONTENT -->
