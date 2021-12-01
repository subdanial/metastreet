<div id="menu" class="--menu lg:col-span-2 -ml-3   col-span-1 pt-4 pl-2 lg:pb-0 pb-4" style="">
    <div class="cssfixrightcollorpannel text-white"></div>

    <div class="logo col-span-1 lg:justify-center items-center  logo-desktop grid  _z100">
        <a href="{{ route('dashboard') }}" class="lg:col-span-3 col-span-1 flex  ">
            <img class="--logo-image lg:ml-0  ml-4" src="{{ URL::asset('/img/logo-desktop.png') }}">
            <div class="lg:ml-0 ml-1 text-white">
                <div class="title text-xl pt-3 leading-5   font-bold">MetaStreet</div>
                <div class="subtitle  leading-4 text-xs">
                    Become NFT Lord
                </div>
            </div>
        </a>
        <div class="col-span-4 lg:hidden flex col-start-5  text-white justify-end pr-4 items-center ">
            <div class="flex">
                <div class="font-bold  mr-1 -mt-0.5">about Metaverse</div>
                <img src="img/metalogo.png" class="mr-3 cursor-pointer" style="height: 22px;">
            </div>
            <svg id="menu-btn_open" class="cursor-pointer -mt-0.5" width="23" height="19" viewBox="0 0 23 19"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 1.35714C0 0.607614 0.605732 0 1.35294 0H21.6471C22.3943 0 23 0.607614 23 1.35714C23 2.10667 22.3943 2.71429 21.6471 2.71429H1.35294C0.605732 2.71429 0 2.10667 0 1.35714Z"
                    fill="white" />
                <path
                    d="M0 9.5C0 8.75047 0.605732 8.14286 1.35294 8.14286H21.6471C22.3943 8.14286 23 8.75047 23 9.5C23 10.2495 22.3943 10.8571 21.6471 10.8571H1.35294C0.605732 10.8571 0 10.2495 0 9.5Z"
                    fill="white" />
                <path
                    d="M0 17.6429C0 16.8933 0.605732 16.2857 1.35294 16.2857H21.6471C22.3943 16.2857 23 16.8933 23 17.6429C23 18.3924 22.3943 19 21.6471 19H1.35294C0.605732 19 0 18.3924 0 17.6429Z"
                    fill="white" />
            </svg>

        </div>
    </div>

    <div class="col-span-1 text-white mt-6 lg:block  hidden _z100">
        <div class="block mx-auto  w-36">
            <div class="block">
                <a href="{{ route('dashboard') }}"
                    class=" --nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <div class="icon inline-block -mb-1"><svg width="20" height="20" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.2172 3.95631C10.159 3.90068 10.0817 3.86963 10.0012 3.86963C9.92069 3.86963 9.84331 3.90068 9.78516 3.95631L2.59375 10.8262C2.56321 10.8554 2.53891 10.8906 2.52233 10.9294C2.50574 10.9683 2.49722 11.0101 2.49727 11.0524L2.49609 17.5001C2.49609 17.8316 2.62779 18.1495 2.86221 18.3839C3.09663 18.6184 3.41457 18.7501 3.74609 18.7501H7.5C7.66576 18.7501 7.82473 18.6842 7.94194 18.567C8.05915 18.4498 8.125 18.2908 8.125 18.1251V12.8126C8.125 12.7297 8.15792 12.6502 8.21653 12.5916C8.27513 12.533 8.35462 12.5001 8.4375 12.5001H11.5625C11.6454 12.5001 11.7249 12.533 11.7835 12.5916C11.8421 12.6502 11.875 12.7297 11.875 12.8126V18.1251C11.875 18.2908 11.9408 18.4498 12.0581 18.567C12.1753 18.6842 12.3342 18.7501 12.5 18.7501H16.2523C16.5839 18.7501 16.9018 18.6184 17.1362 18.3839C17.3706 18.1495 17.5023 17.8316 17.5023 17.5001V11.0524C17.5024 11.0101 17.4939 10.9683 17.4773 10.9294C17.4607 10.8906 17.4364 10.8554 17.4059 10.8262L10.2172 3.95631Z"
                                fill="" />
                            <path
                                d="M19.1762 9.53711L16.2543 6.7418V2.5C16.2543 2.33424 16.1885 2.17527 16.0713 2.05806C15.954 1.94085 15.7951 1.875 15.6293 1.875H13.7543C13.5886 1.875 13.4296 1.94085 13.3124 2.05806C13.1952 2.17527 13.1293 2.33424 13.1293 2.5V3.75L10.8668 1.58672C10.6551 1.37266 10.3402 1.25 10 1.25C9.66095 1.25 9.34689 1.37266 9.13517 1.58711L0.826577 9.53633C0.583609 9.7707 0.55314 10.1562 0.774234 10.4102C0.829753 10.4742 0.897734 10.5264 0.974038 10.5633C1.05034 10.6003 1.13337 10.6214 1.21808 10.6253C1.30278 10.6291 1.38739 10.6157 1.46675 10.5859C1.54611 10.556 1.61856 10.5103 1.6797 10.4516L9.78517 2.70625C9.84333 2.65062 9.92071 2.61957 10.0012 2.61957C10.0817 2.61957 10.159 2.65062 10.2172 2.70625L18.3235 10.4516C18.4429 10.5661 18.6028 10.6286 18.7682 10.6253C18.9336 10.6221 19.091 10.5534 19.2059 10.4344C19.4457 10.1859 19.4258 9.77578 19.1762 9.53711Z"
                                fill="" />
                        </svg>
                    </div>
                    <div class="text  inline-block">Dashboard</div>
                </a>

                <a href="{{ route('presell') }}"
                    class="--nav-link  {{ request()->routeIs('presell') ? 'active' : '' }}" active>
                    <div class="icon inline-block -mb-1">
                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.8125 13.6251C1.8125 14.2218 2.04955 14.7941 2.47151 15.216C2.89347 15.638 3.46576 15.8751 4.0625 15.8751H7.29688C7.33417 15.8751 7.36994 15.8602 7.39631 15.8339C7.42268 15.8075 7.4375 15.7717 7.4375 15.7344V9.26568C7.4375 9.22839 7.42268 9.19262 7.39631 9.16625C7.36994 9.13987 7.33417 9.12506 7.29688 9.12506H2.09375C2.01916 9.12506 1.94762 9.15469 1.89488 9.20743C1.84213 9.26018 1.8125 9.33172 1.8125 9.40631V13.6251ZM7.4375 7.85943V4.06256H8.5625V7.85943C8.5625 7.89673 8.57732 7.9325 8.60369 7.95887C8.63006 7.98524 8.66583 8.00006 8.70312 8.00006H13.625C13.8166 8.00005 14.0069 7.96736 14.1875 7.90338C14.5162 7.78667 14.8008 7.57113 15.0022 7.28633C15.2036 7.00152 15.312 6.66138 15.3125 6.31256V5.75006C15.3125 5.3025 15.1347 4.87328 14.8182 4.55681C14.5018 4.24035 14.0726 4.06256 13.625 4.06256H12.1998C12.1875 4.06236 12.1755 4.05897 12.165 4.05272C12.1545 4.04647 12.1458 4.03757 12.1397 4.02692C12.1337 4.01626 12.1305 4.00421 12.1306 3.99197C12.1306 3.97972 12.1339 3.96769 12.14 3.95709C12.4655 3.40755 12.5712 2.75529 12.4359 2.13108C12.3007 1.50687 11.9345 0.956871 11.4107 0.591357C10.8869 0.225842 10.2444 0.0718396 9.61181 0.160228C8.97926 0.248617 8.40351 0.572862 8 1.06795C7.59649 0.572862 7.02074 0.248617 6.38819 0.160228C5.75564 0.0718396 5.11306 0.225842 4.5893 0.591357C4.06553 0.956871 3.69931 1.50687 3.56405 2.13108C3.4288 2.75529 3.53451 3.40755 3.86 3.95709C3.86613 3.96769 3.86937 3.97972 3.86942 3.99197C3.86947 4.00421 3.86632 4.01626 3.86029 4.02692C3.85425 4.03757 3.84553 4.04647 3.835 4.05272C3.82446 4.05897 3.81248 4.06236 3.80023 4.06256H2.375C1.92745 4.06256 1.49823 4.24035 1.18176 4.55681C0.86529 4.87328 0.6875 5.3025 0.6875 5.75006V6.31256C0.687996 6.66138 0.79638 7.00152 0.99779 7.28633C1.1992 7.57113 1.48378 7.78667 1.8125 7.90338C1.99314 7.96736 2.18337 8.00005 2.375 8.00006H7.29688C7.33417 8.00006 7.36994 7.98524 7.39631 7.95887C7.42268 7.9325 7.4375 7.89673 7.4375 7.85943ZM8.5625 2.65631C8.5625 2.37818 8.64497 2.10629 8.7995 1.87504C8.95402 1.64378 9.17364 1.46354 9.4306 1.3571C9.68756 1.25067 9.97031 1.22282 10.2431 1.27708C10.5159 1.33134 10.7665 1.46527 10.9631 1.66194C11.1598 1.85861 11.2937 2.10918 11.348 2.38196C11.4022 2.65475 11.3744 2.9375 11.268 3.19446C11.1615 3.45141 10.9813 3.67104 10.75 3.82556C10.5188 3.98008 10.2469 4.06256 9.96875 4.06256H8.5625V2.65631ZM5.9307 1.25357C6.12336 1.23976 6.31679 1.26579 6.49895 1.33003C6.6811 1.39427 6.84807 1.49534 6.98944 1.62695C7.13081 1.75856 7.24356 1.91788 7.32065 2.09498C7.39773 2.27208 7.43751 2.46316 7.4375 2.65631V4.06256H6.03125C5.66763 4.06162 5.3185 3.91987 5.05714 3.66706C4.79578 3.41424 4.64252 3.07001 4.62951 2.70662C4.6165 2.34323 4.74476 1.98892 4.98737 1.71807C5.22998 1.44721 5.56808 1.28086 5.9307 1.25392V1.25357ZM8.70312 15.8751H11.9375C12.5342 15.8751 13.1065 15.638 13.5285 15.216C13.9504 14.7941 14.1875 14.2218 14.1875 13.6251V9.40631C14.1875 9.33172 14.1579 9.26018 14.1051 9.20743C14.0524 9.15469 13.9808 9.12506 13.9062 9.12506H8.70312C8.66583 9.12506 8.63006 9.13987 8.60369 9.16625C8.57732 9.19262 8.5625 9.22839 8.5625 9.26568V15.7344C8.5625 15.7717 8.57732 15.8075 8.60369 15.8339C8.63006 15.8602 8.66583 15.8751 8.70312 15.8751Z" />
                        </svg>
                    </div>
                    <div class="text  inline-block">Presell</div>
                </a>

                <a href="{{ route('referral') }}"
                    class=" --nav-link  {{ request()->routeIs('referral') ? 'active' : '' }} ">
                    <div class="icon inline-block -mb-1  ">
                        <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.8125 9C11.0896 9 10.3907 8.67727 9.84371 8.09156C9.3118 7.52027 8.98695 6.75844 8.92965 5.94703C8.86848 5.08148 9.1325 4.28555 9.67285 3.70547C10.2132 3.12539 10.9687 2.8125 11.8125 2.8125C12.6502 2.8125 13.4079 3.13102 13.9464 3.70969C14.4903 4.29398 14.755 5.08852 14.6939 5.94668C14.6352 6.75914 14.3107 7.52062 13.7798 8.09121C13.2342 8.67727 12.5356 9 11.8125 9ZM16.4471 15.1875H7.17816C7.02914 15.1883 6.88192 15.1549 6.74783 15.0899C6.61375 15.0248 6.49637 14.9299 6.40473 14.8124C6.30752 14.685 6.24039 14.5372 6.20837 14.3802C6.17634 14.2232 6.18025 14.061 6.2198 13.9057C6.51582 12.7171 7.24918 11.7313 8.34043 11.0552C9.30898 10.4555 10.5419 10.125 11.8125 10.125C13.108 10.125 14.3086 10.4414 15.2827 11.0408C16.3764 11.7134 17.1109 12.7048 17.4055 13.9078C17.4445 14.0632 17.448 14.2254 17.4156 14.3824C17.3832 14.5393 17.3158 14.6869 17.2184 14.8141C17.1269 14.9311 17.0098 15.0256 16.8761 15.0903C16.7424 15.155 16.5956 15.1883 16.4471 15.1875ZM5.16793 9.14062C3.93078 9.14062 2.84305 7.99031 2.74215 6.57668C2.69223 5.85246 2.91793 5.18273 3.37496 4.6916C3.82707 4.20539 4.4648 3.9375 5.16793 3.9375C5.87105 3.9375 6.50387 4.2068 6.95844 4.69582C7.41898 5.19082 7.64398 5.85914 7.59125 6.57738C7.49035 7.99066 6.40297 9.14062 5.16793 9.14062ZM7.47629 10.2463C6.85789 9.94395 6.05527 9.79277 5.16828 9.79277C4.13258 9.79277 3.12676 10.0628 2.33574 10.5529C1.43891 11.1094 0.835624 11.9197 0.591991 12.8981C0.556338 13.0389 0.552965 13.1858 0.582127 13.328C0.611288 13.4703 0.672229 13.604 0.76039 13.7194C0.844043 13.8268 0.951212 13.9135 1.07366 13.973C1.1961 14.0325 1.33055 14.0631 1.46668 14.0625H5.36902C5.43489 14.0625 5.49866 14.0394 5.54922 13.9972C5.59978 13.9549 5.63393 13.8963 5.6457 13.8315C5.64957 13.8094 5.65449 13.7872 5.66012 13.7654C5.95824 12.568 6.6568 11.5562 7.68898 10.8186C7.72695 10.7913 7.75748 10.7549 7.77782 10.7127C7.79816 10.6706 7.80766 10.624 7.80546 10.5773C7.80326 10.5305 7.78943 10.4851 7.76523 10.445C7.74102 10.4049 7.7072 10.3716 7.66684 10.3479C7.61164 10.3155 7.54836 10.2814 7.47629 10.2463Z" />
                        </svg>

                    </div>
                    <div class="text  inline-block ">Referral</div>
                </a>


                <a href="{{ route('documention') }}"
                    class=" --nav-link  {{ request()->routeIs('documention') ? 'active' : '' }} " active>
                    <div class="icon inline-block -mb-1">
                        <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.9851 8.62668C16.2394 5.25555 15.1172 3.45625 13.4526 2.96477C13.1026 2.86213 12.7397 2.81085 12.375 2.81254C11.893 2.81254 11.4733 2.92996 11.0292 3.05442C10.4942 3.20453 9.8863 3.37504 9.00001 3.37504C8.11372 3.37504 7.50552 3.20488 6.96939 3.05477C6.52501 2.92996 6.1056 2.81254 5.62501 2.81254C5.24793 2.81123 4.87251 2.86235 4.5095 2.96442C2.85364 3.45379 1.73216 5.25239 0.975597 8.62458C0.162081 12.2534 0.562511 14.5445 2.09849 15.0761C2.30903 15.1503 2.53056 15.1886 2.7538 15.1893C3.80603 15.1893 4.64978 14.3129 5.22634 13.5953C5.87778 12.7832 6.64032 12.3712 9.00001 12.3712C11.1076 12.3712 11.9799 12.657 12.7333 13.5953C13.2068 14.1852 13.6543 14.598 14.1008 14.8578C14.6946 15.203 15.2881 15.2797 15.8643 15.0817C16.772 14.772 17.2923 13.9532 17.4111 12.6475C17.5015 11.6463 17.3623 10.3311 16.9851 8.62668ZM7.31251 8.43754H6.18751V9.56254C6.18751 9.71173 6.12825 9.8548 6.02276 9.96029C5.91727 10.0658 5.7742 10.125 5.62501 10.125C5.47583 10.125 5.33275 10.0658 5.22726 9.96029C5.12177 9.8548 5.06251 9.71173 5.06251 9.56254V8.43754H3.93751C3.78833 8.43754 3.64525 8.37828 3.53976 8.27279C3.43427 8.1673 3.37501 8.02423 3.37501 7.87504C3.37501 7.72586 3.43427 7.58279 3.53976 7.4773C3.64525 7.37181 3.78833 7.31254 3.93751 7.31254H5.06251V6.18754C5.06251 6.03836 5.12177 5.89528 5.22726 5.78979C5.33275 5.68431 5.47583 5.62504 5.62501 5.62504C5.7742 5.62504 5.91727 5.68431 6.02276 5.78979C6.12825 5.89528 6.18751 6.03836 6.18751 6.18754V7.31254H7.31251C7.4617 7.31254 7.60477 7.37181 7.71026 7.4773C7.81575 7.58279 7.87501 7.72586 7.87501 7.87504C7.87501 8.02423 7.81575 8.1673 7.71026 8.27279C7.60477 8.37828 7.4617 8.43754 7.31251 8.43754ZM10.2656 8.57817C10.1266 8.57817 9.99063 8.53693 9.875 8.45967C9.75937 8.38241 9.66925 8.2726 9.61603 8.14412C9.56282 8.01564 9.54889 7.87426 9.57602 7.73787C9.60315 7.60148 9.67012 7.47619 9.76845 7.37786C9.86679 7.27952 9.99207 7.21256 10.1285 7.18543C10.2649 7.1583 10.4062 7.17222 10.5347 7.22544C10.6632 7.27866 10.773 7.36878 10.8503 7.48441C10.9275 7.60004 10.9688 7.73598 10.9688 7.87504C10.9688 8.06152 10.8947 8.24037 10.7628 8.37223C10.631 8.50409 10.4521 8.57817 10.2656 8.57817ZM11.8125 10.125C11.6734 10.125 11.5374 10.0838 11.4217 10.0064C11.306 9.92909 11.2159 9.81917 11.1627 9.69059C11.1096 9.56201 11.0958 9.42054 11.123 9.2841C11.1503 9.14766 11.2174 9.02238 11.316 8.92411C11.4145 8.82585 11.5399 8.75902 11.6764 8.73209C11.8129 8.70516 11.9544 8.71933 12.0828 8.77282C12.2113 8.82631 12.3209 8.91671 12.398 9.03256C12.475 9.14842 12.516 9.28454 12.5156 9.42368C12.5152 9.60985 12.4409 9.78824 12.3091 9.91973C12.1773 10.0512 11.9987 10.125 11.8125 10.125ZM11.8125 7.03129C11.6734 7.03129 11.5375 6.99006 11.4219 6.9128C11.3062 6.83554 11.2161 6.72572 11.1629 6.59724C11.1097 6.46876 11.0958 6.32739 11.1229 6.19099C11.15 6.0546 11.217 5.92932 11.3153 5.83098C11.4137 5.73265 11.5389 5.66568 11.6753 5.63855C11.8117 5.61142 11.9531 5.62535 12.0816 5.67856C12.2101 5.73178 12.3199 5.8219 12.3971 5.93753C12.4744 6.05316 12.5156 6.1891 12.5156 6.32817C12.5156 6.51465 12.4416 6.69349 12.3097 6.82535C12.1778 6.95721 11.999 7.03129 11.8125 7.03129ZM13.3594 8.57817C13.2203 8.57817 13.0844 8.53693 12.9688 8.45967C12.8531 8.38241 12.763 8.2726 12.7098 8.14412C12.6566 8.01564 12.6426 7.87426 12.6698 7.73787C12.6969 7.60148 12.7639 7.47619 12.8622 7.37786C12.9605 7.27952 13.0858 7.21256 13.2222 7.18543C13.3586 7.1583 13.5 7.17222 13.6285 7.22544C13.7569 7.27866 13.8668 7.36878 13.944 7.48441C14.0213 7.60004 14.0625 7.73598 14.0625 7.87504C14.0625 8.06152 13.9884 8.24037 13.8566 8.37223C13.7247 8.50409 13.5459 8.57817 13.3594 8.57817Z" />
                        </svg>
                    </div>
                    <div class="text  inline-block">Documention</div>
                </a>


                <a href="{{ route('gameplay') }}"
                    class=" --nav-link  {{ request()->routeIs('gameplay') ? 'active' : '' }} " active>
                    <div class="icon inline-block -mb-1">
                        <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.9851 8.62668C16.2394 5.25555 15.1172 3.45625 13.4526 2.96477C13.1026 2.86213 12.7397 2.81085 12.375 2.81254C11.893 2.81254 11.4733 2.92996 11.0292 3.05442C10.4942 3.20453 9.8863 3.37504 9.00001 3.37504C8.11372 3.37504 7.50552 3.20488 6.96939 3.05477C6.52501 2.92996 6.1056 2.81254 5.62501 2.81254C5.24793 2.81123 4.87251 2.86235 4.5095 2.96442C2.85364 3.45379 1.73216 5.25239 0.975597 8.62458C0.162081 12.2534 0.562511 14.5445 2.09849 15.0761C2.30903 15.1503 2.53056 15.1886 2.7538 15.1893C3.80603 15.1893 4.64978 14.3129 5.22634 13.5953C5.87778 12.7832 6.64032 12.3712 9.00001 12.3712C11.1076 12.3712 11.9799 12.657 12.7333 13.5953C13.2068 14.1852 13.6543 14.598 14.1008 14.8578C14.6946 15.203 15.2881 15.2797 15.8643 15.0817C16.772 14.772 17.2923 13.9532 17.4111 12.6475C17.5015 11.6463 17.3623 10.3311 16.9851 8.62668ZM7.31251 8.43754H6.18751V9.56254C6.18751 9.71173 6.12825 9.8548 6.02276 9.96029C5.91727 10.0658 5.7742 10.125 5.62501 10.125C5.47583 10.125 5.33275 10.0658 5.22726 9.96029C5.12177 9.8548 5.06251 9.71173 5.06251 9.56254V8.43754H3.93751C3.78833 8.43754 3.64525 8.37828 3.53976 8.27279C3.43427 8.1673 3.37501 8.02423 3.37501 7.87504C3.37501 7.72586 3.43427 7.58279 3.53976 7.4773C3.64525 7.37181 3.78833 7.31254 3.93751 7.31254H5.06251V6.18754C5.06251 6.03836 5.12177 5.89528 5.22726 5.78979C5.33275 5.68431 5.47583 5.62504 5.62501 5.62504C5.7742 5.62504 5.91727 5.68431 6.02276 5.78979C6.12825 5.89528 6.18751 6.03836 6.18751 6.18754V7.31254H7.31251C7.4617 7.31254 7.60477 7.37181 7.71026 7.4773C7.81575 7.58279 7.87501 7.72586 7.87501 7.87504C7.87501 8.02423 7.81575 8.1673 7.71026 8.27279C7.60477 8.37828 7.4617 8.43754 7.31251 8.43754ZM10.2656 8.57817C10.1266 8.57817 9.99063 8.53693 9.875 8.45967C9.75937 8.38241 9.66925 8.2726 9.61603 8.14412C9.56282 8.01564 9.54889 7.87426 9.57602 7.73787C9.60315 7.60148 9.67012 7.47619 9.76845 7.37786C9.86679 7.27952 9.99207 7.21256 10.1285 7.18543C10.2649 7.1583 10.4062 7.17222 10.5347 7.22544C10.6632 7.27866 10.773 7.36878 10.8503 7.48441C10.9275 7.60004 10.9688 7.73598 10.9688 7.87504C10.9688 8.06152 10.8947 8.24037 10.7628 8.37223C10.631 8.50409 10.4521 8.57817 10.2656 8.57817ZM11.8125 10.125C11.6734 10.125 11.5374 10.0838 11.4217 10.0064C11.306 9.92909 11.2159 9.81917 11.1627 9.69059C11.1096 9.56201 11.0958 9.42054 11.123 9.2841C11.1503 9.14766 11.2174 9.02238 11.316 8.92411C11.4145 8.82585 11.5399 8.75902 11.6764 8.73209C11.8129 8.70516 11.9544 8.71933 12.0828 8.77282C12.2113 8.82631 12.3209 8.91671 12.398 9.03256C12.475 9.14842 12.516 9.28454 12.5156 9.42368C12.5152 9.60985 12.4409 9.78824 12.3091 9.91973C12.1773 10.0512 11.9987 10.125 11.8125 10.125ZM11.8125 7.03129C11.6734 7.03129 11.5375 6.99006 11.4219 6.9128C11.3062 6.83554 11.2161 6.72572 11.1629 6.59724C11.1097 6.46876 11.0958 6.32739 11.1229 6.19099C11.15 6.0546 11.217 5.92932 11.3153 5.83098C11.4137 5.73265 11.5389 5.66568 11.6753 5.63855C11.8117 5.61142 11.9531 5.62535 12.0816 5.67856C12.2101 5.73178 12.3199 5.8219 12.3971 5.93753C12.4744 6.05316 12.5156 6.1891 12.5156 6.32817C12.5156 6.51465 12.4416 6.69349 12.3097 6.82535C12.1778 6.95721 11.999 7.03129 11.8125 7.03129ZM13.3594 8.57817C13.2203 8.57817 13.0844 8.53693 12.9688 8.45967C12.8531 8.38241 12.763 8.2726 12.7098 8.14412C12.6566 8.01564 12.6426 7.87426 12.6698 7.73787C12.6969 7.60148 12.7639 7.47619 12.8622 7.37786C12.9605 7.27952 13.0858 7.21256 13.2222 7.18543C13.3586 7.1583 13.5 7.17222 13.6285 7.22544C13.7569 7.27866 13.8668 7.36878 13.944 7.48441C14.0213 7.60004 14.0625 7.73598 14.0625 7.87504C14.0625 8.06152 13.9884 8.24037 13.8566 8.37223C13.7247 8.50409 13.5459 8.57817 13.3594 8.57817Z" />
                        </svg>
                    </div>
                    <div class="text  inline-block">Gameplay</div>
                </a>


                <a href="{{ route('nft') }}"
                    class=" --nav-link  {{ request()->routeIs('nft') ? 'active' : '' }} ">
                    <div class="icon inline-block -mb-1">
                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.8125 13.6251C1.8125 14.2218 2.04955 14.7941 2.47151 15.216C2.89347 15.638 3.46576 15.8751 4.0625 15.8751H7.29688C7.33417 15.8751 7.36994 15.8602 7.39631 15.8339C7.42268 15.8075 7.4375 15.7717 7.4375 15.7344V9.26568C7.4375 9.22839 7.42268 9.19262 7.39631 9.16625C7.36994 9.13987 7.33417 9.12506 7.29688 9.12506H2.09375C2.01916 9.12506 1.94762 9.15469 1.89488 9.20743C1.84213 9.26018 1.8125 9.33172 1.8125 9.40631V13.6251ZM7.4375 7.85943V4.06256H8.5625V7.85943C8.5625 7.89673 8.57732 7.9325 8.60369 7.95887C8.63006 7.98524 8.66583 8.00006 8.70312 8.00006H13.625C13.8166 8.00005 14.0069 7.96736 14.1875 7.90338C14.5162 7.78667 14.8008 7.57113 15.0022 7.28633C15.2036 7.00152 15.312 6.66138 15.3125 6.31256V5.75006C15.3125 5.3025 15.1347 4.87328 14.8182 4.55681C14.5018 4.24035 14.0726 4.06256 13.625 4.06256H12.1998C12.1875 4.06236 12.1755 4.05897 12.165 4.05272C12.1545 4.04647 12.1458 4.03757 12.1397 4.02692C12.1337 4.01626 12.1305 4.00421 12.1306 3.99197C12.1306 3.97972 12.1339 3.96769 12.14 3.95709C12.4655 3.40755 12.5712 2.75529 12.4359 2.13108C12.3007 1.50687 11.9345 0.956871 11.4107 0.591357C10.8869 0.225842 10.2444 0.0718396 9.61181 0.160228C8.97926 0.248617 8.40351 0.572862 8 1.06795C7.59649 0.572862 7.02074 0.248617 6.38819 0.160228C5.75564 0.0718396 5.11306 0.225842 4.5893 0.591357C4.06553 0.956871 3.69931 1.50687 3.56405 2.13108C3.4288 2.75529 3.53451 3.40755 3.86 3.95709C3.86613 3.96769 3.86937 3.97972 3.86942 3.99197C3.86947 4.00421 3.86632 4.01626 3.86029 4.02692C3.85425 4.03757 3.84553 4.04647 3.835 4.05272C3.82446 4.05897 3.81248 4.06236 3.80023 4.06256H2.375C1.92745 4.06256 1.49823 4.24035 1.18176 4.55681C0.86529 4.87328 0.6875 5.3025 0.6875 5.75006V6.31256C0.687996 6.66138 0.79638 7.00152 0.99779 7.28633C1.1992 7.57113 1.48378 7.78667 1.8125 7.90338C1.99314 7.96736 2.18337 8.00005 2.375 8.00006H7.29688C7.33417 8.00006 7.36994 7.98524 7.39631 7.95887C7.42268 7.9325 7.4375 7.89673 7.4375 7.85943ZM8.5625 2.65631C8.5625 2.37818 8.64497 2.10629 8.7995 1.87504C8.95402 1.64378 9.17364 1.46354 9.4306 1.3571C9.68756 1.25067 9.97031 1.22282 10.2431 1.27708C10.5159 1.33134 10.7665 1.46527 10.9631 1.66194C11.1598 1.85861 11.2937 2.10918 11.348 2.38196C11.4022 2.65475 11.3744 2.9375 11.268 3.19446C11.1615 3.45141 10.9813 3.67104 10.75 3.82556C10.5188 3.98008 10.2469 4.06256 9.96875 4.06256H8.5625V2.65631ZM5.9307 1.25357C6.12336 1.23976 6.31679 1.26579 6.49895 1.33003C6.6811 1.39427 6.84807 1.49534 6.98944 1.62695C7.13081 1.75856 7.24356 1.91788 7.32065 2.09498C7.39773 2.27208 7.43751 2.46316 7.4375 2.65631V4.06256H6.03125C5.66763 4.06162 5.3185 3.91987 5.05714 3.66706C4.79578 3.41424 4.64252 3.07001 4.62951 2.70662C4.6165 2.34323 4.74476 1.98892 4.98737 1.71807C5.22998 1.44721 5.56808 1.28086 5.9307 1.25392V1.25357ZM8.70312 15.8751H11.9375C12.5342 15.8751 13.1065 15.638 13.5285 15.216C13.9504 14.7941 14.1875 14.2218 14.1875 13.6251V9.40631C14.1875 9.33172 14.1579 9.26018 14.1051 9.20743C14.0524 9.15469 13.9808 9.12506 13.9062 9.12506H8.70312C8.66583 9.12506 8.63006 9.13987 8.60369 9.16625C8.57732 9.19262 8.5625 9.22839 8.5625 9.26568V15.7344C8.5625 15.7717 8.57732 15.8075 8.60369 15.8339C8.63006 15.8602 8.66583 15.8751 8.70312 15.8751Z" />
                        </svg>
                    </div>
                    <div class="text  inline-block ">NFT Lands</div>
                </a>
            </div>

        </div>
    </div>

</div>
