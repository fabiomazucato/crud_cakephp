<script>
    $(document).ready(function () {
        $('.delete').click(function () {

            var confirm = window.confirm("Tem certeza que quer apagar esta imagem?");

            if (confirm) {
                $id = $(this).attr('attr-id');
                $.ajax({
                    url: "/images/delete_image",
                    type: "post",
                    dataType: "html",
                    data: {
                        id: $id
                    },
                    success: function (data) {
                        console.log(data);
                        $obj = $.parseJSON(data);

                        if ($obj.success === true) {
                            alert('Imagem apagada com sucesso!');
                            $('#image-' + $id).remove();
                        }
                    }
                });
            }
        });
    });
</script>

<table class="highlight responsive-table bordered striped">
    <thead>
        <tr>
            <th>&nbsp;</th>
            <th><?php echo __('Name') ?></th>
            <th><?php echo __('Description') ?></th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>        
        <?php
        if (!empty($images)):
            foreach ($images as $image):

                $img = REMOTE_UPLOAD_SERVER . $image->larger;
                echo $this->Form->hidden('images.' . $image->id . '.id', ['value' => $image->id]);
                ?>
                <tr id="image-<?php echo $image->id ?>" class="row-horaries">
                    <td style="width: 1px; white-space: nowrap">
                        <img style="width: 200px; height: 110px" alt="100%x200" src="<?php echo $img ?>" data-src="/js/assets/global/plugins/holder.js/100%x200">
                    </td>
                    <td style="vertical-align:middle">
                        <?php
                        echo $this->element('template_form');
                        echo $this->Form->hidden('images.' . $image->id . '.id', ['value' => $image->id]);
                        echo $this->Form->input('images.' . $image->id . '.name', ['required' => false, 'label' => false, 'type' => 'text', 'class' => ['form-control'], 'id' => 'name_' . $image->id]);
                        ?>
                    </td>
                    <td style="vertical-align:middle">
                        <?php echo $this->Form->input('images.' . $image->id . '.description', ['required' => false, 'label' => false, 'type' => 'text', 'class' => ['form-control'], 'id' => 'description_' . $image->id]) ?>
                    </td>
                    <td style="width: 1px; white-space: nowrap; vertical-align:middle">
                        <span class="btn red font-white delete" attr-id="<?php echo $image->id ?>"><i class="material-icons">delete</i></span>
                    </td>
                </tr>
                <?php
            endforeach;
        endif;
        ?>
    </tbody>
</table>
