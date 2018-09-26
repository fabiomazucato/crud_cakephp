<div class="alert alert-danger display-hide">
    <button class="close" data-close="alert"></button>
    <?php echo __('You have some form errors. Please check below') ?>
</div>
<div class="alert alert-success display-hide">
    <button class="close" data-close="alert"></button>
    <?php echo __('Your form validation is successful') ?>
</div>

<?php
if (!isset($class)) {
    $class = null;
}
$myTemplates = [
    'formGroup' => '<div class="form-group"><div class="' . $class['col-md'] . '"><div class="input-icon right">{{label}}<i class="fa" style="margin: 35px 2px 4px 10px"></i>{{input}}</div></div></div>',
    'inputContainer' => '<div class="form-group adapt-form-my {{required}}" form-type="{{type}}">{{content}}</div>',
];
$this->Form->templates($myTemplates);
?>
