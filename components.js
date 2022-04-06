class Navbar extends HTMLElement {
    constructor() {
        super()
        this.innerHTML = `
        <header
        class="arki-header-wrap arki-header-style-plain arki-style-menu-right arki-sticky-navigation arki-style-fixed"
        data-navigation-offset="75">
        <div class="arki-header-background"></div>
        <div class="arki-header-container arki-container">
            <div class="arki-header-container-inner clearfix">
                <div class="arki-logo arki-item-pdlr">
                    <div class="arki-logo-inner">
                        <a class="arki-fixed-nav-logo" href="index.html">
                            <img src="assets/logo.png" alt="" width="82" height="25" title="logo" />
                        </a>
                        <a class="arki-orig-logo" href="index.html">
                            <img src="assets/logo.png" alt="" width="82" height="25" title="logo" />
                        </a>
                    </div>
                </div>
                <div class="arki-navigation arki-item-pdlr clearfix">
                    <div class="arki-main-menu" id="arki-main-menu">
                        <ul id="menu-main-navigation-1" class="sf-menu">
                            <li
                                class="menu-item menu-item-home current-menu-item current-menu-ancestor menu-item-has-children arki-normal-menu">
                                <a href="index.html" class="sf-with-ul-pre">Home</a>
                            <li class="menu-item menu-item-has-children arki-normal-menu">
                                <a href="interior-design.html" class="sf-with-ul-pre">Services</a>
                            </li>
                            <li class="menu-item menu-item-has-children arki-normal-menu">
                                <a href="about-1.html" class="sf-with-ul-pre">About</a>
                            </li>
                                <li class="menu-item" data-size="60">
                                <a href="singleblog.html">Contact</a>
                                </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="arki-navigation-slide-bar arki-navigation-slide-bar-style-2 arki-left"
                            data-size-offset="0" data-width="19px" id="arki-navigation-slide-bar"></div>
                    </div>
                    <div class="arki-main-menu-right-wrap clearfix">
                        <div class="arki-side-content-menu-button"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
        `
    }
}

window.customElements.define('nav-bar', Navbar)