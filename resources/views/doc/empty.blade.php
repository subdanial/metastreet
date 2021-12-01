@include('layouts.header')
@include('layouts.mobile-nav')
<style>
    html,
    body {
        background: white;
    }

    @media (max-width:1080px) {
        #menu {
            display: none;
        }
    }


</style>
<div class="h-screen grid lg:grid-cols-14 grid-cols-1 lg:gap-4 gap-0 ">
    @include('layouts.desktop-fixed-left-nav')
    <div id="hero" class="lg:col-span-12  md:col-span-8 col-span-1   ">
        <div class="grid grid-cols-9    -ml-4  ">
          @include('layouts.fixed-top-nav')
       
        </div>
    </div>
</div>
@include('layouts.footer')
