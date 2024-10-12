


    <nav class="flex items-center space-x-8 text-lg">

        <x-nav-link href="/" >Beranda</x-nav-link>

        <x-nav-link href="{{ route('profile') }}" >Profile</x-nav-link>

        <x-nav-link href="/gallery" >Gallery</x-nav-link>
        
        @auth
        
        <x-nav-link href="/siakad" >Siakad</x-nav-link>
        
        <x-nav-link href="{{ route('users.index') }}" >Users</x-nav-link>

        @endauth
        
        @auth
        
        <x-nav-link href="#" >
            
            {{ auth()->user()->name }}

        </x-nav-link>

            <form action="{{ route('logout') }}" method="post">

                @csrf

                <x-button type="submit">

                    Log out

                </x-button>
            </form>

        

            @else

            <x-nav-link href="{{ route('login') }}" >Login</x-nav-link>

        @endauth
        

    </nav>
