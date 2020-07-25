@section('content')
<x-dg-card title="Release History" bg="primary">
    <x-dg-datatable id="data_table" :heads="['#', 'Date', 'Hospital', 'Amount']" :footer="true"/>
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
            footerCallback: function (row, data, start, end, display) {
                let api = this.api();
                var intVal = function (i) {
                    return (typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i === 'number' ? i : 0);
                };
                total = api.column(3).data().reduce(function (a, b) {
                    return parseInt(a) + parseInt(b);
                }, 0);

                $(api.column(3).footer()).html('<b>Total: ' + total + '</b>');
            }
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