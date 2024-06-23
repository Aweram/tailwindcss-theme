@props(["name" => ''])
@error($name)
    <div {{ $attributes->merge(["class" => "text-sm text-danger"]) }}>
        {{ $message }}
    </div>
@enderror
