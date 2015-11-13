$(document).ready(function(){
    //$('table').DataTable();
});

$('#form_discussion').ajaxForm({
    type: 'POST',
    url: MyNameSpace.config.base_url+'admin/add_discussion',
    beforeSubmit: function(arr, jform, option){
        $('#btn_add').prop('disabled', true);
        var form = jform[0];
        if (validateinput(form.inp_discussion.value.trim()) ==  false){
            $('#special-character').show();
            return false;
        }else{
            $('#special-character').hide();
        }
    },
    success:  function(html){
        $('#btn_add').prop('disabled', false);
        //console.log(html);
        location.reload();
    }
});

$('#form_forum').ajaxForm({
    type: 'POST',
    url: MyNameSpace.config.base_url+'admin/add_forum',
    beforeSubmit: function(arr, jform, option){
        $('#btn_add_forum').prop('disabled', true);
        var form = jform[0];
        if (validateinput(form.inp_forum.value.trim()) ==  false){
            $('#special-character').show();
            return false;
        }else{
            $('#special-character').hide();
        }
    },
    success:  function(html){
        $('#btn_add_forum').prop('disabled', false);
        //console.log(html);
        //$('#table-threads tr:last').after('<tr>...</tr><tr>...</tr>'); //append to table code
        location.reload();
    }
});

$('#form_threads').ajaxForm({
    type: 'POST',
    url: MyNameSpace.config.base_url+'admin/add_threads',
    beforeSubmit: function(arr, jform, option){
        $('#btn_add_threads').prop('disabled', true);
        var form = jform[0];
        if (validateinput(form.inp_thread.value.trim()) ==  false){
            $('#special-character-threads').text();
            $('#special-character-threads').text('Special characters are not allowed.');
            $('#special-character-threads').show();
            $('#btn_add_threads').prop('disabled', false);
            return false;
        }else if( $('#sel_threads_discussion').val() == 0 ){
            $('#special-character-threads').text();
            $('#special-character-threads').text('Please select a discussion.');
            $('#special-character-threads').show();
            $('#btn_add_threads').prop('disabled', false);
            return false;
        }else{
            $('#special-character').hide();
        }
    },
    success:  function(html){
        $('#btn_add_threads').prop('disabled', false);
        console.log(html);
        //$('#table-threads tr:last').after('<tr>...</tr><tr>...</tr>'); //append to table code
        //location.reload();
    }
});

$('#sel_threads_discussion').on('change', function(){
    $.ajax({
        url: MyNameSpace.config.base_url+'admin/ajaxcontent',
        type:'post',
        data: {
            id : $('#sel_threads_discussion').val()
        },
        dataType: 'json',
        success: function(data) {
            console.log(data);
            $.each( data, function( key, value ) {
                $('#sel_threads_forum')
                    .show()
                    .empty()
                    .append($("<option></option>")
                    .attr("value", value.content_id)
                    .text(value.content_title));
            });
        }
    });
});

//$('#sel_forum_discussion').on('change', function(){
//    alert($('#sel_forum_discussion').val());
//});