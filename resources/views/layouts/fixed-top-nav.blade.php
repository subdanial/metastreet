<div class="col-span-9  mb-5 lg:block hidden">
    <nav class="fixed px-24 h-14 bg-white  w-full  z-40  pt-4 text-gray-900  ">
        <a href="{{ route('documention') }}"
            class="mr-16 pb-2   {{ request()->routeIs('documention') ? 'font-bold border-b-2  border-gray-900' : '' }}">
            What is
            MetaStreet ?</a>
        <a href="{{ route('tokenomics') }}"
            class="mr-16 pb-2  {{ request()->routeIs('tokenomics') ? 'font-bold border-b-2  border-gray-900 ' : '' }}">
            tokenomics Policy </a>
        <a href="{{ route('roadmap') }}"
            class="mr-16 pb-2  {{ request()->routeIs('roadmap') ? 'font-bold border-b-2  border-gray-900' : '' }}">
            Roadmap</a>
        <a href="{{ route('iho') }}"
            class="mr-16 pb-2  {{ request()->routeIs('iho') ? 'font-bold border-b-2  border-gray-900' : '' }}">
            Referral and Earn MetaST Token - IHO </a>
    </nav>
</div>


<div
    class="col-span-9 bg-white z-40 justify-between fixed w-full  top-0 right-0 flex  items-center  h-16 px-6 mb-5 cursor-pointer  lg:hidden">
    <a href="{{route('dashboard')}}" class="border-b text-sm border-gray-900 font-semibold"> back to dashboard</a>
    <div class="">
          <svg   id="doc_menu_open" class="cursor-pointer"  width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M0 1.35714C0 0.607614 0.605732 0 1.35294 0H21.6471C22.3943 0 23 0.607614 23 1.35714C23 2.10667 22.3943 2.71429 21.6471 2.71429H1.35294C0.605732 2.71429 0 2.10667 0 1.35714Z"
            fill="#0E192E" />
        <path
            d="M0 9.5C0 8.75047 0.605732 8.14286 1.35294 8.14286H21.6471C22.3943 8.14286 23 8.75047 23 9.5C23 10.2495 22.3943 10.8571 21.6471 10.8571H1.35294C0.605732 10.8571 0 10.2495 0 9.5Z"
            fill="#0E192E" />
        <path
            d="M0 17.6429C0 16.8933 0.605732 16.2857 1.35294 16.2857H21.6471C22.3943 16.2857 23 16.8933 23 17.6429C23 18.3924 22.3943 19 21.6471 19H1.35294C0.605732 19 0 18.3924 0 17.6429Z"
            fill="#0E192E" />
    </svg>
    </div>
  
</div>

<div id="doc_menu" class="fixed  z-50 bg-white  h-screen w-screen justify-center items-center" style="display: none">
        <div id="doc_menu_close" class="top-5 text-5xl cursor-pointer absolute right-14"> &times;</div>
    <nav>
        <a href="{{ route('documention') }}"
            class="block conten pb-2 text-lg border-b border-gray-200 text-center mb-4   {{ request()->routeIs('documention') ? 'font-bold   border-gray-900' : '' }}">
            What is
            MetaStreet ?</a>
        <a href="{{ route('tokenomics') }}"
            class="block conten pb-2 text-lg border-b border-gray-200 text-center mb-4  {{ request()->routeIs('tokenomics') ? 'font-bold   border-gray-900 ' : '' }}">
            tokenomics Policy </a>
        <a href="{{ route('roadmap') }}"
            class="block conten pb-2 text-lg border-b border-gray-200 text-center mb-4  {{ request()->routeIs('roadmap') ? 'font-bold   border-gray-900' : '' }}">
            Roadmap</a>
        <a href="{{ route('iho') }}"
            class="block conten pb-2 text-lg border-b border-gray-200 text-center mb-4  {{ request()->routeIs('iho') ? 'font-bold   border-gray-900' : '' }}">
            Referral and Earn MetaST Token - IHO </a>
    </nav>
</div>
