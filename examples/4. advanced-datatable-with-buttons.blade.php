@section('content')
<x-dg-card title="Release History" bg="primary">
    <x-dg-datatable id="data_table" :heads="['#', 'Date', 'Hospital', 'Amount']" :buttons="true"/>
</x-dg-card>
@stop

@section('js')
<script>
    $(()=>{
        data_table = $('#data_table').DataTable({
            ajax: {
                url: "{{route('admin.balances.index')}}",
                type: 'GET',
                dataSrc: function (json) {
                    data = json.data;
                    let embed_data = new Array();
                    for (let i = 0; i < data.length; i++) {
                        embed_data.push({
                            id : data[i].id,
                            date : moment(data[i].updated_at).format('YYYY-MM-DD | LT'),
                            hospital : data[i].user.hospital.name,
                            amount : data[i].amount,
                        });
                    }
                    return embed_data;
                }
            },
            columns : [
                {data: null, defaultContent : ''},
                {data: 'date'},
                {data: 'hospital'},
                {data: 'amount'},
            ],
            order: [],
            autoWidth: false,
            dom: 'Blfrtip',
            buttons: [
                {
                    extend: 'print',
                    footer: true,
                    text: '<i class="fas fa-print" data-toggle="tooltip" title="Print Current Page"></i>',
                    className: 'btn btn-sm btn-info',
                    exportOptions: {
                        modifier: {
                            order: 'applied',
                            page: 'current',
                            search: 'applied'
                        },
                        columns: [0, 1, 2, 3]
                    },
                    customize: function (win) {
                        $(win.document.body).find('table').addClass('printer')
                    }
                }, 
                {
                    extend: 'excelHtml5',
                    footer: true,
                    text: '<i class="fas fa-file-excel" data-toggle="tooltip" title="Excel Sheet Current Page"></i>',
                    className: 'btn btn-sm btn-info',
                    exportOptions: {
                        modifier: {
                            order: 'applied',
                            page: 'current',
                            search: 'applied'
                        },
                        columns: [0, 1, 2, 3]
                    }
                }, 
                {
                    extend: 'print',
                    footer: true,
                    text: '<i class="fas fa-print" data-toggle="tooltip" title="Print All Pages"></i>',
                    className: 'btn btn-sm btn-success',
                    exportOptions: {
                        modifier: {
                            order: 'applied',
                            page: 'all',
                            search: 'applied'
                        },
                        columns: [0, 1, 2, 3]
                    },
                    customize: function (win) {
                        $(win.document.body).find('table').addClass('printer')
                    }
                }, 
                {
                    extend: 'excelHtml5',
                    footer: true,
                    text: '<i class="fas fa-file-excel" data-toggle="tooltip" title="Excel Sheet All Pages"></i>',
                    className: 'btn btn-sm btn-success',
                    exportOptions: {
                        modifier: {
                            order: 'applied',
                            page: 'all',
                            search: 'applied'
                        },
                        columns: [0, 1, 2, 3]
                    }
                }
            ],
        });
        data_table.on('draw.dt', function () {
            var PageInfo = $('#data_table').DataTable().page.info();
            data_table.column(0, {
                page: 'all'
            }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        });
    });
</script>
@stop