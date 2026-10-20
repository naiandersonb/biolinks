<x-layout.app>
    <x-container>
        <x-card title="Criar contar">
            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" placeholder="Nome" />
                <x-input name="email" placeholder="E-mail" value="{{ old('email') }}" />
                <x-input name="email_confirmation" placeholder="E-mail de confirmação" />
                <x-input name="password" type="password" placeholder="Senha" />
            </x-form>

            <x-slot:actions>
                <x-button form="register-form" class="btn-primary my-2">Criar conta</x-button>

                <x-link :href="route('login')">
                    Already have an account!
                </x-link>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>

{{-- <x-layout.app>

    <div>
        <h1>Registrar</h1>

        <form action="{{ route(" register") }}" method="post">
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
</x-layout.app> --}}