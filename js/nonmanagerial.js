$(function () {
    function updateComValue(inputName, targetId) {
        var selectedValue = $('input[name="' + inputName + '"]:checked').val();
        $('#' + targetId).val(selectedValue);
        console.log(selectedValue);

        // Mengupdate com_value11 dan com_value12
        var comValue = Math.round(selectedValue);
        $('input[name="com_value11"]').val(comValue);
        $('input[name="com_value12"]').val(comValue);
    }

    $('input[name="rad_prof_1"]').change(function () {
        updateComValue('rad_prof_1', 'com_value');
    });

    $('input[name="rad_prof_2"]').change(function () {
        updateComValue('rad_prof_2', 'com_value2');
    });

    $('input[name="rad_prof_3"]').change(function () {
        updateComValue('rad_prof_3', 'com_value3');
    });

    $('input[name="rad_prof_4"]').change(function () {
        updateComValue('rad_prof_4', 'com_value4');
    });

    $('input[name="rad_prof_5"]').change(function () {
        updateComValue('rad_prof_5', 'com_value5');
    });

    $('input[name="rad_prof_6"]').change(function () {
        updateComValue('rad_prof_6', 'com_value6');
    });

    $('input[name="rad_prof_7"]').change(function () {
        updateComValue('rad_prof_7', 'com_value7');
    });

    $('input[name="rad_prof_8"]').change(function () {
        updateComValue('rad_prof_8', 'com_value8');
    });

    $('input[name="rad_prof_9"]').change(function () {
        updateComValue('rad_prof_9', 'com_value9');
    });

    $('input[name="rad_prof_10"]').change(function () {
        updateComValue('rad_prof_10', 'com_value10');
    });
});
