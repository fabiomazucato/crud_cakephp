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
                    <li class="breadcrumb-item active">Adicionar</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">                     

         <?php echo $this->Form->create($user) ?>

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
                    <h3><i class="fa fa-edit"></i> Adicionar</h3>     
                </div>
                <!-- end card-header -->    

                <div class="card-body">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <?php echo $this->Form->control('nome', ['class' => 'form-control', 'label' => 'Nome', 'required' => true]); ?> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <?php echo $this->Form->control('email', ['class' => 'form-control', 'label' => 'Email', 'required' => true]); ?> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <?php echo $this->Form->control('password', ['class' => 'form-control', 'label' => 'Senha', 'required' => true]); ?> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->control('profile_id', ['label' => 'Perfil', 'class' => ['form-control'], 'options' => $profiles]); ?> 
                        </div>
                    </div>

                    <div class="form-group">
                        <?php echo $this->Form->button(__('Submit'),['class' => ['btn','btn-primary']]) ?>
                    </div>

                </div>  
                <!-- end card-body -->                              

            </div>
        <?php echo $this->Form->end() ?>
    </div>
</div>
<!-- end card -->       
