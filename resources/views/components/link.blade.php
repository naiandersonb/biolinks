@props(["href"])
<a {{ $attributes->class(["w-full link link-primary link-hover"]) }} href="{{ $href }}">
    {{ $slot }}
</a>