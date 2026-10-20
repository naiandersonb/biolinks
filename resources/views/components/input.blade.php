@props(["name"])

<div class="w-full">
    <input {{ $attributes->class(["input w-full"])  }} name="{{ $name }}" />
    @error($name)
        <span class="text-error text-sm">{{ $message }}</span>
    @enderror
</div>