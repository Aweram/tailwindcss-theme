@props([
    "disabledCondition" => false,
    "roundedNone" => null,
    "isLink" => null,

    "sm" => null,
    "lg" => null,

    "light" => null,
    "outlineLight" => null,
    "dark" => null,
    "outlineDark" => null,
    "success" => null,
    "outlineSuccess" => null,
    "danger" => null,
    "outlineDanger" => null,
    "warning" => null,
    "outlineWarning" => null,
    "info" => null,
    "outlineInfo" => null,
    "primary" => null,
    "outlinePrimary" => null,
    "secondary" => null,
    "outlineSecondary" => null,
])

@php
    $baseClass = "inline-flex justify-center items-center flex-nowrap border-btn tracking-widest transition focus:outline-none disabled:opacity-25 disabled:pointer-event-none";
    $roundedClass = $roundedNone ? "" :  "rounded-btn";

    if ($sm) $sizeClass = "h-btn-sm px-btn-x-sm text-btn-sm";
    elseif ($lg) $sizeClass = "h-btn-lg px-btn-x-lg text-btn-lg";
    else $sizeClass = "h-btn px-btn-x text-btn";

    if ($light) $colorClass = "bg-light border-light text-body hover:bg-light/75 hover:border-light/75";
    elseif ($outlineLight) $colorClass = "bg-transparent border-primary text-body hover:bg-light/10";

    elseif ($dark) $colorClass = "bg-dark border-dark text-white hover:bg-dark/75 hover:border-dark/75";
    elseif ($outlineDark) $colorClass = "bg-transparent border-dark text-dark hover:bg-dark/10";

    elseif ($success) $colorClass = "bg-success border-success text-white hover:bg-success/75 hover:border-success/75";
    elseif ($outlineSuccess) $colorClass = "bg-transparent border-success text-success hover:bg-success/10";

    elseif ($danger) $colorClass = "bg-danger border-danger text-white hover:bg-danger/75 hover:border-danger/75";
    elseif ($outlineDanger) $colorClass = "bg-transparent border-danger text-danger hover:bg-danger/10";

    elseif ($warning) $colorClass = "bg-warning border-warning text-body hover:bg-warning/75 hover:border-warning/75";
    elseif ($outlineWarning) $colorClass = "bg-transparent border-warning text-warning hover:bg-warning/10";

    elseif ($info) $colorClass = "bg-info border-info text-body hover:bg-info/75 hover:border-info/75";
    elseif ($outlineInfo) $colorClass = "bg-transparent border-info text-info hover:bg-info/10";

    elseif ($primary) $colorClass = "bg-primary border-primary text-white hover:bg-primary/75 hover:border-primary/75";
    elseif ($outlinePrimary) $colorClass = "bg-transparent border-primary text-primary hover:bg-primary/10";

    elseif ($secondary) $colorClass = "bg-secondary border-secondary text-white hover:bg-secondary/75 hover:border-secondary/75";
    elseif ($outlineSecondary) $colorClass = "bg-transparent border-secondary text-secondary hover:bg-secondary/10";

    else $colorClass = "";
@endphp

@if ($isLink)
    <a {{ $attributes->merge([
        "class" => implode(" ", [$baseClass, $sizeClass, $roundedClass, $colorClass]),
    ]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge([
        "class" => implode(" ", [$baseClass, $sizeClass, $roundedClass, $colorClass]),
        "type" => "button",
        "disabled" => $disabledCondition
    ]) }}>
        {{ $slot }}
    </button>
@endif
