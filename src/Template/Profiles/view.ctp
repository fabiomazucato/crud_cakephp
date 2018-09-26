<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Perfil</h1>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Administração</li>
                    <li class="breadcrumb-item">Perfil</li>
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
                    <dt>ID</dt>
                    <dd><?php echo $this->Number->format($profile->id)  ?></dd>

                    <dt>Nome</dt>
                    <dd><?php echo h($profile->name) ?></dd>

                    <dt>Permissões</dt>
                    <dd>
                        <div id="simpleTree">
                            <ul>
                            <?php
                            dump($profile->permissions);

                            $menu_id = 0;
                            foreach($profile->permissions as $permissions): 

                                if($permissions->menu_id != $menu_id):
                                    if($menu_id != 0):
                                        echo "</ul>";
                                    endif;
                                    ?>
                                     <li data-jstree='{"opened":true}'><?php echo $permissions->menu->name ?>
                                        <ul>
                                            <li data-jstree='{"type":"file"}'><?php echo $permissions->action ?></li>
                                    <?php
                                else:
                                    ?>
                                        <li data-jstree='{"type":"file"}'><?php echo $permissions->action ?></li>
                                    <?php
                                endif;

                                $menu_id = $permissions->menu_id;

                            endforeach;

                            ?>
                            </ul>
                            </li>   
                            </ul>
                        </div>
                            
                    </dd>


                </dl>



                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fa fa-sitemap"></i> <strong>Pessoas relacionadas</strong>
                                    
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">

                                    <table class="table table-condensed">
                                     <thead>
                                        <?php
                                        echo $this->Html->tableHeaders([
                                            'id', 
                                            'Nome', 
                                            'Email',
                                            'Usuário'
                                        ]);
                                        ?>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if (!empty($organ->people)): 
                                            foreach ($organ->people as $people): 
                                                echo $this->Html->tableCells([
                                                    $this->Number->format($people->id),
                                                    h($people->name),
                                                    h($people->email),
                                                    h($people->users->login)
                                                ]);
                                            endforeach; 
                                        endif;
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  

    </div>  
    <!-- end card-body -->                              

</div>

<script>
    $( document ).ready(function() {
        $('#simpleTree').jstree({
            'core' : {
                'themes' : {
                    'responsive': false
                }
            },
            'types' : {
                'default' : {
                    'icon' : 'fa fa-folder-open'
                },
                'file' : {
                    'icon' : 'fa fa-file'
                }
            },
            'plugins' : ['types']
        });

    });
    
</script>