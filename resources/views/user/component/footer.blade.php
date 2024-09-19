<style>
    .foot {
        position: relative;
        bottom: 0;
        background-color: #f1f1f1;
        width: 100%;
        padding: 1rem 3% 0;
        display: flex;
        flex-direction: column;
    }

    *::selection {
        background: var(--primary);
        color: var(--footer-bg);
    }

    .footer-wrapper {
        display: flex;
        flex-direction: column;
        max-width: var(--footer-width);
        width: 100%;
        margin: 0 auto;
        padding: 1rem;
    }

    .footer-columns {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 4rem;
        flex-wrap: wrap;
        padding-top: 1rem;
    }

    .footer-logo-column {
        padding-right: 40px;
    }

    .footer-logo {
        margin-bottom: 1.5rem;
        width: 14rem;
    }

    /*? socials */
    .social-wrapper {
        display: flex;
        gap: 0.5rem;
        margin-left: -2rem;
        margin-bottom: 0.5rem;
    }

    .social-links {
        display: inline-flex;
        gap: 0.5rem;
        align-items: center;
    }

    .social-links a {
        color: var(--logo-color);
        text-decoration: none;
    }

    .social-links svg {
        width: 2.5rem;
        height: 2.5rem;
        stroke: var(--logo-color);
        transition: all 0.2s ease-in-out;
    }

    .social-links svg:hover {
        stroke: var(--headline-color);
    }

    .social-links ul {
        display: flex;
        flex-wrap: wrap;
        gap: 1.05rem;
        list-style-type: none;
    }

    .link-columns {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        flex-grow: 1;
    }

    .link-columns>div {
        flex-grow: 1;
        display: flex;
        gap: 1.5rem;
    }

    .link-columns>div>section {
        min-width: 8rem;
        width: 100%;
    }

    .link-columns ul {
        display: flex;
        gap: 1rem;
        list-style-type: none;
        padding: 0;
        margin: 0;
        flex-direction: column;
    }

    .link-columns ul a :nth-child(1) {
        margin-left: -2rem;
    }

    .link-columns ul a {
        color: var(--text-color);
        text-decoration: none;
        transition: all 0.2s ease-in-out;
        font-weight: 400;
        font-size: 0.97rem;
    }

    .link-columns ul a:hover {
        color: var(--headline-color);
    }

    .link-columns h3 {
        color: var(--text-color);
        margin-bottom: 1.5rem;
        font-size: 1.1rem;
        font-weight: 700;
    }

    /*? Footer bottom */
    .footer-bottom {
        margin-top: 7rem;
        width: 100%;
        color: var(--text-color);
    }

    .footer-bottom-wrapper {
        max-width: var(--footer-width);
        margin: 0 auto;
        width: 100%;
        padding: 2.5rem 1rem;
        border-top: 1px solid var(--footer-border);
    }

    .footer-bottom small {
        font-size: 1rem;
        display: inline;
        white-space: nowrap;
    }

    .footer-bottom>small {
        font-size: 1rem;
        width: 100%;
    }
</style>

<section class="foot" id="foot">
    <div class="footer-wrapper">
        <div class="footer-columns">
            <div class="footer-logo-column">
                <img src="{{ asset('img/footer-logo.png') }}" loading="lazy" alt="MD logo" class="footer-logo"
                    width="200">
                <div class="social-wrapper">
                    <div class='social-links'>
                        <ul>
                            <li>
                                <a href="https://www.instagram.com/organic_md/" title="Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-brand-instagram" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v22H0z" fill="none" />
                                        <path
                                            d="M3.06167 7.24464C3.10844 6.22264 3.26846 5.56351 3.48487 5.00402L3.48778 4.99629C3.70223 4.42695 4.03818 3.91119 4.47224 3.48489L4.47833 3.47891L4.48431 3.47282C4.91096 3.0382 5.42691 2.70258 5.99575 2.4887L6.00556 2.48495C6.56378 2.26786 7.22162 2.10843 8.24447 2.06167M3.06167 7.24464C3.0125 8.33659 2.99997 8.67508 2.99997 11.5063C2.99997 14.3381 3.01181 14.6758 3.06164 15.768M3.06167 7.24464L3.06167 7.52008M3.48867 18.0168C3.70255 18.5856 4.03817 19.1015 4.47279 19.5282L4.47887 19.5342L4.48484 19.5402C4.91116 19.9743 5.42694 20.3103 5.99628 20.5247L6.00478 20.5279C6.56351 20.7446 7.22167 20.9041 8.24447 20.9509M3.48867 18.0168L3.48492 18.0069C3.26783 17.4487 3.1084 16.7909 3.06164 15.768M3.48867 18.0168L3.47585 17.9492M3.06164 15.768L3.07839 15.8562M3.06164 15.768L3.06164 15.4919M3.47585 17.9492L3.07839 15.8562M3.47585 17.9492C3.30704 17.5033 3.13322 16.881 3.07839 15.8562M3.47585 17.9492C3.48177 17.9649 3.48768 17.9803 3.49359 17.9955C3.70766 18.5726 4.04685 19.0952 4.48679 19.5256C4.91708 19.9655 5.43944 20.3046 6.01636 20.5187C6.47934 20.699 7.13172 20.8875 8.24431 20.9385C9.3671 20.9896 9.71399 21 12.5062 21C15.2985 21 15.6457 20.9896 16.7685 20.9385C17.8824 20.8874 18.534 20.6979 18.9954 20.519C19.5726 20.305 20.0953 19.9657 20.5257 19.5256C20.9655 19.0953 21.3046 18.573 21.5187 17.9961C21.699 17.5331 21.8875 16.8808 21.9384 15.7682C21.9895 14.6454 22 14.2978 22 11.5063C22 8.71472 21.9895 8.36684 21.9384 7.24405C21.8871 6.12427 21.6959 5.47168 21.5161 5.00992C21.2811 4.40322 20.9831 3.94437 20.525 3.48627C20.0678 3.02999 19.6102 2.73179 19.003 2.49654C18.5396 2.31537 17.8866 2.12531 16.7685 2.07406C16.6712 2.06964 16.5798 2.06552 16.4921 2.06168M3.07839 15.8562C3.07684 15.8273 3.07539 15.7981 3.07403 15.7685C3.06961 15.6712 3.06548 15.5797 3.06164 15.4919M8.24447 2.06167C9.33668 2.01184 9.67505 2 12.5062 2C15.3374 2 15.6756 2.01252 16.7675 2.06168M8.24447 2.06167L8.52062 2.06167M16.7675 2.06168L16.4921 2.06168M16.7675 2.06168C17.7897 2.10844 18.4489 2.26844 19.0085 2.48487L19.0162 2.48781C19.5855 2.70226 20.1013 3.03821 20.5276 3.47227L20.5335 3.4783L20.5396 3.48422C20.9737 3.91055 21.3096 4.42646 21.5239 4.99596L21.5275 5.00559C21.7446 5.56381 21.9041 6.22165 21.9508 7.2445M8.52062 2.06167L16.4921 2.06168M8.52062 2.06167C9.44548 2.02123 9.95666 2.01253 12.5062 2.01253C15.056 2.01253 15.5671 2.02124 16.4921 2.06168M8.52062 2.06167C8.43284 2.06551 8.34134 2.06964 8.24402 2.07406C7.13004 2.12512 6.47843 2.31464 6.01708 2.49358C5.43767 2.70837 4.91328 3.04936 4.48192 3.49186C4.0281 3.94756 3.73105 4.40422 3.49655 5.0094C3.31536 5.4728 3.12527 6.12614 3.07402 7.24434C3.06961 7.34135 3.06549 7.43257 3.06167 7.52008M21.9508 15.768C21.9041 16.7908 21.7446 17.449 21.5279 18.0077L21.5247 18.0162C21.3102 18.5856 20.9743 19.1013 20.5402 19.5276L20.5341 19.5336L20.5282 19.5397C20.1015 19.9743 19.5856 20.3099 19.0167 20.5238L19.0069 20.5276C18.4487 20.7447 17.7908 20.9041 16.768 20.9509M3.06164 15.4919C3.0212 14.567 3.0125 14.0558 3.0125 11.5063C3.0125 8.95591 3.0212 8.44544 3.06167 7.52008M3.06164 15.4919L3.06167 7.52008M10.8155 15.5881C11.3515 15.8101 11.926 15.9244 12.5062 15.9244C13.678 15.9244 14.8018 15.4589 15.6304 14.6304C16.4589 13.8018 16.9244 12.678 16.9244 11.5063C16.9244 10.3345 16.4589 9.21072 15.6304 8.38215C14.8018 7.55359 13.678 7.0881 12.5062 7.0881C11.926 7.0881 11.3515 7.20238 10.8155 7.42442C10.2794 7.64645 9.79239 7.97189 9.38213 8.38215C8.97187 8.79242 8.64643 9.27947 8.42439 9.81551C8.20236 10.3515 8.08808 10.9261 8.08808 11.5063C8.08808 12.0865 8.20236 12.661 8.42439 13.197C8.64643 13.7331 8.97187 14.2201 9.38213 14.6304C9.79239 15.0406 10.2794 15.3661 10.8155 15.5881ZM9.37229 8.37231C10.2035 7.54113 11.3308 7.07418 12.5062 7.07418C13.6817 7.07418 14.809 7.54113 15.6402 8.37231C16.4714 9.20349 16.9383 10.3308 16.9383 11.5063C16.9383 12.6817 16.4714 13.809 15.6402 14.6402C14.809 15.4714 13.6817 15.9383 12.5062 15.9383C11.3308 15.9383 10.2035 15.4714 9.37229 14.6402C8.54111 13.809 8.07416 12.6817 8.07416 11.5063C8.07416 10.3308 8.54111 9.20349 9.37229 8.37231ZM19.434 6.04229C19.434 6.37873 19.3003 6.70139 19.0625 6.93929C18.8246 7.17719 18.5019 7.31084 18.1655 7.31084C17.829 7.31084 17.5064 7.17719 17.2685 6.93929C17.0306 6.70139 16.8969 6.37873 16.8969 6.04229C16.8969 5.70585 17.0306 5.38319 17.2685 5.1453C17.5064 4.9074 17.829 4.77375 18.1655 4.77375C18.5019 4.77375 18.8246 4.9074 19.0625 5.1453C19.3003 5.38319 19.434 5.70585 19.434 6.04229Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/MDorganik/" title="Facebook">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-brand-facebook" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M22 12C22 6.47714 17.5229 1.99999 12 1.99999C6.47715 1.99999 2 6.47714 2 12C2 16.9913 5.65686 21.1283 10.4375 21.8785V14.8906H7.89844V12H10.4375V9.79687C10.4375 7.29062 11.9304 5.90624 14.2146 5.90624C15.3087 5.90624 16.4531 6.10155 16.4531 6.10155V8.56249H15.1921C13.9499 8.56249 13.5625 9.33333 13.5625 10.1242V12H16.3359L15.8926 14.8906H13.5625V21.8785C18.3431 21.1283 22 16.9913 22 12Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/@organic_md" title="Tiktok">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-brand-tiktok" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8Z" />
                                        <path
                                            d="M10 12C8.34315 12 7 13.3431 7 15C7 16.6569 8.34315 18 10 18C11.6569 18 13 16.6569 13 15V6C13.3333 7 14.6 9 17 9" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@organic_md" title="Youtube">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-brand-youtube" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                                        <path d="M10 9l5 3l-5 3z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="link-columns">
                <div>
                    <section>
                        <h3>@lang('users.footkontak')</h3>
                        <ul>
                            <li>
                                <a href="https://maps.app.goo.gl/QgHnegyWPqhwZz3v9" title="Address"
                                    style="display: flex;">
                                    <i data-feather="map-pin"
                                        style="width: 1.3rem; height: 1.3rem; margin-top: 0.2rem; margin-right: 0.5rem;"></i>
                                    Jl. Boulevard Graha Raya No.B3/1,<br> Bintaro Jaya, Kec. Serpong Utara,<br>Kota
                                    Tangerang Selatan,<br>Banten 15324
                                </a>
                            </li>
                            <li>
                                <a href="tel:+62215399721" title="Telephone"
                                    style="display: flex; align-items: center;">
                                    <i data-feather="phone"
                                        style="width: 1.3rem; height: 1.3rem; margin-right: 0.5rem;"></i>
                                    (021) 5399721
                                </a>
                            </li>
                            <li>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=supplier.organicrice.md@gmail.com&su=Your%20Subject&body=Your%20Message"
                                    title="Email" style="display: flex; align-items: center;">
                                    <i data-feather="mail"
                                        style="width: 1.3rem; height: 1.3rem; margin-right: 0.5rem;"></i>
                                    supplier.organicrice.md@gmail.com
                                </a>
                            </li>
                        </ul>
                    </section>
                </div>
                <div>
                    <section>
                        <h3>@lang('users.foottentang')</h3>
                        <ul>
                            <li>
                                {{-- <a href="{{ route('about') }}" title="About">@lang('users.footcompany')</a> --}}
                            </li>
                            <li>
                                {{-- <a href="{{ route('article') }}" title="Article">@lang('users.footartikel')</a> --}}
                            </li>
                            <li>
                                {{-- <a href="{{ route('certificate') }}" title="Certificate">@lang('users.footsertif')</a> --}}
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h3>@lang('users.footcust')</h3>
                        <ul>
                            <li>
                                {{-- <a href="{{ route('tos') }}" title="Terms of Service">@lang('users.foottos')</a> --}}
                            </li>
                            <li>
                                {{-- <a href="{{ route('faq') }}" title="FAQ">@lang('users.footfaq')</a> --}}
                            </li>
                            {{-- <li>
                                <a href="{{ route('store') }}" title="Our Store">Our Store</a>
                            </li> --}}
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- bottom part section -->
    <div class="footer-bottom">
        <div class="footer-bottom-wrapper">
            <small>© <span id="year" style="font-weight: 600"></span> Organic Rice MD. All Right Reserved.</small>
        </div>
    </div>
</section>
<!-- Footer End -->
