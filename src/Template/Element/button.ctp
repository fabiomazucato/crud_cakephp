<div class="col l12 m12 s12 text-right">
<?php
if (in_array(1, $type))
    echo $this->Form->button(__('Return'), ['type' => 'button', 'class' => ['btn-flat', 'waves-effect', 'waves-light'], 'onclick' => "window.history.back();"]);

if (in_array(2, $type))
    echo $this->Form->button(__('Submit'), ['class' => ['btn', 'indigo', 'white-text', 'waves-effect', 'waves-light']]);
?>
</div>