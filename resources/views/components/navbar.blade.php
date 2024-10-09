
@dump()

    <nav class="space-x-8 text-lg">

        <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>

        <x-nav-link href="/profile" :active="request()->is('profile')">Profile</x-nav-link>

        <x-nav-link href="/visi-misi" :active="request()->is('visi-misi')">Visi-Misi</x-nav-link>

        <x-nav-link href="/gallery" :active="request()->is('gallery')">Gallery</x-nav-link>

        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>

    </nav>
