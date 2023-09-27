@foreach($enginList as $engin)
    <x-engin.item :enginId="$engin->id" :enginName="$engin->name" :enginIcon="$engin->icon" :enginSlug="$engin->slug"/>
@endforeach
