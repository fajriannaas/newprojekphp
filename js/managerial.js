$(function () {
    var total;

    $('input[name="com_rad"]').click(function (e) {
        $('#com_value').val($('input[name="com_rad"]:checked').val());
        total = $('input[name="com_rad"]:checked').val();
    })

    $('input[name="com_rad2"]').click(function (e) {
        $('#com_value2').val($('input[name="com_rad2"]:checked').val());
        // alert('Hello');
    })


    $('input[name="com_rad3"]').click(function (e) {
        $('#com_value3').val($('input[name="com_rad3"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad4"]').click(function (e) {
        $('#com_value4').val($('input[name="com_rad4"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad5"]').click(function (e) {
        $('#com_value5').val($('input[name="com_rad5"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad6"]').click(function (e) {
        $('#com_value6').val($('input[name="com_rad6"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad7"]').click(function (e) {
        $('#com_value7').val($('input[name="com_rad7"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad8"]').click(function (e) {
        $('#com_value8').val($('input[name="com_rad8"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad9"]').click(function (e) {
        $('#com_value9').val($('input[name="com_rad9"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad10"]').click(function (e) {
        $('#com_value10').val($('input[name="com_rad10"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad11"]').click(function (e) {
        $('#com_value11').val($('input[name="com_rad11"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad12"]').click(function (e) {
        $('#com_value12').val($('input[name="com_rad12"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad13"]').click(function (e) {
        $('#com_value13').val($('input[name="com_rad13"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad14"]').click(function (e) {
        $('#com_value14').val($('input[name="com_rad14"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad15"]').click(function (e) {
        $('#com_value15').val($('input[name="com_rad15"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad16"]').click(function (e) {
        $('#com_value16').val($('input[name="com_rad16"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad17"]').click(function (e) {
        $('#com_value17').val($('input[name="com_rad17"]:checked').val());
        // alert('Hello');
    })

    $('input[name="com_rad18"]').click(function (e) {
        $('#com_value18').val($('input[name="com_rad18"]:checked').val());
        // alert('Hello');
    })


    // function kali(){
    //     let a = $('input[name="rad_com_1"]:checked').val();
    //     let b = $('input[name="rad_prof_1"]:checked').val();
    //     return Math.round(a*b)
    // }


    // if ($('input[name="rad_com_1"]').change() && $('input[name="rad_prof_1"]').change()) {
    //     this.kali();
    //     console.log('ok');
    // }

    $('input[name="rad_prof_1"]').change(function () {
        let a = $('input[name="rad_com_1"]:checked').val();
        let b = $('input[name="rad_prof_1"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_2"]').change(function () {
        let a = $('input[name="rad_comp_2"]:checked').val();
        let b = $('input[name="rad_prof_2"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value2"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_3"]').change(function () {
        let a = $('input[name="rad_orawa_3"]:checked').val();
        let b = $('input[name="rad_prof_3"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value3"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_4"]').change(function () {
        let a = $('input[name="rad_in_4"]:checked').val();
        let b = $('input[name="rad_prof_4"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value4"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_5"]').change(function () {
        let a = $('input[name="rad_tc_5"]:checked').val();
        let b = $('input[name="rad_prof_5"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value5"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_6"]').change(function () {
        let a = $('input[name="rad_ccl_6"]:checked').val();
        let b = $('input[name="rad_prof_6"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value6"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_7"]').change(function () {
        let a = $('input[name="rad_int_7"]:checked').val();
        let b = $('input[name="rad_prof_7"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value7"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_8"]').change(function () {
        let a = $('input[name="rad_ad_8"]:checked').val();
        let b = $('input[name="rad_prof_8"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value8"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_9"]').change(function () {
        let a = $('input[name="rad_hse_9"]:checked').val();
        let b = $('input[name="rad_prof_9"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value9"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_10"]').change(function () {
        let a = $('input[name="rad_ld_10"]:checked').val();
        let b = $('input[name="rad_prof_10"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value10"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_11"]').change(function () {
        let a = $('input[name="rad_fm_11"]:checked').val();
        let b = $('input[name="rad_prof_11"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value11"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_12"]').change(function () {
        let a = $('input[name="rad_st_12"]:checked').val();
        let b = $('input[name="rad_prof_12"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value12"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_13"]').change(function () {
        let a = $('input[name="rad_langu_13"]:checked').val();
        let b = $('input[name="rad_prof_13"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value13"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_14"]').change(function () {
        let a = $('input[name="rad_rm_14"]:checked').val();
        let b = $('input[name="rad_prof_14"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value14"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_15"]').change(function () {
        let a = $('input[name="rad_psj_15"]:checked').val();
        let b = $('input[name="rad_prof_15"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value15"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_16"]').change(function () {
        let a = $('input[name="rad_fe_16"]:checked').val();
        let b = $('input[name="rad_prof_16"]:checked').val();
        let c = Math.round(a * b)
        $('input[name="com_value16"]').val(c)
        console.log(c);
    })

    $('input[name="rad_prof_1"]').change(function () {
        let a = $('input[name="com_value"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_1"]').change(function () {
        let a = $('input[name="com_value"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })

    $('input[name="rad_prof_2"]').change(function () {
        let a = $('input[name="com_value2"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_2"]').change(function () {
        let a = $('input[name="com_value2"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })

    $('input[name="rad_prof_3"]').change(function () {
        let a = $('input[name="com_value3"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_3"]').change(function () {
        let a = $('input[name="com_value3"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })

    $('input[name="rad_prof_4"]').change(function () {
        let a = $('input[name="com_value4"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_4"]').change(function () {
        let a = $('input[name="com_value4"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })

    $('input[name="rad_prof_5"]').change(function () {
        let a = $('input[name="com_value5"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_5"]').change(function () {
        let a = $('input[name="com_value5"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })

    $('input[name="rad_prof_6"]').change(function () {
        let a = $('input[name="com_value6"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_6"]').change(function () {
        let a = $('input[name="com_value6"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })

    $('input[name="rad_prof_7"]').change(function () {
        let a = $('input[name="com_value7"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_7"]').change(function () {
        let a = $('input[name="com_value7"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })

    $('input[name="rad_prof_8"]').change(function () {
        let a = $('input[name="com_value8"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_8"]').change(function () {
        let a = $('input[name="com_value8"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })

    $('input[name="rad_prof_9"]').change(function () {
        let a = $('input[name="com_value9"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_9"]').change(function () {
        let a = $('input[name="com_value9"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })

    $('input[name="rad_prof_10"]').change(function () {
        let a = $('input[name="com_value10"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_10"]').change(function () {
        let a = $('input[name="com_value10"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })

    $('input[name="rad_prof_11"]').change(function () {
        let a = $('input[name="com_value11"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_11"]').change(function () {
        let a = $('input[name="com_value11"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })
    $('input[name="rad_prof_12"]').change(function () {
        let a = $('input[name="com_value12"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_12"]').change(function () {
        let a = $('input[name="com_value12"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })
    $('input[name="rad_prof_13"]').change(function () {
        let a = $('input[name="com_value13"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_13"]').change(function () {
        let a = $('input[name="com_value13"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })
    $('input[name="rad_prof_14"]').change(function () {
        let a = $('input[name="com_value14"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_14"]').change(function () {
        let a = $('input[name="com_value14"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);
    })
    $('input[name="rad_prof_15"]').change(function () {
        let a = $('input[name="com_value15"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(a);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(c);
    })

    $('input[name="rad_prof_15"]').change(function () {
        let a = $('input[name="com_value15"]').val();
        let b = $('input[name="com_value17"]').val();
        let c = Math.round(b);
        $('input[name="com_value17"]').val(c);
        $('input[name="com_value18"]').val(c);
        console.log(typeof c);

        $('input[name="rad_prof_16"]').change(function () {
            let a = $('input[name="com_value16"]').val();
            let b = $('input[name="com_value17"]').val();
            let c = Math.round(a);
            $('input[name="com_value17"]').val(c);
            $('input[name="com_value18"]').val(c);
            console.log(c);
        })

        $('input[name="rad_prof_16"]').change(function () {
            let a = $('input[name="com_value16"]').val();
            let b = $('input[name="com_value17"]').val();
            let c = Math.round(b);
            $('input[name="com_value17"]').val(c);
            $('input[name="com_value18"]').val(c);
            console.log(typeof c);
        })

    })
})