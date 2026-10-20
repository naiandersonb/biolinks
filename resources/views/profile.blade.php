<div>
    <h1>Login</h1>

    <form action="{{ route("profile") }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <div>
            <img src="/storage/{{ $user->photo }}" alt="foto de perfil">
            <input name="photo" type="file" placeholder="Imagem do perfil" value="{{ old('photo', $user->photo) }}" />
            @error('photo')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input name="name" placeholder="Nome" value="{{ old('name', $user->name) }}" />
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <textarea name="description"
                placeholder="Breve Resumo">{{ old('description', $user->description) }}</textarea>
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <span>biolinks.com.br/</span>
            <input name="handler" placeholder="@seulink" value="{{ old('handler', $user->handler) }}" />
            @error('handler')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <a href="{{ route('dashboard') }}">Cancelar</a>
        <button>atulizar</button>
    </form>
</div>
</x-layout.app>