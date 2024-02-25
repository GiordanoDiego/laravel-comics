@php
    $linksDcComics = array(
        "Characters",
        "Comics",
        "Movies",
        "TV",
        "Games",
        "Videos",
        "News"
    );
    
    $linksShop = array(
        "Shop DC",
        "Shop DC Collectibles",
       
    );
    $linksDC = array(
        "Terms Of Use",
        "Privacy policy (New)",
        "Ad Choices",
        "Advertising",
        "Jobs",
        "Subscriptions",
        "Talent Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop Help",
        "Contact Us",
        "Shop DC Collectibles"
    );

    $linksSites = array(
        "DC",
        "MAD Magazine",
        "DC Kids",
        "DC Universe",
        "DC Power Visa"
    );


@endphp

<footer>
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class=" d-flex  pt-3  pb-3 ">
                        <div>
                            {{-- DC COMICS --}}
                            <ul>
                                <li class=" fw-bold fs-5">
                                    DC COMICS
                                </li>
                                @foreach ($linksDcComics as $singleLink)
                                    <li>
                                        <a class="color_gray" href="">{{$singleLink}}</a>
                                    </li> 
                                @endforeach
                            </ul>

                            {{-- shop --}}
                            <ul>
                                <li class=" fw-bold  fs-5">
                                    SHOP
                                </li>
                                @foreach ($linksShop as $singleLink)
                                    <li>
                                        <a class="color_gray" href="">{{$singleLink}}</a>
                                    </li> 
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            {{-- DC --}}
                            <ul>
                                <li class=" fw-bold fs-5">
                                    DC 
                                </li>
                                @foreach ($linksDC as $singleLink)
                                    <li>
                                        <a class="color_gray" href="">{{$singleLink}}</a>
                                    </li> 
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            {{-- Sites --}}
                            <ul>
                                <li class=" fw-bold fs-5">
                                    SITES
                                </li>
                                @foreach ($linksSites as $singleLink)
                                    <li>
                                        <a class="color_gray" href="">{{$singleLink}}</a>
                                    </li> 
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="pb-3 ps-2">
                        <span>
                            All Site Content TM and © 2020 DC Entertainment, unless otherwise 
                            <span class=" color_dc_blue">noted here</span>. 
                            All rights reserved.
                            <span class=" color_dc_blue">Cookies Settings</span>
                        </span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="logo-dc-container">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer bottom --}}
    <div class="footer_bottom">
        <div class="container">
            <div class="row justify-content-between ">
                <div class="col">
                    <div>
                        <button>
                            SING-UP NOW
                        </button>
                    </div>
                </div>
                <div class="col">
                    <div class=" d-flex  justify-content-end align-items-center">
                        <div class="color_dc_blue me-3 fw-bold ">FOLLOW US</div>
                        
                        <div class=" d-flex ">
                            <div class=" me-2 ">
                                <img src="./img/footer-facebook.png" alt="">
                            </div>
                            <div class=" me-2 ">
                                <img src="./img/footer-twitter.png" alt="">
                            </div>
                            <div class=" me-2 ">
                                <img src="./img/footer-youtube.png" alt="">
                            </div>
                            <div class=" me-2 "> 
                                <img src="./img/footer-pinterest.png" alt="">
                            </div>
                            <div>
                                <img src="./img/footer-periscope.png" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    

</footer>
