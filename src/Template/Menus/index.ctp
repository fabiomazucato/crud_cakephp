<div id="modal-search" class="modal">
    <div class="modal-content">
        <h4><?php echo __('Search') ?></h4>
        <?php
        $this->Form->templates($form_templates['fullForm']);
        echo $this->Html->div(['row'], [
                $this->Form->input('parent_id', ['options' => $parentMenus, 'empty' => __('Select')]),
                $this->Form->input('name', ['label' => __('Name')]),
            ]);
        ?>
    </div>
    <div class="modal-footer row">
        <?php echo $this->Form->button(__('Close'), ['class' => ['modal-action', 'modal-close', 'waves-effect', 'waves-green', 'btn']]); ?>
    </div>
</div>








<div class="menus">
    <div class="row menus-inner portlet">
        <div class="row">
            <div class="portlet-title col s12 m6 l6">
                <h5><?php echo __('Menus') ?></h5>
            </div>
            <div class="portlet-search col s12 m6 l6">
                <div class="input-field col s12 l8 right">
                    <input id="search" type="text">
                    <label for="search"><?php echo __('Search') ?></label>
                </div>
            </div>
        </div>
        <div class="col s12 m12 l12 portlet-body z-depth-2">
            <div class="portlet-content">
                <table id="dataTable" class="table bordered">
                    <thead>
                        <?php echo $this->Html->tableHeaders([ __('ID'), __('Parent'), __('Name'), __('URL'), __('Position'), __('Actions')]) ?>
                    </thead>
                    <tbody>
                    <?php 
                        foreach ($menus as $menu): 
                            echo $this->Html->tableCells([
                                    $menu->id,
                                    ($menu->has('parent_menu') ? $this->Html->link($menu->parent_menu->name, ['controller' => 'Menus', 'action' => 'view', $menu->parent_menu->id]) : ''),
                                    $menu->name,
                                    $menu->url,
                                    $menu->position,
                                    $this->Layout->dropDownListIndex($menu->id),
                                ]);
                        endforeach;    
                    ?>
                    </tbody>
                </table>
            </div>
            <?php echo $this->element('Layout/paginate') ?>
        </div>
    </div>
</div>