<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organ[]|\Cake\Collection\CollectionInterface $organs
 */
?>
<div class="container-fluid">

    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Usuários</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Administração</li>
                    <li class="breadcrumb-item active">Usuários</li>
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
                                '   Adicionar',
                                ['action' => 'add'],
                                ['class' => 'btn btn-primary btn-lg fa fa-plus']
                            );
                        ?>
                    </span>
                    <h3><i class="fa fa-list"></i> Lista</h3>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-hover display">
                            <thead>
                                <?php
                                echo $this->Html->tableHeaders([
                                    'id', 
                                    'Nome', 
                                    'Email',
                                    'Ações'
                                ]);
                                ?>
                            </thead>
                            <tbody>
                                <?php 
                                 foreach ($users as $user): 
                                    echo $this->Html->tableCells([
                                            $this->Number->format($user->id),
                                            h($user->nome),
                                            h($user->email),
                                            $this->Layout->dropDownListIndex($user->id)
                                    ]);
                                endforeach; 
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>                                                      
            </div><!-- end card-->                  
        </div>
    <!-- end row -->
</div>

