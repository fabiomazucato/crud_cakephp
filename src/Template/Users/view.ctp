<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organ $organ
 */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Usuários</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Administração</li>
                    <li class="breadcrumb-item">Usuários</li>
                    <li class="breadcrumb-item active">Visualizar</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">                     

        <div class="card mb-3">

            <div class="card-header">
                <span class="pull-right">
                    <?php 
                    echo $this->Html->link(
                        '   Voltar',
                        ['action' => 'index'],
                        ['class' => 'btn btn-primary btn-lg fa fa-arrow-left ']
                    );
                    ?>
                </span>
                <h3><i class="fa fa-file-text-o"></i> Visualizar</h3>     
            </div>
            <!-- end card-header -->    

            <div class="card-body">

                <dl class="dl-horizontal">
                    <dt>Id</dt>
                    <dd><?php echo $this->Number->format($user->id) ?></dd>

                    <dt>Nome</dt>
                    <dd><?php echo h($user->nome) ?></dd>

                    <dt>Email</dt>
                    <dd><?php echo h($user->email) ?></dd>
                    
                    <dt>Perfil</dt>
                    <dd><?php echo h($user->profile->name) ?></dd>
                    
                </dl>

            </div>  
        </div>  

    </div>  
    <!-- end card-body -->                              

</div>
