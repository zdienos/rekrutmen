<script>
    // function simpan_data(){              
    //         // if(!$('#txtNamaLengkap').val()) {
    //         //     alert('Nama tidak boleh kosong');
    //         //     $('#txtNamaLengkap').focus();
    //         //     return false;              
    //         // }
    //         // if(!$('#txtTempatLahir').val()) {
    //         //     alert('Tempat lahir tidak boleh kosong');
    //         //     $('#txtTempatLahir').focus();
    //         //     return false;              
    //         // }
    //         // if(!$('#txtTglLahir').val()) {
    //         //     alert('Tgl lahir tidak boleh kosong');
    //         //     $('#txtTglLahir').focus();
    //         //     return false;              
    //         // }
    //         // if(!$('#txtAlamatLengkap').val()) {
    //         //     alert('Alamat lengkap tidak boleh kosong');  
    //         //     $('#txtAlamatLengkap').focus();
    //         //     return false;              
    //         // }
    //         // if(!$('#txtNoHandphone').val()) {
    //         //     alert('No handphone tidak boleh kosong');  
    //         //     $('#txtNoHandphone').focus();
    //         //     return false;              
    //         // }
    //         // if(!$('#txtNoKTP').val()) {
    //         //     alert('No KTP tidak boleh kosong');  
    //         //     $('#txtNoKTP').focus();
    //         //     return false;              
    //         // }
    //         // if(!$('#optAgama').val()) {
    //         //     alert('Silahkan pilih agama');  
    //         //     $('#optAgama').focus();
    //         //     return false;              
    //         // }
    //         // if(!$('#optStatus').val()) {
    //         //     alert('Silahkan pilih status');  
    //         //     $('#optStatus').focus();
    //         //     return false;              
    //         // }
    //         url = '<?php echo base_url('diri/simpan_data_diri')?>';    
    //         $.ajax({
    //             url: url,
    //             type: "POST",
    //             data: $('#frmDiri').serialize(),
    //             dataType: "JSON",
    //             success: function(data){
    //                 location.reload();
    //             },
    //             error: function(jqXHR, textStatus, errorThrown){
    //                 alert('Error menyimpan data');
    //                 console.log(jqXHR.responseText)
    //             }
    //         // });
    //     };
    function simpan_data() {
        url = '<?php echo base_url('diri/simpan_data_diri')?>';
        $.ajax({
            url: url,
            type: "POST",
            data: $('#frmDiri').serialize(),
            dataType: "json",
            success: function(data){
                //location.reload();
                //alert(data);
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert('Error menyimpan data');
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });

    };
    $(document).ready(function(){
        /* Datetimepicker Init*/
        $('#datetimepicker1').datetimepicker({
                useCurrent: false,
                icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down"
                    },
                    format: 'DD-MM-YYYY'
            }).on('dp.show', function() {
            if($(this).data("DateTimePicker").date() === null)
                $(this).data("DateTimePicker").date(moment());
        });

        //get_data_diri

        
        
    




    });//ready

</script>



	