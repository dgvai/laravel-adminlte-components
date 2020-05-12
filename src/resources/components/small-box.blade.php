<div class="small-box bg-{{$bg}}">
    @if($loading)
    <div class="overlay dark">
        <i class="fas fa-3x fa-sync-alt"></i>
    </div>
    @endif
    <div class="inner">
        <h3>{{$text}}</h3>
        <p>{{$title}}</p>
    </div>
    <div class="icon">
        <i class="{{$icon}}"></i>
    </div>
    <a href="{{$url}}" class="small-box-footer"> 
        {{$urlTextLine}} <i class="fas fa-arrow-circle-right"></i>
    </a>
</div>