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
            <div class="grid grid-cols-5 mt-14 lg:px-20     ">
                <div class="lg:col-span-4 mb-5">
                    <div class="text-2xl mt-20 font-bold">
                        Tokenomics Policy
                    </div>
                    <div class="text-base text-gray-700">In the Pre Sale step, (x) tokens are sold for ($X) New tokens
                        are
                        minted for profit when users use the IHO referral service.
                        After the IHO new tokens are minted and use the following Tokenmoics policy</div>
                </div>
                <div class="grid grid-cols-4 col-span-4">
                    <div class="h-24 mr-3 col-span-1 shadow-md border-l-8 border-gray-900 flex items-center  ">
                        <div class="pl-6">
                            <div class="text-xl">Total Supply</div>
                            <div class="text-base -mb-2">IHO PreSale + </div>
                            <div class="text-base">2,000,000,000</div>
                        </div>
                    </div>
                    <div class="h-24 mr-3 col-span-1 shadow-md border-l-8 border-gray-900 flex items-center  ">
                        <div class="pl-6">
                            <div class="text-xl">Total Supply</div>
                            <div class="text-base -mb-2">IHO PreSale + </div>
                            <div class="text-base">2,000,000,000</div>
                        </div>
                    </div>
                    <div class="h-24 mr-3 col-span-1 shadow-md border-l-8 border-gray-900 flex items-center  ">
                        <div class="pl-6">
                            <div class="text-xl">Total Supply</div>
                            <div class="text-base -mb-2">IHO PreSale + </div>
                            <div class="text-base">2,000,000,000</div>
                        </div>
                    </div>
                    <div class="h-24 mr-3 col-span-1 shadow-md border-l-8 border-gray-900 flex items-center  ">
                        <div class="pl-6">
                            <div class="text-xl">Total Supply</div>
                            <div class="text-base -mb-2">IHO PreSale + </div>
                            <div class="text-base">2,000,000,000</div>
                        </div>
                    </div>
                    <div class="h-24 mr-3 col-span-1 shadow-md border-l-8 border-gray-900 flex items-center  ">
                        <div class="pl-6">
                            <div class="text-xl">Total Supply</div>
                            <div class="text-base -mb-2">IHO PreSale + </div>
                            <div class="text-base">2,000,000,000</div>
                        </div>
                    </div>
                    <div class="h-24 mr-3 col-span-1 shadow-md border-l-8 border-gray-900 flex items-center  ">
                        <div class="pl-6">
                            <div class="text-xl">Total Supply</div>
                            <div class="text-base -mb-2">IHO PreSale + </div>
                            <div class="text-base">2,000,000,000</div>
                        </div>
                    </div>
                    <div class="h-24 mr-3 col-span-1 shadow-md border-l-8 border-gray-900 flex items-center  ">
                        <div class="pl-6">
                            <div class="text-xl">Total Supply</div>
                            <div class="text-base -mb-2">IHO PreSale + </div>
                            <div class="text-base">2,000,000,000</div>
                        </div>
                    </div>
                    <div class="h-24 mr-3 col-span-1 shadow-md border-l-8 border-gray-900 flex items-center  ">
                        <div class="pl-6">
                            <div class="text-xl">Total Supply</div>
                            <div class="text-base -mb-2">IHO PreSale + </div>
                            <div class="text-base">2,000,000,000</div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <img src="{{ URL::asset('img/doc/token.svg') }}" style="margin-top: -0.4em;height: 89%;" alt="">
                </div>

        </div>

    </div>
</div>
@include('layouts.footer')
