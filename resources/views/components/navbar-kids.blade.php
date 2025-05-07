<style>
    .shop-con {
        align-items: center;
        width: 458px;
        margin-left: 20px;
        display: flex;
        justify-content: space-between;
    }
</style>
<div data-animation="over-left" class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="medium" role="banner" data-no-scroll="1" data-duration="400" data-doc-height="1">
    <div class="nav-container w-container">
        <div class="nav-menu-wrapper">
            <a href="{{route("homepage")}}" aria-current="page" class="brand w-nav-brand w--current"><img src="/images/UNIFY-LOGO-VARIATIONS.png" loading="lazy" alt="" height="30" class="logo-header"></a>
            <nav role="navigation" class="nav-menu w-nav-menu">
                <div class="tablet-menu">
                    <a href="{{route("homepage")}}" aria-current="page" class="brand-tablet w-nav-brand w--current"><img src="images/Logo-dark.svg" loading="lazy" alt="Logo dark
" height="30" class="logo-header"></a>
                    <div class="close-menu-button w-nav-button"><img src="images/close-btn.svg" loading="lazy" alt="" class="nav-close-icon"></div>
                </div>
                <div class="menu-wrap">
                    <div data-hover="true" data-delay="0" data-w-id="b328e41c-6a11-2bbb-83e9-4d62cb3a38bc" class="nav-dropdown w-dropdown">
                        <div class="nav-dropdown-toggle w-dropdown-toggle">
                            <div class="nav-dropdown-icon w-icon-dropdown-toggle"></div>
                            <a href="{{route("homepage")}}" >
                                <p class="nav-item-title">Home</p>
                            </a>


                        </div>
                    </div>
                    <a href="{{route("about-us")}}" class="nav-item-title nav-link">About Us</a>
                    <a href="{{route('kids')}}" class="nav-item-title nav-link">Kids</a>
                    <a href="{{route('teen')}}" class="nav-item-title nav-link">Teens</a>
                    
                    {{-- <div data-hover="true" data-delay="0" data-w-id="b328e41c-6a11-2bbb-83e9-4d62cb3a3901" class="nav-dropdown w-dropdown">
                        <div class="nav-dropdown-toggle w-dropdown-toggle">
                            <div class="nav-dropdown-icon w-icon-dropdown-toggle"></div>
                            <p class="nav-item-title">Coaches</p>
                        </div>
                    </div> --}}
                    <div data-hover="true" data-delay="0" data-w-id="b328e41c-6a11-2bbb-83e9-4d62cb3a3910" class="nav-dropdown w-dropdown">
                        <div class="nav-dropdown-toggle w-dropdown-toggle">
                            <div class="nav-dropdown-icon w-icon-dropdown-toggle"></div>
                            <a href="/simplify-setup"><p class="nav-item-title">Simplify</p></a>
                        </div>
                    </div>
                    <div data-hover="true" data-delay="0" data-w-id="b328e41c-6a11-2bbb-83e9-4d62cb3a3910" class="nav-dropdown w-dropdown">
                        <div class="nav-dropdown-toggle w-dropdown-toggle">
                            <div class="nav-dropdown-icon w-icon-dropdown-toggle"></div>
                            <a href="/pricing"><p class="nav-item-title">Pricing</p></a>
                        </div>
                    </div>
                    {{-- <a href="{{route("contact-us")}}" class="primary-button tablet-header">Let’s Talk</a> --}}
                </div>
            </nav>
            <div class="shop-con">
                {{-- @if (request()->is('*kids') || request()->is('*teen'))
                    @php
                        $lastSegment = last(explode('/', request()->path())); // Get the last segment of the URL
                        $type = ($lastSegment === 'kids' || $lastSegment === 'teen') ? $lastSegment : null;
                    @endphp
                    <a href="{{route('register')}}?type={{$type}}" class="primary-button header">Take Assessment</a>                    
                @else  --}}
                <a href="{{route('pricing')}}" class="primary-button header">Take Assessment</a>
                {{-- @endif --}}
                    <a href="{{route('login')}}" class="primary-button header" style="margin-left: 20px;">Existing Users Login</a>
            </div>
            <div class="menu-button w-nav-button"><img src="images/menu-btn.svg" loading="lazy" alt="" height="16" class="image-burger"></div>
        </div>
    </div>
</div>
