<!DOCTYPE html>
<html lang="en-US" data-bs-theme="light">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <title>Nuvareex &#8211; @yield('interfaceTitle')</title>
        <meta name="robots" content="max-image-preview:large" />
        <style>
            img:is([sizes="auto" i], [sizes^="auto," i]) {
                contain-intrinsic-size: 3000px 1500px;
            }
        </style>
        <link rel="alternate" type="application/rss+xml" title="Nuvareex &raquo; Feed" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/feed/index.html" />
        <link rel="alternate" type="application/rss+xml" title="Nuvareex &raquo; Comments Feed" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/comments/feed/index.html" />
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/",
                ext: ".png",
                svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/",
                svgExt: ".svg",
                source: { concatemoji: "https:\/\/bitrader.thetork.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.2" },
            };
            /*! This file is auto-generated */
            !(function (s, n) {
                var o, i, e;
                function c(e) {
                    try {
                        var t = { supportTests: e, timestamp: new Date().valueOf() };
                        sessionStorage.setItem(o, JSON.stringify(t));
                    } catch (e) {}
                }
                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                        a = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function (e, t) {
                        return e === a[t];
                    });
                }
                function u(e, t) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                    for (var n = e.getImageData(16, 16, 1, 1), a = 0; a < n.data.length; a++) if (0 !== n.data[a]) return !1;
                    return !0;
                }
                function f(e, t, n, a) {
                    switch (t) {
                        case "flag":
                            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")
                                ? !1
                                : !n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") &&
                                      !n(
                                          e,
                                          "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                          "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                      );
                        case "emoji":
                            return !a(e, "\ud83e\udedf");
                    }
                    return !1;
                }
                function g(e, t, n, a) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : s.createElement("canvas"),
                        o = r.getContext("2d", { willReadFrequently: !0 }),
                        i = ((o.textBaseline = "top"), (o.font = "600 32px Arial"), {});
                    return (
                        e.forEach(function (e) {
                            i[e] = t(o, e, n, a);
                        }),
                        i
                    );
                }
                function t(e) {
                    var t = s.createElement("script");
                    (t.src = e), (t.defer = !0), s.head.appendChild(t);
                }
                "undefined" != typeof Promise &&
                    ((o = "wpEmojiSettingsSupports"),
                    (i = ["flag", "emoji"]),
                    (n.supports = { everything: !0, everythingExceptFlag: !0 }),
                    (e = new Promise(function (e) {
                        s.addEventListener("DOMContentLoaded", e, { once: !0 });
                    })),
                    new Promise(function (t) {
                        var n = (function () {
                            try {
                                var e = JSON.parse(sessionStorage.getItem(o));
                                if ("object" == typeof e && "number" == typeof e.timestamp && new Date().valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests;
                            } catch (e) {}
                            return null;
                        })();
                        if (!n) {
                            if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)
                                try {
                                    var e = "postMessage(" + g.toString() + "(" + [JSON.stringify(i), f.toString(), p.toString(), u.toString()].join(",") + "));",
                                        a = new Blob([e], { type: "text/javascript" }),
                                        r = new Worker(URL.createObjectURL(a), { name: "wpTestEmojiSupports" });
                                    return void (r.onmessage = function (e) {
                                        c((n = e.data)), r.terminate(), t(n);
                                    });
                                } catch (e) {}
                            c((n = g(i, f, p, u)));
                        }
                        t(n);
                    })
                        .then(function (e) {
                            for (var t in e) (n.supports[t] = e[t]), (n.supports.everything = n.supports.everything && n.supports[t]), "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                            (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag),
                                (n.DOMReady = !1),
                                (n.readyCallback = function () {
                                    n.DOMReady = !0;
                                });
                        })
                        .then(function () {
                            return e;
                        })
                        .then(function () {
                            var e;
                            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
                        }));
            })((window, document), window._wpemojiSettings);
            /* ]]> */
        </script>
        <link rel="stylesheet" id="hfe-widgets-style-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontendb2da.css?ver=2.4.3" type="text/css" media="all" />
        <style id="wp-emoji-styles-inline-css" type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <style id="classic-theme-styles-inline-css" type="text/css">
            /*! This file is auto-generated */
            .wp-block-button__link {
                color: #fff;
                background-color: #32373c;
                border-radius: 9999px;
                box-shadow: none;
                text-decoration: none;
                padding: calc(0.667em + 2px) calc(1.333em + 2px);
                font-size: 1.125em;
            }
            .wp-block-file__button {
                background: #32373c;
                color: #fff;
                text-decoration: none;
            }
        </style>
        <style id="global-styles-inline-css" type="text/css">
            :root {
                --wp--preset--aspect-ratio--square: 1;
                --wp--preset--aspect-ratio--4-3: 4/3;
                --wp--preset--aspect-ratio--3-4: 3/4;
                --wp--preset--aspect-ratio--3-2: 3/2;
                --wp--preset--aspect-ratio--2-3: 2/3;
                --wp--preset--aspect-ratio--16-9: 16/9;
                --wp--preset--aspect-ratio--9-16: 9/16;
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            }
            :where(.is-layout-flex) {
                gap: 0.5em;
            }
            :where(.is-layout-grid) {
                gap: 0.5em;
            }
            body .is-layout-flex {
                display: flex;
            }
            .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }
            .is-layout-flex > :is(*, div) {
                margin: 0;
            }
            body .is-layout-grid {
                display: grid;
            }
            .is-layout-grid > :is(*, div) {
                margin: 0;
            }
            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }
            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }
            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }
            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }
            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }
            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }
            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }
            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }
            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }
            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }
            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }
            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }
            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }
            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }
            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }
            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }
            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }
            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }
            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }
            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }
            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }
            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }
            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }
            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }
            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }
            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }
            :root :where(.wp-block-pullquote) {
                font-size: 1.5em;
                line-height: 1.6;
            }
        </style>
            @yield('frontendBody')

            <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
                <div class="footer-width-fixer">
                    <div data-elementor-type="wp-post" data-elementor-id="367" class="elementor elementor-367">
                        <div class="elementor-element elementor-element-e7278ee e-flex e-con-boxed e-con e-parent px-4" data-id="e7278ee" data-element_type="container" data-settings='{"background_background":"classic"}'>
                            <div class="e-con-inner">
                                <div
                                    class="elementor-element elementor-element-ca3a5d8 elementor-widget__width-inherit elementor-absolute h-100 elementor-widget elementor-widget-bg-shapes"
                                    data-id="ca3a5d8"
                                    data-element_type="widget"
                                    data-settings='{"_position":"absolute"}'
                                    data-widget_type="bg-shapes.default"
                                >
                                    <div class="elementor-widget-container">
                                        <div class="footer__shape">
                                            <span class="footer__shape-item footer__shape-item--2">
                                                <span></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-bd984a0 e-con-full e-flex e-con e-child" data-id="bd984a0" data-element_type="container">
                                    <div class="elementor-element elementor-element-455b42f e-con-full e-flex e-con e-child" data-id="455b42f" data-element_type="container">
                                        <div
                                            class="elementor-element elementor-element-1e70553 elementor-widget__width-initial elementor-widget elementor-widget-site-logo"
                                            data-id="1e70553"
                                            data-element_type="widget"
                                            data-settings='{"align":"left","width":{"unit":"px","size":"","sizes":[]},"width_tablet":{"unit":"px","size":"","sizes":[]},"width_mobile":{"unit":"px","size":"","sizes":[]},"space":{"unit":"%","size":"","sizes":[]},"space_tablet":{"unit":"%","size":"","sizes":[]},"space_mobile":{"unit":"%","size":"","sizes":[]},"image_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"image_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"image_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_space":{"unit":"px","size":0,"sizes":[]},"caption_space_tablet":{"unit":"px","size":"","sizes":[]},"caption_space_mobile":{"unit":"px","size":"","sizes":[]}}'
                                            data-widget_type="site-logo.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="hfe-site-logo">
                                                    <a data-elementor-open-lightbox="" class="elementor-clickable" href="../index.html">
                                                        <div class="hfe-site-logo-set">
                                                            <div class="hfe-site-logo-container">
                                                                <img class="hfe-site-logo-img elementor-animation-" src="{{ asset('public/') }}/wp-content/uploads/2023/10/logo.png" alt="logo-dark" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-367b8d7 elementor-widget elementor-widget-heading" data-id="367b8d7" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">
                                                    Welcome to our trading site! We offer the best, most affordable products and services around. Shop now and start finding great deals!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b5d045a e-grid e-con-full e-con e-child" data-id="b5d045a" data-element_type="container">
                                            <div class="elementor-element elementor-element-7554086 elementor-widget elementor-widget-image" data-id="7554086" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="#">
                                                        <img
                                                            width="100"
                                                            height="36"
                                                            src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/App-store-3.png"
                                                            class="attachment-full size-full wp-image-1200"
                                                            alt=""
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-596b301 elementor-widget elementor-widget-image" data-id="596b301" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="#">
                                                        <img
                                                            width="100"
                                                            height="36"
                                                            src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/Google-play-store-2.png"
                                                            class="attachment-full size-full wp-image-1201"
                                                            alt=""
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7c023eb e-con-full ms-auto e-flex e-con e-child" data-id="7c023eb" data-element_type="container">
                                        <div class="elementor-element elementor-element-ec42b89 elementor-widget elementor-widget-heading" data-id="ec42b89" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">Quick links</h5>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-55bef3a elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="55bef3a"
                                            data-element_type="widget"
                                            data-widget_type="icon-list.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <a href="{{ asset('public/novareex/bitrader.thetork.com/') }}/about-us/index.html">
                                                            <span class="elementor-icon-list-text">About Us</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Teams</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="{{ asset('public/novareex/bitrader.thetork.com/') }}/our-services/index.html">
                                                            <span class="elementor-icon-list-text">Services</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Features</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-fadd85c e-con-full e-flex e-con e-child" data-id="fadd85c" data-element_type="container">
                                        <div class="elementor-element elementor-element-66a2b33 elementor-widget elementor-widget-heading" data-id="66a2b33" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">Support</h5>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-5a4d818 elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="5a4d818"
                                            data-element_type="widget"
                                            data-widget_type="icon-list.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Terms & Conditions</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Privacy Policy</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">FAQs</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Support Center</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7d2bbdd e-con-full e-flex e-con e-child" data-id="7d2bbdd" data-element_type="container">
                                        <div class="elementor-element elementor-element-06c894c elementor-widget elementor-widget-heading" data-id="06c894c" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h5 class="elementor-heading-title elementor-size-default">Company</h5>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-ce52651 elementor-list-item-link-inline elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"
                                            data-id="ce52651"
                                            data-element_type="widget"
                                            data-widget_type="icon-list.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Careers</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Updates</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Job</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <a href="#">
                                                            <span class="elementor-icon-list-text">Announce</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-39c3f15 e-con-full e-flex e-con e-child" data-id="39c3f15" data-element_type="container">
                                    <div class="elementor-element elementor-element-c35f4f8 elementor-widget elementor-widget-heading" data-id="c35f4f8" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">© 2024 All Rights Reserved By Thetork</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9b0d4fd elementor-widget elementor-widget-sociallist" data-id="9b0d4fd" data-element_type="widget" data-widget_type="sociallist.default">
                                        <div class="elementor-widget-container">
                                            <ul class="social list-wrap">
                                                <li class="social__item footer">
                                                    <a href="#" class="social__link social__link--style22">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fab-facebook-f" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                                            ></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="social__item footer">
                                                    <a href="#" class="social__link social__link--style22">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                                            ></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="social__item footer">
                                                    <a href="#" class="social__link social__link--style22">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fab-linkedin-in" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                                                            ></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="social__item footer">
                                                    <a href="#" class="social__link social__link--style22">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
                                                            ></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="social__item footer">
                                                    <a href="#" class="social__link social__link--style22">
                                                        <svg aria-hidden="true" class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                                            ></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-1ceb9e5 elementor-widget__width-auto elementor-absolute footer__shape-item--1 elementor-widget elementor-widget-image"
                                    data-id="1ceb9e5"
                                    data-element_type="widget"
                                    data-settings='{"_position":"absolute"}'
                                    data-widget_type="image.default"
                                >
                                    <div class="elementor-widget-container">
                                        <img width="81" height="40" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/footer_shape-2.png" class="attachment-full size-full wp-image-419" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            
            <!-- Page cached by LiteSpeed Cache 7.2 on 2025-07-15 23:55:20 -->
        </main>

            <script type="speculationrules">
                {"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/bitrader\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
            </script>
            <script>
                (function () {
                    function maybePrefixUrlField() {
                        const value = this.value.trim();
                        if (value !== "" && value.indexOf("http") !== 0) {
                            this.value = "http://" + value;
                        }
                    }

                    const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
                    for (let j = 0; j < urlFields.length; j++) {
                        urlFields[j].addEventListener("blur", maybePrefixUrlField);
                    }
                })();
            </script>
            <div id="woosw_wishlist" class="woosw-popup woosw-popup-center"></div>
            <script type="text/javascript">
                jQuery(function ($) {
                    if (!String.prototype.getDecimals) {
                        String.prototype.getDecimals = function () {
                            var num = this,
                                match = ("" + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                            if (!match) {
                                return 0;
                            }
                            return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
                        };
                    }
                    // Quantity "plus" and "minus" buttons
                    $(document.body).on("click", ".tp-cart-plus, .tp-cart-minus", function () {
                        var $qty = $(this).closest(".quantity").find(".qty"),
                            currentVal = parseFloat($qty.val()),
                            max = parseFloat($qty.attr("max")),
                            min = parseFloat($qty.attr("min")),
                            step = $qty.attr("step");

                        // Format values
                        if (!currentVal || currentVal === "" || currentVal === "NaN") currentVal = 0;
                        if (max === "" || max === "NaN") max = "";
                        if (min === "" || min === "NaN") min = 0;
                        if (step === "any" || step === "" || step === undefined || parseFloat(step) === "NaN") step = 1;

                        // Change the value
                        if ($(this).is(".tp-cart-plus")) {
                            if (max && currentVal >= max) {
                                $qty.val(max);
                            } else {
                                $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
                            }
                        } else {
                            if (min && currentVal <= min) {
                                $qty.val(min);
                            } else if (currentVal > 0) {
                                $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
                            }
                        }

                        // Trigger change event
                        $qty.trigger("change");
                    });
                });
            </script>
            <script>
                const lazyloadRunObserver = () => {
                    const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
                    const lazyloadBackgroundObserver = new IntersectionObserver(
                        (entries) => {
                            entries.forEach((entry) => {
                                if (entry.isIntersecting) {
                                    let lazyloadBackground = entry.target;
                                    if (lazyloadBackground) {
                                        lazyloadBackground.classList.add("e-lazyloaded");
                                    }
                                    lazyloadBackgroundObserver.unobserve(entry.target);
                                }
                            });
                        },
                        { rootMargin: "200px 0px 200px 0px" }
                    );
                    lazyloadBackgrounds.forEach((lazyloadBackground) => {
                        lazyloadBackgroundObserver.observe(lazyloadBackground);
                    });
                };
                const events = ["DOMContentLoaded", "elementor/lazyload/observe"];
                events.forEach((event) => {
                    document.addEventListener(event, lazyloadRunObserver);
                });
            </script>
            <script type="text/javascript">
                (function () {
                    var c = document.body.className;
                    c = c.replace(/woocommerce-no-js/, "woocommerce-js");
                    document.body.className = c;
                })();
            </script>
            <link rel="stylesheet" id="wc-blocks-style-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks392f.css?ver=wc-9.9.5" type="text/css" media="all" />
            <link rel="stylesheet" id="widget-icon-list-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/css/widget-icon-list.min415f.css?ver=3.30.0" type="text/css" media="all" />
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
            <script type="text/javascript" id="wp-i18n-js-after">
                /* <![CDATA[ */
                wp.i18n.setLocaleData({ "text direction\u0004ltr": ["ltr"] });
                /* ]]> */
            </script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/contact-form-7/includes/swv/js/index9b2d.js?ver=6.1" id="swv-js"></script>
            <script type="text/javascript" id="contact-form-7-js-before">
                /* <![CDATA[ */
                var wpcf7 = {
                    api: {
                        root: "https:\/\/bitrader.thetork.com\/wp-json\/",
                        namespace: "contact-form-7\/v1",
                    },
                    cached: 1,
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/contact-form-7/includes/js/index9b2d.js?ver=6.1" id="contact-form-7-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/bitrader-core/assets/js/hello-world6c2d.js?ver=6.8.2" id="genixcore-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/js/webpack.runtime.min415f.js?ver=3.30.0" id="elementor-webpack-runtime-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/js/frontend-modules.min415f.js?ver=3.30.0" id="elementor-frontend-modules-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js"></script>
            <script type="text/javascript" id="elementor-frontend-js-before">
                /* <![CDATA[ */
                var elementorFrontendConfig = {
                    environmentMode: { edit: false, wpPreview: false, isScriptDebug: false },
                    i18n: {
                        shareOnFacebook: "Share on Facebook",
                        shareOnTwitter: "Share on Twitter",
                        pinIt: "Pin it",
                        download: "Download",
                        downloadImage: "Download image",
                        fullscreen: "Fullscreen",
                        zoom: "Zoom",
                        share: "Share",
                        playVideo: "Play Video",
                        previous: "Previous",
                        next: "Next",
                        close: "Close",
                        a11yCarouselPrevSlideMessage: "Previous slide",
                        a11yCarouselNextSlideMessage: "Next slide",
                        a11yCarouselFirstSlideMessage: "This is the first slide",
                        a11yCarouselLastSlideMessage: "This is the last slide",
                        a11yCarouselPaginationBulletMessage: "Go to slide",
                    },
                    is_rtl: false,
                    breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
                    responsive: {
                        breakpoints: {
                            mobile: { label: "Mobile Portrait", value: 767, default_value: 767, direction: "max", is_enabled: true },
                            mobile_extra: { label: "Mobile Landscape", value: 880, default_value: 880, direction: "max", is_enabled: false },
                            tablet: { label: "Tablet Portrait", value: 1024, default_value: 1024, direction: "max", is_enabled: true },
                            tablet_extra: { label: "Tablet Landscape", value: 1200, default_value: 1200, direction: "max", is_enabled: false },
                            laptop: { label: "Laptop", value: 1366, default_value: 1366, direction: "max", is_enabled: false },
                            widescreen: { label: "Widescreen", value: 2400, default_value: 2400, direction: "min", is_enabled: false },
                        },
                        hasCustomBreakpoints: false,
                    },
                    version: "3.30.0",
                    is_static: false,
                    experimentalFeatures: {
                        e_font_icon_svg: true,
                        additional_custom_breakpoints: true,
                        container: true,
                        "nested-elements": true,
                        home_screen: true,
                        global_classes_should_enforce_capabilities: true,
                        "cloud-library": true,
                        e_opt_in_v4_page: true,
                    },
                    urls: {
                        assets: "https:\/\/bitrader.thetork.com\/wp-content\/plugins\/elementor\/assets\/",
                        ajaxurl: "https:\/\/bitrader.thetork.com\/wp-admin\/admin-ajax.php",
                        uploadUrl: "https:\/\/bitrader.thetork.com\/wp-content\/uploads",
                    },
                    nonces: { floatingButtonsClickTracking: "4024613c6f" },
                    swiperClass: "swiper",
                    settings: { page: [], editorPreferences: [] },
                    kit: {
                        active_breakpoints: ["viewport_mobile", "viewport_tablet"],
                        lightbox_enable_counter: "yes",
                        lightbox_enable_fullscreen: "yes",
                        lightbox_enable_zoom: "yes",
                        lightbox_enable_share: "yes",
                        lightbox_title_src: "title",
                        lightbox_description_src: "description",
                    },
                    post: { id: 1267, title: "Home%20Four%20%E2%80%93%20Nuvareex", excerpt: "", featuredImage: false },
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/js/frontend.min415f.js?ver=3.30.0" id="elementor-frontend-js"></script>
            <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
                /* <![CDATA[ */
                var wc_add_to_cart_variation_params = {
                    wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
                    i18n_no_matching_variations_text: "Sorry, no products matched your selection. Please choose a different combination.",
                    i18n_make_a_selection_text: "Please select some product options before adding this product to your cart.",
                    i18n_unavailable_text: "Sorry, this product is unavailable. Please choose a different combination.",
                    i18n_reset_alert_text: "Your selection has been reset. Please select some product options before adding this product to your cart.",
                };
                /* ]]> */
            </script>
            <script
                type="text/javascript"
                src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.mindaac.js?ver=9.9.5"
                id="wc-add-to-cart-variation-js"
                data-wp-strategy="defer"
            ></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.minae82.js?ver=4.2.0" id="slick-js"></script>
            <script
                type="text/javascript"
                src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.minae82.js?ver=4.2.0"
                id="perfect-scrollbar-js"
            ></script>
            <script
                type="text/javascript"
                src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.minae82.js?ver=4.2.0"
                id="magnific-popup-js"
            ></script>
            <script type="text/javascript" id="woosq-frontend-js-extra">
                /* <![CDATA[ */
                var woosq_vars = {
                    wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
                    nonce: "78571ab987",
                    view: "popup",
                    effect: "mfp-3d-unfold",
                    scrollbar: "yes",
                    auto_close: "yes",
                    hashchange: "no",
                    cart_redirect: "no",
                    cart_url: "https:\/\/bitrader.thetork.com\/cart\/",
                    close: "Close (Esc)",
                    next_prev: "yes",
                    next: "Next (Right arrow key)",
                    prev: "Previous (Left arrow key)",
                    thumbnails_effect: "no",
                    related_slick_params: '{"slidesToShow":2,"slidesToScroll":2,"dots":true,"arrows":false,"adaptiveHeight":true,"rtl":false}',
                    thumbnails_slick_params: '{"slidesToShow":1,"slidesToScroll":1,"dots":true,"arrows":true,"adaptiveHeight":false,"rtl":false}',
                    thumbnails_zoom_params: '{"duration":120,"magnify":1}',
                    quick_view: "0",
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/js/frontendae82.js?ver=4.2.0" id="woosq-frontend-js"></script>
            <script type="text/javascript" id="woosw-frontend-js-extra">
                /* <![CDATA[ */
                var woosw_vars = {
                    wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
                    nonce: "86328e4b36",
                    added_to_cart: "no",
                    auto_remove: "no",
                    page_myaccount: "yes",
                    menu_action: "open_page",
                    reload_count: "no",
                    perfect_scrollbar: "yes",
                    wishlist_url: "https:\/\/bitrader.thetork.com\/wishlist\/",
                    button_action: "list",
                    message_position: "right-top",
                    button_action_added: "popup",
                    empty_confirm: "This action cannot be undone. Are you sure?",
                    delete_confirm: "This action cannot be undone. Are you sure?",
                    copied_text: "Copied the wishlist link:",
                    menu_text: "Wishlist",
                    button_text: "Add to wishlist",
                    button_text_added: "Browse wishlist",
                    button_normal_icon: "woosw-icon-5",
                    button_added_icon: "woosw-icon-8",
                    button_loading_icon: "woosw-icon-4",
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-wishlist/assets/js/frontend972f.js?ver=5.0.1" id="woosw-frontend-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/js/bootstrap.min6c2d.js?ver=6.8.2" id="bootstrap-bundle-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/js/all.min6c2d.js?ver=6.8.2" id="font-awesome-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/js/swiper.min6c2d.js?ver=6.8.2" id="swiper-js-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/js/slick.min6c2d.js?ver=6.8.2" id="slick-min-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/js/aos6c2d.js?ver=6.8.2" id="aos-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/js/nice-select6c2d.js?ver=6.8.2" id="nice-select-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/js/fslightbox6c2d.js?ver=6.8.2" id="fslightbox-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/js/purecounter_vanilla6c2d.js?ver=6.8.2" id="purecounter-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0" id="imagesloaded-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/js/isotope.pkgd.min6c2d.js?ver=6.8.2" id="isotope-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/js/custom6c2d.js?ver=6.8.2" id="bitrader-custom-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/js/tork-elementor6c2d.js?ver=6.8.2" id="tork-elementor-js-js"></script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.mindaac.js?ver=9.9.5" id="sourcebuster-js-js"></script>
            <script type="text/javascript" id="wc-order-attribution-js-extra">
                /* <![CDATA[ */
                var wc_order_attribution = {
                    params: { lifetime: 1.0e-5, session: 30, base64: false, ajaxurl: "https:\/\/bitrader.thetork.com\/wp-admin\/admin-ajax.php", prefix: "wc_order_attribution_", allowTracking: true },
                    fields: {
                        source_type: "current.typ",
                        referrer: "current_add.rf",
                        utm_campaign: "current.cmp",
                        utm_source: "current.src",
                        utm_medium: "current.mdm",
                        utm_content: "current.cnt",
                        utm_id: "current.id",
                        utm_term: "current.trm",
                        utm_source_platform: "current.plt",
                        utm_creative_format: "current.fmt",
                        utm_marketing_tactic: "current.tct",
                        session_entry: "current_add.ep",
                        session_start_time: "current_add.fd",
                        session_pages: "session.pgs",
                        session_count: "udata.vst",
                        user_agent: "udata.uag",
                    },
                };
                /* ]]> */
            </script>
            <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.mindaac.js?ver=9.9.5" id="wc-order-attribution-js"></script>
            <script type="text/javascript" defer src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/mailchimp-for-wp/assets/js/forms00f2.js?ver=4.10.5" id="mc4wp-forms-api-js"></script>

            <!-- Mirrored from bitrader.thetork.com/home-four/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jul 2025 17:11:51 GMT -->

    </body>
</html>
