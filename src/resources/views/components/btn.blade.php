@props([
    "disabledCondition" => false,
    "roundedNone" => null,
    "isLink" => null,

    "sm" => null,
    "lg" => null,

    "icoText" => null,
    "singleIco" => null,

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
    $forTailwind = "xs:inline-block sm:inline-block md:inline-block lg:inline-block xl:inline-block 2xl:inline-block";
    $hasText = isset($slot);

    $baseClass = "inline-flex justify-center items-center flex-nowrap border-btn tracking-widest transition focus:outline-none disabled:opacity-25 disabled:pointer-event-none";
    // Rounded
    $roundedClass = $roundedNone ? "" :  "rounded-btn";
    // Sizes
    if ($sm) {
        $forTailwind = "xs:px-btn-x-sm sm:px-btn-x-sm md:px-btn-x-sm lg:px-btn-x-sm xl:px-btn-x-sm 2xl:px-btn-x-sm";
        $str = "h-btn-sm text-btn-sm min-w-btn-sm";
        $padding = $icoText ? "{$icoText}:px-btn-x-sm" : "px-btn-x-sm";
    }
    elseif ($lg) {
        $forTailwind = "xs:px-btn-x-lg sm:px-btn-x-lg md:px-btn-x-lg lg:px-btn-x-lg xl:px-btn-x-lg 2xl:px-btn-x-lg";
        $str = "h-btn-lg text-btn-lg min-w-btn-lg";
        $padding = $icoText ? "{$icoText}:px-btn-x-lg" : "px-btn-x-lg";
    }
    else {
        $forTailwind = "xs:px-btn-x sm:px-btn-x md:px-btn-x lg:px-btn-x xl:px-btn-x 2xl:px-btn-x";
        $str = "h-btn text-btn min-w-btn";
        $padding = $icoText ? "{$icoText}:px-btn-x" : "px-btn-x";
    }
    $sizeClass = $singleIco ? $str : "{$str} {$padding}";
    // Colors
    // Light
    if ($light) $colorClass = "bg-light border-light text-body hover:bg-light/75 hover:border-light/75";
    elseif ($outlineLight) $colorClass = "bg-transparent border-primary text-body hover:bg-light/10";
    // Dark
    elseif ($dark) $colorClass = "bg-dark border-dark text-white hover:bg-dark/75 hover:border-dark/75";
    elseif ($outlineDark) $colorClass = "bg-transparent border-dark text-dark hover:bg-dark/10";
    // Success
    elseif ($success) $colorClass = "bg-success border-success text-white hover:bg-success/75 hover:border-success/75";
    elseif ($outlineSuccess) $colorClass = "bg-transparent border-success text-success hover:bg-success/10";
    // Danger
    elseif ($danger) $colorClass = "bg-danger border-danger text-white hover:bg-danger/75 hover:border-danger/75";
    elseif ($outlineDanger) $colorClass = "bg-transparent border-danger text-danger hover:bg-danger/10";
    // Warning
    elseif ($warning) $colorClass = "bg-warning border-warning text-body hover:bg-warning/75 hover:border-warning/75";
    elseif ($outlineWarning) $colorClass = "bg-transparent border-warning text-warning hover:bg-warning/10";
    // Info
    elseif ($info) $colorClass = "bg-info border-info text-body hover:bg-info/75 hover:border-info/75";
    elseif ($outlineInfo) $colorClass = "bg-transparent border-info text-info hover:bg-info/10";
    // Primary
    elseif ($primary) $colorClass = "bg-primary border-primary text-white hover:bg-primary/75 hover:border-primary/75";
    elseif ($outlinePrimary) $colorClass = "bg-transparent border-primary text-primary hover:bg-primary/10";
    // Secondary
    elseif ($secondary) $colorClass = "bg-secondary border-secondary text-white hover:bg-secondary/75 hover:border-secondary/75";
    elseif ($outlineSecondary) $colorClass = "bg-transparent border-secondary text-secondary hover:bg-secondary/10";
    // Custom
    else $colorClass = "";
@endphp

@if ($isLink)
    <a {{ $attributes->merge([
        "class" => implode(" ", [$baseClass, $sizeClass, $roundedClass, $colorClass]),
    ]) }}>
        @isset($ico)
            {{ $ico }}
            @if (!$singleIco)
                <span class="inline-block {{ $icoText ? $icoText.":hidden" : "" }} pl-btn-ico-text">{{ $slot }}</span>
            @endisset
        @else
            {{ $slot }}
        @endisset
    </a>
@else
    <button {{ $attributes->merge([
        "class" => implode(" ", [$baseClass, $sizeClass, $roundedClass, $colorClass]),
        "type" => "button",
        "disabled" => $disabledCondition
    ]) }}>
        @isset($ico)
            {{ $ico }}
            @if (!$singleIco)
                <span class="{{ $icoText ? $icoText.":inline-block hidden" : "inline-block" }} pl-btn-ico-text">{{ $slot }}</span>
            @endisset
        @else
            {{ $slot }}
        @endisset
    </button>
@endif
