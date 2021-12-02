@include('layouts.header')
@include('layouts.mobile-nav')
<div class="h-screen grid lg:grid-cols-14 grid-cols-1 lg:gap-4 gap-0 ">
    @include('layouts.desktop_nav-left')
    <div id="hero" class="lg:col-span-9  md:col-span-8 col-span-1 ">
        <div class="grid px-5 grid-cols-9 h-full justify-center  lg:px-4  ">
            <div class="col-span-9  mb-5 lg:block">
                @include('layouts.desktop_nav-top')
            </div>
            <div class="lg:col-span-5 col-span-9  text-white">
                <div class="--presell-box py-8">
                    <div class="text-white text-center text-3xl mb-2 font-black">Buy MetaST</div>
                    <div class="text-white lg:px-10 text-center">Exchange MetaST Token for BNB and USDT - After PreSale you can Buy/Sell tokens in <a href="#" class="border-b font-semibold " data-job="open alert we still not after pv sell any way you wamt go?">PancakeSwap</a> </div>
                    <div class="w-3/4 px-3 mt-4 mx-auto">

                        <div class="w-8 inline-block -mb-2">
                            <svg class="w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 2000"
                                width="" height="">
                                <path
                                    d="M1000,0c552.26,0,1000,447.74,1000,1000S1552.24,2000,1000,2000,0,1552.38,0,1000,447.68,0,1000,0"
                                    fill="#53ae94" />
                                <path
                                    d="M1123.42,866.76V718H1463.6V491.34H537.28V718H877.5V866.64C601,879.34,393.1,934.1,393.1,999.7s208,120.36,484.4,133.14v476.5h246V1132.8c276-12.74,483.48-67.46,483.48-133s-207.48-120.26-483.48-133m0,225.64v-0.12c-6.94.44-42.6,2.58-122,2.58-63.48,0-108.14-1.8-123.88-2.62v0.2C633.34,1081.66,451,1039.12,451,988.22S633.36,894.84,877.62,884V1050.1c16,1.1,61.76,3.8,124.92,3.8,75.86,0,114-3.16,121-3.8V884c243.8,10.86,425.72,53.44,425.72,104.16s-182,93.32-425.72,104.18"
                                    fill="#fff" />
                            </svg>
                        </div>
                        <div class="text-lg inline-block ml-2 font-semibold ">USDT <svg class="ml-1 -mt-1 inline-block"
                                width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.5 7L0.870836 0.25L12.1292 0.249999L6.5 7Z" fill="white" />
                            </svg>
                        </div>

                        <input type="text" class="pl-10 --input mx-auto block w-full mt-3" placeholder="0.0">




                        <div class="w-10 mt-5 inline-block -mb-2">
                            <img src="{{ URL::asset('/img/logo-desktop.png') }}" alt="">
                        </div>
                        <div class="text-lg inline-block ml-2 font-semibold ">MetaST
                            <svg class="ml-1 -mt-1 inline-block" width="13" height="7" viewBox="0 0 13 7" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.5 7L0.870836 0.25L12.1292 0.249999L6.5 7Z" fill="white" />
                            </svg>
                        </div>

                        <input type="text" class="pl-10 --input mx-auto block w-full mt-3" placeholder="0.0">

                        <div class="flex mt-4 justify-center items-center">
                            <div class="w-40 mt-3">
                                Referal code :
                            </div>
                            <div class="relative w-full">
                                <input type="text" class="pl-4 --input --sm mx-auto block w-full mt-3"
                                    placeholder="not required">
                                <div
                                    class="absolute w-20 bg-white top-0 right-0 mt-3 --input flex items-center justify-center cursor-pointer text-gray-900 --in  font-semibold --sm rounded-l-none  rounded-xl ">
                                    Check </div>
                            </div>
                        </div>

                        <div class="mt-4 text-green-300 hidden text-sm">
                            You eran : <span class="font-black"> +100 HexST </span>Because you are referraled
                        </div>
                        <div
                            class="mt-4   text-yellow-300  border-yellow-300 border-solid  text-xs py-1 !text-right relative">
                            You get +2% tokens when you have referall code
                            </span>
                            <a href="#"
                                class="inline-block rounded-xl bg-yellow-300  py-0.5 top-0 text-center text-gray-700 ml-2 font-bold text-xs absolute  right-0 w-16 cursor-pointer">
                                Find Code</a>
                        </div>
                        <div
                            class="--connect-wallet text-center text-xl text-white cursor-pointer font-semibold mx-auto block !w-48 mt-4 rounded-2xl py-3">
                            Connect Wallet</div>
                    </div>
                </div>

            </div>
            <div class="lg:col-span-4 col-span-9 text-white">
                <div class="mx-auto mt-16 ">
                    <div class="--circular text-center relative  w-full">

                        <div class="skill mx-auto  ">
                            <div class="outer ">
                                <div class="inner ">
                                    <div class="content text-white text-center">
                                        <div class="title text-base"> PreSale</div>
                                        <div class="percent text-3xl font-bold">65%</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <svg class="  relative  mx-auto" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px"
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

                <div class="--presell ml-16 lg:mr-0 mr-16 mt-8 --not-hero">



                    <div class="col-span-1 ">
                        <div class="--lable  mt-4 lg:mt-4">
                            <div class="inside">
                                <div class="title">We Collected</div>
                                <div class="content">-- BNB</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1 ">
                        <div class="--lable  mt-4 lg:mt-4">
                            <div class="inside">
                                <div class="title">We Sell</div>
                                <div class="content">-- MetaST</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1 ">
                        <div class="--lable  mt-4 lg:mt-4">
                            <div class="inside">
                                <div class="title">We need more</div>
                                <div class="content">-- BNB</div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-span-1">
                        <div class="--lable  mt-4 lg:mt-4">
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
    @include('layouts.info')
</div>
@include('layouts.footer')
