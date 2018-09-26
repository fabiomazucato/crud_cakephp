<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?php echo   __('Actions') ?></li>
        <li><?php echo   $this->Html->link(__('Edit Permission'), ['action' => 'edit', $permission->id]) ?> </li>
        <li><?php echo   $this->Form->postLink(__('Delete Permission'), ['action' => 'delete', $permission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $permission->id)]) ?> </li>
        <li><?php echo   $this->Html->link(__('List Permissions'), ['action' => 'index']) ?> </li>
        <li><?php echo   $this->Html->link(__('New Permission'), ['action' => 'add']) ?> </li>
        <li><?php echo   $this->Html->link(__('List Profiles'), ['controller' => 'Profiles', 'action' => 'index']) ?> </li>
        <li><?php echo   $this->Html->link(__('New Profile'), ['controller' => 'Profiles', 'action' => 'add']) ?> </li>
        <li><?php echo   $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?> </li>
        <li><?php echo   $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="permissions view large-9 medium-8 columns content">
    <h3><?php echo   h($permission->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?php echo   __('Profile') ?></th>
            <td><?php echo   $permission->has('profile') ? $this->Html->link($permission->profile->name, ['controller' => 'Profiles', 'action' => 'view', $permission->profile->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?php echo   __('Menu') ?></th>
            <td><?php echo   $permission->has('menu') ? $this->Html->link($permission->menu->name, ['controller' => 'Menus', 'action' => 'view', $permission->menu->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?php echo   __('Action') ?></th>
            <td><?php echo   h($permission->action) ?></td>
        </tr>
        <tr>
            <th><?php echo   __('Id') ?></th>
            <td><?php echo   $this->Number->format($permission->id) ?></td>
        </tr>
    </table>
</div>
