@props(["title", "actions"])

<div {{ $attributes->class(["card card-border border-primary w-96 shadow-sm"]) }}>
    <div class="card-body">
        <h2 class="card-title">{{$title}}</h2>

        {{ $slot }}

        <div class="card-actions">
            {{ $actions }}
        </div>
    </div>
</div>