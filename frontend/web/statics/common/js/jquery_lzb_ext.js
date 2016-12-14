(function (g) {
    if (/1\.(0|1|2)\.(0|1|2)/.test(g.fn.jquery) || /^1.1/.test(g.fn.jquery)) {
        alert("blockUI requires jQuery v1.2.3 or later!  You are using v" + g.fn.jquery);
        return;
    }
    g.fn._fadeIn = g.fn.fadeIn;
    var i = document.documentMode || 0;
    //ar d = g.browser.msie && ((g.browser.version < 8 && !i) || i < 8);
    //var e = g.browser.msie && /MSIE 6.0/.test(navigator.userAgent) && !i;
    g.blockUI = function (o) {
        c(window, o);
    };
    g.unblockUI = function (o) {
        h(window, o);
    };
    g.growlUI = function (s, q, r, o) {
        var p = g('<div class="growlUI"></div>');
        if (s) {
            p.append("<h1>" + s + "</h1>");
        }
        if (q) {
            p.append("<h2>" + q + "</h2>");
        }
        if (r == undefined) {
            r = 3000;
        }
        g.blockUI({
            message: p,
            fadeIn: 700,
            fadeOut: 1000,
            centerY: false,
            timeout: r,
            showOverlay: false,
            onUnblock: o,
            css: g.blockUI.defaults.growlCSS
        })
    };
    g.fn.block = function (o) {
        return this.unblock({
            fadeOut: 0
        }).each(function () {
            if (g.css(this, "position") == "static") {
                this.style.position = "relative"
            }
            if (g.browser.msie) {
                this.style.zoom = 1
            }
            c(this, o);
        })
    };
    g.fn.unblock = function (o) {
        return this.each(function () {
            h(this, o)
        })
    };
    g.blockUI.version = 2.26;
    g.blockUI.defaults = {
        message: "<h1>Please wait...</h1>",
        title: null,
        draggable: true,
        theme: false,
        css: {
            padding: 0,
            margin: 0,
            width: "30%",
            top: "40%",
            left: "35%",
            textAlign: "center",
            color: "#000",
            border: "3px solid #aaa",
            backgroundColor: "#fff",
            cursor: "pointer"
        },
        themedCSS: {
            width: "30%",
            top: "40%",
            left: "35%"
        },
        overlayCSS: {
            opacity: 0,
            cursor: "pointer"
        },
        growlCSS: {
            width: "350px",
            top: "10px",
            left: "",
            right: "10px",
            border: "none",
            padding: "5px",
            opacity: 0.6,
            cursor: "default",
            color: "#fff",
            backgroundColor: "#000",
            "-webkit-border-radius": "10px",
            "-moz-border-radius": "10px"
        },
        iframeSrc: /^https/i.test(window.location.href || "") ? "javascript:false" : "about:blank",
        forceIframe: false,
        baseZ: 1000,
        centerX: true,
        centerY: true,
        allowBodyStretch: true,
        bindEvents: true,
        constrainTabKey: true,
        fadeIn: 200,
        fadeOut: 400,
        timeout: 0,
        showOverlay: true,
        focusInput: true,
        applyPlatformOpacityRules: true,
        onUnblock: null,
        quirksmodeOffsetHack: 4
    };
    var b = null;
    var f = [];
    function c(o, B) {
        var v = (o == window);
        var r = B && B.message !== undefined ? B.message : undefined;
        B = g.extend({}, g.blockUI.defaults, B || {});
        B.overlayCSS = g.extend({}, g.blockUI.defaults.overlayCSS, B.overlayCSS || {});
        var x = g.extend({}, g.blockUI.defaults.css, B.css || {});
        var I = g.extend({}, g.blockUI.defaults.themedCSS, B.themedCSS || {});
        r = r === undefined ? B.message : r;
        if (v && b) {
            h(window, {
                fadeOut: 0
            });
        }
        if (r && typeof r != "string" && (r.parentNode || r.jquery)) {
            var D = r.jquery ? r[0] : r;
            var J = {};
            g(o).data("blockUI.history", J);
            J.el = D;
            J.parent = D.parentNode;
            J.display = D.style.display;
            J.position = D.style.position;
            if (J.parent) {
                J.parent.removeChild(D);
            }
        }
        var w = B.baseZ;
        var H = (g.browser.msie || B.forceIframe) ? g('<iframe class="blockUI" style="z-index:' + (w++) + ';display:none;border:none;margin:0;padding:0;position:absolute;width:100%;height:100%;top:0;left:0" src="' + B.iframeSrc + '"></iframe>') : g('<div class="blockUI" style="display:none"></div>');
        var G = g('<div class="blockUI blockOverlay" style="z-index:' + (w++) + ';display:none;border:none;margin:0;padding:0;width:100%;height:100%;top:0;left:0"></div>');
        var F;
        if (B.theme && v) {
            var C = '<div class="blockUI blockMsg blockPage ui-dialog ui-widget ui-corner-all" style="z-index:' + w + ';display:none;position:fixed"><div class="ui-widget-header ui-dialog-titlebar blockTitle">' + (B.title || "&nbsp;") + '</div><div class="ui-widget-content ui-dialog-content"></div></div>';
            F = g(C);
        } else {
            F = v ? g('<div class="blockUI blockMsg blockPage" style="z-index:' + w + ';display:none;position:fixed"></div>') : g('<div class="blockUI blockMsg blockElement" style="z-index:' + w + ';display:none;position:absolute"></div>');
        }
        if (r) {
            if (B.theme) {
                F.css(I);
                F.addClass("ui-widget-content");
            } else {
                F.css(x);
            }
        }
        if (!B.applyPlatformOpacityRules || !(g.browser.mozilla && /Linux/.test(navigator.platform))) {
            G.css(B.overlayCSS);
        }
        G.css("position", v ? "fixed" : "absolute");
        if (g.browser.msie || B.forceIframe) {
            H.css("opacity", 0);
        }
        g([H[0], G[0], F[0]]).appendTo(v ? "body" : o);
        if (B.theme && B.draggable && g.fn.draggable) {
            F.draggable({
                handle: ".ui-dialog-titlebar",
                cancel: "li"
            });
        }
        var q = d && (!g.boxModel || g("object,embed", v ? null : o).length > 0);
        if (e || q) {
            if (v && B.allowBodyStretch && g.boxModel) {
                g("html,body").css("height", "100%");
            }
            if ((e || !g.boxModel) && !v) {
                var A = l(o, "borderTopWidth"),
                        E = l(o, "borderLeftWidth");
                var u = A ? "(0 - " + A + ")" : 0;
                var y = E ? "(0 - " + E + ")" : 0;
            }
            g.each([H, G, F], function (t, M) {
                var z = M[0].style;
                z.position = "absolute";
                if (t < 2) {
                    v ? z.setExpression("height", "Math.max(document.body.scrollHeight, document.body.offsetHeight) - (jQuery.boxModel?0:" + B.quirksmodeOffsetHack + ') + "px"') : z.setExpression("height", 'this.parentNode.offsetHeight + "px"');
                    v ? z.setExpression("width", 'jQuery.boxModel && document.documentElement.clientWidth || document.body.clientWidth + "px"') : z.setExpression("width", 'this.parentNode.offsetWidth + "px"');
                    if (y) {
                        z.setExpression("left", y);
                    }
                    if (u) {
                        z.setExpression("top", u);
                    }
                } else {
                    if (B.centerY) {
                        if (v) {
                            z.setExpression("top", '(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (blah = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"');
                        }
                        z.marginTop = 0;
                    } else {
                        if (!B.centerY && v) {
                            var K = (B.css && B.css.top) ? parseInt(B.css.top) : 0;
                            var L = "((document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + " + K + ') + "px"';
                            z.setExpression("top", L);
                        }
                    }
                }
            });
        }
        if (r) {
            if (B.theme) {
                F.find(".ui-widget-content").append(r);
            } else {
                F.append(r);
            }
            if (r.jquery || r.nodeType) {
                g(r).show();
            }
        }
        if ((g.browser.msie || B.forceIframe) && B.showOverlay) {
            H.show();
        }
        if (B.fadeIn) {
            if (B.showOverlay) {
                G._fadeIn(B.fadeIn);
            }
            if (r) {
                F.fadeIn(B.fadeIn);
            }
        } else {
            if (B.showOverlay) {
                G.show();
            }
            if (r) {
                F.show();
            }
        }
        k(1, o, B);
        if (v) {
            b = F[0];
            f = g(":input:enabled:visible", b);
            if (B.focusInput) {
                setTimeout(n, 20)
            }
        } else {
            a(F[0], B.centerX, B.centerY)
        }
        if (B.timeout) {
            var p = setTimeout(function () {
                v ? g.unblockUI(B) : g(o).unblock(B)
            }, B.timeout);
            g(o).data("blockUI.timeout", p)
        }
    }
    function h(r, s) {
        var q = (r == window);
        var p = g(r);
        var t = p.data("blockUI.history");
        var u = p.data("blockUI.timeout");
        if (u) {
            clearTimeout(u);
            p.removeData("blockUI.timeout");
        }
        s = g.extend({}, g.blockUI.defaults, s || {});
        k(0, r, s);
        var o;
        if (q) {
            o = g("body").children().filter(".blockUI").add("body > .blockUI")
        } else {
            o = g(".blockUI", r)
        }
        if (q) {
            b = f = null
        }
        if (s.fadeOut) {
            o.fadeOut(s.fadeOut);
            setTimeout(function () {
                j(o, t, s, r)
            }, s.fadeOut)
        } else {
            j(o, t, s, r)
        }
    }
    function j(o, r, q, p) {
        o.each(function (s, t) {
            if (this.parentNode) {
                this.parentNode.removeChild(this)
            }
        });
        if (r && r.el) {
            r.el.style.display = r.display;
            r.el.style.position = r.position;
            if (r.parent) {
                r.parent.appendChild(r.el)
            }
            g(r.el).removeData("blockUI.history")
        }
        if (typeof q.onUnblock == "function") {
            q.onUnblock(p, q)
        }
    }
    function k(o, s, t) {
        var r = s == window,
                q = g(s);
        if (!o && (r && !b || !r && !q.data("blockUI.isBlocked"))) {
            return;
        }
        if (!r) {
            q.data("blockUI.isBlocked", o)
        }
        if (!t.bindEvents || (o && !t.showOverlay)) {
            return;
        }
        var p = "mousedown mouseup keydown keypress";
        o ? g(document).bind(p, t, m) : g(document).unbind(p, m)
    }
    function m(r) {
        if (r.keyCode && r.keyCode == 9) {
            if (b && r.data.constrainTabKey) {
                var q = f;
                var p = !r.shiftKey && r.target == q[q.length - 1];
                var o = r.shiftKey && r.target == q[0];
                if (p || o) {
                    setTimeout(function () {
                        n(o)
                    }, 10);
                    return false
                }
            }
        }
        if (g(r.target).parents("div.blockMsg").length > 0) {
            return true
        }
        return g(r.target).parents().children().filter("div.blockUI").length == 0
    }
    function n(o) {
        if (!f) {
            return;
        }
        var p = f[o === true ? f.length - 1 : 0];
        if (p) {
            p.focus();
        }
    }
    function a(v, o, z) {
        var w = v.parentNode,
                u = v.style;
        var q = ((w.offsetWidth - v.offsetWidth) / 2) - l(w, "borderLeftWidth");
        var r = ((w.offsetHeight - v.offsetHeight) / 2) - l(w, "borderTopWidth");
        if (o) {
            u.left = q > 0 ? (q + "px") : "0";
        }
        if (z) {
            u.top = r > 0 ? (r + "px") : "0";
        }
    }
    function l(o, q) {
        return parseInt(g.css(o, q)) || 0
    }
})(jQuery);