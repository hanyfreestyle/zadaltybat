@can($role)
    <input type="checkbox" class="{{$class}}" thisid="{{$row->id}}"
           name="status"
           @if($row->$field == '1') checked @endif data-bootstrap-switch data-off-color="danger" data-on-color="success">
@else
    {!! printStateIcon($row->$field) !!}
@endcan
