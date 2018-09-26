<div class="portlet-back"></div>
<div class="people container">
    <div class="row people-inner portlet">
        <h5 class="white-text"><?php echo __('Add Image') ?></h5>
    </div>
    <div class="col s12 m12 l12 portlet-body z-depth-2">
        <div class="row portlet-body">
            <div class="col s12 m12 l12">
                <?php 
                    $this->Form->templates($form_templates['fourColForm']);
                    echo $this->Form->create($image, ['enctype' => 'multipart/form-data', 'id' => 'images']);
                    echo $this->Form->input('person_id', ['type' => 'hidden', 'class' => ['form-control'], 'value' => PERSON_ID]);
                    
                    echo $this->Html->div(['row'],[
                            $this->Form->input('menu_id', ['class' => ['bs-select form-control'], 'data-live-search' => true, 'data-size' => 8, 'options' => $menus, 'empty' => __('Selected')]),
                            $this->Form->input('url', ['class' => ['form-control'], 'placeholder' => __('Url')]),
                            $this->Form->input('priority', ['class' => ['form-control'], 'placeholder' => __('Priority')]),
                        ]);
                    
                    $this->Form->templates($form_templates['sixColForm']);
                    echo $this->Html->div(['row'],[
                            $this->Form->input('registry', ['type' => 'text', 'placeholder' => __('Registry')]),
                            $this->element('input_file', ['options' => ['label' => __('Image'), 'name' => 'img[]', 'id' => 'img', 'multiple' => true]]),
                        ]);
                ?>
            </div>
            <div class="portleft-footer row">
                <div class="col s12 l12 m12 text-right">
                    <?php echo $this->element('button', ['type' => [1, 2]]) ?>
                </div>
            </div>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>