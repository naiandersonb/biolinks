<x-layout.app>
    <div>
        <h1>Editar link: {{ $link->name }}</h1>

        <form action="{{ route("links.edit", $link) }}" method="post">
            @csrf
            @method("put")

            <div>
                <input name="name" placeholder="Nome" value="{{ old("name", $link->name) }}" />
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br />

            <div>
                <input name="link" placeholder="Link" value="{{ old("link", $link->link) }}" />
                @error('link')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br />

            @if($message = session()->get("message"))
                <div>{{ $message }}</div>
            @endif

            <br />

            <a href="{{ route("dashboard") }}">Cancelar</a>
            <button type="submit">Registrar</button>
        </form>
    </div>
</x-layout.app>