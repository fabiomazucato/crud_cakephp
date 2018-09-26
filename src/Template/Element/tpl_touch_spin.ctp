<?php
if (!isset($class))
    $class = ['col-md-3', 'adapt-form-input'];

foreach ($touchSpins as $key => $touchSpin) {
?>
    <div class="<?php foreach ($class as $value_class) echo $value_class . ' '; ?>">
        <?php
        echo $this->Form->input($key, ['label' => $touchSpin['label'], 'type' => 'text', 'class' => ['form-control touchspin_demo1 col-xs-6'], 'placeholder' => $touchSpin['placeholder']]);
        ?>
    </div>        
<?php
}
?>