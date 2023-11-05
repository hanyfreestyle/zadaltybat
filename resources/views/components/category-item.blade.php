@props(['Category'])

<div class="text-left" style="direction: ltr">
    {{ $Category->name }} {{$Category->id}}
    @foreach($Category->children as $child )
        <div class="text-left" style=" margin-left: 20px;">
            <x-category-item  :Category="$child" />
        </div>
    @endforeach
</div>
