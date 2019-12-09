<script>            
    /*FooTable Init*/
    //$("#optPendidikan").change(function () {
    //alert($("#optPendidikan :selected").attr('value')) } );
    //$('.radKelamin').on('change', function() {
    //alert($('.radKelamin:checked').attr('value')); });
    //$('input[name="radKelamin"]').on('change', function() {
        //var radioValue = $('input[name="radKelamin"]:checked').val();                
        //var radioValue=$('input:radio:checked').val();
        //alert(radioValue); });
       
        //header('Content-Type: application/json');
        //echo json_encode($data);

    //$(function () {
    $(document).ready(function() {
        "use strict";
                                
        /*Editing FooTable*/                
        var $modal = $('#modal-keluarga'),
        $editor = $('#frmKeluarga'),
        $editorTitle = $('#editor-title'),
        ft = FooTable.init('#footableKeluarga', {
            editing: {
                enabled: true,
                alwaysShow: true, 
                column: {
                        "classes": "footable-editing",
                        "name": "editing",
                        "title": "aksi",                        
                },
                addRow: function(){
                    $modal.removeData('row');
                    $editor[0].reset();
                    $editorTitle.text('Tambah Data Keluarga');
                    $modal.modal('show');
                },
                editRow: function(row){
                    var values = row.val();
                    $editor.find('#txtIDKeluarga').val(values.txtIDKeluarga);
                    $editor.find('#txtNo').val(values.txtNo);
                    $editor.find('#txtHubungan').val(values.txtHubungan);
                    $editor.find('#txtNama').val(values.txtNama);                    
                    var kelamin = values.txtKelamin;                     
                    if (kelamin=="Laki-laki") {$('#radio1').prop('checked',true);$('#radio2').prop('checked',false);}
                     else {$('#radio1').prop('checked',false);$('#radio2').prop('checked',true);}                         
                    $editor.find('#txtUsia').val(values.txtUsia);
                    //var zz = values.txtPendidikan;  
                    //alert(zz);
                    $('#optPendidikan').val(values.idPendidikan);  //bisa

                    $modal.data('row', row);
                    $editorTitle.text('Edit Data Keluarga #' + values.txtNo);
                    $modal.modal('show');
                },
                deleteRow: function(row){
                    //console.log(row.val().txtIDKeluarga);
                    //Warning Message
    
                        swal({   
                            title: "Anda yakin?",   
                            text: "Data yang sudah dihapus tidak bisa dikembalikan!",   
                            type: "warning",   
                            showCancelButton: true,   
                            cancelButtonText: "Batal",   
                            confirmButtonColor: "#fec107",   
                            confirmButtonText: "Ya!",   
                            closeOnConfirm: false 
                        }, function(){   
                            row.delete();
                            var id_keluarga=row.val().txtIDKeluarga;
                            $.ajax({
                                type : "POST",
                                url  : "<?php echo base_url('keluarga/hapus_data_keluarga')?>",
                                dataType : "JSON",
                                data : {id_keluarga: id_keluarga},
                                success: function(data){
                                    location.reload();
                                }
                            });  
                            swal("Berhasil!", "Data berhasil dihapus.", "success"); 
                        });
                        return false;
    
                    // if (confirm('Are you sure you want to delete the row?')){
                    //     row.delete();
                    //     var id_keluarga=row.val().txtIDKeluarga;
                    //     $.ajax({
                    //     type : "POST",
                    //     url  : "<?php echo base_url('keluarga/hapus_data_keluarga')?>",
                    //     dataType : "JSON",
                    //     data : {id_keluarga: id_keluarga},
                    //     success: function(data){
                    //         location.reload();
                    //     }
                    //     });                        
                    // }
                }
            }
        }),
        uid = 0;

        $editor.on('submit', function(e){
            if (this.checkValidity && !this.checkValidity()) return;
            e.preventDefault();
            var row = $modal.data('row'),
                values = {                    
                    txtNo: $editor.find('#txtNo').val(),
                    txtIDKeluarga: $editor.find('#txtIDKeluarga').val(),
                    txtHubungan: $editor.find('#txtHubungan').val(),
                    txtNama: $editor.find('#txtNama').val(),
                    txtKelamin: $editor.find('input:radio:checked').val(),
                    txtUsia: $editor.find('#txtUsia').val(),
                    idPendidikan: $editor.find('#optPendidikan').val(),
                    txtPendidikan: $editor.find('#optPendidikan :selected').text()//, +':'+$editor.find('#optPendidikan :selected').text(),                   
                };
                       
            var url = '';
            if (row instanceof FooTable.Row){ //edit             
                row.val(values);                
                url = '<?php echo base_url('keluarga/update_data_keluarga')?>';
            } else { //tambah
                url = '<?php echo base_url('keluarga/simpan_data_keluarga')?>'; 
                values.txtNo = uid++;
                ft.rows.add(values); 
            }

            $.ajax({
                url: url,
                type: "POST",
                data: $('#frmKeluarga').serialize(),
                //dataType: "html",
                success: function(data){
                    location.reload();
                    //alert('data');
                },
                error: function(jqXHR, textStatus, errorThrown){
                    alert('Error menyimpan data');
                    console.log(data);
                    //console.log(jqXHR);
                    //console.log(jqXHR.responseText);
                    //console.log(textStatus);
                    //console.log(errorThrown);
                }
            });
                           
            $modal.modal('hide');
        });
    });
</script>