<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assets App - @yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0') }}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">

</head>

<script nonce="1c329e95-6221-49a0-8b49-3208a55059d9">
    try {
        (function(w, d) {
            ! function(lD, lE, lF, lG) {
                lD[lF] = lD[lF] || {};
                lD[lF].executed = [];
                lD.zaraz = {
                    deferred: []
                    , listeners: []
                };
                lD.zaraz.q = [];
                lD.zaraz._f = function(lH) {
                    return async function() {
                        var lI = Array.prototype.slice.call(arguments);
                        lD.zaraz.q.push({
                            m: lH
                            , a: lI
                        })
                    }
                };
                for (const lJ of ["track", "set", "debug"]) lD.zaraz[lJ] = lD.zaraz._f(lJ);
                lD.zaraz.init = () => {
                    var lK = lE.getElementsByTagName(lG)[0]
                        , lL = lE.createElement(lG)
                        , lM = lE.getElementsByTagName("title")[0];
                    lM && (lD[lF].t = lE.getElementsByTagName("title")[0].text);
                    lD[lF].x = Math.random();
                    lD[lF].w = lD.screen.width;
                    lD[lF].h = lD.screen.height;
                    lD[lF].j = lD.innerHeight;
                    lD[lF].e = lD.innerWidth;
                    lD[lF].l = lD.location.href;
                    lD[lF].r = lE.referrer;
                    lD[lF].k = lD.screen.colorDepth;
                    lD[lF].n = lE.characterSet;
                    lD[lF].o = (new Date).getTimezoneOffset();
                    if (lD.dataLayer)
                        for (const lQ of Object.entries(Object.entries(dataLayer).reduce(((lR, lS) => ({
                                ...lR[1]
                                , ...lS[1]
                            })), {}))) zaraz.set(lQ[0], lQ[1], {
                            scope: "page"
                        });
                    lD[lF].q = [];
                    for (; lD.zaraz.q.length;) {
                        const lT = lD.zaraz.q.shift();
                        lD[lF].q.push(lT)
                    }
                    lL.defer = !0;
                    for (const lU of [localStorage, sessionStorage]) Object.keys(lU || {}).filter((lW => lW.startsWith("_zaraz_"))).forEach((lV => {
                        try {
                            lD[lF]["z_" + lV.slice(7)] = JSON.parse(lU.getItem(lV))
                        } catch {
                            lD[lF]["z_" + lV.slice(7)] = lU.getItem(lV)
                        }
                    }));
                    lL.referrerPolicy = "origin";
                    lL.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(lD[lF])));
                    lK.parentNode.insertBefore(lL, lK)
                };
                ["complete", "interactive"].includes(lE.readyState) ? zaraz.init() : lD.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document)
    } catch (e) {
        throw fetch("/cdn-cgi/zaraz/t"), e;
    };

</script>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('layouts.navbar')


        @include('layouts.sidebar')

        <div class="content-wrapper">
            @yield('content')
        </div>

        {{-- Footer --}}
        @include('layouts.footer')
        {{-- End Footer --}}

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>

    {{-- JS Plugins --}}
    @include('layouts.plugins')
    {{-- End JS Plugins --}}
</body>
</html>
