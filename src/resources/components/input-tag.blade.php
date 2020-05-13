<div class="form-group {{$topclass}}">
    <label for="{{$id}}">{{$label}}</label>
    <input type="text" class="{{$inputclass}}" 
    data-role="tagsinput" id="{{$id}}" name="{{$name}}"
    {{($required) ? 'required' : '' }} 
    {{($disabled) ? 'disabled' : '' }} />
</div>

@section('js')
    @parent
    <script>
        $('#{{$id}}').tagsinput({
            trimValue: true,
            maxTags: {{$max}},
        });
    </script>
@endsection
