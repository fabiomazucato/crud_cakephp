<?php
$r = new \Cake\Network\Request();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background: #e9ecf3; font-family: Arial,Helvetica,sans-serif;">
<div style="margin: 0px; padding: 20px 20px 0 20px; position: relative;">
    <div style="padding: 10px 0 0 20px; margin-top: 0px; min-height: 623px; max-width: 900px; margin: 0 auto;">
        <div style="background-color: #fff; padding: 80px 70px;">
            <?php echo $this->element('Sales/Email/head'); ?>
            <br clear="all">
            <div style="margin-top: 60px; padding-bottom: 20px;">
                <div style="width: 80%; float: left; color: #7e8691">
                    <h3>Olá, <?php echo $sale->first_name . ' ' . $sale->last_name ?></h3>
                    <h5>O seu pedido foi realizado com sucesso. <br>
                        Após a aprovação financeira você receberá outro email de confirmação.
                        <br>
                        <br>
                        <span style="color:#f44336; font-size: 12px;">
                            Obs.: Você só poderá acessar o voucher, utilizando a SENHA que também será enviada no próximo e-mail.
                        </span>
                    </h5>
                </div>
            </div>
            <br clear="all">
            <div style="margin-top: 40px; padding-bottom: 40px;">
                <div style="margin-bottom:6px; border-bottom: 2px solid #e7ecf1; padding-bottom: 8px; width: 100%; float: left;">
                    <div style="width: 80%; float: left">
                        <span style="font-size: 14px; font-weight: 600; letter-spacing: 1px; color: #9ea8b7;">Nº Pedido</span>
                    </div>
                    <div style="width: 20%; float: left">
                        <span style="font-size: 14px; font-weight: 600; letter-spacing: 1px; color: #9ea8b7;">Valor total</span>
                    </div>
                </div>
                <div style="margin-bottom:10px; padding-bottom: 8px; width: 100%; float: left;">
                    <div style="width: 80%; float: left">
                        <span style="color:#4e5a64; font-size: 13px;"><?php echo $sale->code ?></span>
                    </div>
                    <div style="width: 20%; float: left">
                        <span style="color:#4e5a64; font-size: 13px;"><?php echo \Cake\I18n\Number::currency($sale->price, 'BRL') ?></span>
                    </div>
                </div>
            </div>

            <!--RODAPÉ-->
            <br clear="all">
            <div style="margin-top: 10px; padding-bottom: 20px;">
            </div>
        </div>
    </div>
</div>
</body>
</html>