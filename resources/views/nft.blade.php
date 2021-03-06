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
                <div class="relative flex items-center justify-center w-full h-full pointer-events-none">
                    <img src="{{ URL::asset('/img/soon.jpg') }}"
                        class="w-full lg:absolute top-0 left-0 pointer-events-none" alt="">
                    <h1 class="absolute lg:top-64 text-white text-5xl">Coming Soon</h1>
                </div>

            </div>
        </div>
    </div>
    <style>
        @media (max-width:1080px){
            #info{display: hidden}
        }
    </style>
     @include('layouts.info') 
</div>
@include('layouts.footer')

<script>

</script>

<script>
    $('body').css("background", "#101c34");
    $("body").css("overflow", "hidden");
    if ($(window).width() < 900) {
        $("body").css("overflow", "auto");
    }
    $(window).resize(function() {
        if ($(window).width() < 900) {
            $("body").css("overflow", "auto");
        } else {
            $("body").css("overflow", "hidden");
        }
    });

    // $('.--nav-link').each(function() {
    //     if ($(this).attr('href') == document.URL) {
    //         $(this).addClass('active');
    //         $('.dashboard').removeClass('active');
    //     }
    // })
</script>
