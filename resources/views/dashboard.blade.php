@include('layouts.header')
@include('layouts.mobile-nav')
<div class="h-screen lg:overflow-hidden  grid lg:grid-cols-14 grid-cols-1 lg:gap-4 gap-0 ">
    @include('layouts.desktop_nav-left')
    <div id="hero" class="lg:col-span-9  md:col-span-8 col-span-1 ">
        <div class="grid grid-cols-9  lg:px-4 px-0 ">
            <div class="col-span-9  mb-5  lg:block">
                @include('layouts.desktop_nav-top')
            </div>
            <div class="col-span-9">
                <div class="--hero !desktop hidden  lg:block   relative   ">
                    <img src="{{ URL::asset('/img/hero.png') }}" class=" top-0  w-full">
                    <div class="grid grid-cols-8 px-10 absolute top-0">

                        <div class="text-white col-start-1  col-span-3 !!!!!!!!! " style="margin-top: 2.5vw;">
                            <div class="font-bold |text-4xl" style="font-size:2.3vw;line-height: 1.2;">
                            Play Monopoly <br>This time <br> on  Metaverse
                            </div>
                            <div style="font-size:1vw">
                             
                                Catch lands, Upgrade and rent them. 
Meta Street is an openworld game inspired by monopoly classic, with the difference that it happens in the world of Metavars and always continues.
                            </div>

                            <div class="flex mt-4">
                                <div class="--btn-howtobuy font-black text-center secondary">How to buy</div>
                                <div class="--btn-howtobuy primary ml-4 relative text-left">
                                    <a href="{{route('PreSale')}}" class="mx-auto block font-bold text-center">
                                        Buy MetaST
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="--hero_mobile lg:hidden block">
                    <div class="relative">
                        <img src="img/hero-mobile.png" class="w-full  " alt="">
                        <div class="absolute flex h-full items-center px-4 top-0 left-0 text-white">
                            <div class="innerflex">
                                <div class="title  font-bold w-2/3" style="font-size: 5.5vw;">Fall Guys
                                    Play Monopoly <br>This time <br> on  Metaverse</div>
                                <div class="subtitle text-sm w-2/3">         Catch lands, Upgrade and rent them. 
                                    Meta Street is an openworld game inspired by monopoly classic, with the difference that it happens in the world of Metavars and always continues.
                                                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="flex pt-6  justify-center  mx-4 items-center">
                        <div class="--mobile-howtobuy-btn font-extrabold  mx-4">How to buy</div>
                        <div class="--mobile-buy-btn relative mx-4">Buy MetaST

                        </div>
                    </div>
                </div>
                <div class="--presell  text-white   mt-5 pt-4 px-10">
                    <div class="mobile text-center text-white block lg:hidden">
                        <div class="title text-xl font-bold">Pressell MetaST Token</div>
                        <div class="title text-sm ">Started at 2021 May 04</div>
                    </div>

                    <div class="grid grid-cols-7 w-full relative">
                        <div class="absolute right-0 top-0 lg:block hidden">Softcap fundraising Started at 2021 May 04 </div>
                        <div class="lg:col-span-2 col-span-3  ">
                            <div class="lg:block hidden title text-center text-lg font-bold ">
                                Pressell MetaST Token
                            </div>
                            <div class="h-full  flex justify-center  items-center">
                                <div>
                                    <div class="--circular text-center -mt-10  relative mx-auto w-full">

                                        <div class="skill mx-auto ">
                                            <div class="outer">
                                                <div class="inner">
                                                    <div class="content text-white text-center">
                                                        <div class="title text-base"> PreSale</div>
                                                        <div class="percent text-3xl font-bold">65%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px"
                                            height="160px">
                                            <defs>
                                                <linearGradient id="GradientColor">
                                                    <stop offset="0%" stop-color="#e91e63" />
                                                    <stop offset="100%" stop-color="#673ab7" />
                                                </linearGradient>
                                            </defs>
                                            <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                                        </svg>



                                    </div>
                                </div>
                            </div>


                        </div>
                        <div
                            class=" lg:text-base text-sm lg:col-span-5 col-span-3 ml-10 lg:py-10 py-2 pb-10 grid grid-cols-1  lg:grid-cols-2 w-full">


                            <div class="col-span-1 ">
                                <div class="--lable mt-2 lg:mt-4">
                                    <div class="inside">
                                        <div class="title">We Collected</div>
                                        <div class="content">-- BNB</div>
                                    </div>
                                </div>
                                <div class="--lable mt-2 lg:mt-4">
                                    <div class="inside">
                                        <div class="title">We Sell </div>
                                        <div class="content">-- MetaST</div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-span-1">
                                <div class="--lable mt-2 lg:mt-4">
                                    <div class="inside">
                                        <div class="title">We need more</div>
                                        <div class="content">-- BNB</div>
                                    </div>
                                </div>
                                <div class="--lable mt-2 lg:mt-4">
                                    <div class="inside">
                                        <div class="title">We will sell more</div>
                                        <div class="content">-- MetaST</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('layouts.info')
</div>
@include('layouts.footer')
