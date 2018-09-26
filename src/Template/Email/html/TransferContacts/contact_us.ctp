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
                    <?php echo $this->element('Email/head'); ?>
                    <br clear="all">
                    <div style="margin-top: 20px; padding-bottom: 20px; display:table; width: 100%;">
                        <div style="width: 80%; float: left; color: #7e8691">
                            <h3>Dados do Formulário</h3>
                        </div>
                    </div>
                    <br clear="all">
                    <div style="padding-bottom: 40px; display: table; width: 100%;">
                        <div style="margin-bottom:6px; border-bottom: 2px solid #e7ecf1; padding-bottom: 8px; width: 100%; float: left;">
                            <div style="width: 50%; float: left">
                                <span style="font-size: 14px; font-weight: 600; letter-spacing: 1px; color: #9ea8b7;">Campo</span>
                            </div>
                            <div style="width: 50%; float: left">
                                <span style="font-size: 14px; font-weight: 600; letter-spacing: 1px; color: #9ea8b7;">Valor</span>
                            </div>
                        </div>

                        <div style="padding-bottom: 5px; width: 100%; float: left;">
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px; font-weight: bold">Nome: </span>
                            </div>
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px;"><?php echo $transferContact->name ?></span>
                            </div>
                        </div>
                        <div style="padding-bottom: 5px; width: 100%; float: left;">
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px; font-weight: bold">E-mail: </span>
                            </div>
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px;"><?php echo $transferContact->email ?></span>
                            </div>
                        </div>
                        <div style="padding-bottom: 5px; width: 100%; float: left;">
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px; font-weight: bold">Telefone: </span>
                            </div>
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px;"><?php echo $transferContact->phone ?></span>
                            </div>
                        </div>
                        <div style="padding-bottom: 5px; width: 100%; float: left;">
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px; font-weight: bold">Check-in: </span>
                            </div>
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px;"><?php echo $transferContact->check_in ?></span>
                            </div>
                        </div>
                        <?php if (!empty($transferContact->check_out)): ?>
                            <div style="padding-bottom: 5px; width: 100%; float: left;">
                                <div style="width: 50%; float: left">
                                    <span style="color:#4e5a64; font-size: 13px; font-weight: bold">Check-out: </span>
                                </div>
                                <div style="width: 50%; float: left">
                                    <span style="color:#4e5a64; font-size: 13px;"><?php echo $transferContact->check_out ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div style="padding-bottom: 5px; width: 100%; float: left;">
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px; font-weight: bold">Transfer: </span>
                            </div>
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px;"><?php echo $transferContact->transfer->name ?></span>
                            </div>
                        </div>
                        <div style="padding-bottom: 5px; width: 100%; float: left;">
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px; font-weight: bold">ID do Transfer: </span>
                            </div>
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px;"><?php echo $transferContact->transfer->id ?></span>
                            </div>
                        </div>
                        <div style="padding-bottom: 5px; width: 100%; float: left;">
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px; font-weight: bold">Adulto(s): </span>
                            </div>
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px;"><?php echo $transferContact->quantity_adult ?></span>
                            </div>
                        </div>
                        <div style="padding-bottom: 5px; width: 100%; float: left;">
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px; font-weight: bold">Criança(s) Pagante(s): </span>
                            </div>
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px;"><?php echo $transferContact->quantity_child_paying ?></span>
                            </div>
                        </div>
                        <div style="padding-bottom: 5px; width: 100%; float: left;">
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px; font-weight: bold">Criança(s) Gratuita(s): </span>
                            </div>
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px;"><?php echo $transferContact->quantity_child_free ?></span>
                            </div>
                        </div>
                        <div style="padding-bottom: 5px; width: 100%; float: left;">
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px; font-weight: bold">Messagem: </span>
                            </div>
                            <div style="width: 50%; float: left">
                                <span style="color:#4e5a64; font-size: 13px;"><?php echo $transferContact->message ?></span>
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
