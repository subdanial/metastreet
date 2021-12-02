@include('layouts.header')
@include('layouts.mobile-nav')
<style>
    html,
    body {
        background: white;
    }


    @media (min-width:1080px) {
        .--generate-section {
            background-repeat: no-repeat;
            background-image: url("{{ URL::asset('img/doc/generate.png') }}");
            background-position: right;

        }
    }



    @media (min-width:1080px) {
        .--bg-box {
            top: 0;
            left: 0;
            width: 30vw;
            height: 30vw;
            z-index: 1;
            background: #D2E1FF;
        }

    }

    @media (max-width:1080px) {
        #menu {
            display: none;
        }
    }

</style>
<div class="min-h-screen grid lg:grid-cols-14 grid-cols-1 lg:gap-4 gap-0 ">

    @include('layouts.desktop-fixed-left-nav')

    <div id="hero" class="lg:col-span-12  md:col-span-8 col-span-1   ">
        <div class="grid grid-cols-9    lg:-ml-4  ">
            @include('layouts.fixed-top-nav')

            

            <div class="col-span-9 pt-6">

                {{-- <div class="min-h-screen lg:py-0 py-10  lg:px-24 grid grid-cols-2 justify-center items-center ">
                    <div class="col-span-2">
                        <img  class="w-2/3 mx-auto" src="{{URL::asset('img/doc/gameplay.svg')}}" alt="">
                        <div class="title text-center lg:mt-0 mt-10  font-semibold mb-3 lg:text-4xl text-3xl">MetaStreet World </div>
                        <div class="w-2/3  mx-auto content text-center "></div>
                    </div>
                </div> --}}

                <div class="min-h-screen lg:py-0 py-10  lg:px-24 grid grid-cols-2 justify-center items-center ">
                    <div class="lg:col-span-1 col-span-2 order-2 lg:order-1">
                        <div>
                            <div class="title text-center lg:mt-0 mt-10 lg:text-left font-semibold mb-3 lg:text-4xl text-3xl">MetaStreet World </div>
                            <div class="content text-center lg:text-left lg:pr-24 lg:pl-0 px-10">MetaStreet is actually a
                                classic open word monopoly on a
                                blockchain platform where you can move in 6 different directions.
                                The main gameplay of MetaStreet is very understandable, simple and clear. The game
                                consists of NFT land, the player rolls the dice and then moves on the houses after
                                choosing the path. If he falls on land that he does not already have, he can buy it from
                                the bank, if the land already The player has to pay the rent, since the landlord is the
                                bank at the beginning of the game, the bank makes leverage such as airdrop, lottery and
                                game loans less expensive and attractive for new players. The goal of the bank is to
                                increase the turnover of MetaStreet.</div>
                        </div>
                    </div>
                    <div class="lg:col-span-1 lg:order-2 col-span-2 flex justify-center items-center">
                        <img class="lg:px-0 px-16" src="{{ URL::asset('img/doc/map.svg') }}" alt="">
                    </div>
                </div>

                <div class="min-h-screen  lg:px-24 px-10 py-10 grid grid-cols-2 justify-center  items-center "
                    style="background:#EAF1FF">
                    <div class="lg:col-span-2 col-span-2  text-center">
                        <img class="lg:hidden" src="{{ URL::asset('img/doc/move.svg') }}" alt="">
                        <div class="title font-semibold mb-3 lg:text-4xl text-3xl lg:mt-0 mt-8 ">Dice and movement
                            system</div>
                        <div class="content lg:px-24">Unlike the classic monopoly where you only have one direction of
                            movement, MetaStreet creates from 1 to 6 directions each time you roll the dice. This odds
                            are not evenly divided, the odds go up from 6 to 1, which means that the chances of the
                            player being allowed to move in one direction after rolling the dice are greater than 6In
                            addition to the direction of movement, the dice determine the number of cells that a person
                            can move, the number that appears in the middle of the dice is the path that the player is
                            required to travel, and around the dice for the numbers that the player can move more at
                            will. Is inserted.</div>
                    </div>
                    <div class="lg:col-span-1 hidden lg:flex col-span-2  justify-center items-center">
                        <img src="{{ URL::asset('img/doc/move.svg') }}" alt="">
                    </div>

                    <div class="lg:col-span-1 lg:mt-0 mt-10 col-span-2 flex justify-center items-center text-center">
                        <div>
                            <img src="{{ URL::asset('img/doc/dice.svg') }}" class="mx-auto" alt="">
                            <div class="title font-semibold mb-3 text-2xl">Rolled Dice example </div>
                            <div class="content lg:px-24">In this example, the player has a 3-way dice, two forced
                                forward
                                houses, one optional northeast house and two optional southeast houses.
                                One of the direction houses is red, indicating that the relevant land is either
                                non-existent or closed.
                                In this case, the player is obliged to move 2 houses to the northeast or southeast. It
                                is then allowed to move one more northeast or two more southeast to choose one house
                            </div>
                        </div>
                    </div>

                </div>

                <div class="min-h-screen px-10  lg:px-24 grid grid-cols-2 justify-center items-center ">
                    <div class="lg:col-span-2 col-span-2">
                        <div class=" flex justify-center items-center">
                            <img class="lg:px-0 " src="{{ URL::asset('img/doc/vfr.png') }}" alt="">
                        </div>
                        <div class="text-center">
                            <div>
                                <div class="title font-semibold mb-3 text-2xl my-8">VFR Random Technology</div>
                                <div class="content lg:px-36">The logic of the game is written in solidity language on
                                    the
                                    basis of BSC blockchain, the use of solidity language will allow us to upgrade the
                                    game
                                    to become more decentralized and optimized in the future with the finalization of
                                    Ethereum 2. Solidarity does not in itself support the random number generation
                                    algorithm, so projects dealing with lucky numbers must use another solution.
                                    Most projects solve this problem by using centralized trades, in which case there is
                                    a
                                    possibility of fraud.At MetaStreet, we do this with VFR and CHAINLINK technology.
                                    By creating links between link and bsc blockchains, the structure of our Ness random
                                    algorithm will be transparent, open source and decentralized, and this is a valuable
                                    position in the world of decentralized cryptocurrencies.</div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="min-h-screen lg:py-0 py-16 px-10 lg:px-24 grid grid-cols-2 justify-center items-center "
                    style="background:#EAF1FF">
                    <div class="lg:col-span-1 lg:text-left text-center col-span-2 lg:order-1 order-2">
                        <div class="title font-semibold mb-3 lg:text-4xl text-3xl my-8">Land Cards</div>
                        <div class="content lg:pr-36 lg:text-left text-center">In MetaStreet, each land is an NFT.
                            The main characteristics of the land, the status of the property (whether it owns or not) -
                            the purchase price of the land, the cost of renting the land, the identity of the landowner
                            (if the owner is not the owner of the land), the land level are the attributes of the land.
                            Naturally, upgrading is one of the most enjoyable strategy games. By buying lands that have
                            similar hardnesses, the user can get permission to upgrade the land from the bank, roll up
                            the land while paying the fee, and receive a rent or a chance in return. Get more rent.
                            This is crucial because the landlord who wants to pay the rent is reluctant to pay more rent
                            and may be less motivated, and the landlord can increase the "gravity of the dice" instead
                            of increasing the "rental cost". In this case, the random algorithm sets the dice around the
                            players to a higher chance of falling in the direction of the house.</div>
                    </div>
                    <div class="lg:col-span-1 col-span-2 order-1 lg:order-2 ">
                        <img class="mx-auto" src="{{ URL::asset('img/doc/cards.svg') }}" alt="">
                    </div>
                </div>


                <div class="min-h-screen px-10 lg:text-left text-center lg:px-24 grid grid-cols-2 justify-center items-center --generate-section "
                    style="">
                    <div class="lg:col-span-1 col-span-2">
                        <div class="title font-semibold mb-3 lg:text-4xl text-3xl my-8">Auto Generate
                            Map Algorithm</div>
                        <div class="content lg:pr-36">As the demand rate rises, which is calculated based on the ratio
                            of
                            the number of players, the turnover and the number of homes acquired, it is natural that
                            land prices and rents will rise as well. Prevent overcrowding and improve the city's
                            economic cycle. As demand rises, the bank keeps prices balanced by generating new land on
                            the price map, giving new and less-capitalized users a chance to buy new land and pay less
                            rent, and allowing investors to expand their land and receive more rent. Since the lands
                            belong to the bank, by increasing the bank's assets, it will be possible for the bank to
                            have more power to lend and reduce interest rates, and this will open the way for attracting
                            new users.</div>
                    </div>
                    <div class="lg:col-span-1 col-span-2">

                    </div>
                </div>



                <div class="min-h-screen lg:py-0 py-16 px-10 lg:px-24 grid grid-cols-2 justify-center items-center relative "
                    style="background:#EAF1FF">
                    <div class="--bg-box absolute"></div>
                    <div class="lg:col-span-1 col-span-2">
                        <img class="z-20 relative mx-auto"  src="{{ URL::asset('img/doc/bank.svg') }}" alt="">
                    </div>
                    <div class="lg:col-span-1 lg:text-left text-center col-span-2">
                        <div class="title font-semibold mb-3 lg:text-4xl text-3xl my-8">Banking System</div>
                        <div class="content lg:pr-36 ">Bank is the god of MetaStreet game, control of all decisions in
                            Hex
                            Street is the responsibility of the bank, banking in this game is run democratically and
                            with the vote of the members of the game. The goal of the bank is to make MetaStreet
                            prosperous. The bank wants to increase the value of Metatokens, make Metainvestors more
                            capitalist, and provide the way to attract more capital and increase Metamarketing by
                            creating economic attractiveness.
                            So the more powerful the bank, the more capitalist the MetaStreet beneficiaries become.
                            <ul>
                                <li>
                                    - Land ownership management
                                </li>
                                <li>
                                    - Lending system
                                </li>
                                <li>
                                    - Adjust interest rates
                                </li>
                                <li>
                                    - Lotteries
                                </li>
                                <li>
                                    - Determining the average rate of lands
                                </li>
                                <li>
                                    - Controversies
                                </li>
                                <li>
                                    - Airdrops

                                </li>
                                <li>
                                    - Token printing

                                </li>
                                <li>
                                    - Gostres Map


                                </li>
                                <li>
                                    - Etc


                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </>
        </div>
    </div>
</div>
@include('layouts.footer')
