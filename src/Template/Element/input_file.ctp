<div class="<?php echo (!empty($options['templates']) ? $options['templates'] : '') ?>">
    <div class="file-field input-field">
        <div class="btn">
            <span><?php echo $options['label'] ?></span>
            <input type="file" id="<?php echo $options['id'] ?>" name="<?php echo $options['name'] ?>" <?php echo (!empty($options['multiple']) ? 'multiple' : '') ?>>
        </div>
        <div class="file-path-wrapper indigo-text">
            <input class="file-path validate" type="text">
        </div>
    </div>
</div>