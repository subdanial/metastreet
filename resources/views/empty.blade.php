@include('layouts.header')
@include('layouts.mobile-nav')
<div class="h-screen grid lg:grid-cols-14 grid-cols-1 lg:gap-4 gap-0 ">
    @include('layouts.desktop_nav-left')
    <div id="hero" class="lg:col-span-9  md:col-span-8 col-span-1 ">
        <div class="grid grid-cols-9  lg:px-4 px-0 ">
            <div class="col-span-9  mb-5 lg:block">
                @include('layouts.desktop_nav-top')
            </div>
            <div class="col-span-9">
                empty
            </div>
        </div>
    </div>
    @include('layouts.info')
</div>
@include('layouts.footer')
