<!-- ===== NAVBAR ===== -->
<header id="header" class="header-transparent" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 53, 'stickySetTop': '-53px'}">
    <div class="header-body border-top-0 box-shadow-none">
        <div class="header-top header-top-borders">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                                        <span class="ps-0 text-zinc-200 font-weight-semibold"><i class="far fa-dot-circle text-4 text-color-primary top-2 text-5"></i> 1234 Street Name, City Name</span>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2">
                                        <a href="tel:123-456-7890" class="text-zinc-200 text-color-hover-primary font-weight-semibold"><i class="fab fa-whatsapp text-4 text-color-primary top-2 text-5"></i> 123-456-7890</a>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
                                        <a href="mailto:mail@domain.com" class="text-zinc-200 text-color-hover-primary font-weight-semibold"><i class="far fa-envelope text-4 text-color-primary top-2 text-5"></i> mail@domain.com</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
                                        <a href="http://www.facebook.com/" target="_blank" title="Facebook" class="text-color-primary text-color-hover-white anim-hover-translate-top-5px transition-2ms"><i class="fab fa-facebook-f text-3 p-relative top-1"></i></a>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
                                        <a href="http://www.twitter.com/" target="_blank" title="Twitter" class="text-color-primary text-color-hover-white anim-hover-translate-top-5px transition-2ms"><i class="fab fa-twitter text-3 p-relative top-1"></i></a>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 pe-0 d-none d-lg-inline-flex">
                                        <a href="http://www.linkedin.com/" target="_blank" title="Linkedin" class="text-color-primary text-color-hover-white anim-hover-translate-top-5px transition-2ms"><i class="fab fa-linkedin-in text-3 p-relative top-1"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container header-container-height-sm container p-static">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html">
                                <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="{{ asset('assets/img/logo-default-slim.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-border-radius header-nav-main-text-capitalize header-nav-main-text-size-4 header-nav-main-arrows header-nav-main-full-width-mega-menu header-nav-main-mega-menu-bg-hover header-nav-main-effect-2">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <!-- Home Page -->
                                        <li class="dropdown">
                                            <a class="dropdown-item " href="{{route('frontoffice.index')}}">Home</a>
                                        </li>
                                        <!-- Sobre Nos -->
                                        <li class="dropdown">
                                            <a class="dropdown-item " href="{{route('frontoffice.about')}}">Sobre Nós</a>
                                        </li>
                                        <!-- Serviços -->
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="{{route('frontoffice.services')}}">Serviços</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Web Development</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">UX Design</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Marca e Entidade</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Logo Design</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#"> Portfolio</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Single Project</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="portfolio-single-wide-slider.html">Wide Slider</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-single-small-slider.html">Small Slider</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-single-full-width-slider.html">Full Width Slider</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-single-gallery.html">Gallery</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-single-carousel.html">Carousel</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-single-medias.html">Medias</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-single-full-width-video.html">Full Width Video</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-single-masonry-images.html">Masonry Images</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-single-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-single-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-single-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-single-sticky-sidebar.html">Sticky Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-single-extended.html">Extended</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Grid Layouts</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="portfolio-grid-1-column.html">1 Column</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-grid-2-columns.html">2 Columns</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-grid-3-columns.html">3 Columns</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-grid-4-columns.html">4 Columns</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-grid-5-columns.html">5 Columns</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-grid-6-columns.html">6 Columns</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-grid-no-margins.html">No Margins</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-grid-full-width.html">Full Width</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-grid-full-width-no-margins.html">Full Width No Margins</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-grid-1-column-title-and-description.html">Title and Description</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Masonry Layouts</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="portfolio-masonry-2-columns.html">2 Columns</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-masonry-3-columns.html">3 Columns</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-masonry-4-columns.html">4 Columns</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-masonry-5-columns.html">5 Columns</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-masonry-6-columns.html">6 Columns</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-masonry-no-margins.html">No Margins</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-masonry-full-width.html">Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Sidebar Layouts</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="portfolio-sidebar-left.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-sidebar-right.html">Right Sidebar</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-sidebar-left-and-right.html">Left and Right Sidebars</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-sidebar-sticky.html">Sticky Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Ajax</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="portfolio-ajax-page.html">Ajax on Page</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-ajax-modal.html">Ajax on Modal</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Extra</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="portfolio-extra-timeline.html">Timeline</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-extra-lightbox.html">Lightbox</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-extra-load-more.html">Load More</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-extra-infinite-scroll.html">Infinite Scroll</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-extra-lazy-load-masonry.html">Lazy Load Masonry</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-extra-pagination.html">Pagination</a></li>
                                                        <li><a class="dropdown-item" href="portfolio-extra-combination-filters.html">Combination Filters</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item" href="">
                                                FAQs
                                            </a>
                                        </li>

                                        <li class="dropdown">
                                            <a class="dropdown-item" href="{{ route('frontoffice.pages.contact') }}">
                                                Contactos
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <a href="#" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 border-width-1 ms-3 me-2 d-block d-md-none d-xl-block anim-hover-translate-right-5px transition-2ms">Log in<i class="fas fa-arrow-right ms-2"></i></a>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon text-3"></i></a>
                                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                            <button class="btn" type="submit">
                                                <i class="fas fa-search header-nav-top-icon"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
