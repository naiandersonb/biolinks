<div>
    <h1>Registrar</h1>

    <form action="{{ route("register") }}" method="post">
        @csrf

        <div>
            <input name="name" placeholder="Nome" value="{{ old('name') }}" />
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />

        <div>
            <input name="email" placeholder="E-mail" value="{{ old('email') }}" />
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />

        <div>
            <input name="email_confirmation" placeholder="E-mail de confirmação" />
            @error('email_confirmation')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br />

        <div>

            <input type="password" name="password" placeholder="senha" />
            @error('password')
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