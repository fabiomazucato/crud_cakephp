<div class="images row">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <?php echo __('Edit Image') ?>
                </div>
            </div>
            <div class="portlet-body form">

                <?php echo $this->Form->create($image, ['enctype' => 'multipart/form-data', 'id' => 'images']) ?>

                <div class="form-body">
                        <?php
                             $this->Form->templates($form_templates['longForm']);
                        echo $this->Form->input('menu_id', ['class' => ['bs-select form-control'], 'data-live-search' => true, 'data-size' => 8, 'options' => $menus]);
                        echo $this->Form->input('url', ['class' => ['form-control'], 'placeholder' => __('Url')]);
                        echo $this->Form->input('priority', ['class' => ['form-control'], 'placeholder' => __('Priority')]);
                        echo $this->Form->input('person_id', ['type'=>'hidden', 'class' => ['form-control'], 'value' => PERSON_ID]);
                        echo $this->Form->input('registry', ['type' => 'text', 'class' => ['form-control touchspin_demo1 col-xs-6'], 'placeholder' => __('Registry')]);
                        echo $this->element('input_file', ['options' => ['label' => __('Image'), 'name' => 'img[]', 'id' => 'img', 'multiple' => true]]);
                        $img = "http://motor_reserva/curl/" . $image->larger;
                        ?>
                </div>
                <div class="form-actions right">
                    <?php
                    echo $this->element('button', ['type' => [1, 2]]);
                    ?>
                </div>
                <?php echo $this->Form->end() ?>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.delete').click(function () {
                $.ajax({
                    url: "/images/delete_image",
                    type: "post",
                    dataType: "html",
                    data: {
                        id: $(this).attr('attr-id')
                    },
                    success: function (data) {
                        $obj = $.parseJSON(data);
                    }
                });
            });
        });
    </script>
    <div class="col-sm-4 col-md-3" id="image-<?php echo $image->id ?>">
        <div class="thumbnail">
            <img style="width: 100%; height: 200px; display: block;" alt="100%x200" src="<?php echo $img ?>" data-src="holder.js/100%x200">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                </p>
                <p>
                    <span class="btn waves-effect btn-danger delete" attr-id="<?php echo $image->id ?>">Apagar</span>
                </p>
            </div>
        </div>
    </div>
    <?php echo $this->Form->end() ?>
</div>

