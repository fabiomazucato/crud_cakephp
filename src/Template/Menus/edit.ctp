<div class="portlet-back"></div>
<div class="people container">
    <div class="row people-inner portlet">
        <h5 class="white-text"><?php echo __('Edit Menu') ?></h5>
    </div>
    <div class="col s12 m12 l12 portlet-body z-depth-2">
       <div class="col s12 portlet-content">
            <div class="col s12 m12 l12">
                <?php 
                    echo $this->Form->create($menu, ['id' => 'menus']);
                    $this->Form->templates($form_templates['sixColForm']);
                    echo $this->Html->div(['row'],[
                            $this->Form->input('parent_id', ['type' => 'select', 'options' => $parentMenus, 'empty' => __('Selected')]),
                            $this->Form->input('name', ['type' => 'text', 'label' => __('Name'), 'placeholder' => __('Name')]),
                        ]);
                    
                    echo $this->Html->div(['row'],[
                            $this->Form->input('url', ['label' => __('URL'), 'placeholder' => __('URL')]),
                            $this->Form->input('controller', ['label' => __('Controller'), 'placeholder' => __('Controller')]),
                        ]);
                    
                    echo $this->Html->div(['row'],[
                            $this->Form->input('icon', ['placeholder' => __('Icon')]),
                            $this->Form->input('position', ['label' => __('Position')]),
                        ]);
                ?>
            </div>
            <div class="portleft-footer col s12 m12 l12">
                <div class="col-md-12 text-right">
                <?php echo $this->element('button', ['type' => [1, 2]]) ?>
                </div>
            </div>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>