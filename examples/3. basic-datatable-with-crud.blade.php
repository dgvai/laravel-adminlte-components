@section('content')
<x-dg-card title="Release History" bg="primary">
    <x-dg-datatable id="data_table" :heads="['#', 'Date', 'Hospital', 'Amount']"/>
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
        });
        data_table.on('draw.dt', function () {
            var PageInfo = $('#data_table').DataTable().page.info();
            data_table.column(0, {
                page: 'all'
            }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        });

        $('#data_table tbody').on('click','.edit',function(){
            id = data_table.row($(this).parents('tr')).data().id;
            $.get("{{route('admin.hadmins.get')}}",{id:id},function(r){
                $('#dgid').val(id);
                $('#phone').val(r.data.phone);
                ... 
                ... 
                $('#plate').modal('show');
            });
        });

        $('#data_table tbody').on('click','.delete',function(){
            id = data_table.row($(this).parents('tr')).data().id;
            swalConfirm(function(){
                $.post("{{route('admin.hadmins.delete')}}", {id, _token:'{{csrf_token()}}'}, function(r){
                    responser(r);
                });
            });
        });
    });
</script>
@stop