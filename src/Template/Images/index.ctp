<div id="modal-search" class="modal">
    <div class="modal-content">
        <h4><?php echo __('Search') ?></h4>
        <?php 
            $this->Form->templates($form_templates['fullForm']);
            echo $this->Form->create();
            echo $this->Html->div(['row'], $this->Form->input('menu_id', ['class' => ['form-control'], 'options' => $menus, 'empty' => __('Selected')]));
        ?>
    </div>
    <div class="modal-footer">
        <?php echo $this->Form->button(__('Search'), ['class' => ['modal-action', 'modal-close', 'waves-effect', 'waves-indigo', 'btn']]); ?>
    </div>
    <?php echo $this->Form->end() ?>
</div>





<div class="images ">
    <div class="row images-inner portlet">
        <div class="row">
            <div class="portlet-title col s12 m6 l6">
                <h5><?php echo __('Kinds People') ?></h5>
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
                        <?php echo $this->Html->tableHeaders([ __('ID'), __('Menu'), __('Priority'), __('Person'), __('Registry'), __('Actions')]) ?>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($images as $image):
                            echo $this->Html->tableCells([ 
                                        $image->id,
                                        ($image->has('menu') ? $this->Html->link($image->menu->name, ['controller' => 'Menus', 'action' => 'view', $image->menu->id]) : ''),
                                        $image->priority,
                                        ($image->has('person') ? $this->Html->link($image->person->name, ['controller' => 'People', 'action' => 'view', $image->person->id]) : ''),
                                        $image->registry,
                                        $this->Layout->dropDownListIndex($image->id)
                                    ]);
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>