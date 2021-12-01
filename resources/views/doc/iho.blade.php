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
        <div class="grid grid-cols-9   -ml-4  ">
            @include('layouts.fixed-top-nav')

        </div>

        <div class="col-span-12 ">
            <div class="col-span-9 px-6  lg:px-20  mt-10   justify-center items-center  pt-12">
                <div>
                    <div class="text-4xl  font-bold">Initian Hermetic coin offering</div>
                    <div class="text-base mt-2 text-gray-700 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tristique
                        malesuada
                        eu at odio elementum, sit. Nibh elementum purus eget a eget etiam. Fringilla senectus molestie
                        mi
                        euismod orci malesuada parturient enim malesuada. Massa sem turpis integer id ultrices. Enim
                        lorem
                        justo, eu justo, dui tincidunt nunc. Nec dui sed sed vel maecenas vulputate malesuada. At
                        ullamcorper laoreet eget aliquam id non. Felis cras mattis morbi tristique quis molestie
                        aliquam.
                        Pellentesque aliquet malesuada risus duis id sodales. Proin euismod at eget aliquet tortor
                        commodo
                        et. Aliquam tincidunt in diam cursus.
                        Eget risus magna aliquam bibendum euismod erat. Donec nascetur venenatis eget cras est. Dictumst
                        elit accumsan, maecenas eleifend eu lorem. Proin elementum ac sed dolor elit senectus cras id
                        accumsan. Duis nunc nulla mattis sed ornare. Quam at scelerisque leo, nunc. A tellus massa ut
                        orci
                        purus ac. Commodo dolor adipiscing risus eu. A, neque cursus r
                        Tincidunt quis vitae volutpat, a gravida et eleifend varius. Viverra lacus morbi ultricies
                        faucibus
                        comm</div>
                </div>

                <div class="grid mt-10 grid-cols-8">
                    <div class="lg:col-span-5 order-2 lg:order-1 col-span-8 grid items-center justify-center">
                        <div>

                            <div class="text-4xl lg:pt-0 pt-5 lg:text-left text-center font-bold">Refelral and earn MetaST</div>
                            <div class="text-base mt-2 text-gray-700 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Tristique
                                malesuada
                                eu at odio elementum, sit. Nibh elementum purus eget a eget etiam. Fringilla senectus
                                molestie
                                mi
                                euismod orci malesuada parturient enim malesuada. Massa sem turpis integer id ultrices.
                                Enim
                                lorem
                            </div>
                            <div  class="lg:pb-0 pb-10 grid lg:text-left text-center grid-cols-3 mt-14">
                                    <div class="lg:col-span-1 col-span-3" >Your Referal ID : </div>
                                    <div class="lg:col-span-2 col-span-3"> XZM2931M <span class="inline-block"><svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_247_358)">
                                                    <path
                                                        d="M6.39258 3.58071V12.8218C6.39258 13.2303 6.55485 13.622 6.84369 13.9108C7.13253 14.1997 7.52428 14.362 7.93276 14.362H14.0935C14.502 14.362 14.8937 14.1997 15.1825 13.9108C15.4714 13.622 15.6337 13.2303 15.6337 12.8218V6.07734C15.6336 5.87215 15.5926 5.66904 15.513 5.47993C15.4334 5.29083 15.3168 5.11953 15.1701 4.97611L12.6172 2.47948C12.3295 2.19813 11.9431 2.04058 11.5406 2.04053H7.93276C7.52428 2.04053 7.13253 2.2028 6.84369 2.49164C6.55485 2.78047 6.39258 3.17223 6.39258 3.58071V3.58071Z"
                                                        stroke="black" stroke-width="1.54018" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12.5536 14.3621V15.9023C12.5536 16.3108 12.3913 16.7025 12.1025 16.9913C11.8136 17.2802 11.4219 17.4425 11.0134 17.4425H4.85268C4.4442 17.4425 4.05245 17.2802 3.76361 16.9913C3.47477 16.7025 3.3125 16.3108 3.3125 15.9023V7.43129C3.3125 7.02281 3.47477 6.63106 3.76361 6.34222C4.05245 6.05338 4.4442 5.89111 4.85268 5.89111H6.39286"
                                                        stroke="black" stroke-width="1.54018" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_247_358">
                                                        <rect width="18.4821" height="18.4821" fill="white"
                                                            transform="translate(0.232422 0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span></div>
                                    <div class="lg:col-span-1 col-span-3 lg:mt-0 mt-5">Your invite link   : </div>
                                    <div class="lg:col-span-2 col-span-3"> https://metastreet.app/invite? XZM2931M <span class="inline-block"><svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_247_358)">
                                                    <path
                                                        d="M6.39258 3.58071V12.8218C6.39258 13.2303 6.55485 13.622 6.84369 13.9108C7.13253 14.1997 7.52428 14.362 7.93276 14.362H14.0935C14.502 14.362 14.8937 14.1997 15.1825 13.9108C15.4714 13.622 15.6337 13.2303 15.6337 12.8218V6.07734C15.6336 5.87215 15.5926 5.66904 15.513 5.47993C15.4334 5.29083 15.3168 5.11953 15.1701 4.97611L12.6172 2.47948C12.3295 2.19813 11.9431 2.04058 11.5406 2.04053H7.93276C7.52428 2.04053 7.13253 2.2028 6.84369 2.49164C6.55485 2.78047 6.39258 3.17223 6.39258 3.58071V3.58071Z"
                                                        stroke="black" stroke-width="1.54018" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12.5536 14.3621V15.9023C12.5536 16.3108 12.3913 16.7025 12.1025 16.9913C11.8136 17.2802 11.4219 17.4425 11.0134 17.4425H4.85268C4.4442 17.4425 4.05245 17.2802 3.76361 16.9913C3.47477 16.7025 3.3125 16.3108 3.3125 15.9023V7.43129C3.3125 7.02281 3.47477 6.63106 3.76361 6.34222C4.05245 6.05338 4.4442 5.89111 4.85268 5.89111H6.39286"
                                                        stroke="black" stroke-width="1.54018" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_247_358">
                                                        <rect width="18.4821" height="18.4821" fill="white"
                                                            transform="translate(0.232422 0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span></div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-3 col-span-8 order-1 lg:order-2 flex items-center justify-center"> <img
                            src="{{ URL::asset('img/doc/referral.svg') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
