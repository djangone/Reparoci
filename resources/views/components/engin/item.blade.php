<div class="radio-button">
    <label for="{{$enginId}}">
        {!! $enginIcon !!}
    </label>
    <input wire:model="typeEngin" wire:click="refreshMarque({{$enginId}})" id="{{$enginSlug}}" type="radio" name="type-engin">
</div>
