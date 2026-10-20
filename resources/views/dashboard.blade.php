<div>

    <h1>Dashboard</h1>

    @if($message = session()->get("message"))
        <div>{{ $message }}</div>
    @endif

    <a href="{{ route("links.create") }}">Criar novo</a>

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
                <form action="{{ route("links.destroy", $link) }}" method="post" onsubmit="return confirm('tem certeza?')">
                    @csrf
                    @method("delete")

                    <button>Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>