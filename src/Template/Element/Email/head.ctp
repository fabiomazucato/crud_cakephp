<div style="display: table; width: 100%;">
    <div style="width: 50%; float: left">
        <img src="<?php echo $ambience_sale_config_person->ambienceSale->logo; ?>" style="display: block; height: auto; max-width: 100%;"/>
    </div>
    <div style="width: 50%;float: left">
        <div style="text-align: right; font-size: 14px; color: #7e8691; max-height: 100px;">
            <span style="font-weight: 700; text-transform: uppercase"><?php echo $ambience_sale_config_person->ambienceSale->name ?></span>
            <br><?php echo $ambience_sale_config_person->address ?>
            <br><?php echo $ambience_sale_config_person->phone . ' ' .$ambience_sale_config_person->phone2 ?>
            <br><?php echo $ambience_sale_config_person->email ?>
        </div>
    </div>
</div>