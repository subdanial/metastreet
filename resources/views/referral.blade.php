@include('layouts.header')
@include('layouts.mobile-nav')
<div class="h-screen grid lg:grid-cols-14 grid-cols-1 lg:gap-4 gap-0 ">
    @include('layouts.desktop_nav-left')
    <div id="hero" class="lg:col-span-9  md:col-span-8 col-span-1 ">
        <div class="grid grid-cols-9  h-full  lg:px-4 px-4 ">
            <div class="col-span-9  mb-5 lg:block">
                @include('layouts.desktop_nav-top')
            </div>
            <div class="col-span-9 ">
                <div class="grid grid-cols-8  justify-center items-center">
                    <div class="lg:col-span-5 col-span-8 lg:order-1 order-2">
                        <div class="text-white font-extrabold text-3xl lg:text-left text-center mt-10">Refelral and earn
                            MetaST</div>
                        <div class="text-white">
                            <div class="lg:text-left text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper sed mi, nibh im
                                perdiet.
                                Ipsum
                                enim id nulla ut odio pellentesque. Pharetra id dui at turpis malesuada quis amet.
                                Volutpat
                                nunc, ut
                                tempor tristique ac.
                            </div>

                            <table class="text-white mt-3 w-full">
                                <tr>
                                    <td>Your Referal ID : </td>
                                    <td> XZM2931M <svg class="inline-block -mt-1" width="15" height="15"
                                            viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 2.5V10C5 10.3315 5.1317 10.6495 5.36612 10.8839C5.60054 11.1183 5.91848 11.25 6.25 11.25H11.25C11.5815 11.25 11.8995 11.1183 12.1339 10.8839C12.3683 10.6495 12.5 10.3315 12.5 10V4.52625C12.5 4.35972 12.4667 4.19488 12.4021 4.0414C12.3375 3.88792 12.2428 3.7489 12.1238 3.6325L10.0519 1.60625C9.81835 1.37791 9.50473 1.25004 9.17813 1.25H6.25C5.91848 1.25 5.60054 1.3817 5.36612 1.61612C5.1317 1.85054 5 2.16848 5 2.5V2.5Z"
                                                stroke="white" stroke-width="1.25" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 11.25V12.5C10 12.8315 9.8683 13.1495 9.63388 13.3839C9.39946 13.6183 9.08152 13.75 8.75 13.75H3.75C3.41848 13.75 3.10054 13.6183 2.86612 13.3839C2.6317 13.1495 2.5 12.8315 2.5 12.5V5.625C2.5 5.29348 2.6317 4.97554 2.86612 4.74112C3.10054 4.5067 3.41848 4.375 3.75 4.375H5"
                                                stroke="white" stroke-width="1.25" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Your invite link : </td>
                                    <td> https://metastreet.app/invite? XZM2931M <svg class="inline-block -mt-1"
                                            width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 2.5V10C5 10.3315 5.1317 10.6495 5.36612 10.8839C5.60054 11.1183 5.91848 11.25 6.25 11.25H11.25C11.5815 11.25 11.8995 11.1183 12.1339 10.8839C12.3683 10.6495 12.5 10.3315 12.5 10V4.52625C12.5 4.35972 12.4667 4.19488 12.4021 4.0414C12.3375 3.88792 12.2428 3.7489 12.1238 3.6325L10.0519 1.60625C9.81835 1.37791 9.50473 1.25004 9.17813 1.25H6.25C5.91848 1.25 5.60054 1.3817 5.36612 1.61612C5.1317 1.85054 5 2.16848 5 2.5V2.5Z"
                                                stroke="white" stroke-width="1.25" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M10 11.25V12.5C10 12.8315 9.8683 13.1495 9.63388 13.3839C9.39946 13.6183 9.08152 13.75 8.75 13.75H3.75C3.41848 13.75 3.10054 13.6183 2.86612 13.3839C2.6317 13.1495 2.5 12.8315 2.5 12.5V5.625C2.5 5.29348 2.6317 4.97554 2.86612 4.74112C3.10054 4.5067 3.41848 4.375 3.75 4.375H5"
                                                stroke="white" stroke-width="1.25" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="lg:col-span-3 col-span-8 lg:order-2 order-1">
                        <img src="{{ URL::asset('/img/refferal.svg') }}" class="w-2/3 mx-auto " alt="">
                    </div>
                    <div class="col-span-4">

                    </div>
                </div>
            </div>
            <div class="col-span-9 mt-10 lg:-mt-16 text-white ">
                <div class="grid grid-cols-2">
                    <div class="lg:col-span-1 col-span-2  mb-2 ">
                        <div class="--refferal-item">
                            <div class="inline-block w-1/2">Your Referal ID </div>
                            <div class="inline-block w-1/2">Your Referal ID </div>
                        </div>
                    </div>
                    <div class="lg:col-span-1 col-span-2  mb-2 ">
                        <div class="--refferal-item">
                            <div class="inline-block w-1/2">Your Referal ID </div>
                            <div class="inline-block w-1/2">Your Referal ID </div>
                        </div>
                    </div>
                    <div class="lg:col-span-1 col-span-2  mb-2 ">
                        <div class="--refferal-item">
                            <div class="inline-block w-1/2">Your Referal ID </div>
                            <div class="inline-block w-1/2">Your Referal ID </div>
                        </div>
                    </div>
                    <div class="lg:col-span-1 col-span-2  mb-2 ">
                        <div class="--refferal-item">
                            <div class="inline-block w-1/2">Your Referal ID </div>
                            <div class="inline-block w-1/2">Your Referal ID </div>
                        </div>
                    </div>
                    <div class="lg:col-span-1 col-span-2  mb-2 ">
                        <div class="--refferal-item">
                            <div class="inline-block w-1/2">Your Referal ID </div>
                            <div class="inline-block w-1/2">Your Referal ID </div>
                        </div>
                    </div>
                    <div class="lg:col-span-1 col-span-2  mb-2 ">
                        <div class="--refferal-item">
                            <div class="inline-block w-1/2">Your Referal ID </div>
                            <div class="inline-block w-1/2">Your Referal ID </div>
                        </div>
                    </div>
                    <div class="lg:col-span-1 col-span-2  mb-2 ">
                        <div class="--refferal-item">
                            <div class="inline-block w-1/2">Your Referal ID </div>
                            <div class="inline-block w-1/2">Your Referal ID </div>
                        </div>
                    </div>
                    <div class="lg:col-span-1 col-span-2  mb-2 ">
                        <div class="--refferal-item">
                            <div class="inline-block w-1/2">Your Referal ID </div>
                            <div class="inline-block w-1/2">Your Referal ID </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('layouts.info')
</div>
@include('layouts.footer')
