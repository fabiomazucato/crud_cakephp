<?php
if (!isset($class))
    $class = ['col-md-2', 'adapt-form-input'];

foreach ($makeSwitchs as $key => $makeSwitch) {
?>
    <div class="<?php foreach ($class as $value_class) echo $value_class . ' '; ?>">
        <?php
        $input = $this->Form->checkbox($key, ['class' => ['make-switch'], 'data-on-text' => $makeSwitch['data-on-text'], 'data-off-text' => $makeSwitch['data-off-text']]);
        echo !empty($makeSwitch['label'])?$this->Html->div(['input-icon', 'right', 'margin-top-10'], $makeSwitch['label']):null;
        echo $this->Html->div(['input-icon', 'right', 'margin-top-10'], $input);
        ?>
    </div>        
<?php
}
?>