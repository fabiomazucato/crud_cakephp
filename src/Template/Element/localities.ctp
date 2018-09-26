<?php

if (in_array(1, $type)) {
    ?>
<script>
    $(document).ready(function () {
        $('#country_id').change(function () {
            $.ajax({
                url: "/states/search_states.json",
                type: "post",
                dataType: "json",
                data: {
                    country_id: $(this).val()
                },
                success: function (data) {
                    $.each(data.states, function () {
                        $('#state_id').append(new Option(this.name, this.id));
                    });
                }
            });
        });
    });
</script>
    <?php

    echo $this->Form->input('country_id', [
        'id' => 'country_id',
        'type' => 'select',
        'options' => $countries,
        'label' => __('Country'),
        'empty' => true
    ]);
}

if (in_array(2, $type)) {
    ?>
<script>
    $(document).ready(function () {
        $('#state_id').change(function () {
            $.ajax({
                url: "/cities/search_cities.json",
                type: "post",
                dataType: "json",
                data: {
                    state_id: $(this).val()
                },
                success: function (data) {
                    $.each(data.cities, function (i, obj) {
                        $('#city_id').append(new Option(this.name, this.id));
                    });
                }
            });
        });
    });
</script>
    <?php
    echo $this->Form->input('state_id', [
        'id' => 'state_id',
        'type' => 'select',
        'options' => isset($states) ? $states : null,
        'label' => __('States'),
        'empty' => true,
        'required' => ($required?$required:false),
    ]);
}
if (in_array(3, $type)) {
    ?>
<script>
    $(document).ready(function () {
        $('#city_id').change(function () {
            $.ajax({
                url: "/regions/search_regions",
                type: "post",
                dataType: "html",
                data: {
                    city_id: $(this).val()
                },
                success: function (data) {
                    $obj = $.parseJSON(data);
                    $($obj).each(function () {
                        $('#region_id').append(new Option(this.name, this.id));
                    });
                }
            });
        });
    });
</script>
    <?php

    echo $this->Form->input((isset($options[3]['name']) ? $options[3]['name'] : 'city_id'), [
        'id' => 'city_id',
        'type' => 'select',
        'options' => isset($cities) ? $cities : null,
        'label' => __('City'),
        'empty' => true
    ]);
}
if (in_array(4, $type))
    echo $this->Form->input('region_id', [
        'id' => 'region_id',
        'type' => 'select',
        'label' => __('Region'),
        'options' => $regions,
    ]);
?>