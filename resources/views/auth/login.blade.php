<div>
    <h1>Login</h1>

    <form action="{{ route("login") }}" method="post">
        @csrf

        <div>

            <input name="email" placeholder="email" value="{{ old('email') }}" />
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>

            <input type="password" name="password" placeholder="senha" />
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        @if($message = session()->get("message"))
            <div>{{ $message }}</div>
        @endif
        <div>

        </div>

        <button type="submit">Logar</button>
    </form>
</div>