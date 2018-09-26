
<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>
                <li class="submenu">
                    <a class="active" href="./Pages/home">
                        <i class="fa fa-fw fa-dashboard"></i><span>Página Inicial </span> 
                    </a>
                </li>
                <?php
                foreach ($menu_parent as $menu_key => $menu):
                    ?>
                    <li class="submenu">
                        <a href="#">
                            <i class="fa fa-fw <?php echo $menu['icon'] ?>"></i> 
                            <span><?php echo $menu['name'] ?> </span> 
                            <span class="menu-arrow"></span>
                        </a>
                        <?php
                        if (isset($menu['parents'])):
                            ?>  
                            <ul> 
                                <?php
                                foreach ($menu['parents'] as $menu_parent => $parent):
                                    ?>
                                    <li>
                                        <?php echo $this->Html->link($parent['name'], $parent['url'], ['target' => '_self']); ?>
                                    </li>
                                    <?php
                                endforeach;
                                ?>
                            </ul>
                            <?php
                        endif;
                        ?>
                    </li>
                    <?php
                endforeach;
                ?>
                
            </ul>

            <div class="clearfix"></div>

        </div>
        
        <div class="clearfix"></div>

    </div>

</div>
