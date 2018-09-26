<div class="container login-container">
    <div class="login row valign-wrapper">
        <div class="col s12 m4 login-inner z-depth-1">
            <div class="login-inner-title row text-center">
                <h3>Aplicação de Avaliação</h3>
                <small>CRUD básico em PHP usando CakePHP e Boostrap. Use para email (master@master.com) e senha (master) </small>
            </div>
            <div class="col s12 m12">
                <form action="./login" method="post">
                    <div class="row">
                        <div class="input-field">
                            <input class="validate" type="text" name="email">
                            <label class="active" for="Email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input class="validate" type="password"  name="password">
                            <label class="active" for="Senha">Senha</label>
                        </div>
                    </div>
                    <div class="row">
                        <a href="#"><?php echo __('Esqueceu a senha?') ?></a>
                    </div>
                    <div class="row right">
                        <button class="waves-effect btn-flat indigo white-text blue darken-1">
                            <?php echo __('Login') ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="login-wallpaper"></div>
