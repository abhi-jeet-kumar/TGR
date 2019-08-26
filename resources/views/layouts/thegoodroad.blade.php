<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>The Good Road Lifestyle</title>
        <link rel="icon" href="{{asset('Files/image/TGRtitlebar.ico')}}" type="image/x-icon" />
        <link rel="stylesheet" href="{{asset('Files/CSS/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{asset('Files/CSS/main.css')}}" />
        <link rel="stylesheet" href="{{asset('Files/CSS/buttonstyle.css')}}" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('Files/CSS/owl.carousel.min.css')}}" />
        <link rel="stylesheet" href="{{asset('Files/CSS/owl.theme.default.min.css')}}" />
        <link rel="stylesheet" href="{{asset('Files/CSS/navbar.css')}}" />
    </head>
    <body>
            @include('components.navbar')
            @yield('content')
            @include('components.brandingOwl')
            @include('components.the3s')
            @include('components.footer')
        <!-- jQuerry>popper.js>bootstrap.js -->
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script src="{{asset('Files/JS/cart.js')}}"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
        <script src="{{asset('Files/JS/main.js')}}"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="{{asset('Files/JS/owl.carousel.min.js')}}"></script>
        <script>
            $(document).ready(function() {
                $(".owl-carousel").owlCarousel({
                    margin: 10,
                    loop: true,
                    autoWidth: true,
                    items: 1,
                    margin: 10,
                    autoHeight: true,
                    items: 4,
                    autoplay: true,
                    autoplayTimeout: 1000,
                    autoplayHoverPause: true,
                    center: true
                });
            });
        </script>

        <!-- script for arrow toggle to jump to page-top -->
        <script type="text/javascript">
            var scrolltotop = {
                setting: { startline: 100, scrollto: 0, scrollduration: 1e3, fadeduration: [500, 100] },
                controlHTML: '<ion-icon name="arrow-round-up" style="color:#64ebea; width: 55px; height:55px"></ion-icon>',
                controlattrs: { offsetx: 5, offsety: 5 },
                anchorkeyword: "#top",
                state: { isvisible: !1, shouldvisible: !1 },
                scrollup: function() {
                    this.cssfixedsupport || this.$control.css({ opacity: 0 });
                    var t = isNaN(this.setting.scrollto) ? this.setting.scrollto : parseInt(this.setting.scrollto);
                    (t = "string" == typeof t && 1 == jQuery("#" + t).length ? jQuery("#" + t).offset().top : 0), this.$body.animate({ scrollTop: t }, this.setting.scrollduration);
                },
                keepfixed: function() {
                    var t = jQuery(window),
                        o = t.scrollLeft() + t.width() - this.$control.width() - this.controlattrs.offsetx,
                        s = t.scrollTop() + t.height() - this.$control.height() - this.controlattrs.offsety;
                    this.$control.css({ left: o + "px", top: s + "px" });
                },
                togglecontrol: function() {
                    var t = jQuery(window).scrollTop();
                    this.cssfixedsupport || this.keepfixed(),
                        (this.state.shouldvisible = t >= this.setting.startline ? !0 : !1),
                        this.state.shouldvisible && !this.state.isvisible
                            ? (this.$control.stop().animate({ opacity: 1 }, this.setting.fadeduration[0]), (this.state.isvisible = !0))
                            : 0 == this.state.shouldvisible && this.state.isvisible && (this.$control.stop().animate({ opacity: 0 }, this.setting.fadeduration[1]), (this.state.isvisible = !1));
                },
                init: function() {
                    jQuery(document).ready(function(t) {
                        var o = scrolltotop,
                            s = document.all;
                        (o.cssfixedsupport = !s || (s && "CSS1Compat" == document.compatMode && window.XMLHttpRequest)),
                            (o.$body = t(window.opera ? ("CSS1Compat" == document.compatMode ? "html" : "body") : "html,body")),
                            (o.$control = t('<div id="topcontrol">' + o.controlHTML + "</div>")
                                .css({ position: o.cssfixedsupport ? "fixed" : "absolute", bottom: o.controlattrs.offsety, right: o.controlattrs.offsetx, opacity: 0, cursor: "pointer" })
                                .attr({ title: "Scroll to Top" })
                                .click(function() {
                                    return o.scrollup(), !1;
                                })
                                .appendTo("body")),
                            document.all && !window.XMLHttpRequest && "" != o.$control.text() && o.$control.css({ width: o.$control.width() }),
                            o.togglecontrol(),
                            t('a[href="' + o.anchorkeyword + '"]').click(function() {
                                return o.scrollup(), !1;
                            }),
                            t(window).bind("scroll resize", function(t) {
                                o.togglecontrol();
                            });
                    });
                }
            };
            scrolltotop.init();
        </script>
    </body>
</html>
