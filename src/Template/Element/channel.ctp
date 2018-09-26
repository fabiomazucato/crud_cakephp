<script>
    $(document).ready(function () {
        $('#country_id').change(function () {
            $('#state_id').html('<option>* Selecione</option>');
            $.ajax({
                url: "/states/search_states",
                type: "post",
                dataType: "html",
                data: {
                    country_id: $(this).val()
                },
                success: function (data) {
                    $obj = $.parseJSON(data);
                    $($obj).each(function () {
                        $('#state_id').append(new Option(this.name, this.id));
                    });
                }
            });
        });

        $('#state_id').change(function () {
            $('#city_id').html('<option>* Selecione</option>');
            $.ajax({
                url: "/cities/search_cities",
                type: "post",
                dataType: "html",
                data: {
                    state_id: $(this).val()
                },
                success: function (data) {
                    $obj = $.parseJSON(data);
                    $($obj).each(function () {
                        $('#city_id').append(new Option(this.name, this.id));
                    });
                }
            });
        });
    });
</script>

<div id="msg"></div> 
<?php
if (in_array(1, $type))
    echo $this->Form->input('country_id', ['id' => 'country_id', 'class' => ['form-control'], 'options' => $countries]);

if (in_array(2, $type))
    echo $this->Form->input('state_id', ['id' => 'state_id', 'class' => ['form-control'], 'options' => $states]);

if (in_array(3, $type))
    echo $this->Form->input('city_id', ['id' => 'city_id', 'class' => ['form-control'], 'options' => $cities]);




