<ul class="page-breadcrumb breadcrumb">
    <li class='<?php echo $this->request->params['action'] == 'index' ? '' : 'hide' ?>'>
        <?php echo $this->Html->link(__('New Image'), ['action' => 'add']) ?>
        <i class="fa fa-circle"></i>
    </li>

    <li class='<?php echo $this->request->params['action'] == 'edit' ? '' : 'hide' ?>'>
        <?php
        echo $this->Form->postLink(
                __('Delete'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]
        )
        ?>
        <i class="fa fa-circle"></i>
    </li>

    <li class='<?php echo in_array($this->request->params['action'], ['add', 'edit']) ? '' : 'hide' ?>'>
        <?php echo $this->Html->link(__('List Images'), ['action' => 'index']) ?>
        <i class="fa fa-circle"></i>
    </li>
    
    <li>
        <?php echo $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?>
        <i class="fa fa-circle"></i>
    </li>
    
    <li>
        <?php echo $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?>
    </li>
</ul>
<?php
echo $this->fetch('content');
?>
