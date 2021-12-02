<div class="col-span-1 lg:block hidden    {{ request()->routeIs('documention') ? 'lg:hidden' : '' }}">
    <nav class="text-white pt-6">
        <a href="{{ route('referral') }}" class="mr-8  {{ request()->routeIs('referral') ? 'font-bold' : '' }}">Earn MetaST</a>
        <a href="{{ route('documention') }}" class="mr-8 {{ request()->routeIs('documention') ? 'font-bold' : '' }}">Documention</a>
        <a href="#">
             Metaverse <img src="img/metalogo.png" class="inline-block w-10 ml-1 -mt-1" alt="">
        </a>
    </nav>
</div>