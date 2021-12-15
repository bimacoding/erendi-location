<script src="{{ asset('vendor/location/js/select2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.js-selected').select2();
    });
    var kd_provx = $("#provinces").val();
    var kd_kabx = $("#cities").val();
    var kd_kecx = $("#district").val();
    $.ajax({
        url: "{{ url('/location/city') }}",
        method: "POST",
        data: {
            prov: kd_provx
        },
        async: false,
        dataType: 'json',
        success: function(data) {
            var html = '<option value="0">-- SELECT --</option>';
            var i;
            for (i = 0; i < data.length; i++) {
                html += '<option value=' + data[i].city_id + '>' + data[i].city_name +
                    '</option>';
            }
            $('#cities').html(html);
        }
    });

    $.ajax({
        url: "{{ url('/location/district') }}",
        method: "POST",
        data: {
            city: kd_kabx
        },
        async: false,
        dataType: 'json',
        success: function(data) {
            var html = '<option value="0">-- SELECT --</option>';
            var i;
            for (i = 0; i < data.length; i++) {
                html += '<option value=' + data[i].dis_id + '>' + data[i].dis_name +
                    '</option>';
            }
            $('#district').html(html);

        }
    });

    $.ajax({
        url: "{{ url('/location/subdistrict') }}",
        method: "POST",
        data: {
            dis: kd_kecx
        },
        async: false,
        dataType: 'json',
        success: function(data) {
            var html = '<option value="0">-- SELECT --</option>';
            var i;
            for (i = 0; i < data.length; i++) {
                html += '<option value=' + data[i].subdis_id + '>' + data[i].subdis_name +
                    '</option>';
            }
            $('#subdistrict').html(html);
        }
    });

    $("#provinces").change(function() {
        var kd_prov = $(this).val();
        $.ajax({
            url: "{{ url('/location/city') }}",
            method: "POST",
            data: {
                prov: kd_prov
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '<option value="0">-- SELECT --</option>';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].city_id + '>' + data[i].city_name +
                        '</option>';
                }
                $('#cities').html(html);
            }
        });
    });

    $("#cities").change(function() {
        var kd_kab = $(this).val();
        $.ajax({
            url: "{{ url('/location/district') }}",
            method: "POST",
            data: {
                city: kd_kab
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '<option value="0">-- SELECT --</option>';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].dis_id + '>' + data[i].dis_name +
                        '</option>';
                }
                $('#district').html(html);

            }
        });
    });

    $("#district").change(function() {
        var kd_kec = $(this).val();
        $.ajax({
            url: "{{ url('/location/subdistrict') }}",
            method: "POST",
            data: {
                dis: kd_kec
            },
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '<option value="0">-- SELECT --</option>';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value=' + data[i].subdis_id + '>' + data[i].subdis_name +
                        '</option>';
                }
                $('#subdistrict').html(html);
            }
        });
    });
</script>
