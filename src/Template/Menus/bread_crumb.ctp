<ul class="page-breadcrumb breadcrumb">
    <li class='<?php echo $this->request->params['action'] == 'index' ? '' : 'hide' ?>'>
        <?php echo $this->Html->link(__('New Menu'), ['action' => 'add']) ?>
    </li>

    <li class='<?php echo $this->request->params['action'] == 'edit' ? '' : 'hide' ?>'>
        <?php
        echo $this->Form->postLink(
                __('Delete'), ['action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]
        )
        ?>
        <i class="fa fa-circle"></i>
    </li>

    <li class='<?php echo in_array($this->request->params['action'], ['add', 'edit']) ? '' : 'hide' ?>'>
        <?php echo $this->Html->link(__('List Menus'), ['action' => 'index']) ?>
    </li>
</ul>
<?php
echo $this->fetch('content');
?>
