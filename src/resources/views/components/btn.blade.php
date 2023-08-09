@props([
    "disabledCondition" => false,
    "isLink" => null,
    "singleIco" => null,
])

@php
    $baseClass = "btn";
    if ($singleIco) $baseClass .= " px-btn-x-ico";
@endphp

@if ($isLink)
    <a {{ $attributes->merge([
        "class" => $baseClass,
    ]) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->merge([
        "class" => $baseClass,
        "type" => "button",
        "disabled" => $disabledCondition
    ]) }}>{{ $slot }}</button>
@endif
