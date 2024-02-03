<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="ThemeMarch" />
    <link rel="icon" href="{{ asset('landingpage/assets/img/favicon.png') }}" />
    <title>Dotech | Home</title>
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/plugins/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/plugins/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/style.css') }}" />
    <script data-pagespeed-no-defer>
        //<![CDATA[
        (function() {
            function f(a, b, d) {
                if (a.addEventListener) a.addEventListener(b, d, !1);
                else if (a.attachEvent) a.attachEvent("on" + b, d);
                else {
                    var c = a["on" + b];
                    a["on" + b] = function() {
                        d.call(this);
                        c && c.call(this)
                    }
                }
            };
            window.pagespeed = window.pagespeed || {};
            var g = window.pagespeed;

            function k(a) {
                this.g = [];
                this.f = 0;
                this.h = !1;
                this.j = a;
                this.i = null;
                this.l = 0;
                this.b = !1;
                this.a = 0
            }

            function l(a, b) {
                var d = b.getAttribute("data-pagespeed-lazy-position");
                if (d) return parseInt(d, 0);
                var d = b.offsetTop,
                    c = b.offsetParent;
                c && (d += l(a, c));
                d = Math.max(d, 0);
                b.setAttribute("data-pagespeed-lazy-position", d);
                return d
            }

            function m(a, b) {
                var d, c, e;
                if (!a.b && (0 == b.offsetHeight || 0 == b.offsetWidth)) return !1;
                a: if (b.currentStyle) c = b.currentStyle.position;
                    else {
                        if (document.defaultView && document.defaultView.getComputedStyle && (c = document.defaultView
                                .getComputedStyle(b, null))) {
                            c = c.getPropertyValue("position");
                            break a
                        }
                        c = b.style && b.style.position ? b.style.position : ""
                    }
                if ("relative" == c) return !0;
                e = 0;
                "number" == typeof window.pageYOffset ? e = window.pageYOffset : document.body && document.body
                    .scrollTop ? e = document.body.scrollTop : document.documentElement &&
                    document.documentElement.scrollTop && (e = document.documentElement.scrollTop);
                d = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
                c = e;
                e += d;
                var h = b.getBoundingClientRect();
                h ? (e = h.top - d, c = h.bottom) : (h = l(a, b), d = h + b.offsetHeight, e = h - e, c = d - c);
                return e <= a.f && 0 <= c + a.f
            }
            k.prototype.m = function(a) {
                p(a);
                var b = this;
                window.setTimeout(function() {
                    var d = a.getAttribute("data-pagespeed-lazy-src");
                    if (d)
                        if ((b.h || m(b, a)) && -1 != a.src.indexOf(b.j)) {
                            var c = a.parentNode,
                                e = a.nextSibling;
                            c && c.removeChild(a);
                            a.c && (a.getAttribute = a.c);
                            a.removeAttribute("onload");
                            a.tagName && "IMG" == a.tagName && g.CriticalImages && f(a, "load", function() {
                                g.CriticalImages.checkImageForCriticality(this);
                                b.b && (b.a--, b.a || g.CriticalImages.checkCriticalImages())
                            });
                            a.removeAttribute("data-pagespeed-lazy-src");
                            a.removeAttribute("data-pagespeed-lazy-replaced-functions");
                            c && c.insertBefore(a, e);
                            if (c = a.getAttribute("data-pagespeed-lazy-srcset")) a.srcset = c, a
                                .removeAttribute("data-pagespeed-lazy-srcset");
                            a.src = d
                        } else b.g.push(a)
                }, 0)
            };
            k.prototype.loadIfVisibleAndMaybeBeacon = k.prototype.m;
            k.prototype.s = function() {
                this.h = !0;
                q(this)
            };
            k.prototype.loadAllImages = k.prototype.s;

            function q(a) {
                var b = a.g,
                    d = b.length;
                a.g = [];
                for (var c = 0; c < d; ++c) a.m(b[c])
            }

            function t(a, b) {
                return a.a ? null != a.a(b) : null != a.getAttribute(b)
            }
            k.prototype.u = function() {
                for (var a = document.getElementsByTagName("img"), b = 0, d; d = a[b]; b++) t(d,
                    "data-pagespeed-lazy-src") && p(d)
            };
            k.prototype.overrideAttributeFunctions = k.prototype.u;

            function p(a) {
                t(a, "data-pagespeed-lazy-replaced-functions") || (a.c = a.getAttribute, a.getAttribute = function(a) {
                    "src" == a.toLowerCase() && t(this, "data-pagespeed-lazy-src") && (a =
                        "data-pagespeed-lazy-src");
                    return this.c(a)
                }, a.setAttribute("data-pagespeed-lazy-replaced-functions", "1"))
            }
            g.o = function(a, b) {
                function d() {
                    if (!(c.b && a || c.i)) {
                        var b = 200;
                        200 < (new Date).getTime() - c.l && (b = 0);
                        c.i = window.setTimeout(function() {
                            c.l = (new Date).getTime();
                            q(c);
                            c.i = null
                        }, b)
                    }
                }
                var c = new k(b);
                g.lazyLoadImages = c;
                f(window, "load", function() {
                    c.b = !0;
                    c.h = a;
                    c.f = 200;
                    if (g.CriticalImages) {
                        for (var b = 0, d = document.getElementsByTagName("img"), r = 0, n; n = d[r]; r++) -
                            1 != n.src.indexOf(c.j) && t(n, "data-pagespeed-lazy-src") && b++;
                        c.a = b;
                        c.a || g.CriticalImages.checkCriticalImages()
                    }
                    q(c)
                });
                b.indexOf("data") && ((new Image).src = b);
                f(window,
                    "scroll", d);
                f(window, "resize", d)
            };
            g.lazyLoadInit = g.o;
        })();

        pagespeed.lazyLoadInit(true, "{{ asset('/pagespeed_static/1.JiBnMqyl6S.gif') }}");


        //]]>
    </script>
</head>

<body><noscript>
        <meta HTTP-EQUIV="refresh"
            content="0;url='https://thememarch.com/demo/html/posing/index.html?PageSpeed=noscript'" />
        <style>
            <!--table,div,span,font,p{display:none}
            -->
        </style>
        <div style="display:block">Please click <a
                href="https://thememarch.com/demo/html/posing/index.html?PageSpeed=noscript">here</a> if you are not
            redirected within a few seconds.</div>
    </noscript>
    <div class="cs-preloader cs-white_bg cs-center">
        <div class="cs-preloader_in">
            <script data-pagespeed-no-defer>
                //<![CDATA[
                (function() {
                    for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, c, a) {
                                if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                                b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                            }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global &&
                            null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length -
                        1; l++) {
                        var m = k[l];
                        m in h || (h[m] = {});
                        h = h[m]
                    }
                    var n = k[k.length - 1],
                        p = h[n],
                        q = p ? p : function(b) {
                            var c;
                            if (null == this) throw new TypeError(
                                "The 'this' value for String.prototype.repeat must not be null or undefined");
                            c = this + "";
                            if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                            b |= 0;
                            for (var a = ""; b;)
                                if (b & 1 && (a += c), b >>>= 1) c += c;
                            return a
                        };
                    q != p && null != q && g(h, n, {
                        configurable: !0,
                        writable: !0,
                        value: q
                    });
                    var t = this;

                    function u(b, c) {
                        var a = b.split("."),
                            d = t;
                        a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                        for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} :
                            d[e] = c
                    };

                    function v(b) {
                        var c = b.length;
                        if (0 < c) {
                            for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                            return a
                        }
                        return []
                    };

                    function w(b) {
                        var c = window;
                        if (c.addEventListener) c.addEventListener("load", b, !1);
                        else if (c.attachEvent) c.attachEvent("onload", b);
                        else {
                            var a = c.onload;
                            c.onload = function() {
                                b.call(this);
                                a && a.call(this)
                            }
                        }
                    };
                    var x;

                    function y(b, c, a, d, e) {
                        this.h = b;
                        this.j = c;
                        this.l = a;
                        this.f = e;
                        this.g = {
                            height: window.innerHeight || document.documentElement.clientHeight || document.body
                                .clientHeight,
                            width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
                        };
                        this.i = d;
                        this.b = {};
                        this.a = [];
                        this.c = {}
                    }

                    function z(b, c) {
                        var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                        if (a = e && !(e in b.c))
                            if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                            else {
                                d = c.getBoundingClientRect();
                                var f = document.body;
                                a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f
                                    .parentNode || f).scrollTop);
                                d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f
                                    .parentNode || f).scrollLeft);
                                f = a.toString() + "," + d;
                                b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width)
                            } a && (b.a.push(e), b.c[e] = !0)
                    }
                    y.prototype.checkImageForCriticality = function(b) {
                        b.getBoundingClientRect && z(this, b)
                    };
                    u("pagespeed.CriticalImages.checkImageForCriticality", function(b) {
                        x.checkImageForCriticality(b)
                    });
                    u("pagespeed.CriticalImages.checkCriticalImages", function() {
                        A(x)
                    });

                    function A(b) {
                        b.b = {};
                        for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document
                            .getElementsByTagName(c[d])));
                        if (a.length && a[0].getBoundingClientRect) {
                            for (d = 0; c = a[d]; ++d) z(b, c);
                            a = "oh=" + b.l;
                            b.f && (a += "&n=" + b.f);
                            if (c = !!b.a.length)
                                for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                                    var e = "," + encodeURIComponent(b.a[d]);
                                    131072 >= a.length + e.length && (a += e)
                                }
                            b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a +=
                                e), c = !0);
                            C = a;
                            if (c) {
                                d = b.h;
                                b = b.j;
                                var f;
                                if (window.XMLHttpRequest) f = new XMLHttpRequest;
                                else if (window.ActiveXObject) try {
                                    f = new ActiveXObject("Msxml2.XMLHTTP")
                                } catch (r) {
                                    try {
                                        f = new ActiveXObject("Microsoft.XMLHTTP")
                                    } catch (D) {}
                                }
                                f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f
                                    .setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
                            }
                        }
                    }

                    function B() {
                        var b = {},
                            c;
                        c = document.getElementsByTagName("IMG");
                        if (!c.length) return {};
                        var a = c[0];
                        if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                        for (var d = 0; a = c[d]; ++d) {
                            var e = a.getAttribute("data-pagespeed-url-hash");
                            e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in
                                b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
                                rw: a.width,
                                rh: a.height,
                                ow: a.naturalWidth,
                                oh: a.naturalHeight
                            })
                        }
                        return b
                    }
                    var C = "";
                    u("pagespeed.CriticalImages.getBeaconData", function() {
                        return C
                    });
                    u("pagespeed.CriticalImages.Run", function(b, c, a, d, e, f) {
                        var r = new y(b, c, a, e, f);
                        x = r;
                        d && w(function() {
                            window.setTimeout(function() {
                                A(r)
                            }, 0)
                        })
                    });
                })();
                pagespeed.CriticalImages.Run('/mod_pagespeed_beacon', 'https://thememarch.com/demo/html/posing/index.html',
                    'UMSeiHfgyf', false, false, 'Pkp7Zde5pPs');
                //]]>
            </script><img src="{{ asset('assets/img/logo_mini.svg') }}" alt="Logo"
                data-pagespeed-url-hash="927060763" onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />

        </div>
    </div>
    <header class="cs-site_header cs-style1 cs-sticky-header cs-primary_color cs-white_bg">
        <div class="cs-main_header">
            <div class="container">
                <div class="cs-main_header_in">
                    <div class="cs-main_header_left">
                        <a class="cs-site_branding cs-accent_color" href="{{ route('home') }}">
                            <img src="{{ asset('landingpage/assets/img/logo.svg') }}" alt="Logo"
                                data-pagespeed-url-hash="39491623"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        </a>


                    </div>
                    <div class="cs-main_header_center">
                        <div class="cs-nav">
                            <ul class="cs-nav_list">
                                <li><a href="#home" class="cs-smoth_scroll">Home</a></li>
                                <li><a href="#about" class="cs-smoth_scroll">About</a></li>
                                <li>
                                    <a href="#feature" class="cs-smoth_scroll">Feature</a>
                                </li>
                                <li>
                                    <a href="#pricing" class="cs-smoth_scroll">Pricing</a>
                                </li>
                                <li><a href="#news" class="cs-smoth_scroll">News</a></li>
                                <li>
                                    <a href="#contact" class="cs-smoth_scroll">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cs-main_header_right">
                        <div class="cs-toolbox">
                            <span class="cs-link cs-modal_btn" data-modal="login">Login</span>
                            <span class="cs-btn cs-color1 cs-modal_btn" data-modal="register"><span>Start For
                                    Free</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="home">
        <div class="cs-height_80 cs-height_lg_80"></div>
        <section class="cs-hero cs-style1 cs-bg" data-src="landingpage/assets/img/hero_bg.svg">

            <div class="container">
                <div class="cs-hero_img">
                    <div class="cs-hero_img_bg cs-bg" data-src="landingpage/assets/img/hero_img_bg.png"></div>
                    <img src="landingpage/assets/img/hero_img.png" alt="Hero Image" class="wow fadeInRight"
                        data-wow-duration="1s" data-wow-delay="0.4s" data-pagespeed-url-hash="540680739"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                </div>
                <div class="cs-hero_text">
                    <div class="cs-hero_secondary_title">
                        Free Forever For All Users.
                    </div>
                    <h1 class="cs-hero_title">Easy-to-use <br />Point of Sale</h1>
                    <div class="cs-hero_subtitle">
                        You may start selling in a matter of minutes and easy to
                        <br />use. Appropriate for all devices.
                    </div>
                    <a href="#" class="cs-btn"><span>Start Free Trial</span></a>
                </div>
                <div class="cs-hero_shapes">
                    <div class="cs-shape cs-shape_position1">
                        <img src="landingpage/assets/img/shape/shape_1.svg" alt="Shape"
                            data-pagespeed-url-hash="1783969209"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                    </div>
                    <div class="cs-shape cs-shape_position2">
                        <img src="landingpage/assets/img/shape/shape_2.svg" alt="Shape"
                            data-pagespeed-url-hash="2078469130"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                    </div>
                    <div class="cs-shape cs-shape_position3">
                        <img src="landingpage/assets/img/shape/shape_3.svg" alt="Shape"
                            data-pagespeed-url-hash="2372969051"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                    </div>
                    <div class="cs-shape cs-shape_position4">
                        <img src="landingpage/assets/img/shape/shape_4.svg" alt="Shape"
                            data-pagespeed-url-hash="2667468972"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                    </div>
                    <div class="cs-shape cs-shape_position5">
                        <img src="landingpage/assets/img/shape/shape_5.svg" alt="Shape"
                            data-pagespeed-url-hash="2961968893"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                    </div>
                    <div class="cs-shape cs-shape_position6">
                        <img src="landingpage/assets/img/shape/shape_6.svg" alt="Shape"
                            data-pagespeed-url-hash="3256468814"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="cs-bg" data-src="landingpage/assets/img/feature_bg.svg">
        <div class="cs-height_95 cs-height_lg_70"></div>
        <div class="container">
            <div class="cs-seciton_heading cs-style1 text-center">
                <div class="cs-section_subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    Office & Inventory
                </div>
                <div class="cs-height_10 cs-height_lg_10"></div>
                <h3 class="cs-section_title">Our best inventory</h3>
            </div>
            <div class="cs-height_50 cs-height_lg_40"></div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="cs-height_25 cs-height_lg_0"></div>
                    <div class="cs-iconbox cs-style1">
                        <div class="cs-iconbox_icon cs-center">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/icon_box_1.svg" alt="Icon"
                                data-pagespeed-url-hash="329347828" src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                        </div>
                        <div class="cs-iconbox_in">
                            <div class="cs-iconbox_number cs-primary_font">01</div>
                            <h3 class="cs-iconbox_title">Recipe management & costing</h3>
                            <div class="cs-iconbox_subtitle">
                                Lorem Ipsum is simply dummy text of the printing and formal
                                typesetting
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="cs-iconbox cs-style1">
                        <div class="cs-iconbox_icon cs-center">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/icon_box_2.svg" alt="Icon"
                                data-pagespeed-url-hash="623847749" src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                        </div>
                        <div class="cs-iconbox_in">
                            <div class="cs-iconbox_number cs-primary_font">02</div>
                            <h3 class="cs-iconbox_title">Stock management & inventory</h3>
                            <div class="cs-iconbox_subtitle">
                                Lorem Ipsum is simply dummy text of the printing and formal
                                typesetting
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="cs-height_25 cs-height_lg_0"></div>
                    <div class="cs-iconbox cs-style1">
                        <div class="cs-iconbox_icon cs-center">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/icon_box_3.svg" alt="Icon"
                                data-pagespeed-url-hash="918347670" src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                        </div>
                        <div class="cs-iconbox_in">
                            <div class="cs-iconbox_number cs-primary_font">03</div>
                            <h3 class="cs-iconbox_title">Purchase management systeme</h3>
                            <div class="cs-iconbox_subtitle">
                                Lorem Ipsum is simply dummy text of the printing and formal
                                typesetting
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="cs-iconbox cs-style1">
                        <div class="cs-iconbox_icon cs-center">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/icon_box_4.svg" alt="Icon"
                                data-pagespeed-url-hash="1212847591" src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                        </div>
                        <div class="cs-iconbox_in">
                            <div class="cs-iconbox_number cs-primary_font">04</div>
                            <h3 class="cs-iconbox_title">Powerful inventory reporting</h3>
                            <div class="cs-iconbox_subtitle">
                                Lorem Ipsum is simply dummy text of the printing and formal
                                typesetting
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
            </div>
            <div class="cs-height_75 cs-height_lg_45"></div>
        </div>
    </section>
    <section id="about" class="cs-gradient_bg_1">
        <div class="cs-height_100 cs-height_lg_70"></div>
        <div class="container">
            <div class="row align-items-center flex-column-reverse-lg">
                <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="cs-left_full_width cs-space110">
                        <div class="cs-left_sided_img">
                            <img src="landingpage/assets/img/about_img_1.png" alt="About"
                                data-pagespeed-url-hash="3791996468"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="cs-height_0 cs-height_lg_40"></div>
                    <div class="cs-seciton_heading cs-style1">
                        <div class="cs-section_subtitle">About The POS</div>
                        <div class="cs-height_10 cs-height_lg_10"></div>
                        <h3 class="cs-section_title">
                            Best solution for point of sale about details
                        </h3>
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. <br />
                        Lorem Ipsum the & been the industry's. It was popularised in the
                        1960s <br />
                        with the release of Letraset sheets containing Lorem Ipsum
                        passages.
                    </p>
                    <div class="cs-height_15 cs-height_lg_15"></div>
                    <div class="cs-list_1_wrap">
                        <ul class="cs-list cs-style1 cs-mp0">
                            <li>
                                <span class="cs-list_icon">
                                    <img data-pagespeed-lazy-src="landingpage/assets/img/icons/tick.svg"
                                        alt="Tick" data-pagespeed-url-hash="3871789954"
                                        src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                        onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                </span>
                                <div class="cs-list_right">
                                    <h3>Other point of sale information</h3>
                                    <p>
                                        But I must explain to you how all this mistaken in
                                        denouncing pleasure and praising pain was born and I will
                                        give.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span class="cs-list_icon">
                                    <img data-pagespeed-lazy-src="landingpage/assets/img/icons/tick.svg"
                                        alt="Tick" data-pagespeed-url-hash="3871789954"
                                        src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                        onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                </span>
                                <div class="cs-list_right">
                                    <h3>Best process system POS</h3>
                                    <p>
                                        At vero eos et accusamus et iusto odio dignissimos ducimus
                                        qui blanditiis praesentium voluptatum deleniti at.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="cs-list_img wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/about_img_2.png" alt="About"
                                data-pagespeed-url-hash="4086496389" src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-height_100 cs-height_lg_70"></div>
        <div class="cs-height_135 cs-height_lg_0"></div>
    </section>
    <div class="container-fluid">
        <div class="cs-funfact_1_wrap cs-type1">
            <div class="cs-funfact cs-style1">
                <div class="cs-funfact_icon cs-center">
                    <img data-pagespeed-lazy-src="landingpage/assets/img/icons/funfact_icon_1.svg" alt="Icon"
                        data-pagespeed-url-hash="656489448" src="/pagespeed_static/1.JiBnMqyl6S.gif"
                        onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                </div>
                <div class="cs-funfact_right">
                    <div class="cs-funfact_number cs-primary_font">
                        <span data-count-to="320" class="odometer"></span>+
                    </div>
                    <h2 class="cs-funfact_title">Retail stores</h2>
                </div>
            </div>
            <div class="cs-funfact cs-style1">
                <div class="cs-funfact_icon cs-center">
                    <img data-pagespeed-lazy-src="landingpage/assets/img/icons/funfact_icon_2.svg" alt="Icon"
                        data-pagespeed-url-hash="950989369" src="/pagespeed_static/1.JiBnMqyl6S.gif"
                        onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                </div>
                <div class="cs-funfact_right">
                    <div class="cs-funfact_number cs-primary_font">
                        <span data-count-to="92" class="odometer"></span>k
                    </div>
                    <h2 class="cs-funfact_title">Customer</h2>
                </div>
            </div>
            <div class="cs-funfact cs-style1">
                <div class="cs-funfact_icon cs-center">
                    <img data-pagespeed-lazy-src="landingpage/assets/img/icons/funfact_icon_3.svg" alt="Icon"
                        data-pagespeed-url-hash="1245489290" src="/pagespeed_static/1.JiBnMqyl6S.gif"
                        onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                </div>
                <div class="cs-funfact_right">
                    <div class="cs-funfact_number cs-primary_font">
                        <span data-count-to="5" class="odometer"></span>k
                    </div>
                    <h2 class="cs-funfact_title">Positive Rating</h2>
                </div>
            </div>
            <div class="cs-funfact cs-style1">
                <div class="cs-funfact_icon cs-center">
                    <img data-pagespeed-lazy-src="landingpage/assets/img/icons/funfact_icon_4.svg" alt="Icon"
                        data-pagespeed-url-hash="1539989211" src="/pagespeed_static/1.JiBnMqyl6S.gif"
                        onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                </div>
                <div class="cs-funfact_right">
                    <div class="cs-funfact_number cs-primary_font">
                        <span data-count-to="20" class="odometer"></span>+
                    </div>
                    <h2 class="cs-funfact_title">Award Winning</h2>
                </div>
            </div>
        </div>
    </div>
    <section class="cs-bg" data-src="landingpage/assets/img/feature_bg.svg">
        <div class="cs-height_135 cs-height_lg_0"></div>
        <div id="feature">
            <div class="cs-height_95 cs-height_lg_70"></div>
            <div class="container">
                <div class="cs-seciton_heading cs-style1 text-center">
                    <div class="cs-section_subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        POS Features
                    </div>
                    <div class="cs-height_10 cs-height_lg_10"></div>
                    <h3 class="cs-section_title">Available features</h3>
                </div>
                <div class="cs-height_50 cs-height_lg_40"></div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img data-pagespeed-lazy-src="landingpage/assets/img/icons/icon_box_5.svg"
                                    alt="Icon" data-pagespeed-url-hash="1507347512"
                                    src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">Effortless card</h3>
                                <div class="cs-iconbox_subtitle">
                                    Lorem Ipsum is simply dummy text of the most printing and
                                    typese Ipsum is simply dummy
                                </div>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img data-pagespeed-lazy-src="landingpage/assets/img/icons/icon_box_6.svg"
                                    alt="Icon" data-pagespeed-url-hash="1801847433"
                                    src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">Software accuracy</h3>
                                <div class="cs-iconbox_subtitle">
                                    Lorem Ipsum is simply dummy text of the most printing and
                                    typese Ipsum is simply dummy
                                </div>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img data-pagespeed-lazy-src="landingpage/assets/img/icons/icon_box_7.svg"
                                    alt="Icon" data-pagespeed-url-hash="2096347354"
                                    src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">Customization</h3>
                                <div class="cs-iconbox_subtitle">
                                    Lorem Ipsum is simply dummy text of the most printing and
                                    typese Ipsum is simply dummy
                                </div>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img data-pagespeed-lazy-src="landingpage/assets/img/icons/icon_box_8.svg"
                                    alt="Icon" data-pagespeed-url-hash="2390847275"
                                    src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">Customer data</h3>
                                <div class="cs-iconbox_subtitle">
                                    Lorem Ipsum is simply dummy text of the most printing and
                                    typese Ipsum is simply dummy
                                </div>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img data-pagespeed-lazy-src="landingpage/assets/img/icons/icon_box_9.svg"
                                    alt="Icon" data-pagespeed-url-hash="2685347196"
                                    src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">Seamless checkout</h3>
                                <div class="cs-iconbox_subtitle">
                                    Lorem Ipsum is simply dummy text of the most printing and
                                    typese Ipsum is simply dummy
                                </div>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="cs-iconbox cs-style1 cs-type1">
                            <div class="cs-iconbox_icon cs-center">
                                <img data-pagespeed-lazy-src="landingpage/assets/img/icons/icon_box_10.svg"
                                    alt="Icon" data-pagespeed-url-hash="628724656"
                                    src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                            </div>
                            <div class="cs-iconbox_in">
                                <h3 class="cs-iconbox_title">High speed process</h3>
                                <div class="cs-iconbox_subtitle">
                                    Lorem Ipsum is simply dummy text of the most printing and
                                    typese Ipsum is simply dummy
                                </div>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                </div>
            </div>
            <div class="cs-height_75 cs-height_lg_45"></div>
        </div>
    </section>
    <section class="cs-gradient_bg_1">
        <div class="cs-height_95 cs-height_lg_70"></div>
        <div class="container">
            <div class="cs-seciton_heading cs-style1 text-center">
                <div class="cs-section_subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    Retail Stores
                </div>
                <div class="cs-height_10 cs-height_lg_10"></div>
                <h3 class="cs-section_title">
                    Perfect point of sale software for <br />most retail stores
                </h3>
            </div>
            <div class="cs-height_50 cs-height_lg_40"></div>
            <div class="row align-items-center flex-column-reverse-lg">
                <div class="col-xl-6">
                    <div class="cs-left_full_width cs-space40">
                        <div class="cs-left_sided_img">
                            <img src="landingpage/assets/img/retail-store.png" alt="Retail Stores"
                                data-pagespeed-url-hash="318227740"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="cs-height_25 cs-height_lg_40"></div>
                    <div class="row wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="col-lg-11 offset-lg-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cs-iconbox cs-style2 text-center">
                                        <div class="cs-iconbox_icon">
                                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/retail_icon_1.svg"
                                                alt="Icon" data-pagespeed-url-hash="3656868554"
                                                src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                        </div>
                                        <h2 class="cs-iconbox_title">Food Delivery</h2>
                                    </div>
                                    <div class="cs-height_25 cs-height_lg_25"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cs-iconbox cs-style2 text-center">
                                        <div class="cs-iconbox_icon">
                                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/retail_icon_2.svg"
                                                alt="Icon" data-pagespeed-url-hash="3951368475"
                                                src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                        </div>
                                        <h2 class="cs-iconbox_title">Cycle Store</h2>
                                    </div>
                                    <div class="cs-height_25 cs-height_lg_25"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="col-lg-11">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cs-iconbox cs-style2 text-center">
                                        <div class="cs-iconbox_icon">
                                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/retail_icon_3.svg"
                                                alt="Icon" data-pagespeed-url-hash="4245868396"
                                                src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                        </div>
                                        <h2 class="cs-iconbox_title">Gift Shop</h2>
                                    </div>
                                    <div class="cs-height_25 cs-height_lg_25"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cs-iconbox cs-style2 text-center">
                                        <div class="cs-iconbox_icon">
                                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/retail_icon_4.svg"
                                                alt="Icon" data-pagespeed-url-hash="245401021"
                                                src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                        </div>
                                        <h2 class="cs-iconbox_title">Furniture Store</h2>
                                    </div>
                                    <div class="cs-height_25 cs-height_lg_25"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="col-lg-11 offset-lg-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cs-iconbox cs-style2 text-center">
                                        <div class="cs-iconbox_icon">
                                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/retail_icon_5.svg"
                                                alt="Icon" data-pagespeed-url-hash="539900942"
                                                src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                        </div>
                                        <h2 class="cs-iconbox_title">Clothing Store</h2>
                                    </div>
                                    <div class="cs-height_25 cs-height_lg_25"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cs-iconbox cs-style2 text-center">
                                        <div class="cs-iconbox_icon">
                                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/retail_icon_6.svg"
                                                alt="Icon" data-pagespeed-url-hash="834400863"
                                                src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                        </div>
                                        <h2 class="cs-iconbox_title">Coffee Shop</h2>
                                    </div>
                                    <div class="cs-height_25 cs-height_lg_25"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-height_75 cs-height_lg_70"></div>
    </section>
    <section class="cs-bg" data-src="landingpage/assets/img/feature_bg.svg" id="pricing">
        <div class="cs-height_95 cs-height_lg_70"></div>
        <div class="container">
            <div class="cs-seciton_heading cs-style1 text-center">
                <div class="cs-section_subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    Pricing Plan
                </div>
                <div class="cs-height_10 cs-height_lg_10"></div>
                <h3 class="cs-section_title">The best choice for you</h3>
            </div>
            <div class="cs-height_50 cs-height_lg_40"></div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="cs-pricing_table cs-style1">
                        <div class="cs-pricing_head">
                            <div class="cs-pricing_heading">
                                <div class="cs-pricing_icon cs-center">
                                    <img data-pagespeed-lazy-src="landingpage/assets/img/icons/pricing_icon_1.svg"
                                        alt="Icon" data-pagespeed-url-hash="559393397"
                                        src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                        onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                </div>
                                <h2 class="cs-pricing_title cs-m0">Silver</h2>
                            </div>
                            <div class="cs-price cs-primary_font">
                                <b class="cs-accent_color">$43</b>
                                <span>/month</span>
                            </div>
                            <div class="cs-pricing_lable">Get 7 Days Free Trial</div>
                        </div>
                        <div class="cs-pricing_body">
                            <ul class="cs-mp0 cs-pricing_feature">
                                <li>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.18215 0C3.771 0 0.18219 3.58872 0.18219 7.99996C0.18219 12.4112 3.771 16 8.18215 16C12.5933 16 16.1821 12.4112 16.1821 7.99996C16.1821 3.58872 12.5934 0 8.18215 0ZM12.7759 6.6487L7.7499 11.6747C7.53619 11.8884 7.25212 12.006 6.94993 12.006C6.64774 12.006 6.36366 11.8884 6.14996 11.6747L3.58843 9.11314C3.37473 8.89944 3.25702 8.61536 3.25702 8.31317C3.25702 8.01089 3.37473 7.72682 3.58843 7.51311C3.80205 7.29941 4.08613 7.18171 4.3884 7.18171C4.69059 7.18171 4.97475 7.29941 5.18837 7.5132L6.94984 9.27459L11.1758 5.04867C11.3895 4.83497 11.6735 4.71735 11.9757 4.71735C12.2779 4.71735 12.562 4.83497 12.7757 5.04867C13.217 5.48994 13.217 6.2076 12.7759 6.6487Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Unlimited users</span>
                                </li>
                                <li>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.18215 0C3.771 0 0.18219 3.58872 0.18219 7.99996C0.18219 12.4112 3.771 16 8.18215 16C12.5933 16 16.1821 12.4112 16.1821 7.99996C16.1821 3.58872 12.5934 0 8.18215 0ZM12.7759 6.6487L7.7499 11.6747C7.53619 11.8884 7.25212 12.006 6.94993 12.006C6.64774 12.006 6.36366 11.8884 6.14996 11.6747L3.58843 9.11314C3.37473 8.89944 3.25702 8.61536 3.25702 8.31317C3.25702 8.01089 3.37473 7.72682 3.58843 7.51311C3.80205 7.29941 4.08613 7.18171 4.3884 7.18171C4.69059 7.18171 4.97475 7.29941 5.18837 7.5132L6.94984 9.27459L11.1758 5.04867C11.3895 4.83497 11.6735 4.71735 11.9757 4.71735C12.2779 4.71735 12.562 4.83497 12.7757 5.04867C13.217 5.48994 13.217 6.2076 12.7759 6.6487Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Unlimited customers</span>
                                </li>
                                <li class="cs-inactive">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.99583 0C3.57967 0 0 3.58154 0 8C0 12.4185 3.57967 16 7.99583 16C12.412 16 15.9917 12.4185 15.9917 8C15.9917 3.58154 12.412 0 7.99583 0ZM6.58529 5.71897C6.52898 5.65851 6.46108 5.61002 6.38563 5.57639C6.31018 5.54275 6.22873 5.52466 6.14615 5.52321C6.06356 5.52175 5.98153 5.53695 5.90495 5.5679C5.82836 5.59885 5.75879 5.64492 5.70038 5.70335C5.64198 5.76179 5.59593 5.8314 5.565 5.90802C5.53407 5.98465 5.51887 6.06672 5.52033 6.14935C5.52179 6.23198 5.53986 6.31347 5.57348 6.38895C5.6071 6.46444 5.65557 6.53238 5.716 6.58872L7.12654 8L5.716 9.41128C5.65557 9.46762 5.6071 9.53556 5.57348 9.61105C5.53986 9.68653 5.52179 9.76802 5.52033 9.85065C5.51887 9.93328 5.53407 10.0154 5.565 10.092C5.59593 10.1686 5.64198 10.2382 5.70038 10.2966C5.75879 10.3551 5.82836 10.4012 5.90495 10.4321C5.98153 10.4631 6.06356 10.4783 6.14615 10.4768C6.22873 10.4753 6.31018 10.4572 6.38563 10.4236C6.46108 10.39 6.52898 10.3415 6.58529 10.281L7.99583 8.86974L9.40638 10.281C9.46269 10.3415 9.53059 10.39 9.60604 10.4236C9.68149 10.4572 9.76293 10.4753 9.84552 10.4768C9.92811 10.4783 10.0101 10.4631 10.0867 10.4321C10.1633 10.4012 10.2329 10.3551 10.2913 10.2966C10.3497 10.2382 10.3957 10.1686 10.4267 10.092C10.4576 10.0154 10.4728 9.93328 10.4713 9.85065C10.4699 9.76802 10.4518 9.68653 10.4182 9.61105C10.3846 9.53556 10.3361 9.46762 10.2757 9.41128L8.86513 8L10.2757 6.58872C10.3361 6.53238 10.3846 6.46444 10.4182 6.38895C10.4518 6.31347 10.4699 6.23198 10.4713 6.14935C10.4728 6.06672 10.4576 5.98465 10.4267 5.90802C10.3957 5.8314 10.3497 5.76179 10.2913 5.70335C10.2329 5.64492 10.1633 5.59885 10.0867 5.5679C10.0101 5.53695 9.92811 5.52175 9.84552 5.52321C9.76293 5.52466 9.68149 5.54275 9.60604 5.57639C9.53059 5.61002 9.46269 5.65851 9.40638 5.71897L7.99583 7.13026L6.58529 5.71897Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Access from anywhere</span>
                                </li>
                                <li class="cs-inactive">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.99583 0C3.57967 0 0 3.58154 0 8C0 12.4185 3.57967 16 7.99583 16C12.412 16 15.9917 12.4185 15.9917 8C15.9917 3.58154 12.412 0 7.99583 0ZM6.58529 5.71897C6.52898 5.65851 6.46108 5.61002 6.38563 5.57639C6.31018 5.54275 6.22873 5.52466 6.14615 5.52321C6.06356 5.52175 5.98153 5.53695 5.90495 5.5679C5.82836 5.59885 5.75879 5.64492 5.70038 5.70335C5.64198 5.76179 5.59593 5.8314 5.565 5.90802C5.53407 5.98465 5.51887 6.06672 5.52033 6.14935C5.52179 6.23198 5.53986 6.31347 5.57348 6.38895C5.6071 6.46444 5.65557 6.53238 5.716 6.58872L7.12654 8L5.716 9.41128C5.65557 9.46762 5.6071 9.53556 5.57348 9.61105C5.53986 9.68653 5.52179 9.76802 5.52033 9.85065C5.51887 9.93328 5.53407 10.0154 5.565 10.092C5.59593 10.1686 5.64198 10.2382 5.70038 10.2966C5.75879 10.3551 5.82836 10.4012 5.90495 10.4321C5.98153 10.4631 6.06356 10.4783 6.14615 10.4768C6.22873 10.4753 6.31018 10.4572 6.38563 10.4236C6.46108 10.39 6.52898 10.3415 6.58529 10.281L7.99583 8.86974L9.40638 10.281C9.46269 10.3415 9.53059 10.39 9.60604 10.4236C9.68149 10.4572 9.76293 10.4753 9.84552 10.4768C9.92811 10.4783 10.0101 10.4631 10.0867 10.4321C10.1633 10.4012 10.2329 10.3551 10.2913 10.2966C10.3497 10.2382 10.3957 10.1686 10.4267 10.092C10.4576 10.0154 10.4728 9.93328 10.4713 9.85065C10.4699 9.76802 10.4518 9.68653 10.4182 9.61105C10.3846 9.53556 10.3361 9.46762 10.2757 9.41128L8.86513 8L10.2757 6.58872C10.3361 6.53238 10.3846 6.46444 10.4182 6.38895C10.4518 6.31347 10.4699 6.23198 10.4713 6.14935C10.4728 6.06672 10.4576 5.98465 10.4267 5.90802C10.3957 5.8314 10.3497 5.76179 10.2913 5.70335C10.2329 5.64492 10.1633 5.59885 10.0867 5.5679C10.0101 5.53695 9.92811 5.52175 9.84552 5.52321C9.76293 5.52466 9.68149 5.54275 9.60604 5.57639C9.53059 5.61002 9.46269 5.65851 9.40638 5.71897L7.99583 7.13026L6.58529 5.71897Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Accept payments 24/7</span>
                                </li>
                                <li class="cs-inactive">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.99583 0C3.57967 0 0 3.58154 0 8C0 12.4185 3.57967 16 7.99583 16C12.412 16 15.9917 12.4185 15.9917 8C15.9917 3.58154 12.412 0 7.99583 0ZM6.58529 5.71897C6.52898 5.65851 6.46108 5.61002 6.38563 5.57639C6.31018 5.54275 6.22873 5.52466 6.14615 5.52321C6.06356 5.52175 5.98153 5.53695 5.90495 5.5679C5.82836 5.59885 5.75879 5.64492 5.70038 5.70335C5.64198 5.76179 5.59593 5.8314 5.565 5.90802C5.53407 5.98465 5.51887 6.06672 5.52033 6.14935C5.52179 6.23198 5.53986 6.31347 5.57348 6.38895C5.6071 6.46444 5.65557 6.53238 5.716 6.58872L7.12654 8L5.716 9.41128C5.65557 9.46762 5.6071 9.53556 5.57348 9.61105C5.53986 9.68653 5.52179 9.76802 5.52033 9.85065C5.51887 9.93328 5.53407 10.0154 5.565 10.092C5.59593 10.1686 5.64198 10.2382 5.70038 10.2966C5.75879 10.3551 5.82836 10.4012 5.90495 10.4321C5.98153 10.4631 6.06356 10.4783 6.14615 10.4768C6.22873 10.4753 6.31018 10.4572 6.38563 10.4236C6.46108 10.39 6.52898 10.3415 6.58529 10.281L7.99583 8.86974L9.40638 10.281C9.46269 10.3415 9.53059 10.39 9.60604 10.4236C9.68149 10.4572 9.76293 10.4753 9.84552 10.4768C9.92811 10.4783 10.0101 10.4631 10.0867 10.4321C10.1633 10.4012 10.2329 10.3551 10.2913 10.2966C10.3497 10.2382 10.3957 10.1686 10.4267 10.092C10.4576 10.0154 10.4728 9.93328 10.4713 9.85065C10.4699 9.76802 10.4518 9.68653 10.4182 9.61105C10.3846 9.53556 10.3361 9.46762 10.2757 9.41128L8.86513 8L10.2757 6.58872C10.3361 6.53238 10.3846 6.46444 10.4182 6.38895C10.4518 6.31347 10.4699 6.23198 10.4713 6.14935C10.4728 6.06672 10.4576 5.98465 10.4267 5.90802C10.3957 5.8314 10.3497 5.76179 10.2913 5.70335C10.2329 5.64492 10.1633 5.59885 10.0867 5.5679C10.0101 5.53695 9.92811 5.52175 9.84552 5.52321C9.76293 5.52466 9.68149 5.54275 9.60604 5.57639C9.53059 5.61002 9.46269 5.65851 9.40638 5.71897L7.99583 7.13026L6.58529 5.71897Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Free Support</span>
                                </li>
                            </ul>
                            <div class="cs-pricing_btn">
                                <a href="#" class="cs-btn cs-size_md"><span>Buy Now</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                    <div class="cs-pricing_table cs-style1">
                        <div class="cs-pricing_head">
                            <div class="cs-pricing_heading">
                                <div class="cs-pricing_icon cs-center">
                                    <img data-pagespeed-lazy-src="landingpage/assets/img/icons/pricing_icon_2.svg"
                                        alt="Icon" data-pagespeed-url-hash="853893318"
                                        src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                        onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                </div>
                                <h2 class="cs-pricing_title cs-m0">Gold</h2>
                            </div>
                            <div class="cs-price cs-primary_font">
                                <b class="cs-accent_color">$65</b>
                                <span>/month</span>
                            </div>
                            <div class="cs-pricing_lable">Get 7 Days Free Trial</div>
                        </div>
                        <div class="cs-pricing_body">
                            <ul class="cs-mp0 cs-pricing_feature">
                                <li>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.18215 0C3.771 0 0.18219 3.58872 0.18219 7.99996C0.18219 12.4112 3.771 16 8.18215 16C12.5933 16 16.1821 12.4112 16.1821 7.99996C16.1821 3.58872 12.5934 0 8.18215 0ZM12.7759 6.6487L7.7499 11.6747C7.53619 11.8884 7.25212 12.006 6.94993 12.006C6.64774 12.006 6.36366 11.8884 6.14996 11.6747L3.58843 9.11314C3.37473 8.89944 3.25702 8.61536 3.25702 8.31317C3.25702 8.01089 3.37473 7.72682 3.58843 7.51311C3.80205 7.29941 4.08613 7.18171 4.3884 7.18171C4.69059 7.18171 4.97475 7.29941 5.18837 7.5132L6.94984 9.27459L11.1758 5.04867C11.3895 4.83497 11.6735 4.71735 11.9757 4.71735C12.2779 4.71735 12.562 4.83497 12.7757 5.04867C13.217 5.48994 13.217 6.2076 12.7759 6.6487Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Unlimited users</span>
                                </li>
                                <li>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.18215 0C3.771 0 0.18219 3.58872 0.18219 7.99996C0.18219 12.4112 3.771 16 8.18215 16C12.5933 16 16.1821 12.4112 16.1821 7.99996C16.1821 3.58872 12.5934 0 8.18215 0ZM12.7759 6.6487L7.7499 11.6747C7.53619 11.8884 7.25212 12.006 6.94993 12.006C6.64774 12.006 6.36366 11.8884 6.14996 11.6747L3.58843 9.11314C3.37473 8.89944 3.25702 8.61536 3.25702 8.31317C3.25702 8.01089 3.37473 7.72682 3.58843 7.51311C3.80205 7.29941 4.08613 7.18171 4.3884 7.18171C4.69059 7.18171 4.97475 7.29941 5.18837 7.5132L6.94984 9.27459L11.1758 5.04867C11.3895 4.83497 11.6735 4.71735 11.9757 4.71735C12.2779 4.71735 12.562 4.83497 12.7757 5.04867C13.217 5.48994 13.217 6.2076 12.7759 6.6487Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Unlimited customers</span>
                                </li>
                                <li>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.18215 0C3.771 0 0.18219 3.58872 0.18219 7.99996C0.18219 12.4112 3.771 16 8.18215 16C12.5933 16 16.1821 12.4112 16.1821 7.99996C16.1821 3.58872 12.5934 0 8.18215 0ZM12.7759 6.6487L7.7499 11.6747C7.53619 11.8884 7.25212 12.006 6.94993 12.006C6.64774 12.006 6.36366 11.8884 6.14996 11.6747L3.58843 9.11314C3.37473 8.89944 3.25702 8.61536 3.25702 8.31317C3.25702 8.01089 3.37473 7.72682 3.58843 7.51311C3.80205 7.29941 4.08613 7.18171 4.3884 7.18171C4.69059 7.18171 4.97475 7.29941 5.18837 7.5132L6.94984 9.27459L11.1758 5.04867C11.3895 4.83497 11.6735 4.71735 11.9757 4.71735C12.2779 4.71735 12.562 4.83497 12.7757 5.04867C13.217 5.48994 13.217 6.2076 12.7759 6.6487Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Access from anywhere</span>
                                </li>
                                <li class="cs-inactive">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.99583 0C3.57967 0 0 3.58154 0 8C0 12.4185 3.57967 16 7.99583 16C12.412 16 15.9917 12.4185 15.9917 8C15.9917 3.58154 12.412 0 7.99583 0ZM6.58529 5.71897C6.52898 5.65851 6.46108 5.61002 6.38563 5.57639C6.31018 5.54275 6.22873 5.52466 6.14615 5.52321C6.06356 5.52175 5.98153 5.53695 5.90495 5.5679C5.82836 5.59885 5.75879 5.64492 5.70038 5.70335C5.64198 5.76179 5.59593 5.8314 5.565 5.90802C5.53407 5.98465 5.51887 6.06672 5.52033 6.14935C5.52179 6.23198 5.53986 6.31347 5.57348 6.38895C5.6071 6.46444 5.65557 6.53238 5.716 6.58872L7.12654 8L5.716 9.41128C5.65557 9.46762 5.6071 9.53556 5.57348 9.61105C5.53986 9.68653 5.52179 9.76802 5.52033 9.85065C5.51887 9.93328 5.53407 10.0154 5.565 10.092C5.59593 10.1686 5.64198 10.2382 5.70038 10.2966C5.75879 10.3551 5.82836 10.4012 5.90495 10.4321C5.98153 10.4631 6.06356 10.4783 6.14615 10.4768C6.22873 10.4753 6.31018 10.4572 6.38563 10.4236C6.46108 10.39 6.52898 10.3415 6.58529 10.281L7.99583 8.86974L9.40638 10.281C9.46269 10.3415 9.53059 10.39 9.60604 10.4236C9.68149 10.4572 9.76293 10.4753 9.84552 10.4768C9.92811 10.4783 10.0101 10.4631 10.0867 10.4321C10.1633 10.4012 10.2329 10.3551 10.2913 10.2966C10.3497 10.2382 10.3957 10.1686 10.4267 10.092C10.4576 10.0154 10.4728 9.93328 10.4713 9.85065C10.4699 9.76802 10.4518 9.68653 10.4182 9.61105C10.3846 9.53556 10.3361 9.46762 10.2757 9.41128L8.86513 8L10.2757 6.58872C10.3361 6.53238 10.3846 6.46444 10.4182 6.38895C10.4518 6.31347 10.4699 6.23198 10.4713 6.14935C10.4728 6.06672 10.4576 5.98465 10.4267 5.90802C10.3957 5.8314 10.3497 5.76179 10.2913 5.70335C10.2329 5.64492 10.1633 5.59885 10.0867 5.5679C10.0101 5.53695 9.92811 5.52175 9.84552 5.52321C9.76293 5.52466 9.68149 5.54275 9.60604 5.57639C9.53059 5.61002 9.46269 5.65851 9.40638 5.71897L7.99583 7.13026L6.58529 5.71897Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Accept payments 24/7</span>
                                </li>
                                <li class="cs-inactive">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.99583 0C3.57967 0 0 3.58154 0 8C0 12.4185 3.57967 16 7.99583 16C12.412 16 15.9917 12.4185 15.9917 8C15.9917 3.58154 12.412 0 7.99583 0ZM6.58529 5.71897C6.52898 5.65851 6.46108 5.61002 6.38563 5.57639C6.31018 5.54275 6.22873 5.52466 6.14615 5.52321C6.06356 5.52175 5.98153 5.53695 5.90495 5.5679C5.82836 5.59885 5.75879 5.64492 5.70038 5.70335C5.64198 5.76179 5.59593 5.8314 5.565 5.90802C5.53407 5.98465 5.51887 6.06672 5.52033 6.14935C5.52179 6.23198 5.53986 6.31347 5.57348 6.38895C5.6071 6.46444 5.65557 6.53238 5.716 6.58872L7.12654 8L5.716 9.41128C5.65557 9.46762 5.6071 9.53556 5.57348 9.61105C5.53986 9.68653 5.52179 9.76802 5.52033 9.85065C5.51887 9.93328 5.53407 10.0154 5.565 10.092C5.59593 10.1686 5.64198 10.2382 5.70038 10.2966C5.75879 10.3551 5.82836 10.4012 5.90495 10.4321C5.98153 10.4631 6.06356 10.4783 6.14615 10.4768C6.22873 10.4753 6.31018 10.4572 6.38563 10.4236C6.46108 10.39 6.52898 10.3415 6.58529 10.281L7.99583 8.86974L9.40638 10.281C9.46269 10.3415 9.53059 10.39 9.60604 10.4236C9.68149 10.4572 9.76293 10.4753 9.84552 10.4768C9.92811 10.4783 10.0101 10.4631 10.0867 10.4321C10.1633 10.4012 10.2329 10.3551 10.2913 10.2966C10.3497 10.2382 10.3957 10.1686 10.4267 10.092C10.4576 10.0154 10.4728 9.93328 10.4713 9.85065C10.4699 9.76802 10.4518 9.68653 10.4182 9.61105C10.3846 9.53556 10.3361 9.46762 10.2757 9.41128L8.86513 8L10.2757 6.58872C10.3361 6.53238 10.3846 6.46444 10.4182 6.38895C10.4518 6.31347 10.4699 6.23198 10.4713 6.14935C10.4728 6.06672 10.4576 5.98465 10.4267 5.90802C10.3957 5.8314 10.3497 5.76179 10.2913 5.70335C10.2329 5.64492 10.1633 5.59885 10.0867 5.5679C10.0101 5.53695 9.92811 5.52175 9.84552 5.52321C9.76293 5.52466 9.68149 5.54275 9.60604 5.57639C9.53059 5.61002 9.46269 5.65851 9.40638 5.71897L7.99583 7.13026L6.58529 5.71897Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Free Support</span>
                                </li>
                            </ul>
                            <div class="cs-pricing_btn">
                                <a href="#" class="cs-btn cs-size_md"><span>Buy Now</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-4">
                    <div class="cs-pricing_table cs-style1">
                        <div class="cs-pricing_head">
                            <div class="cs-pricing_heading">
                                <div class="cs-pricing_icon cs-center">
                                    <img data-pagespeed-lazy-src="landingpage/assets/img/icons/pricing_icon_3.svg"
                                        alt="Icon" data-pagespeed-url-hash="1148393239"
                                        src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                        onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                </div>
                                <h2 class="cs-pricing_title cs-m0">Bronze</h2>
                            </div>
                            <div class="cs-price cs-primary_font">
                                <b class="cs-accent_color">$99</b>
                                <span>/month</span>
                            </div>
                            <div class="cs-pricing_lable">Get 7 Days Free Trial</div>
                        </div>
                        <div class="cs-pricing_body">
                            <ul class="cs-mp0 cs-pricing_feature">
                                <li>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.18215 0C3.771 0 0.18219 3.58872 0.18219 7.99996C0.18219 12.4112 3.771 16 8.18215 16C12.5933 16 16.1821 12.4112 16.1821 7.99996C16.1821 3.58872 12.5934 0 8.18215 0ZM12.7759 6.6487L7.7499 11.6747C7.53619 11.8884 7.25212 12.006 6.94993 12.006C6.64774 12.006 6.36366 11.8884 6.14996 11.6747L3.58843 9.11314C3.37473 8.89944 3.25702 8.61536 3.25702 8.31317C3.25702 8.01089 3.37473 7.72682 3.58843 7.51311C3.80205 7.29941 4.08613 7.18171 4.3884 7.18171C4.69059 7.18171 4.97475 7.29941 5.18837 7.5132L6.94984 9.27459L11.1758 5.04867C11.3895 4.83497 11.6735 4.71735 11.9757 4.71735C12.2779 4.71735 12.562 4.83497 12.7757 5.04867C13.217 5.48994 13.217 6.2076 12.7759 6.6487Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Unlimited users</span>
                                </li>
                                <li>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.18215 0C3.771 0 0.18219 3.58872 0.18219 7.99996C0.18219 12.4112 3.771 16 8.18215 16C12.5933 16 16.1821 12.4112 16.1821 7.99996C16.1821 3.58872 12.5934 0 8.18215 0ZM12.7759 6.6487L7.7499 11.6747C7.53619 11.8884 7.25212 12.006 6.94993 12.006C6.64774 12.006 6.36366 11.8884 6.14996 11.6747L3.58843 9.11314C3.37473 8.89944 3.25702 8.61536 3.25702 8.31317C3.25702 8.01089 3.37473 7.72682 3.58843 7.51311C3.80205 7.29941 4.08613 7.18171 4.3884 7.18171C4.69059 7.18171 4.97475 7.29941 5.18837 7.5132L6.94984 9.27459L11.1758 5.04867C11.3895 4.83497 11.6735 4.71735 11.9757 4.71735C12.2779 4.71735 12.562 4.83497 12.7757 5.04867C13.217 5.48994 13.217 6.2076 12.7759 6.6487Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Unlimited customers</span>
                                </li>
                                <li>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.18215 0C3.771 0 0.18219 3.58872 0.18219 7.99996C0.18219 12.4112 3.771 16 8.18215 16C12.5933 16 16.1821 12.4112 16.1821 7.99996C16.1821 3.58872 12.5934 0 8.18215 0ZM12.7759 6.6487L7.7499 11.6747C7.53619 11.8884 7.25212 12.006 6.94993 12.006C6.64774 12.006 6.36366 11.8884 6.14996 11.6747L3.58843 9.11314C3.37473 8.89944 3.25702 8.61536 3.25702 8.31317C3.25702 8.01089 3.37473 7.72682 3.58843 7.51311C3.80205 7.29941 4.08613 7.18171 4.3884 7.18171C4.69059 7.18171 4.97475 7.29941 5.18837 7.5132L6.94984 9.27459L11.1758 5.04867C11.3895 4.83497 11.6735 4.71735 11.9757 4.71735C12.2779 4.71735 12.562 4.83497 12.7757 5.04867C13.217 5.48994 13.217 6.2076 12.7759 6.6487Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Access from anywhere</span>
                                </li>
                                <li>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.18215 0C3.771 0 0.18219 3.58872 0.18219 7.99996C0.18219 12.4112 3.771 16 8.18215 16C12.5933 16 16.1821 12.4112 16.1821 7.99996C16.1821 3.58872 12.5934 0 8.18215 0ZM12.7759 6.6487L7.7499 11.6747C7.53619 11.8884 7.25212 12.006 6.94993 12.006C6.64774 12.006 6.36366 11.8884 6.14996 11.6747L3.58843 9.11314C3.37473 8.89944 3.25702 8.61536 3.25702 8.31317C3.25702 8.01089 3.37473 7.72682 3.58843 7.51311C3.80205 7.29941 4.08613 7.18171 4.3884 7.18171C4.69059 7.18171 4.97475 7.29941 5.18837 7.5132L6.94984 9.27459L11.1758 5.04867C11.3895 4.83497 11.6735 4.71735 11.9757 4.71735C12.2779 4.71735 12.562 4.83497 12.7757 5.04867C13.217 5.48994 13.217 6.2076 12.7759 6.6487Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Accept payments 24/7</span>
                                </li>
                                <li>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.18215 0C3.771 0 0.18219 3.58872 0.18219 7.99996C0.18219 12.4112 3.771 16 8.18215 16C12.5933 16 16.1821 12.4112 16.1821 7.99996C16.1821 3.58872 12.5934 0 8.18215 0ZM12.7759 6.6487L7.7499 11.6747C7.53619 11.8884 7.25212 12.006 6.94993 12.006C6.64774 12.006 6.36366 11.8884 6.14996 11.6747L3.58843 9.11314C3.37473 8.89944 3.25702 8.61536 3.25702 8.31317C3.25702 8.01089 3.37473 7.72682 3.58843 7.51311C3.80205 7.29941 4.08613 7.18171 4.3884 7.18171C4.69059 7.18171 4.97475 7.29941 5.18837 7.5132L6.94984 9.27459L11.1758 5.04867C11.3895 4.83497 11.6735 4.71735 11.9757 4.71735C12.2779 4.71735 12.562 4.83497 12.7757 5.04867C13.217 5.48994 13.217 6.2076 12.7759 6.6487Z"
                                            fill="#47C4C0" />
                                    </svg>
                                    <span>Free Support</span>
                                </li>
                            </ul>
                            <div class="cs-pricing_btn">
                                <a href="#" class="cs-btn cs-size_md"><span>Buy Now</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
            </div>
            <div class="cs-height_75 cs-height_lg_45"></div>
        </div>
    </section>
    <section id="faq" class="cs-gradient_bg_1">
        <div class="cs-height_95 cs-height_lg_70"></div>
        <div class="cs-seciton_heading cs-style1 text-center">
            <div class="cs-section_subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                POS FAQ
            </div>
            <div class="cs-height_10 cs-height_lg_10"></div>
            <h3 class="cs-section_title">Frequently asked questions</h3>
        </div>
        <div class="cs-height_50 cs-height_lg_40"></div>
        <div class="container">
            <div class="row align-items-center flex-column-reverse-lg">
                <div class="col-xl-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="cs-left_full_width cs-space110">
                        <div class="cs-left_sided_img">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/faq_img.png" alt="About"
                                data-pagespeed-url-hash="413202823" src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                        </div>
                    </div>
                    <div class="cs-height_0 cs-height_lg_40"></div>
                </div>
                <div class="col-xl-6">
                    <div class="cs-accordians cs-style1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                        <div class="cs-accordian cs-white_bg active">
                            <div class="cs-accordian_head">
                                <h2 class="cs-accordian_title">
                                    <span>Q1.</span> What is a point of sale?
                                </h2>
                                <span class="cs-accordian_toggle">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 -7.36618e-07C12.0333 -8.82307e-07 9.13319 0.879733 6.66645 2.52795C4.19971 4.17617 2.27713 6.51885 1.14181 9.25975C0.00649787 12.0006 -0.290551 15.0166 0.288226 17.9264C0.867005 20.8361 2.29562 23.5088 4.3934 25.6066C6.49119 27.7044 9.16393 29.133 12.0736 29.7118C14.9834 30.2905 17.9994 29.9935 20.7403 28.8582C23.4811 27.7229 25.8238 25.8003 27.472 23.3335C29.1203 20.8668 30 17.9667 30 15C29.9957 11.0231 28.414 7.21026 25.6019 4.39815C22.7897 1.58603 18.9769 0.00430081 15 -7.36618e-07V-7.36618e-07ZM15 20C14.085 20.0009 13.2014 19.6665 12.5163 19.06C12.1075 18.6962 11.72 18.3425 11.4663 18.0887L7.875 14.5587C7.75017 14.4457 7.64946 14.3086 7.57892 14.1557C7.50838 14.0028 7.46947 13.8372 7.46452 13.6689C7.45957 13.5005 7.48869 13.3329 7.55012 13.1762C7.61155 13.0194 7.70402 12.8766 7.822 12.7564C7.93998 12.6362 8.08102 12.5412 8.23667 12.4769C8.3923 12.4125 8.55934 12.3804 8.72773 12.3822C8.89612 12.3841 9.0624 12.4199 9.21659 12.4876C9.37078 12.5553 9.5097 12.6535 9.62501 12.7762L13.225 16.3125C13.46 16.5462 13.81 16.8637 14.1738 17.1875C14.4021 17.3889 14.6961 17.5001 15.0006 17.5001C15.3051 17.5001 15.5991 17.3889 15.8275 17.1875C16.19 16.865 16.54 16.5475 16.7675 16.3212L20.375 12.7762C20.4903 12.6535 20.6292 12.5553 20.7834 12.4876C20.9376 12.4199 21.1039 12.3841 21.2723 12.3822C21.4407 12.3804 21.6077 12.4125 21.7633 12.4769C21.919 12.5412 22.06 12.6362 22.178 12.7564C22.296 12.8766 22.3885 13.0194 22.4499 13.1762C22.5113 13.333 22.5404 13.5005 22.5355 13.6689C22.5305 13.8372 22.4916 14.0028 22.4211 14.1557C22.3505 14.3086 22.2498 14.4457 22.125 14.5587L18.5263 18.095C18.2763 18.345 17.8925 18.695 17.485 19.0562C16.8003 19.6647 15.916 20.0006 15 20Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                            <div class="cs-accordian-body">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard sincethe 15000s, printer took a galley of type and
                                scrambl.
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-accordian cs-white_bg">
                            <div class="cs-accordian_head">
                                <h2 class="cs-accordian_title">
                                    <span>Q2.</span> What is the best POS system?
                                </h2>
                                <span class="cs-accordian_toggle">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 -7.36618e-07C12.0333 -8.82307e-07 9.13319 0.879733 6.66645 2.52795C4.19971 4.17617 2.27713 6.51885 1.14181 9.25975C0.00649787 12.0006 -0.290551 15.0166 0.288226 17.9264C0.867005 20.8361 2.29562 23.5088 4.3934 25.6066C6.49119 27.7044 9.16393 29.133 12.0736 29.7118C14.9834 30.2905 17.9994 29.9935 20.7403 28.8582C23.4811 27.7229 25.8238 25.8003 27.472 23.3335C29.1203 20.8668 30 17.9667 30 15C29.9957 11.0231 28.414 7.21026 25.6019 4.39815C22.7897 1.58603 18.9769 0.00430081 15 -7.36618e-07V-7.36618e-07ZM15 20C14.085 20.0009 13.2014 19.6665 12.5163 19.06C12.1075 18.6962 11.72 18.3425 11.4663 18.0887L7.875 14.5587C7.75017 14.4457 7.64946 14.3086 7.57892 14.1557C7.50838 14.0028 7.46947 13.8372 7.46452 13.6689C7.45957 13.5005 7.48869 13.3329 7.55012 13.1762C7.61155 13.0194 7.70402 12.8766 7.822 12.7564C7.93998 12.6362 8.08102 12.5412 8.23667 12.4769C8.3923 12.4125 8.55934 12.3804 8.72773 12.3822C8.89612 12.3841 9.0624 12.4199 9.21659 12.4876C9.37078 12.5553 9.5097 12.6535 9.62501 12.7762L13.225 16.3125C13.46 16.5462 13.81 16.8637 14.1738 17.1875C14.4021 17.3889 14.6961 17.5001 15.0006 17.5001C15.3051 17.5001 15.5991 17.3889 15.8275 17.1875C16.19 16.865 16.54 16.5475 16.7675 16.3212L20.375 12.7762C20.4903 12.6535 20.6292 12.5553 20.7834 12.4876C20.9376 12.4199 21.1039 12.3841 21.2723 12.3822C21.4407 12.3804 21.6077 12.4125 21.7633 12.4769C21.919 12.5412 22.06 12.6362 22.178 12.7564C22.296 12.8766 22.3885 13.0194 22.4499 13.1762C22.5113 13.333 22.5404 13.5005 22.5355 13.6689C22.5305 13.8372 22.4916 14.0028 22.4211 14.1557C22.3505 14.3086 22.2498 14.4457 22.125 14.5587L18.5263 18.095C18.2763 18.345 17.8925 18.695 17.485 19.0562C16.8003 19.6647 15.916 20.0006 15 20Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                            <div class="cs-accordian-body">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard sincethe 15000s, printer took a galley of type and
                                scrambl.
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-accordian cs-white_bg">
                            <div class="cs-accordian_head">
                                <h2 class="cs-accordian_title">
                                    <span>Q3.</span> How does a POS system work?
                                </h2>
                                <span class="cs-accordian_toggle">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 -7.36618e-07C12.0333 -8.82307e-07 9.13319 0.879733 6.66645 2.52795C4.19971 4.17617 2.27713 6.51885 1.14181 9.25975C0.00649787 12.0006 -0.290551 15.0166 0.288226 17.9264C0.867005 20.8361 2.29562 23.5088 4.3934 25.6066C6.49119 27.7044 9.16393 29.133 12.0736 29.7118C14.9834 30.2905 17.9994 29.9935 20.7403 28.8582C23.4811 27.7229 25.8238 25.8003 27.472 23.3335C29.1203 20.8668 30 17.9667 30 15C29.9957 11.0231 28.414 7.21026 25.6019 4.39815C22.7897 1.58603 18.9769 0.00430081 15 -7.36618e-07V-7.36618e-07ZM15 20C14.085 20.0009 13.2014 19.6665 12.5163 19.06C12.1075 18.6962 11.72 18.3425 11.4663 18.0887L7.875 14.5587C7.75017 14.4457 7.64946 14.3086 7.57892 14.1557C7.50838 14.0028 7.46947 13.8372 7.46452 13.6689C7.45957 13.5005 7.48869 13.3329 7.55012 13.1762C7.61155 13.0194 7.70402 12.8766 7.822 12.7564C7.93998 12.6362 8.08102 12.5412 8.23667 12.4769C8.3923 12.4125 8.55934 12.3804 8.72773 12.3822C8.89612 12.3841 9.0624 12.4199 9.21659 12.4876C9.37078 12.5553 9.5097 12.6535 9.62501 12.7762L13.225 16.3125C13.46 16.5462 13.81 16.8637 14.1738 17.1875C14.4021 17.3889 14.6961 17.5001 15.0006 17.5001C15.3051 17.5001 15.5991 17.3889 15.8275 17.1875C16.19 16.865 16.54 16.5475 16.7675 16.3212L20.375 12.7762C20.4903 12.6535 20.6292 12.5553 20.7834 12.4876C20.9376 12.4199 21.1039 12.3841 21.2723 12.3822C21.4407 12.3804 21.6077 12.4125 21.7633 12.4769C21.919 12.5412 22.06 12.6362 22.178 12.7564C22.296 12.8766 22.3885 13.0194 22.4499 13.1762C22.5113 13.333 22.5404 13.5005 22.5355 13.6689C22.5305 13.8372 22.4916 14.0028 22.4211 14.1557C22.3505 14.3086 22.2498 14.4457 22.125 14.5587L18.5263 18.095C18.2763 18.345 17.8925 18.695 17.485 19.0562C16.8003 19.6647 15.916 20.0006 15 20Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                            <div class="cs-accordian-body">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard sincethe 15000s, printer took a galley of type and
                                scrambl.
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-accordian cs-white_bg">
                            <div class="cs-accordian_head">
                                <h2 class="cs-accordian_title">
                                    <span>Q4.</span> How to use a POS System?
                                </h2>
                                <span class="cs-accordian_toggle">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 -7.36618e-07C12.0333 -8.82307e-07 9.13319 0.879733 6.66645 2.52795C4.19971 4.17617 2.27713 6.51885 1.14181 9.25975C0.00649787 12.0006 -0.290551 15.0166 0.288226 17.9264C0.867005 20.8361 2.29562 23.5088 4.3934 25.6066C6.49119 27.7044 9.16393 29.133 12.0736 29.7118C14.9834 30.2905 17.9994 29.9935 20.7403 28.8582C23.4811 27.7229 25.8238 25.8003 27.472 23.3335C29.1203 20.8668 30 17.9667 30 15C29.9957 11.0231 28.414 7.21026 25.6019 4.39815C22.7897 1.58603 18.9769 0.00430081 15 -7.36618e-07V-7.36618e-07ZM15 20C14.085 20.0009 13.2014 19.6665 12.5163 19.06C12.1075 18.6962 11.72 18.3425 11.4663 18.0887L7.875 14.5587C7.75017 14.4457 7.64946 14.3086 7.57892 14.1557C7.50838 14.0028 7.46947 13.8372 7.46452 13.6689C7.45957 13.5005 7.48869 13.3329 7.55012 13.1762C7.61155 13.0194 7.70402 12.8766 7.822 12.7564C7.93998 12.6362 8.08102 12.5412 8.23667 12.4769C8.3923 12.4125 8.55934 12.3804 8.72773 12.3822C8.89612 12.3841 9.0624 12.4199 9.21659 12.4876C9.37078 12.5553 9.5097 12.6535 9.62501 12.7762L13.225 16.3125C13.46 16.5462 13.81 16.8637 14.1738 17.1875C14.4021 17.3889 14.6961 17.5001 15.0006 17.5001C15.3051 17.5001 15.5991 17.3889 15.8275 17.1875C16.19 16.865 16.54 16.5475 16.7675 16.3212L20.375 12.7762C20.4903 12.6535 20.6292 12.5553 20.7834 12.4876C20.9376 12.4199 21.1039 12.3841 21.2723 12.3822C21.4407 12.3804 21.6077 12.4125 21.7633 12.4769C21.919 12.5412 22.06 12.6362 22.178 12.7564C22.296 12.8766 22.3885 13.0194 22.4499 13.1762C22.5113 13.333 22.5404 13.5005 22.5355 13.6689C22.5305 13.8372 22.4916 14.0028 22.4211 14.1557C22.3505 14.3086 22.2498 14.4457 22.125 14.5587L18.5263 18.095C18.2763 18.345 17.8925 18.695 17.485 19.0562C16.8003 19.6647 15.916 20.0006 15 20Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                            <div class="cs-accordian-body">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard sincethe 15000s, printer took a galley of type and
                                scrambl.
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                        <div class="cs-accordian cs-white_bg">
                            <div class="cs-accordian_head">
                                <h2 class="cs-accordian_title">
                                    <span>Q5.</span> How can i make a payment?
                                </h2>
                                <span class="cs-accordian_toggle">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 -7.36618e-07C12.0333 -8.82307e-07 9.13319 0.879733 6.66645 2.52795C4.19971 4.17617 2.27713 6.51885 1.14181 9.25975C0.00649787 12.0006 -0.290551 15.0166 0.288226 17.9264C0.867005 20.8361 2.29562 23.5088 4.3934 25.6066C6.49119 27.7044 9.16393 29.133 12.0736 29.7118C14.9834 30.2905 17.9994 29.9935 20.7403 28.8582C23.4811 27.7229 25.8238 25.8003 27.472 23.3335C29.1203 20.8668 30 17.9667 30 15C29.9957 11.0231 28.414 7.21026 25.6019 4.39815C22.7897 1.58603 18.9769 0.00430081 15 -7.36618e-07V-7.36618e-07ZM15 20C14.085 20.0009 13.2014 19.6665 12.5163 19.06C12.1075 18.6962 11.72 18.3425 11.4663 18.0887L7.875 14.5587C7.75017 14.4457 7.64946 14.3086 7.57892 14.1557C7.50838 14.0028 7.46947 13.8372 7.46452 13.6689C7.45957 13.5005 7.48869 13.3329 7.55012 13.1762C7.61155 13.0194 7.70402 12.8766 7.822 12.7564C7.93998 12.6362 8.08102 12.5412 8.23667 12.4769C8.3923 12.4125 8.55934 12.3804 8.72773 12.3822C8.89612 12.3841 9.0624 12.4199 9.21659 12.4876C9.37078 12.5553 9.5097 12.6535 9.62501 12.7762L13.225 16.3125C13.46 16.5462 13.81 16.8637 14.1738 17.1875C14.4021 17.3889 14.6961 17.5001 15.0006 17.5001C15.3051 17.5001 15.5991 17.3889 15.8275 17.1875C16.19 16.865 16.54 16.5475 16.7675 16.3212L20.375 12.7762C20.4903 12.6535 20.6292 12.5553 20.7834 12.4876C20.9376 12.4199 21.1039 12.3841 21.2723 12.3822C21.4407 12.3804 21.6077 12.4125 21.7633 12.4769C21.919 12.5412 22.06 12.6362 22.178 12.7564C22.296 12.8766 22.3885 13.0194 22.4499 13.1762C22.5113 13.333 22.5404 13.5005 22.5355 13.6689C22.5305 13.8372 22.4916 14.0028 22.4211 14.1557C22.3505 14.3086 22.2498 14.4457 22.125 14.5587L18.5263 18.095C18.2763 18.345 17.8925 18.695 17.485 19.0562C16.8003 19.6647 15.916 20.0006 15 20Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                            <div class="cs-accordian-body">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard sincethe 15000s, printer took a galley of type and
                                scrambl.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-height_100 cs-height_lg_70"></div>
    </section>
    <section class="cs-bg" data-src="landingpage/assets/img/feature_bg.svg" id="news">
        <div class="cs-height_95 cs-height_lg_70"></div>
        <div class="container">
            <div class="cs-seciton_heading cs-style1 text-center">
                <div class="cs-section_subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                    Letest News
                </div>
                <div class="cs-height_10 cs-height_lg_10"></div>
                <h3 class="cs-section_title">Point of sale latest news</h3>
            </div>
            <div class="cs-height_50 cs-height_lg_40"></div>
            <div class="cs-slider cs-style1 cs-gap-24">
                <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600"
                    data-fade-slide="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
                    data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                    <div class="cs-slider_wrapper">
                        <div class="cs-slide">
                            <div class="cs-post cs-style1">
                                <div class="cs-post_thumb cs-modal_btn" data-modal="details">
                                    <div class="cs-post_thumb_in cs-bg" data-src="landingpage/assets/img/post_1.jpeg">
                                    </div>
                                </div>
                                <div class="cs-post_info">
                                    <ul class="cs-post_meta cs-mp0">
                                        <li>
                                            <span class="cs-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                        d="M313.6 304c-28.7 0-42.5 16-89.6 16c-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4c14.6 0 38.3 16 89.6 16c51.7 0 74.9-16 89.6-16c47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0S80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96s-96-43.1-96-96s43.1-96 96-96z" />
                                                </svg>
                                            </span>
                                            admin
                                        </li>
                                        <li>
                                            <span class="cs-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                        d="M152 64h144V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40h40c35.3 0 64 28.65 64 64v320c0 35.3-28.7 64-64 64H64c-35.35 0-64-28.7-64-64V128c0-35.35 28.65-64 64-64h40V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40zM48 448c0 8.8 7.16 16 16 16h320c8.8 0 16-7.2 16-16V192H48v256z" />
                                                </svg>
                                            </span>
                                            12.09.2022
                                        </li>
                                    </ul>
                                    <h2 class="cs-post_title cs-modal_btn" data-modal="details">
                                        Point of sale software card usde
                                    </h2>
                                    <span class="cs-text_btn cs-modal_btn" data-modal="details">
                                        <span>Read More</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="cs-slide">
                            <div class="cs-post cs-style1">
                                <div class="cs-post_thumb cs-modal_btn" data-modal="details">
                                    <div class="cs-post_thumb_in cs-bg" data-src="landingpage/assets/img/post_2.jpeg">
                                    </div>
                                </div>
                                <div class="cs-post_info">
                                    <ul class="cs-post_meta cs-mp0">
                                        <li>
                                            <span class="cs-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                        d="M313.6 304c-28.7 0-42.5 16-89.6 16c-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4c14.6 0 38.3 16 89.6 16c51.7 0 74.9-16 89.6-16c47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0S80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96s-96-43.1-96-96s43.1-96 96-96z" />
                                                </svg>
                                            </span>
                                            admin
                                        </li>
                                        <li>
                                            <span class="cs-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                        d="M152 64h144V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40h40c35.3 0 64 28.65 64 64v320c0 35.3-28.7 64-64 64H64c-35.35 0-64-28.7-64-64V128c0-35.35 28.65-64 64-64h40V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40zM48 448c0 8.8 7.16 16 16 16h320c8.8 0 16-7.2 16-16V192H48v256z" />
                                                </svg>
                                            </span>
                                            12.09.2022
                                        </li>
                                    </ul>
                                    <h2 class="cs-post_title cs-modal_btn" data-modal="details">
                                        Best super shop point of sale setup
                                    </h2>
                                    <span class="cs-text_btn cs-modal_btn" data-modal="details">
                                        <span>Read More</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="cs-slide">
                            <div class="cs-post cs-style1">
                                <div class="cs-post_thumb cs-modal_btn" data-modal="details">
                                    <div class="cs-post_thumb_in cs-bg" data-src="landingpage/assets/img/post_3.jpeg">
                                    </div>
                                </div>
                                <div class="cs-post_info">
                                    <ul class="cs-post_meta cs-mp0">
                                        <li>
                                            <span class="cs-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                        d="M313.6 304c-28.7 0-42.5 16-89.6 16c-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4c14.6 0 38.3 16 89.6 16c51.7 0 74.9-16 89.6-16c47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0S80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96s-96-43.1-96-96s43.1-96 96-96z" />
                                                </svg>
                                            </span>
                                            admin
                                        </li>
                                        <li>
                                            <span class="cs-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                        d="M152 64h144V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40h40c35.3 0 64 28.65 64 64v320c0 35.3-28.7 64-64 64H64c-35.35 0-64-28.7-64-64V128c0-35.35 28.65-64 64-64h40V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40zM48 448c0 8.8 7.16 16 16 16h320c8.8 0 16-7.2 16-16V192H48v256z" />
                                                </svg>
                                            </span>
                                            12.09.2022
                                        </li>
                                    </ul>
                                    <h2 class="cs-post_title cs-modal_btn" data-modal="details">
                                        Computer new point of saie working good
                                    </h2>
                                    <span class="cs-text_btn cs-modal_btn" data-modal="details">
                                        <span>Read More</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="cs-slide">
                            <div class="cs-post cs-style1">
                                <div class="cs-post_thumb cs-modal_btn" data-modal="details">
                                    <div class="cs-post_thumb_in cs-bg" data-src="landingpage/assets/img/post_4.jpeg">
                                    </div>
                                </div>
                                <div class="cs-post_info">
                                    <ul class="cs-post_meta cs-mp0">
                                        <li>
                                            <span class="cs-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                        d="M313.6 304c-28.7 0-42.5 16-89.6 16c-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4c14.6 0 38.3 16 89.6 16c51.7 0 74.9-16 89.6-16c47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0S80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96s-96-43.1-96-96s43.1-96 96-96z" />
                                                </svg>
                                            </span>
                                            admin
                                        </li>
                                        <li>
                                            <span class="cs-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                        d="M152 64h144V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40h40c35.3 0 64 28.65 64 64v320c0 35.3-28.7 64-64 64H64c-35.35 0-64-28.7-64-64V128c0-35.35 28.65-64 64-64h40V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40zM48 448c0 8.8 7.16 16 16 16h320c8.8 0 16-7.2 16-16V192H48v256z" />
                                                </svg>
                                            </span>
                                            12.09.2022
                                        </li>
                                    </ul>
                                    <h2 class="cs-post_title cs-modal_btn" data-modal="details">
                                        Connection pos to phone payment option
                                    </h2>
                                    <span class="cs-text_btn cs-modal_btn" data-modal="details">
                                        <span>Read More</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="cs-slide">
                            <div class="cs-post cs-style1">
                                <div class="cs-post_thumb cs-modal_btn" data-modal="details">
                                    <div class="cs-post_thumb_in cs-bg" data-src="landingpage/assets/img/post_2.jpeg">
                                    </div>
                                </div>
                                <div class="cs-post_info">
                                    <ul class="cs-post_meta cs-mp0">
                                        <li>
                                            <span class="cs-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                        d="M313.6 304c-28.7 0-42.5 16-89.6 16c-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4c14.6 0 38.3 16 89.6 16c51.7 0 74.9-16 89.6-16c47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0S80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96s-96-43.1-96-96s43.1-96 96-96z" />
                                                </svg>
                                            </span>
                                            admin
                                        </li>
                                        <li>
                                            <span class="cs-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                        d="M152 64h144V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40h40c35.3 0 64 28.65 64 64v320c0 35.3-28.7 64-64 64H64c-35.35 0-64-28.7-64-64V128c0-35.35 28.65-64 64-64h40V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40zM48 448c0 8.8 7.16 16 16 16h320c8.8 0 16-7.2 16-16V192H48v256z" />
                                                </svg>
                                            </span>
                                            12.09.2022
                                        </li>
                                    </ul>
                                    <h2 class="cs-post_title cs-modal_btn" data-modal="details">
                                        Best super shop point of sale setup
                                    </h2>
                                    <span class="cs-text_btn cs-modal_btn" data-modal="details">
                                        <span>Read More</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M13.3 17.275q-.3-.3-.288-.725q.013-.425.313-.725L16.15 13H5q-.425 0-.713-.288Q4 12.425 4 12t.287-.713Q4.575 11 5 11h11.15L13.3 8.15q-.3-.3-.3-.713q0-.412.3-.712t.713-.3q.412 0 .712.3L19.3 11.3q.15.15.213.325q.062.175.062.375t-.062.375q-.063.175-.213.325l-4.6 4.6q-.275.275-.687.275q-.413 0-.713-.3Z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-pagination cs-style1"></div>
            </div>
        </div>
        <div class="cs-height_100 cs-height_lg_70"></div>
    </section>
    <section class="cs-gradient_bg_1" id="contact">
        <div class="cs-height_95 cs-height_lg_70"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-8">
                    <div class="cs-seciton_heading cs-style1">
                        <div class="cs-section_subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            Contract Us
                        </div>
                        <div class="cs-height_10 cs-height_lg_10"></div>
                        <h3 class="cs-section_title">
                            If you have any quiries, fill free to contact us
                        </h3>
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.Lorem Ipsum is simply dummy text of the Lorem Ipsum is
                        simply dummy text of the printing and typesetting.
                    </p>
                    <div class="cs-height_15 cs-height_lg_15"></div>
                    <div class="cs-iconbox cs-style3">
                        <div class="cs-iconbox_icon">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/contact_icon_1.svg"
                                alt="Icon" data-pagespeed-url-hash="2977209399"
                                src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                        </div>
                        <div class="cs-iconbox_right">
                            <h2 class="cs-iconbox_title">Address</h2>
                            <div class="cs-iconbox_subtitle">
                                4117 Leroy LaneHarold, KY 41635,
                            </div>
                        </div>
                    </div>
                    <div class="cs-height_30 cs-height_lg_30"></div>
                    <div class="cs-iconbox cs-style3">
                        <div class="cs-iconbox_icon">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/contact_icon_2.svg"
                                alt="Icon" data-pagespeed-url-hash="3271709320"
                                src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                        </div>
                        <div class="cs-iconbox_right">
                            <h2 class="cs-iconbox_title">Contract Number</h2>
                            <div class="cs-iconbox_subtitle">+606-243-4966</div>
                        </div>
                    </div>
                    <div class="cs-height_30 cs-height_lg_30"></div>
                    <div class="cs-iconbox cs-style3">
                        <div class="cs-iconbox_icon">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/icons/contact_icon_3.svg"
                                alt="Icon" data-pagespeed-url-hash="3566209241"
                                src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                        </div>
                        <div class="cs-iconbox_right">
                            <h2 class="cs-iconbox_title">Email Address</h2>
                            <div class="cs-iconbox_subtitle">demo@gmail.com</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1">
                    <div class="cs-height_40 cs-height_lg_40"></div>
                    <form class="cs-contact_form">
                        <h2 class="cs-contact_form_title">Please fill up the form</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="cs-form_field" placeholder="Name" />
                                <div class="cs-height_25 cs-height_lg_25"></div>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="cs-form_field" placeholder="Email address" />
                                <div class="cs-height_25 cs-height_lg_25"></div>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="cs-form_field" placeholder="Phone number" />
                                <div class="cs-height_25 cs-height_lg_25"></div>
                            </div>
                            <div class="col-lg-12">
                                <textarea cols="30" rows="5" class="cs-form_field" placeholder="Write your massage"></textarea>
                                <div class="cs-height_25 cs-height_lg_25"></div>
                            </div>
                            <div class="col-lg-12">
                                <button class="cs-btn cs-size_md">
                                    <span>Send Message</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="cs-height_95 cs-height_lg_70"></div>
    </section>
    <footer class="cs-footer">
        <div class="cs-height_75 cs-height_lg_70"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="cs-footer_item">
                        <div class="cs-footer_widget_text">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/logo_footer.svg" alt="Logo"
                                data-pagespeed-url-hash="543700067" src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                            <p>
                                On the other hand, we denounce <br />
                                with righteous indignation and <br />
                                dislike men who are so
                            </p>
                        </div>
                        <div class="cs-height_30 cs-height_lg_30"></div>
                        <div class="cs-social_btns cs-style1">
                            <a href="#"><img data-pagespeed-lazy-src="landingpage/assets/img/facebook.svg"
                                    alt="Facebook" data-pagespeed-url-hash="3266811910"
                                    src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" /></a>
                            <a href="#"><img data-pagespeed-lazy-src="landingpage/assets/img/twitter.svg"
                                    alt="Twitter" data-pagespeed-url-hash="2552468623"
                                    src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" /></a>
                            <a href="#"><img data-pagespeed-lazy-src="landingpage/assets/img/instagram.svg"
                                    alt="Instagram" data-pagespeed-url-hash="205158582"
                                    src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cs-footer_item widget_nav_menu">
                        <h2 class="cs-widget_title">Available POS</h2>
                        <ul class="menu">
                            <li><a href="#">Food Delivery</a></li>
                            <li><a href="#">Furniture Store</a></li>
                            <li><a href="#">Coffee Shop</a></li>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">eCommerce</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cs-footer_item widget_nav_menu">
                        <h2 class="cs-widget_title">Company</h2>
                        <ul class="menu">
                            <li><a href="#">Features</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cs-footer_item widget_nav_menu">
                        <h2 class="cs-widget_title">Subscribe us</h2>
                        <form class="cs-newsletter">
                            <div class="cs-newsletter_text">
                                Get Business news, tip and solutions to your problems from our
                                experts.
                            </div>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <input type="text" class="cs-form_field" placeholder="Enter your email" />
                            <div class="cs-height_10 cs-height_lg_10"></div>
                            <button class="cs-btn cs-size_md w-100">
                                <span>Subscribe</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-height_40 cs-height_lg_30"></div>
        <div class="cs-copyright text-center">
            <div class="container">Copyright 2022. Created by Thememarch.</div>
        </div>
    </footer>
    <div class="cs-modal" data-modal="login">
        <div class="cs-close_overlay"></div>
        <div class="cs-modal_in">
            <div class="cs-modal_container cs-white_bg">
                <button class="cs-close_modal cs-center cs-primary_bg">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7071 1.70711C12.0976 1.31658 12.0976 0.683417 11.7071 0.292893C11.3166 -0.0976311 10.6834 -0.0976311 10.2929 0.292893L11.7071 1.70711ZM0.292893 10.2929C-0.0976311 10.6834 -0.0976311 11.3166 0.292893 11.7071C0.683417 12.0976 1.31658 12.0976 1.70711 11.7071L0.292893 10.2929ZM1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L1.70711 0.292893ZM10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L10.2929 11.7071ZM10.2929 0.292893L0.292893 10.2929L1.70711 11.7071L11.7071 1.70711L10.2929 0.292893ZM0.292893 1.70711L10.2929 11.7071L11.7071 10.2929L1.70711 0.292893L0.292893 1.70711Z"
                            fill="white" />
                    </svg>
                </button>
                <div class="cs-height_95 cs-height_lg_70"></div>
                <div class="cs-login">
                    <div class="cs-login_left">
                        <img src="landingpage/assets/img/about_img_1.png" alt="Login Thumb"
                            data-pagespeed-url-hash="3791996468"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                    </div>
                    <div class="cs-login_right">
                        <form class="cs-login_form">
                            <h2>Login in to your posing account</h2>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                            <input type="text" class="cs-form_field cs-border_color"
                                placeholder="Email address" />
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <input type="password" class="cs-form_field cs-border_color" placeholder="Password" />
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <div class="cs-login_meta">
                                <div>
                                    <div class="cs-check">
                                        <input type="checkbox" />
                                        <label>Remember me</label>
                                    </div>
                                </div>
                                <div>
                                    <span class="cs-text_btn cs-modal_btn" data-modal="forgot"><span>Forgot
                                            Password?</span></span>
                                </div>
                            </div>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <button class="cs-btn cs-size_md w-100">
                                <span>Login</span>
                            </button>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <p class="cs-m0">
                                Don't have an account?
                                <span class="cs-text_btn cs-modal_btn"
                                    data-modal="register"><span>Register</span></span>
                            </p>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                            <div class="cs-or"><span>or</span></div>
                            <div class="cs-height_40 cs-height_lg_30"></div>
                            <div class="cs-social_btns cs-style2">
                                <a href="#" target="_blank" class="cs-center cs-color1">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.3187 8.34992C16.329 7.78817 16.2694 7.22728 16.1411 6.67969H8.31738V9.71004H12.9094C12.8229 10.2417 12.6273 10.7506 12.3343 11.206C12.0413 11.6614 11.657 12.0539 11.2047 12.3596V12.4629L13.6785 14.3399L13.8506 14.3562C15.4248 12.9335 16.3326 10.8362 16.3326 8.34992"
                                            fill="currentColor" />
                                        <path
                                            d="M8.3182 16.3333C10.567 16.3333 12.4577 15.6097 13.8375 14.3556L11.2055 12.359C10.3535 12.9194 9.34397 13.2048 8.3182 13.1751C7.26397 13.1691 6.23842 12.838 5.38719 12.2286C4.53597 11.6192 3.90232 10.7625 3.57621 9.78021H3.47904L0.905385 11.7306L0.87207 11.8231C1.56522 13.1759 2.62872 14.3132 3.94369 15.1077C5.25865 15.9023 6.77328 16.3228 8.3182 16.3224"
                                            fill="currentColor" />
                                        <path
                                            d="M3.58123 9.78285C3.39838 9.26292 3.30457 8.71693 3.3036 8.16701C3.30991 7.61843 3.40359 7.07419 3.58123 6.55392V6.4451L0.977035 4.46204L0.890987 4.50285C0.305173 5.64191 0 6.89966 0 8.17517C0 9.45068 0.305173 10.7084 0.890987 11.8475L3.59513 9.79643"
                                            fill="currentColor" />
                                        <path
                                            d="M8.3182 3.15874C9.51172 3.14118 10.6659 3.57696 11.5387 4.37471L13.893 2.12507C12.3845 0.738085 10.3868 -0.0232452 8.3182 0.000541035C6.77299 0.000338841 5.25817 0.421321 3.94318 1.21638C2.62818 2.01144 1.56484 3.14925 0.87207 4.50256L3.56509 6.55363C3.89512 5.57159 4.5313 4.71575 5.38401 4.10671C6.23672 3.49766 7.263 3.16608 8.3182 3.15874Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#" target="_blank" class="cs-center cs-color2">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.98623 8.86489e-07C6.08929 0.0017225 4.2548 0.695882 2.81063 1.95834C1.36645 3.2208 0.406756 4.9693 0.103097 6.89129C-0.200562 8.81328 0.171598 10.7835 1.15306 12.4497C2.13452 14.1159 3.66128 15.3695 5.46047 15.9865C5.85983 16.0616 6.00621 15.8084 6.00621 15.5917C6.00621 15.3749 6.00621 14.7482 6.00621 14.0636C3.78364 14.5593 3.31323 13.0957 3.31323 13.0957C2.94942 12.1471 2.42671 11.896 2.42671 11.896C1.70119 11.3874 2.48102 11.3981 2.48102 11.3981C3.28391 11.4561 3.70628 12.2415 3.70628 12.2415C4.41926 13.497 5.57552 13.1343 6.03132 12.924C6.06674 12.5076 6.24709 12.1183 6.53938 11.8273C4.76426 11.6127 2.89715 10.9173 2.89715 7.77327C2.88686 6.95809 3.18172 6.16998 3.72093 5.57139C3.47672 4.8644 3.50436 4.08841 3.79826 3.40163C3.79826 3.40163 4.46943 3.18701 5.99574 4.2429C7.30617 3.87376 8.68931 3.87376 9.99974 4.2429C11.524 3.18057 12.193 3.40163 12.193 3.40163C12.4882 4.08798 12.5166 4.86423 12.2725 5.57139C12.8118 6.16972 13.1061 6.95818 13.0941 7.77327C13.0941 10.9238 11.2249 11.617 9.44563 11.8209C9.73208 12.0763 9.98718 12.5742 9.98718 13.3404C9.98718 14.437 9.98718 15.3212 9.98718 15.5917C9.98718 15.8063 10.1314 16.0659 10.535 15.9844C12.3355 15.3685 13.8638 14.115 14.8462 12.4482C15.8286 10.7813 16.2009 8.81009 15.8966 6.88721C15.5922 4.96432 14.6311 3.21536 13.1852 1.95347C11.7392 0.691575 9.90298 -0.000904397 8.00507 8.86489e-07H7.98623Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#" target="_blank" class="cs-center cs-color3">
                                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.8194 2.64177H8V0.194847C7.30745 0.0755463 6.6076 0.0104213 5.90608 0C3.76786 0 2.37343 1.3769 2.37343 3.86767V6.05804H0V8.93201H2.36884V16H5.2921V8.93201H7.47003L7.88545 6.05804H5.28904V4.19403C5.29668 3.40816 5.65865 2.64177 6.8194 2.64177Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#" target="_blank" class="cs-center cs-color4">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.319909 5.44236L3.65951 5.38763L3.83385 16.276L0.494274 16.3328L0.319909 5.44236ZM1.90356 0.00028458C2.28658 -0.00632752 2.66294 0.102414 2.985 0.312783C3.30707 0.523153 3.56037 0.825679 3.71289 1.1821C3.86542 1.53852 3.9103 1.93284 3.84185 2.31514C3.77341 2.69744 3.59474 3.05054 3.32841 3.32981C3.06208 3.60908 2.72006 3.80197 2.34563 3.88406C1.97121 3.96615 1.5812 3.93375 1.22493 3.79098C0.868658 3.6482 0.562148 3.40144 0.344156 3.08194C0.126164 2.76244 0.00650348 2.38456 0.00028934 1.99606C-0.00410782 1.73821 0.0416518 1.48201 0.134953 1.24211C0.228253 1.00221 0.367265 0.783325 0.544035 0.597964C0.720806 0.412604 0.93185 0.26441 1.16513 0.161854C1.39842 0.0592974 1.64934 0.00439659 1.90356 0.00028458Z"
                                            fill="currentColor" />
                                        <path
                                            d="M5.75391 5.35233L8.95236 5.2997L8.97726 6.78813H9.02292C9.45256 5.92498 10.5277 5.00288 12.1529 4.97762C15.5298 4.92078 16.1898 7.16707 16.2376 10.0997L16.333 16.0723L12.9976 16.127L12.9125 10.8302C12.8918 9.56706 12.844 7.94392 11.1317 7.97128C9.41936 7.99865 9.1516 9.38179 9.17443 10.8028L9.26161 16.1881L5.92825 16.2428L5.75391 5.35233Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cs-height_100 cs-height_lg_70"></div>
            </div>
        </div>
    </div>
    <div class="cs-modal" data-modal="register">
        <div class="cs-close_overlay"></div>
        <div class="cs-modal_in">
            <div class="cs-modal_container cs-white_bg">
                <button class="cs-close_modal cs-center cs-primary_bg">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7071 1.70711C12.0976 1.31658 12.0976 0.683417 11.7071 0.292893C11.3166 -0.0976311 10.6834 -0.0976311 10.2929 0.292893L11.7071 1.70711ZM0.292893 10.2929C-0.0976311 10.6834 -0.0976311 11.3166 0.292893 11.7071C0.683417 12.0976 1.31658 12.0976 1.70711 11.7071L0.292893 10.2929ZM1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L1.70711 0.292893ZM10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L10.2929 11.7071ZM10.2929 0.292893L0.292893 10.2929L1.70711 11.7071L11.7071 1.70711L10.2929 0.292893ZM0.292893 1.70711L10.2929 11.7071L11.7071 10.2929L1.70711 0.292893L0.292893 1.70711Z"
                            fill="white" />
                    </svg>
                </button>
                <div class="cs-height_95 cs-height_lg_70"></div>
                <div class="cs-login">
                    <div class="cs-login_left">
                        <img src="landingpage/assets/img/retail-store.png" alt="Login Thumb"
                            data-pagespeed-url-hash="318227740"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                    </div>
                    <div class="cs-login_right">
                        <form class="cs-login_form">
                            <h2>Create your new account</h2>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                            <input type="text" class="cs-form_field cs-border_color" placeholder="Your Name" />
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <input type="text" class="cs-form_field cs-border_color"
                                placeholder="Email address" />
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <input type="password" class="cs-form_field cs-border_color" placeholder="Password" />
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <div class="cs-login_meta">
                                <div class="cs-check">
                                    <input type="checkbox" />
                                    <label>I agree to the terms of service</label>
                                </div>
                            </div>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <button class="cs-btn cs-size_md w-100">
                                <span>Register</span>
                            </button>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <p class="cs-m0">
                                Already have an account?
                                <span class="cs-text_btn cs-modal_btn" data-modal="login"><span>Login</span></span>
                            </p>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                            <div class="cs-or"><span>or</span></div>
                            <div class="cs-height_40 cs-height_lg_30"></div>
                            <div class="cs-social_btns cs-style2">
                                <a href="#" target="_blank" class="cs-center cs-color1">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.3187 8.34992C16.329 7.78817 16.2694 7.22728 16.1411 6.67969H8.31738V9.71004H12.9094C12.8229 10.2417 12.6273 10.7506 12.3343 11.206C12.0413 11.6614 11.657 12.0539 11.2047 12.3596V12.4629L13.6785 14.3399L13.8506 14.3562C15.4248 12.9335 16.3326 10.8362 16.3326 8.34992"
                                            fill="currentColor" />
                                        <path
                                            d="M8.3182 16.3333C10.567 16.3333 12.4577 15.6097 13.8375 14.3556L11.2055 12.359C10.3535 12.9194 9.34397 13.2048 8.3182 13.1751C7.26397 13.1691 6.23842 12.838 5.38719 12.2286C4.53597 11.6192 3.90232 10.7625 3.57621 9.78021H3.47904L0.905385 11.7306L0.87207 11.8231C1.56522 13.1759 2.62872 14.3132 3.94369 15.1077C5.25865 15.9023 6.77328 16.3228 8.3182 16.3224"
                                            fill="currentColor" />
                                        <path
                                            d="M3.58123 9.78285C3.39838 9.26292 3.30457 8.71693 3.3036 8.16701C3.30991 7.61843 3.40359 7.07419 3.58123 6.55392V6.4451L0.977035 4.46204L0.890987 4.50285C0.305173 5.64191 0 6.89966 0 8.17517C0 9.45068 0.305173 10.7084 0.890987 11.8475L3.59513 9.79643"
                                            fill="currentColor" />
                                        <path
                                            d="M8.3182 3.15874C9.51172 3.14118 10.6659 3.57696 11.5387 4.37471L13.893 2.12507C12.3845 0.738085 10.3868 -0.0232452 8.3182 0.000541035C6.77299 0.000338841 5.25817 0.421321 3.94318 1.21638C2.62818 2.01144 1.56484 3.14925 0.87207 4.50256L3.56509 6.55363C3.89512 5.57159 4.5313 4.71575 5.38401 4.10671C6.23672 3.49766 7.263 3.16608 8.3182 3.15874Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#" target="_blank" class="cs-center cs-color2">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.98623 8.86489e-07C6.08929 0.0017225 4.2548 0.695882 2.81063 1.95834C1.36645 3.2208 0.406756 4.9693 0.103097 6.89129C-0.200562 8.81328 0.171598 10.7835 1.15306 12.4497C2.13452 14.1159 3.66128 15.3695 5.46047 15.9865C5.85983 16.0616 6.00621 15.8084 6.00621 15.5917C6.00621 15.3749 6.00621 14.7482 6.00621 14.0636C3.78364 14.5593 3.31323 13.0957 3.31323 13.0957C2.94942 12.1471 2.42671 11.896 2.42671 11.896C1.70119 11.3874 2.48102 11.3981 2.48102 11.3981C3.28391 11.4561 3.70628 12.2415 3.70628 12.2415C4.41926 13.497 5.57552 13.1343 6.03132 12.924C6.06674 12.5076 6.24709 12.1183 6.53938 11.8273C4.76426 11.6127 2.89715 10.9173 2.89715 7.77327C2.88686 6.95809 3.18172 6.16998 3.72093 5.57139C3.47672 4.8644 3.50436 4.08841 3.79826 3.40163C3.79826 3.40163 4.46943 3.18701 5.99574 4.2429C7.30617 3.87376 8.68931 3.87376 9.99974 4.2429C11.524 3.18057 12.193 3.40163 12.193 3.40163C12.4882 4.08798 12.5166 4.86423 12.2725 5.57139C12.8118 6.16972 13.1061 6.95818 13.0941 7.77327C13.0941 10.9238 11.2249 11.617 9.44563 11.8209C9.73208 12.0763 9.98718 12.5742 9.98718 13.3404C9.98718 14.437 9.98718 15.3212 9.98718 15.5917C9.98718 15.8063 10.1314 16.0659 10.535 15.9844C12.3355 15.3685 13.8638 14.115 14.8462 12.4482C15.8286 10.7813 16.2009 8.81009 15.8966 6.88721C15.5922 4.96432 14.6311 3.21536 13.1852 1.95347C11.7392 0.691575 9.90298 -0.000904397 8.00507 8.86489e-07H7.98623Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#" target="_blank" class="cs-center cs-color3">
                                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.8194 2.64177H8V0.194847C7.30745 0.0755463 6.6076 0.0104213 5.90608 0C3.76786 0 2.37343 1.3769 2.37343 3.86767V6.05804H0V8.93201H2.36884V16H5.2921V8.93201H7.47003L7.88545 6.05804H5.28904V4.19403C5.29668 3.40816 5.65865 2.64177 6.8194 2.64177Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#" target="_blank" class="cs-center cs-color4">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.319909 5.44236L3.65951 5.38763L3.83385 16.276L0.494274 16.3328L0.319909 5.44236ZM1.90356 0.00028458C2.28658 -0.00632752 2.66294 0.102414 2.985 0.312783C3.30707 0.523153 3.56037 0.825679 3.71289 1.1821C3.86542 1.53852 3.9103 1.93284 3.84185 2.31514C3.77341 2.69744 3.59474 3.05054 3.32841 3.32981C3.06208 3.60908 2.72006 3.80197 2.34563 3.88406C1.97121 3.96615 1.5812 3.93375 1.22493 3.79098C0.868658 3.6482 0.562148 3.40144 0.344156 3.08194C0.126164 2.76244 0.00650348 2.38456 0.00028934 1.99606C-0.00410782 1.73821 0.0416518 1.48201 0.134953 1.24211C0.228253 1.00221 0.367265 0.783325 0.544035 0.597964C0.720806 0.412604 0.93185 0.26441 1.16513 0.161854C1.39842 0.0592974 1.64934 0.00439659 1.90356 0.00028458Z"
                                            fill="currentColor" />
                                        <path
                                            d="M5.75391 5.35233L8.95236 5.2997L8.97726 6.78813H9.02292C9.45256 5.92498 10.5277 5.00288 12.1529 4.97762C15.5298 4.92078 16.1898 7.16707 16.2376 10.0997L16.333 16.0723L12.9976 16.127L12.9125 10.8302C12.8918 9.56706 12.844 7.94392 11.1317 7.97128C9.41936 7.99865 9.1516 9.38179 9.17443 10.8028L9.26161 16.1881L5.92825 16.2428L5.75391 5.35233Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cs-height_100 cs-height_lg_70"></div>
            </div>
        </div>
    </div>
    <div class="cs-modal" data-modal="forgot">
        <div class="cs-close_overlay"></div>
        <div class="cs-modal_in">
            <div class="cs-modal_container cs-white_bg">
                <button class="cs-close_modal cs-center cs-primary_bg">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7071 1.70711C12.0976 1.31658 12.0976 0.683417 11.7071 0.292893C11.3166 -0.0976311 10.6834 -0.0976311 10.2929 0.292893L11.7071 1.70711ZM0.292893 10.2929C-0.0976311 10.6834 -0.0976311 11.3166 0.292893 11.7071C0.683417 12.0976 1.31658 12.0976 1.70711 11.7071L0.292893 10.2929ZM1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L1.70711 0.292893ZM10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L10.2929 11.7071ZM10.2929 0.292893L0.292893 10.2929L1.70711 11.7071L11.7071 1.70711L10.2929 0.292893ZM0.292893 1.70711L10.2929 11.7071L11.7071 10.2929L1.70711 0.292893L0.292893 1.70711Z"
                            fill="white" />
                    </svg>
                </button>
                <div class="cs-height_95 cs-height_lg_70"></div>
                <div class="cs-login">
                    <div class="cs-login_left">
                        <img src="landingpage/assets/img/about_img_1.png" alt="Login Thumb"
                            data-pagespeed-url-hash="3791996468"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                    </div>
                    <div class="cs-login_right">
                        <form class="cs-login_form">
                            <h2>Forgot your Password</h2>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                            <input type="text" class="cs-form_field cs-border_color"
                                placeholder="Email address" />
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <button class="cs-btn cs-size_md w-100">
                                <span>Send Me Email</span>
                            </button>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <p class="cs-m0">
                                Don't have an account?
                                <span class="cs-text_btn cs-modal_btn"
                                    data-modal="register"><span>Register</span></span>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="cs-height_100 cs-height_lg_70"></div>
            </div>
        </div>
    </div>
    <div class="cs-modal" data-modal="details">
        <div class="cs-close_overlay"></div>
        <div class="cs-modal_in">
            <div class="cs-modal_container cs-white_bg">
                <button class="cs-close_modal cs-center cs-primary_bg">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7071 1.70711C12.0976 1.31658 12.0976 0.683417 11.7071 0.292893C11.3166 -0.0976311 10.6834 -0.0976311 10.2929 0.292893L11.7071 1.70711ZM0.292893 10.2929C-0.0976311 10.6834 -0.0976311 11.3166 0.292893 11.7071C0.683417 12.0976 1.31658 12.0976 1.70711 11.7071L0.292893 10.2929ZM1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L1.70711 0.292893ZM10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L10.2929 11.7071ZM10.2929 0.292893L0.292893 10.2929L1.70711 11.7071L11.7071 1.70711L10.2929 0.292893ZM0.292893 1.70711L10.2929 11.7071L11.7071 10.2929L1.70711 0.292893L0.292893 1.70711Z"
                            fill="white" />
                    </svg>
                </button>
                <div class="cs-height_60 cs-height_lg_60"></div>
                <div class="cs-blog_details">
                    <ul class="cs-post_meta cs-mp0">
                        <li>
                            <span class="cs-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M313.6 304c-28.7 0-42.5 16-89.6 16c-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4c14.6 0 38.3 16 89.6 16c51.7 0 74.9-16 89.6-16c47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0S80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96s-96-43.1-96-96s43.1-96 96-96z" />
                                </svg>
                            </span>
                            admin
                        </li>
                        <li>
                            <span class="cs-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M152 64h144V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40h40c35.3 0 64 28.65 64 64v320c0 35.3-28.7 64-64 64H64c-35.35 0-64-28.7-64-64V128c0-35.35 28.65-64 64-64h40V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40zM48 448c0 8.8 7.16 16 16 16h320c8.8 0 16-7.2 16-16V192H48v256z" />
                                </svg>
                            </span>
                            12.09.2022
                        </li>
                    </ul>
                    <h2>
                        Point of sale software card of using a payroll software all for
                        your company!
                    </h2>
                    <img src="landingpage/assets/img/post_details_1.jpeg" alt="Details"
                        class="cs-radius_10 w-100" data-pagespeed-url-hash="1072613595"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);" />
                    <h3>How to used point of sale software card?</h3>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                        quae ventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                        fugit, consequuntur magni dolores eos qui ratione voluptatem sequi
                        nesciuntBut in certain circumstances and owing to the claims.
                    </p>
                    <p>
                        Nor again is there anyone who loves or pursues or desires to
                        obtain pain of itself, because it is pain, but because
                        occasionally circumstances occ in which toil and pain can procure
                        him some great pleasure. To take a trivial example, which of us
                        ever undertakes laborious physical exercise, except to obtain some
                        advantage from it? But who has any right to find fault with a man
                        who chooses.
                    </p>
                    <div class="cs-height_10 cs-height_lg_10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/post_details_2.jpeg" alt="Details"
                                class="cs-radius_10 w-100" data-pagespeed-url-hash="997397582"
                                src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                        </div>
                        <div class="col-lg-6">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/post_details_3.jpeg" alt="Details"
                                class="cs-radius_10 w-100" data-pagespeed-url-hash="922181569"
                                src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                        </div>
                    </div>
                    <p>
                        These cases are perfectly simple and easy to distinguish. In a
                        free hour, when our power of choice is untrammelled and when
                        nothing prevents our being able to do what we like best, every
                        pleasure is to be welcomed and every pain avoided. But in certain
                        circumstances and owing to the claims of duty or the obligations
                        of business it will frequently occur that pleasures have.
                    </p>
                    <div class="cs-height_10 cs-height_lg_10"></div>
                    <blockquote>
                        <svg width="33" height="23" viewBox="0 0 33 23" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.2387 0H0.955626C0.427792 0 0 0.411081 0 0.918297V12.7215C0 13.2287 0.427792 13.6398 0.955626 13.6398H6.14139V21.574C6.14139 22.081 6.56918 22.4923 7.09702 22.4923H10.168C10.5791 22.4923 10.9444 22.2393 11.0743 21.8643L14.145 13.0121C14.1776 12.9183 14.1943 12.8203 14.1943 12.7215V0.918297C14.1943 0.411081 13.7665 0 13.2387 0V0ZM12.283 12.5725L9.47911 20.6555H8.05264V12.7215C8.05264 12.2143 7.62485 11.8032 7.09702 11.8032H1.91125V1.83659H12.283V12.5725Z"
                                fill="black" />
                            <path
                                d="M31.6635 0H19.3804C18.8526 0 18.4248 0.411081 18.4248 0.918297V12.7215C18.4248 13.2287 18.8526 13.6398 19.3804 13.6398H24.5664V21.574C24.5664 22.081 24.9942 22.4923 25.5221 22.4923H28.5928C29.0041 22.4923 29.3692 22.2393 29.4994 21.8643L32.5701 13.0121C32.6024 12.9183 32.6191 12.8203 32.6191 12.7215V0.918297C32.6191 0.411081 32.1913 0 31.6635 0V0ZM30.7078 12.5725L27.9039 20.6555H26.4777V12.7215C26.4777 12.2143 26.0497 11.8032 25.5221 11.8032H20.3361V1.83659H30.7078V12.5725Z"
                                fill="black" />
                        </svg>
                        <p>
                            The best point of sale software used good and very fast .Time
                            saving or effective software Pos ut omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem aperiam,
                            illo inventore veritatis et quasi architecto beatae vitae dicta
                            sunt explicabo.
                        </p>
                        <small>Mixon Max</small>
                    </blockquote>
                    <h3>Cost Effective and Good software</h3>
                    <p>
                        Many desktop publishing packages and web page editors now use
                        Lorem Ipsum as their default model text, and a search for 'lorem
                        ipsum' will uncover many web sites still in their infancy. Various
                        versions have evolved over the years, sometimes by accident,
                        sometimes on purpose to the claims of duty or the obligations of
                        business it will frequently occur that pleasures have.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Our Approach</h3>
                            <p>
                                Pos cost effective unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem quae ab illo
                                inventore veritatis et quasi
                            </p>
                            <ul>
                                <li>Eagy to used and time saving</li>
                                <li>Effective cast pament</li>
                                <li>High speed process</li>
                                <li>Customer data saved</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <img data-pagespeed-lazy-src="landingpage/assets/img/post_details_4.jpeg" alt="Details"
                                class="cs-radius_10 w-100" data-pagespeed-url-hash="846965556"
                                src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                        </div>
                    </div>
                </div>
                <div id="comments" class="comments-area">
                    <div class="cs-comment_wrapper">
                        <h2 class="comments-title">Comments (3)</h2>
                        <ol class="comment-list">
                            <li>
                                <div class="comment-body">
                                    <div class="comment-author">
                                        <img alt="Avatar"
                                            data-pagespeed-lazy-src="landingpage/assets/img/avatar_4.png"
                                            class="avatar" data-pagespeed-url-hash="294463707"
                                            src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                        <cite class="fn"><a href="#">Menila</a></cite>
                                    </div>
                                    <div class="comment-meta"><a href="#">20 Apr, 2020</a></div>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem accusantium doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et
                                        quasi architecto beatae vitae dicta sunt but in certain
                                        circumstances.
                                    </p>
                                    <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                <ol class="children">
                                    <li>
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <img alt="Avatar"
                                                    data-pagespeed-lazy-src="landingpage/assets/img/avatar_5.png"
                                                    class="avatar" data-pagespeed-url-hash="588963628"
                                                    src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                                <cite class="fn"><a href="#">Karla Swit</a></cite>
                                            </div>
                                            <div class="comment-meta">
                                                <a href="#">9 May, 2020</a>
                                            </div>
                                            <p>
                                                YSed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium doloremque laudantium, totam
                                                rem aperiam, eaque ipsa quae ab illo inventore
                                                veritatis et quasi architecto beatae vitae dicta sunt
                                                but in certain circumstances.
                                            </p>
                                            <div class="reply"><a href="#">Reply</a></div>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <div class="comment-body">
                                    <div class="comment-author">
                                        <img alt="Avatar"
                                            data-pagespeed-lazy-src="landingpage/assets/img/avatar_6.png"
                                            class="avatar" data-pagespeed-url-hash="883463549"
                                            src="/pagespeed_static/1.JiBnMqyl6S.gif"
                                            onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                                            onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" />
                                        <cite class="fn"><a href="#">George Steven</a></cite>
                                    </div>
                                    <div class="comment-meta">
                                        <a href="#">November 24, 2020</a>
                                    </div>
                                    <p>Great work</p>
                                    <div class="reply"><a href="#">Reply</a></div>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <div class="comment-respond">
                        <h3 class="comment-reply-title">Write Your Comment</h3>
                        <form id="commentform">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="cs-form_field cs-border_color"
                                        placeholder="Name" />
                                    <div class="cs-height_20 cs-height_lg_20"></div>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="cs-form_field cs-border_color"
                                        placeholder="Email" />
                                    <div class="cs-height_20 cs-height_lg_20"></div>
                                </div>
                                <div class="col-lg-12">
                                    <textarea cols="30" rows="10" class="cs-form_field cs-border_color" placeholder="Write your comment"></textarea>
                                    <div class="cs-height_20 cs-height_lg_20"></div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="cs-btn cs-size_md">
                                        <span>Post Comment</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cs-height_70 cs-height_lg_60"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" data-pagespeed-no-defer>
        pagespeed.lazyLoadImages.overrideAttributeFunctions();
    </script>
    <script src="{{ asset('landingpage/assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/plugins/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/plugins/jquery.counter.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/main.js') }}"></script>

</body>

</html>
