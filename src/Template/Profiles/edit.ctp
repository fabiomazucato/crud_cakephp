
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
//echo $this->Html->script('Profiles/global');
//$this->extend('bread_crumb');

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Perfil</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Administração</li>
                    <li class="breadcrumb-item">Perfil</li>
                    <li class="breadcrumb-item active">Editar</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">                     

       <?php echo $this->Form->create($profile) ?>

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
                <div class="form-group col-md-4">
                    <?php echo $this->Form->control('name', ['class' => 'form-control', 'label' => 'Nome', 'required' => true]); ?> 
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <?php 
                    echo $this->Form->control(
                        'permissions._ids', [
                            'label' => 'Permissões',
                            'class' =>['multi-select','form-control'],
                            'options' => $menuGroup,
                            'multiple' => true,
                            'style' => 'height: 300px;',
                            'value' => $menuActionsIds
                        ]
                    );

                    ?>
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
