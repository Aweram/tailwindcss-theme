@props([
    "disabledCondition" => false,
    "roundedNone" => null,
    "isLink" => null,

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
    $enabled = $isLink ? '' : 'enabled:';
    $baseClass = "inline-flex justify-center items-center flex-nowrap border-btn tracking-widest transition focus:outline-none disabled:opacity-25 disabled:cursor-not-allowed";
    $sizeClass = "h-btn px-btn-x text-btn";
    $roundedClass = $roundedNone ? "" :  "rounded-btn";

    if ($light) $colorClass = "bg-light border-light text-body {$enabled}hover:bg-light/75 {$enabled}hover:border-light/75";
    elseif ($outlineLight) $colorClass = "bg-transparent border-primary text-body {$enabled}hover:bg-light/10";

    elseif ($dark) $colorClass = "bg-dark border-dark text-white {$enabled}hover:bg-dark/75 {$enabled}hover:border-dark/75";
    elseif ($outlineDark) $colorClass = "bg-transparent border-dark text-dark {$enabled}hover:bg-dark/10";

    elseif ($success) $colorClass = "bg-success border-success text-white {$enabled}hover:bg-success/75 {$enabled}hover:border-success/75";
    elseif ($outlineSuccess) $colorClass = "bg-transparent border-success text-success {$enabled}hover:bg-success/10";

    elseif ($danger) $colorClass = "bg-danger border-danger text-white {$enabled}hover:bg-danger/75 {$enabled}hover:border-danger/75";
    elseif ($outlineDanger) $colorClass = "bg-transparent border-danger text-danger {$enabled}hover:bg-danger/10";

    elseif ($warning) $colorClass = "bg-warning border-warning text-body {$enabled}hover:bg-warning/75 {$enabled}hover:border-warning/75";
    elseif ($outlineWarning) $colorClass = "bg-transparent border-warning text-warning {$enabled}hover:bg-warning/10";

    elseif ($info) $colorClass = "bg-info border-info text-body {$enabled}hover:bg-info/75 {$enabled}hover:border-info/75";
    elseif ($outlineInfo) $colorClass = "bg-transparent border-info text-info {$enabled}hover:bg-info/10";

    elseif ($primary) $colorClass = "bg-primary border-primary text-white {$enabled}hover:bg-primary/75 {$enabled}hover:border-primary/75";
    elseif ($outlinePrimary) $colorClass = "bg-transparent border-primary text-primary {$enabled}hover:bg-primary/10";

    elseif ($secondary) $colorClass = "bg-secondary border-secondary text-white hover:bg-secondary/75 {$enabled}hover:border-secondary/75";
    elseif ($outlineSecondary) $colorClass = "bg-transparent border-secondary text-secondary {$enabled}hover:bg-secondary/10";

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
