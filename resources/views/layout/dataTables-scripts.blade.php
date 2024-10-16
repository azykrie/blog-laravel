<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: '<"d-flex justify-content-between align-items-center"lfB>rt<"d-flex justify-content-between"ip>',
            buttons: [
                {
                extend: 'excel',
                className: 'btn btn-sm btn-primary',
                exportOptions: {
                    columns: ':not(:last-child)' 
                }
        },
        {
            extend: 'csv',
            className: 'btn btn-sm btn-primary',
            exportOptions: {
                    columns: ':not(:last-child)' 
                }
        },
        {
            extend: 'pdf',
            className: 'btn btn-sm btn-primary',
            exportOptions: {
                    columns: ':not(:last-child)' 
                }
        },
        {
            extend: 'print',
            className: 'btn btn-sm btn-primary',
            exportOptions: {
                    columns: ':not(:last-child)' 
                }
        }
    ],
    "paging": true,
    "searching": true,
    "info": true,
    "autoWidth": false,
    "lengthMenu": [ [10, 25, 50, 100], [10, 25, 50, 100] ],
    "pageLength": 10
});
});
</script>