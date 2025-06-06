<header class="bg-[var(--primary-color)] py-3 shadow-md sticky top-0 z-50 text-white">
     <nav class="container flex justify-between items-center gap-10">
        <div class="w-[25%]">
            <a href="{{ route('home') }}">
                <img class="h-[40px]" src="{{ asset(Storage::url($company->logo)) }}" alt="Logo">
            </a>
        </div>

        <div class="w-[50%]">
            <form action="{{ route('compare') }}" method="get">
                <div class="flex">
                    <input class="w-full" type="text" name="q" placeholder="compare products by name">
                    <button type="submit" class="px-4 py-2 bg-gray-100 text-[var(--primary-color)]">Compare</button>
                </div>
            </form>
        </div>
        <div class="w-[25%] flex gap-2 items-center">
            @if (!Auth::user())
                <a href="{{ route('register') }}">SignUp</a>
                <a href="{{ route('login') }}">Login</a>
            @else
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button>Logout</button>
                </form>

                <a href="{{route('carts')}}" class="relative">
                    <i class="fa-solid fa-cart-shopping text-2xl"></i>
                    <span class="absolute bottom-4 -right-1 bg-red-600 rounded-full h-4 w-4 text-[9px] flex justify-center items-center">
                        {{count($carts)}}
                    </span>
                </a>
            @endif
        </div>
    </nav>
</header>
