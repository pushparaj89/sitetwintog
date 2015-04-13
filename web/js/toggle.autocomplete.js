function toggleAutocomplete(obj) {
    var field = obj.id.split('__',50);
    var hideField = field[0];
    var removeField = field[0].replace('autocomplete_','');
    var acLabel = obj.id+'_label';
    if($('#'+obj.id).attr('checked') == true){
        $('#'+hideField).hide();
        var val = $("#"+hideField).val();
        $('#'+removeField).remove();

        var new_input = document.createElement("input");
        new_input.setAttribute("id", removeField); //Assign old hidden input ID to new input
        new_input.setAttribute("type","text"); //Set proper type
        new_input.setAttribute("size","60"); //Set proper type
        new_input.value = val; //Transfer the value to new input
        new_input.name = obj.value;

        $('#'+hideField).before(new_input);
        $('#'+acLabel).html('Uncheck to enable autocomplete')
    }
    else {
        $('#'+hideField).show();
        $('#'+removeField).hide();
        $('#'+acLabel).html('Check to disable autocomplete')
    }

}

function toggleAutocompleteSurgeon(obj) {
    var field = obj.id.split('__',50);
    var hideField = field[0];
    var removeField = field[0].replace('autocomplete_','');
    var acLabel = obj.id+'_label';
    if($('#'+obj.id).attr('checked') == true){
        $('#'+hideField).hide();
        var val = $("#"+hideField).val();
        $('#'+removeField).remove();

        var new_input = document.createElement("input");
        new_input.setAttribute("id", removeField); //Assign old hidden input ID to new input
        new_input.setAttribute("type","text"); //Set proper type
        new_input.setAttribute("size","60"); //Set proper type
        new_input.setAttribute('class', 'logbook_surgeon_name')
        new_input.value = val; //Transfer the value to new input
        new_input.name = obj.value;

        $('#'+hideField).before(new_input);
        $('#'+acLabel).html('Uncheck to enable autocomplete')
    }
    else {
        $('#'+hideField).show();
        $('#'+removeField).hide();
        $('#'+acLabel).html('Check to disable autocomplete')
    }

}

/*
 * Below function used for reference
 */

//function toggleAutocompleteRefenrence(obj) {
//      var id = obj.id;var aclabel = id+'_label';
//      if($('#'+id).attr('checked') == true){
//          $('#autocomplete_logbooks_consultant_name_5').hide();
//          var val = $("#autocomplete_logbooks_consultant_name_5").val();
//          $('#logbooks_consultant_name_5').remove();
//          var new_input = document.createElement("input");
//          new_input.setAttribute("id", "logbooks_consultant_name_5"); //Assign old hidden input ID to new input
//          new_input.setAttribute("type","text"); //Set proper type
//          new_input.setAttribute("size","60"); //Set proper type
//          new_input.value = val; //Transfer the value to new input
//          new_input.name = 'logbooks[consultant_name_5]';
//          $('#autocomplete_logbooks_consultant_name_5').before(new_input);
//          $('#'+aclabel).html('Uncheck to enable autocomplete')
//      }
//      else {
//          $('#autocomplete_logbooks_consultant_name_5').show();
//          $('#logbooks_consultant_name_5').hide();
//          $('#'+aclabel).html('Check to disable autocomplete')
//      }
//  }