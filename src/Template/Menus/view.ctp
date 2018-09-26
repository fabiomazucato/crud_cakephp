<div class="portlet-back"></div>
<div class="webServices">
    <div class="row webServices-inner portlet">
        <div class="row">
            <div class="portlet-title white-text col s12 m6 l6">
                <h5>
                    <?php echo __('View Web Service Info') ?>
                </h5>
            </div>
        </div>
        <div class="col s12 m12 l12 portlet-body z-depth-2">
            <div class="portlet-content">
                <table class="table striped">
                    <thead>
                        <?php echo $this->Html->tableHeaders([__('Info'), __('Value')]) ?>
                    </thead>
                    <tbody>
                        <?php
                            echo $this->Html->tableCells([
                                    [ __('Parent Menu'), ($menu->has('parent_menu') ? $this->Html->link($menu->parent_menu->name, ['controller' => 'Menus', 'action' => 'view', $menu->parent_menu->id]) : '') ],
                                    [ __('Name'), $menu->name ],
                                    [ __('URL'), $menu->url ],
                                    [ __('Add'), $menu->add ],
                                    [ __('Edit'), $menu->edit ],
                                    [ __('Delete'), $menu->delete ],
                                    [ __('View'), $menu->view ],
                                    [ __('Icon'), $menu->icon ],
                                    [ __('ID'), $menu->id ],
                                ]);
                        ?>
                    </tbody>
                </table>
            </div>
            
            
            
            
                    <?php if(!empty($menu->permissions)): ?>
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h4 class="light"><?php echo __('Related Permissions') ?></h4>
                            <table class="table table-striped table-hover ">            
                                <thead>
                                    <?php echo $this->Html->tableHeaders([__('ID'), __('Method'), __('Actions')]) ?>
                                </thead>
                                <tbody>
                                <?php 
                                    foreach ($menu->permissions as $permissions): 
                                        echo $this->Html->tableCells([
                                                    $permissions->id,
                                                    $permissions->action,
                                                    $this->Layout->dropDownListIndex($permissions->id)
                                            ]);
                                    endforeach;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty($menu->child_menus)): ?>
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h4 class="light"><?php echo __('Related Menus') ?></h4>
                            <table class="table table-striped table-hover ">            
                                <thead>
                                    <?php echo $this->Html->tableHeaders([__('ID'), __('Parent ID'), __('Name'), __('URL'), __('Actions')]) ?>
                                </thead>
                                <tbody>
                                <?php 
                                    foreach ($menu->child_menus as $childMenus): 
                                        echo $this->Html->tableCells([
                                                $childMenus->id,
                                                $childMenus->parent_id,
                                                $childMenus->name,
                                                $childMenus->url,
                                                $this->Layout->dropDownListIndex($childMenus->id)
                                            ]);
                                    endforeach;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php endif; ?>
            
            
        </div>
    </div>
</div>