<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('landing-page')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="35" height="48" viewBox="0 0 35 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="22.3896" y="0.355225" width="9.68308" height="9.68308" rx="4.84154" fill="#FFA7D1" />
                    <rect x="3.69922" y="0.355225" width="9.68308" height="9.68308" rx="4.84154" fill="#FFA7D1" />
                    <path d="M0.771484 22.4237C0.771484 12.9718 8.43381 5.30945 17.8858 5.30945C27.3377 5.30945 35.0001 12.9718 35.0001 22.4237V47.6448H0.771484V22.4237Z" fill="#5ABBFD" />
                    <circle cx="11.243" cy="21.1852" r="6.19267" fill="#FFE25C" />
                    <circle cx="24.5286" cy="21.1852" r="6.19267" fill="#FFE25C" />
                    <path d="M22.3898 24.4503C22.3898 25.0122 22.2762 25.5686 22.0555 26.0877C21.8348 26.6068 21.5114 27.0784 21.1036 27.4757C20.6959 27.873 20.2118 28.1882 19.679 28.4032C19.1463 28.6182 18.5752 28.7289 17.9986 28.7289C17.4219 28.7289 16.8509 28.6182 16.3182 28.4032C15.7854 28.1882 15.3013 27.873 14.8936 27.4757C14.4858 27.0784 14.1624 26.6068 13.9417 26.0877C13.721 25.5686 13.6074 25.0122 13.6074 24.4503L17.9986 24.4503H22.3898Z" fill="#393939" />
                    <path d="M15.8589 24.4503H17.4352V25.4637C17.4352 25.8989 17.0823 26.2518 16.647 26.2518C16.2118 26.2518 15.8589 25.899 15.8589 25.4637V24.4503Z" fill="white" />
                    <path d="M18.3359 24.4503H19.9123V25.4637C19.9123 25.8989 19.5594 26.2518 19.1241 26.2518C18.6888 26.2518 18.3359 25.899 18.3359 25.4637V24.4503Z" fill="white" />
                    <path d="M20.1372 22.1986C20.1372 22.1986 20.3624 21.2979 21.7135 21.2979C23.0647 21.2979 23.2898 22.1986 23.2898 22.1986" stroke="#393939" stroke-width="0.900752" stroke-linecap="round" />
                    <rect x="0.771484" y="35.2594" width="34.2286" height="8.78233" fill="#FFE25C" />
                    <rect x="0.771484" y="38.412" width="34.2286" height="9.23271" fill="#0167F8" />
                    <path d="M12.7065 22.1986C12.7065 22.1986 12.9317 21.2979 14.2829 21.2979C15.634 21.2979 15.8592 22.1986 15.8592 22.1986" stroke="#393939" stroke-width="0.900752" stroke-linecap="round" />
                    <mask id="mask0_68_185" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="5" width="35" height="43">
                        <path d="M0.771484 22.4237C0.771484 12.9718 8.43381 5.30945 17.8858 5.30945C27.3377 5.30945 35.0001 12.9718 35.0001 22.4237V47.6448H0.771484V22.4237Z" fill="#0167F8" />
                    </mask>
                    <g mask="url(#mask0_68_185)">
                        <path d="M31.2847 39.3128L35.3381 44.8299L36.5767 48.8833L22.3898 49.5589L21.3765 43.0284L25.2047 46.5188L25.5424 40.6639L28.0195 44.4921L27.3439 38.8624L30.6092 44.2669L31.2847 39.3128Z" fill="#FFA7D1" />
                        <rect x="-6.88477" y="40.4387" width="17.3395" height="17.3395" rx="8.66973" fill="#FFA7D1" />
                        <rect x="0.771484" y="-0.545532" width="34.2286" height="13.2861" fill="#0167F8" />
                    </g>
                </svg>
            </span>
            <span class="app-brand-text demo menu-text ms-2 bingah">Giggle</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{route ('dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-category-alt"></i>
                <div data-i18n="Account Settings">Kategori</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route ('category-create')}}" class="menu-link">
                        <div data-i18n="Account">Tambah Kategori</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route ('category')}}" class="menu-link">
                        <div data-i18n="Notifications">Daftar Kategori</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layer"></i>
                <div data-i18n="Account Settings">Level Baca</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('level')}}" class="menu-link">
                        <div data-i18n="Notifications">Daftar Level Baca</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Authentications">Cerita</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route ('story-create')}}" class="menu-link">
                        <div data-i18n="Basic">Tambah Cerita</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route ('story')}}" class="menu-link">
                        <div data-i18n="Basic">Daftar Cerita</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-carousel"></i>
                <div data-i18n="Misc">Slider</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route ('slider-create')}}" class="menu-link">
                        <div data-i18n="Error">Tambah Slider</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route ('slider')}}" class="menu-link">
                        <div data-i18n="Under Maintenance">Daftar Slider</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Misc">Pengaturan Profil</div>
            </a>
        </li>
    </ul>
</aside>