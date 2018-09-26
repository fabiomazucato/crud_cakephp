<ul class="page-breadcrumb breadcrumb">
    <li class='<?php echo $this->request->params['action'] == 'index' ? '' : 'hide' ?>'>
        <?php echo $this->Html->link(__('New Profile'), ['action' => 'add']) ?>
        <i class="fa fa-circle"></i>
    </li>

    <li class='<?php echo $this->request->params['action'] == 'edit' ? '' : 'hide' ?>'>
        <?php
        echo $this->Form->postLink(
                __('Delete'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]
        )
        ?>
        <i class="fa fa-circle"></i>
    </li>

    <li class='<?php echo in_array($this->request->params['action'], ['add', 'edit']) ? '' : 'hide' ?>'>
        <?php echo $this->Html->link(__('List Profiles'), ['action' => 'index']) ?>
        <i class="fa fa-circle"></i>
    </li>

    <li>
        <?php echo $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?>
        <i class="fa fa-circle"></i>
    </li>

    <li>
        <?php echo $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?>
        <i class="fa fa-circle"></i>
    </li>
</ul>
<?php
echo $this->fetch('content');
?>
