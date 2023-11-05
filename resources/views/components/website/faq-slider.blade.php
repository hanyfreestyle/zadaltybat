<div class="card">
    <div class="card-header" id="heading{{$prefix}}">
        <h6 class="mb-0"> <a class="collapsed" data-bs-toggle="collapse" href="#collapse{{$prefix}}" aria-expanded="false" aria-controls="collapse{{$prefix}}">{{ $title }}</a> </h6>
    </div>
    <div id="collapse{{$prefix}}" class="collapse @if($loop == 0) show @endif" aria-labelledby="heading{{$prefix}}" data-bs-parent="#accordion">
        <div class="card-body">
            {{$slot}}
        </div>
    </div>
</div>
