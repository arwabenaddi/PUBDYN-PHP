// Please see documentation at https://docs.microsoft.com/aspnet/core/client-side/bundling-and-minification
// for details on configuring this project to bundle and minify static web assets.

// Write your JavaScript code.
function DefaultDataTable(tableId, searchFieldName) {
    //loadDataTablesScripts(); //check if DataTables scripts are loaded

    var table = $(tableId).DataTable({
        paging: false,
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        "autoWidth": false,
        "ordering": true,
        "responsive": true,
        'dom': 'Blrtp'
    })

    $('#' + searchFieldName + '').on('keyup',
        function () {
            table.search(this.value).draw();
        });
}

function DefaultDataTable1(tableId, columnsArray) {
    //loadDataTablesScripts(); //check if DataTables scripts are loaded

    var table = $(tableId).DataTable({
        paging: false,
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        "autoWidth": false,
        "ordering": true,
        "responsive": true,
        'dom': 'Blrtp',
        buttons: [
            {
                extend: 'excelHtml5',
                className: 'btn',
                exportOptions: {
                    format: {
                        header: function (data, columnIdx) { //remove select list before export
                            var pos = data.search('<select');
                            if (pos > 0) {
                                data = data.substr(0, pos);
                            };
                            pos = data.search('<br');
                            if (pos > 0) {
                                data = data.substr(0, pos);
                            };
                            return data;
                        }
                    }
                }
            },
            // {
            //     extend: 'pdfHtml5',
            //     className: 'btn',
            //     exportOptions: {
            //         format: {
            //             header: function (data, columnIdx) {//remove select list before export
            //                 var pos = data.search('<select');
            //                 if (pos > 0) {
            //                     data = data.substr(0, pos);
            //                 };
            //                 var pos = data.search('<br');
            //                 if (pos > 0) {
            //                     data = data.substr(0, pos);
            //                 };
            //                 return data;
            //             }
            //         }
            //     }
            // },
            //'pdfHtml5'
        ],
        info: false,
        //orderCellsTop: true,
        fixedHeader: true,

        initComplete: function () {
            this.api().columns(columnsArray).every(function () {
                var column = this;
                var select = $('<br/><select class="form-control" data-val="true" style="font-size:0.75rem;"><option value="">All</option></select>')
                    .appendTo($(column.header()))//.empty())
                    .on('change', function () {
                        console.log($(this).val());
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
                        console.log(val);
                        column
                            .search(val ? '^' + val + '$' : '', true, false)
                            .draw();
                    });

                column.data().unique().sort().each(function (d, j) {
                    var val = $('<div/>').html(d).text();
                    $('<option />', { value: val, text: val }).appendTo(select); //use DOM-scritp rather than direct html to avoid quote issues.
                });
            });
        },


    });//fin var table

    $('#searchField').on('keyup',
        function () {
            table.search(this.value).draw();
        });



}
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();