<x-layout.app>


    <x-container>
        <x-card title="Homepage" class="max-w-7xl w-full">
            <div class="flex flex-row gap-4 items-center">
                <div class="avatar">
                    <div class="mask mask-squircle w-24">
                        <img src="/storage/{{auth()->user()->photo }}" alt="foto de perfil">
                    </div>


                </div>

                <section>
                    <p class="text-2xl font-bold">{{auth()->user()->name }}</p>
                    <p class="text-neutral-400">{{auth()->user()->description }}</p>
                    <p class="text-primary">{{auth()->user()->handler }}</p>
                </section>
            </div>

            <ul>
                @foreach ($links as $link)
                    <li style="display: flex;">
                        {{-- ao menos que seja o ultimo, unless é a negação do if --}}
                        @unless($loop->last)
                            <form action="{{ route("links.down", $link) }}" method="post">
                                @csrf
                                @method("patch")

                                <button>⬇️</button>
                            </form>
                        @endunless

                        @unless($loop->first)
                            <form action="{{ route("links.up", $link) }}" method="post">
                                @csrf
                                @method("patch")

                                <button>⬆️</button>
                            </form>
                        @endunless

                        <a href="{{ route("links.edit", $link) }}">{{ $link->sort }} - {{ $link->name }}</a>
                        <form action="{{ route("links.destroy", $link) }}" method="post"
                            onsubmit="return confirm('tem certeza?')">
                            @csrf
                            @method("delete")

                            <button>Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>

            <x-slot:actions>

            </x-slot:actions>
        </x-card>

    </x-container>
    <div>



        {{-- @if($message = session()->get("message"))
        <div>{{ $message }}</div>
        @endif --}}
        {{--
        <div>
            <p>{{ auth()->user()->name }} | {{ auth()->user()->handler }}</p>
            <p>{{ auth()->user()->description }}</p>
        </div> --}}

        <a href="{{ route("profile") }}">Atualiar perfil</a>
        <a href="{{ route("links.create") }}">Criar novo</a>



    </div>
</x-layout.app>