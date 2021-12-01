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
                <div class="content text-base text-gray-700">Currently, the protocol and the API have been partially
                    implemented to ensure that the idea
                    is practical and whether we could use fully on-chain processing. So far, the implementation has been
                    successful.</div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 01</div>
                    <div class="title">Privite Fundrising</div>
                    <div class="progress">Done</div>
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
                            EVM support for parachains
                            SubQuery Academy
                            Proof of indexing
                            Premium enterprise service</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 01</div>
                    <div class="title">Privite Fundrising</div>
                    <div class="progress">Done</div>
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
                            EVM support for parachains
                            SubQuery Academy
                            Proof of indexing
                            Premium enterprise service</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 01</div>
                    <div class="title">Privite Fundrising</div>
                    <div class="progress">Done</div>
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
                            EVM support for parachains
                            SubQuery Academy
                            Proof of indexing
                            Premium enterprise service</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 01</div>
                    <div class="title">Privite Fundrising</div>
                    <div class="progress">Done</div>
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
                            EVM support for parachains
                            SubQuery Academy
                            Proof of indexing
                            Premium enterprise service</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 01</div>
                    <div class="title">Privite Fundrising</div>
                    <div class="progress">Done</div>
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
                            EVM support for parachains
                            SubQuery Academy
                            Proof of indexing
                            Premium enterprise service</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 01</div>
                    <div class="title">Privite Fundrising</div>
                    <div class="progress">Done</div>
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
                            EVM support for parachains
                            SubQuery Academy
                            Proof of indexing
                            Premium enterprise service</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 01</div>
                    <div class="title">Privite Fundrising</div>
                    <div class="progress">Done</div>
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
                            EVM support for parachains
                            SubQuery Academy
                            Proof of indexing
                            Premium enterprise service</ul>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 col-span-8">
                <div class="--roadcard  mb-14 text-center">
                    <div class="phase">Phase 01</div>
                    <div class="title">Privite Fundrising</div>
                    <div class="progress">Done</div>
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
                            EVM support for parachains
                            SubQuery Academy
                            Proof of indexing
                            Premium enterprise service</ul>
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
            <li class="py-2"> <a href="#s3">IDO in Pancakeswap  </a></li>
            <li class="py-2"> <a href="#s4">Secondary marketing  </a></li>
        </ul>


    </div>
</div>
@include('layouts.footer')
