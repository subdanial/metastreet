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
    <div id="hero" class="lg:col-span-12    md:col-span-8 col-span-1   ">
        <div class="grid grid-cols-9     -ml-4  ">
            @include('layouts.fixed-top-nav')

        </div>
        <div class="grid px-10 lg:px-24 grid-cols-8 pb-6   col-span-10 mt-12  -ml-4  ">
            <div class="col-span-8 mb-16">
                <div class="title text-2xl mt-6 font-bold">Progress</div>
                <div class="content text-base text-gray-700">We raised funds for project advertising. We advance our marketing strategy based on the introduction of reputable influencers, we tested the IHO fundraising method and started PreSale with it.</div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 01</div>
                    <div class="title">Privite Fundrising</div>
                    <div class="progress">Done</div>
                    <div class="date">November 2021</div>
                    <div class="line my-2"><svg class="mx-auto " width="16" height="92" viewBox="0 0 16 92"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="8.05822" cy="8.03711" rx="7.24133" ry="7.47315" fill="#4388DD" />
                            <line x1="8.29827" y1="12.4092" x2="8.29827" y2="91.1673" stroke="#4388DD"
                                stroke-width="1.04283" />
                        </svg>
                    </div>
                    <div class="detail">
                        <ul>
                            The design work was completed by the first version of the Documention site and the IHO
                            system, and we gathered <b> $80K </b>  to Meta Street Project for Meta Street.
                        </ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 02</div>
                    <div class="title">Aggressive marketing</div>
                    <div class="progress">In process</div>
                    <div class="date">December 2021</div>
                    <div class="line my-2"><svg class="mx-auto " width="16" height="92" viewBox="0 0 16 92"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="8.05822" cy="8.03711" rx="7.24133" ry="7.47315" fill="#4388DD" />
                            <line x1="8.29827" y1="12.4092" x2="8.29827" y2="91.1673" stroke="#4388DD"
                                stroke-width="1.04283" />
                        </svg>
                    </div>
                    <div class="detail">
                        <ul>
                            We invest the collected budget intelligently on advertising. It is very important for us
                            that the project is recognized with strength in its initial step. Our goal is to be
                            introduced by legit advertising campaigns and influencers to increase the confidence of
                            investors who want to hold tokens.</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 03</div>
                    <div class="title">Pre-Sale and IHO</div>
                    <div class="progress">In process</div>
                    <div class="date">December 2021</div>
                    <div class="line my-2"><svg class="mx-auto " width="16" height="92" viewBox="0 0 16 92"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="8.05822" cy="8.03711" rx="7.24133" ry="7.47315" fill="#4388DD" />
                            <line x1="8.29827" y1="12.4092" x2="8.29827" y2="91.1673" stroke="#4388DD"
                                stroke-width="1.04283" />
                        </svg>
                    </div>
                    <div class="detail">
                        <ul>
                            In this step, we will sell some of the tokens specified in the Tokenomic policy to the public for pre-sale. By buying in this step, people can buy more tokens at a lower cost and, more importantly, benefit from the privilege of using the IHO to attract more tokens by referall.</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 04</div>
                    <div class="title">Initial Dex Offering</div>
                    <div class="progress">Soon</div>
                    <div class="date">Mid of Q1 2022</div>
                    <div class="line my-2"><svg class="mx-auto " width="16" height="92" viewBox="0 0 16 92"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="8.05822" cy="8.03711" rx="7.24133" ry="7.47315" fill="#4388DD" />
                            <line x1="8.29827" y1="12.4092" x2="8.29827" y2="91.1673" stroke="#4388DD"
                                stroke-width="1.04283" />
                        </svg>
                    </div>
                    <div class="detail">
                        <ul>
                            In this step, by locking liquidity in Dex funds, we provide the possibility of decentralized buying and selling of tokens in the BSC network.
                            Users who participated in PreSale can exchange their tokens with BNB in this step or buy more tokens.
                            The service we use for IDO is PancakeSwap</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 05</div>
                    <div class="title">Platform expansion</div>
                    <div class="progress">Soon</div>
                    <div class="date">Mid of Q2  2022</div>
                    <div class="line my-2"><svg class="mx-auto " width="16" height="92" viewBox="0 0 16 92"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="8.05822" cy="8.03711" rx="7.24133" ry="7.47315" fill="#4388DD" />
                            <line x1="8.29827" y1="12.4092" x2="8.29827" y2="91.1673" stroke="#4388DD"
                                stroke-width="1.04283" />
                        </svg>
                    </div>
                    <div class="detail">
                        <ul>
                            In this step, we will unveil the initial version of our platform. Focus on getting feedback from the user experience and change or update what you need. At this stage, if the system has a bug, we will find and fix it</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 06</div>
                    <div class="title">Secondary marketing</div>
                    <div class="progress">Soon</div>
                    <div class="date">Mid of Q3 2022</div>
                    <div class="line my-2"><svg class="mx-auto " width="16" height="92" viewBox="0 0 16 92"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="8.05822" cy="8.03711" rx="7.24133" ry="7.47315" fill="#4388DD" />
                            <line x1="8.29827" y1="12.4092" x2="8.29827" y2="91.1673" stroke="#4388DD"
                                stroke-width="1.04283" />
                        </svg>
                    </div>
                    <div class="detail">
                        <ul>
                            Simultaneously with the expansion of the platform, it is a good opportunity to attract new audiences to this game. we list MetaST token on <b>Coinmarket Cap and CoinGeeko</b> In stages, upgrades, rents and other game costs are very cheap, so we will have a high power in airdrop players. This will attract new audiences to the game so that they can take advantage of the game to earn money</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 07</div>
                    <div class="title">Game of the elders</div>
                    <div class="progress">Soon</div>
                    <div class="date">Mid of Q4 2022</div>
                    <div class="line my-2"><svg class="mx-auto " width="16" height="92" viewBox="0 0 16 92"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="8.05822" cy="8.03711" rx="7.24133" ry="7.47315" fill="#4388DD" />
                            <line x1="8.29827" y1="12.4092" x2="8.29827" y2="91.1673" stroke="#4388DD"
                                stroke-width="1.04283" />
                        </svg>
                    </div>
                    <div class="detail">
                        <ul>
                            In this section, we focus on listing in large centralized exchanges such as <b>binance, Huobi and Okex</b>  . By entering these exchanges, the price will be pumped for a short time and the token holders can earn a quick income. In addition, a large liquidity will be provided for the token, which will make the game grow in the long run and become more profitable.</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 08</div>
                    <div class="title">The final version</div>
                    <div class="progress">Soon</div>
                    <div class="date">Mid of Q4 2021</div>
                    <div class="line my-2"><svg class="mx-auto " width="16" height="92" viewBox="0 0 16 92"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="8.05822" cy="8.03711" rx="7.24133" ry="7.47315" fill="#4388DD" />
                            <line x1="8.29827" y1="12.4092" x2="8.29827" y2="91.1673" stroke="#4388DD"
                                stroke-width="1.04283" />
                        </svg>
                    </div>
                    <div class="detail">
                        <ul>
                            At this stage, we take the game out of beta mode and release the final version. In this step, all our centralized access to the game platform and contact is cut off, and from then on, all updates - forks and other game decisions are made by the total number of players' votes.</ul>
                    </div>
                </div>
            </div>

            <div class="col-span-8  mb-16 ">
                <div class="title  py-3 text-2xl font-bold" id="s1">
                    Privite Fundrising
                </div>
                <div class="content text-gray-800">
                    Facilisis ultrices integer purus ornare. Placerat donec elit, congue interdum pretium nullam
                    ridiculus
                    gravida eu. Velit et sed lectus purus vel convallis elementum mauris tempor. Dignissim euismod purus
                    dignissim nunc, quis arcu. Auctor etiam posuere ante quis molestie. Amet ac elit sed eu. Nec et
                    mauris
                    nunc a.
                    Ultrices pretium ultricies neque dui pellentesque ipsum molestie eu. Integer lacus et amet sit amet,
                    massa morbi. Viverra hac malesuada enim mattis commodo et. In.
                </div>

            </div>
            <div class="col-span-8  mb-16 ">
                <div class="title py-3 text-2xl font-bold" id="s2">
                    Introduction marketing
                </div>
                <div class="content text-gray-800">
                    Facilisis ultrices integer purus ornare. Placerat donec elit, congue interdum pretium nullam
                    ridiculus
                    gravida eu. Velit et sed lectus purus vel convallis elementum mauris tempor. Dignissim euismod purus
                    dignissim nunc, quis arcu. Auctor etiam posuere ante quis molestie. Amet ac elit sed eu. Nec et
                    mauris
                    nunc a.
                    Ultrices pretium ultricies neque dui pellentesque ipsum molestie eu. Integer lacus et amet sit amet,
                    massa morbi. Viverra hac malesuada enim mattis commodo et. In.
                </div>

            </div>
            <div class="col-span-8  mb-16 ">
                <div class="title py-3 text-2xl font-bold" id="s3">
                    IDO in Pancakeswap
                </div>
                <div class="content text-gray-800">
                    Facilisis ultrices integer purus ornare. Placerat donec elit, congue interdum pretium nullam
                    ridiculus
                    gravida eu. Velit et sed lectus purus vel convallis elementum mauris tempor. Dignissim euismod purus
                    dignissim nunc, quis arcu. Auctor etiam posuere ante quis molestie. Amet ac elit sed eu. Nec et
                    mauris
                    nunc a.
                    Ultrices pretium ultricies neque dui pellentesque ipsum molestie eu. Integer lacus et amet sit amet,
                    massa morbi. Viverra hac malesuada enim mattis commodo et. In.
                </div>

            </div>
            <div class="col-span-8  mb-16 ">
                <div class="title py-3 text-2xl font-bold">
                    Secondary marketing
                </div>
                <div class="content text-gray-800" id="s4">
                    Facilisis ultrices integer purus ornare. Placerat donec elit, congue interdum pretium nullam
                    ridiculus
                    gravida eu. Velit et sed lectus purus vel convallis elementum mauris tempor. Dignissim euismod purus
                    dignissim nunc, quis arcu. Auctor etiam posuere ante quis molestie. Amet ac elit sed eu. Nec et
                    mauris
                    nunc a.
                    Ultrices pretium ultricies neque dui pellentesque ipsum molestie eu. Integer lacus et amet sit amet,
                    massa morbi. Viverra hac malesuada enim mattis commodo et. In.
                </div>

            </div>

        </div>
    </div>
    <div class="fixed hidden top-20 right-0 z-40 border-l border-gray-800 pl-2 pr-2 ">
        <ul>
            <li class="py-2"> <a href="#s1">Privite Fundrising </a></li>
            <li class="py-2"> <a href="#s2">Introduction marketing </a></li>
            <li class="py-2"> <a href="#s3">IDO in Pancakeswap </a></li>
            <li class="py-2"> <a href="#s4">Secondary marketing </a></li>
        </ul>


    </div>
</div>
@include('layouts.footer')
