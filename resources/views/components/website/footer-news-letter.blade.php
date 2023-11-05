@if($viewStauts)
    @if($type == 'web')
        <livewire:new-letter-web/>
    @elseif($type == 'shop')
        <livewire:new-letter-shop/>
    @endif
@endif


