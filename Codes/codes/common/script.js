


$(document).ready(function() {
	var d = new Date();
    var table = $('#example').DataTable( {
        lengthChange: false,
		
        buttons: [ '',{
                extend: '',
                title: 'Data export: '+d+' -HABIT-O-CIRCLE'
            },
            {
                extend: '',
                title: 'Data export: '+d+' -HABIT-O-CIRCLE'
            }, '' ],
		
      responsive: {
            details: {
                renderer: function ( api, rowIdx, columns ) {
                    var data = $.map( columns, function ( col, i ) {
                        return col.hidden ?
                            '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
                                '<td>'+col.title+':'+'</td> '+
                                '<td>'+col.data+'</td>'+
                            '</tr>' :
                            '';
                    } ).join('');
 
                    return data ?
                        $('<table/>').append( data ) :
                        false;
                }
            }
        }
    } );
 
    table.buttons().container()
        .insertBefore( '#example_filter' );
} )

