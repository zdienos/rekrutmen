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


    $(function () {
        "use strict";
                        
        /*Editing FooTable*/                
        var $modal = $('#editor-modal'),
        $editor = $('#editor'),
        $editorTitle = $('#editor-title'),
        ft = FooTable.init('#footableKeluarga', {
            editing: {
                enabled: true,
                alwaysShow: true, 
                addRow: function(){
                    $modal.removeData('row');
                    $editor[0].reset();
                    $editorTitle.text('Tambah Data Keluarga');
                    $modal.modal('show');
                },
                editRow: function(row){
                    var values = row.val();
                    $editor.find('#txtNo').val(values.txtNo);
                    $editor.find('#txtHubungan').val(values.txtHubungan);
                    $editor.find('#txtNama').val(values.txtNama);                    
                    var kelamin = values.txtKelamin;                     
                    if (kelamin=="Laki-laki") {$('#radio1').prop('checked',true);$('#radio2').prop('checked',false);}
                     else {$('#radio1').prop('checked',false);$('#radio2').prop('checked',true);}                         
                    $editor.find('#txtUsia').val(values.txtUsia);
                    var zz = values.txtPendidikan;  

                    $('#optPendidikan').val(zz);  //bisa


                    $modal.data('row', row);
                    $editorTitle.text('Edit Data Keluarga #' + values.txtNo);
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
                    txtHubungan: $editor.find('#txtHubungan').val(),
                    txtNama: $editor.find('#txtNama').val(),
                    txtKelamin: $editor.find('input:radio:checked').val(),
                    txtUsia: $editor.find('#txtUsia').val(),
                    txtPendidikan: $editor.find('#optPendidikan').val()
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