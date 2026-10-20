<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" placeholder="Email" />
                <x-input name="password" type="password" placeholder="Senha" />
            </x-form>

            @if($message = session()->get("message"))
                <div class="text-error">{{ $message }}</div>
            @endif

            <x-slot:actions>
                <x-button form="login-form" class="btn-primary">Logar</x-button>

                <x-link :href="route('register')">
                    I need to create a new account
                </x-link>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>