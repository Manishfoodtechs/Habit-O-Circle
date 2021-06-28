

var datatablesOptions = {
    "serverSide": true,
    "ajaxSource": '[server.php]',
    "processing": true,
    "columns": [
        { bVisible = false }, // assume this is the id of the row, so don't show it
        null,
        null,
        null,
        /* EDIT */ {
            mRender: function (data, type, row) {
                return '<a class="table-edit" data-id="' + row[0] + '">EDIT</a>'
            }
        }
        /* DELETE */ {
            mRender: function (data, type, row) {
                return '<a class="table-delete" data-id="' + row[0] + '">DELETE</a>'
            }
        },              
     ]
};
$('#table').dataTable(datatablesOptions);