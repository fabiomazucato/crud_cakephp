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
                <div style="width: 80%; float: left">
                    <h3>Olá, <?php echo $sale->ambience_sale->person->name ?></h3>
                    <h5>Segue abaixo dados do seu pedido:</h5>
                </div>
            </div>
            <br clear="all">
            <div style="margin-top: 40px; padding-bottom: 40px;">
                <div style="margin-bottom:6px; border-bottom: 2px solid #e7ecf1; padding-bottom: 8px; width: 100%; float: left;">
                    <div style="width: 80%; float: left">
                        <span style="font-size: 14px; font-weight: 600; letter-spacing: 1px; color: #9ea8b7;">Cliente</span>
                    </div>
                    <div style="width: 20%; float: left">
                        <span style="font-size: 14px; font-weight: 600; letter-spacing: 1px; color: #9ea8b7;">Ambiente de venda</span>
                    </div>
                </div>
                <div style="margin-bottom:10px; padding-bottom: 8px; width: 100%; float: left;">
                    <div style="width: 80%; float: left">
                        <span style="color:#4e5a64; font-size: 13px;"><?php echo $sale->first_name . ' ' . $sale->last_name ?></span>
                        <br/><span style="color:#4e5a64; font-size: 13px; text-decoration: none !important;">Email: <?php echo $sale->email ?></span>
                        <br/><span style="color:#4e5a64; font-size: 13px; text-decoration: none !important;">Telefone: <?php echo $sale->phone1 ?></span>
                    </div>
                    <div style="width: 20%; float: left">
                        <span style="color:#4e5a64; font-size: 13px;"><?php echo $sale->ambience_sale->name ?></span>
                    </div>
                </div>
            </div>
            <br clear="all">
            <div style="margin-top: 20px; padding-bottom: 40px;">
                <div style="margin-bottom:6px; border-bottom: 2px solid #e7ecf1; padding-bottom: 8px; width: 100%; float: left;">
                    <div style="width: 40%; float: left">
                        <span style="font-size: 14px; font-weight: 600; letter-spacing: 1px; color: #9ea8b7;">Nº Pedido</span>
                    </div>
                    <div style="width: 40%; float: left">
                        <span style="font-size: 14px; font-weight: 600; letter-spacing: 1px; color: #9ea8b7;">Forma de Pagamento</span>
                    </div>
                    <div style="width: 20%; float: left">
                        <span style="font-size: 14px; font-weight: 600; letter-spacing: 1px; color: #9ea8b7;">Valor total</span>
                    </div>
                </div>
                <div style="margin-bottom:10px; padding-bottom: 8px; width: 100%; float: left;">
                    <div style="width: 40%; float: left">
                        <span style="color:#4e5a64; font-size: 13px;"><?php echo $sale->code ?></span>
                    </div>
                    <div style="width: 40%; float: left">
                        <span style="color:#4e5a64; font-size: 13px;"><?php echo $sale->payment_policy['name'] ?></span>
                    </div>
                    <div style="width: 20%; float: left">
                        <span style="color:#4e5a64; font-size: 13px;"><?php echo \Cake\I18n\Number::currency($sale->price, 'BRL') ?> <br/></span>
                    </div>
                </div>
            </div>
            <br clear="all">
            <div style="margin-top: 20px; padding-bottom: 40px;">
                <div style="margin-bottom:10px; padding-bottom: 8px; width: 100%; float: left;">
                    <div style="width: 100%; float: left">
                        <span style="color:#4e5a64; font-size: 15px;">Para detalhes do pedido <a href="https://<?php echo $r->host() ?>/sales/voucher/<?php echo $sale->id ?>">clique aqui</a>.</br>.</span>
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
