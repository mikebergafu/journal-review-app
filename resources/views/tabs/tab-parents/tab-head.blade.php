@if($active ?? '')
    <li class="{{$active}}">
        <button class="btn" href="{{$ref}}" data-toggle="tab">
            <i class="{{$icon}}"></i> {{$desc}}
        </button>
    </li>
@else
    <li >
        <button class="btn" href="{{$ref}}" data-toggle="tab">
            <i class="{{$icon}}"></i> {{$desc}}
        </button>
    </li>
@endif
