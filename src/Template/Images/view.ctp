<div class="portlet-back"></div>
<div class="webServices">
    <div class="row webServices-inner portlet">
        <div class="row">
            <div class="portlet-title white-text col s12 m6 l6">
                <h5>
                    <?php echo __('View Images Info') ?>
                </h5>
            </div>
        </div>
        <div class="col s12 m12 l12 portlet-body z-depth-2">
            <div class="portlet-content">
                <table class="table striped table-responsive">
                    <thead>
                        <?php echo $this->Html->tableHeaders([__('Info'), __('Value')]) ?>
                    </thead>
                    <tbody>
                        <?php
                            echo $this->Html->tableCells([
                                    [ __('Menu'),  ($image->has('menu') ? $this->Html->link($image->menu->name, ['controller' => 'Menus', 'action' => 'view', $image->menu->id]) : '') ],
                                    [ __('URL'), $image->url ],
                                    [ __('Priority'), $image->priority ],
                                    [ __('Person'), ($image->has('person') ? $this->Html->link($image->person->name, ['controller' => 'People', 'action' => 'view', $image->person->id]) : '') ],
                                    [ __('ID'), $image->id ],
                                    [ __('Registry'), $image->registry ]
                                ]);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>