<script>
    /* Datetimepicker Init*/
    $('#datetimepicker1').datetimepicker({
            useCurrent: false,
            icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down"
                },
                format: 'DD/MM/YYYY'
        }).on('dp.show', function() {
        if($(this).data("DateTimePicker").date() === null)
            $(this).data("DateTimePicker").date(moment());
    });
</script>