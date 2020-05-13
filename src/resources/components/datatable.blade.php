@if($beautify)
<style>#{{$id}} tbody tr td { vertical-align: middle; text-align: center; }</style>
@endif  
<table id="{{$id}}" class="table {{$border}} {{$hover}}">
    <thead>
        <tr>
            @foreach($heads as $th)
            @if(isset($th->name))
            <td style="width:{{$th->width}}%">{{$th->name}}</td>
            @else
            <td>{{$th}}</td>
            @endif
            @endforeach
        </tr>
    </thead>
    <tbody>

    </tbody>

    @if($footer)
    <tfoot>
        <tr>
            @foreach($heads as $foot)
            <th></th>
            @endforeach
        </tr>
    </tfoot>
    @endif
</table>