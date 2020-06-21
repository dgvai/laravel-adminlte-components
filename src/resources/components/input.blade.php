<div class="form-group {{$topclass}}">
    <label for="{{$id}}">{{$label}}</label>
    <input type="{{$type}}" class="{{$inputclass}} form-control @error($name) is-invalid @enderror" 
    id="{{$id}}" name="{{$name}}" placeholder="{{$placeholder}}" 
    step="{{$step}}" max="{{$max}}" maxlength="{{$maxlength}}" pattern="{{$pattern}}"
    value="{{$value}}" 
    {{($required) ? 'required' : '' }} 
    {{($disabled) ? 'disabled' : '' }}>

    @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>