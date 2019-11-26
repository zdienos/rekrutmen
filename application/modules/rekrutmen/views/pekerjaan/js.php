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

    $(function () {
        "use strict";
                                
        /*Editing FooTable*/                
        var $modal = $('#editor-modal'),
        $editor = $('#editor'),
        $editorTitle = $('#editor-title'),
        ft = FooTable.init('#footablePendidikan', {
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
                    $editorTitle.text('Tambah Data Pendidikan');
                    $modal.modal('show');
                },
                    idPendidikan: $editor.find('#optPendidikan').val(),
                    txtPendidikan: $editor.find('#optPendidikan :selected').text(),// +':'+$editor.find('#optPendidikan :selected').text(),
                    txtNamaSekolah: $editor.find('#txtNamaSekolah').val(),
                    txtKota: $editor.find('#txtKota').val(),
                    txtTahunLulus: $editor.find('#txtTahunLulus').val(),
                    txtJurusan: $editor.find('#txtJurusan').val(),
                    txtNilaiRatarata: $editor.find('#txtNilaiRatarata').val(),     

                editRow: function(row){
                    var values = row.val();
                    $editor.find('#txtNo').val(values.txtNo);
                    $editor.find('#txtPendidikan').val(values.txtPendidikan);
                    $editor.find('#txtNamaSekolah').val(values.txtNamaSekolah);
                    $editor.find('#txtKota').val(values.txtKota);
                    $editor.find('#txtTahunLulus').val(values.txtTahunLulus);
                    $editor.find('#txtJurusan').val(values.txtJurusan);
                    $editor.find('#txtNilaiRatarata').val(values.txtNilaiRatarata);                    
                    $('#optPendidikan').val(values.idPendidikan);  //bisa

                    $modal.data('row', row);
                    $editorTitle.text('Edit Data Pendidikan #' + values.txtNo);
                    $modal.modal('show');
                },
                deleteRow: function(row){
                    if (confirm('Are you sure you want to delete the row?')){
                        row.delete();
                    }
                }			
            }
        }),
        uid = 3;

        $editor.on('submit', function(e){
            if (this.checkValidity && !this.checkValidity()) return;
            e.preventDefault();
            var row = $modal.data('row'),
                values = {
                    txtNo: $editor.find('#txtNo').val(),
                    idPendidikan: $editor.find('#optPendidikan').val(),
                    txtPendidikan: $editor.find('#optPendidikan :selected').text(),// +':'+$editor.find('#optPendidikan :selected').text(),
                    txtNamaSekolah: $editor.find('#txtNamaSekolah').val(),
                    txtKota: $editor.find('#txtKota').val(),
                    txtTahunLulus: $editor.find('#txtTahunLulus').val(),
                    txtJurusan: $editor.find('#txtJurusan').val(),
                    txtNilaiRatarata: $editor.find('#txtNilaiRatarata').val(),                    
                    
                    //startedOn: moment($editor.find('#startedOn').val(), 'YYYY-MM-DD'),
                    //dob: moment($editor.find('#dob').val(), 'YYYY-MM-DD')
                };

            if (row instanceof FooTable.Row){                
                row.val(values);
            } else {
                values.txtNo = uid++;
                ft.rows.add(values);
            }
            $modal.modal('hide');
        });
    });
</script>