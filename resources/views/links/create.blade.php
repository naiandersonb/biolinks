<x-layout-app>
    <div>
        <h1>Criar um link</h1>

        <form action="{{ route("links.create") }}" method="post">
            @csrf

            <div>
                <input name="name" placeholder="Nome" value="{{ old('name') }}" />
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br />

            <div>
                <input name="link" placeholder="Link" value="{{ old('link') }}" />
                @error('link')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br />

            @if($message = session()->get("message"))
                <div>{{ $message }}</div>
            @endif

            <br />

            <button type="submit">Registrar</button>
        </form>
    </div>
</x-layout-app>