<!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This is deep minimized code which works independently. -->
    <script type="text/javascript">
        (function(g, h, c, j, d, k, l) { /*! Jssor */
            new(function() {});
            var e = {
                    xd: function(a) {
                        return -c.cos(a * c.PI) / 2 + .5
                    },
                    md: function(a) {
                        return a
                    },
                    sg: function(a) {
                        return a * a
                    },
                    Rc: function(a) {
                        return -a * (a - 2)
                    },
                    og: function(a) {
                        return (a *= 2) < 1 ? 1 / 2 * a * a : -1 / 2 * (--a * (a - 2) - 1)
                    },
                    ng: function(a) {
                        return a * a * a
                    },
                    lg: function(a) {
                        return (a -= 1) * a * a + 1
                    },
                    fg: function(a) {
                        return (a *= 2) < 1 ? 1 / 2 * a * a * a : 1 / 2 * ((a -= 2) * a * a + 2)
                    },
                    eg: function(a) {
                        return a * a * a * a
                    },
                    dg: function(a) {
                        return -((a -= 1) * a * a * a - 1)
                    },
                    ug: function(a) {
                        return (a *= 2) < 1 ? 1 / 2 * a * a * a * a : -1 / 2 * ((a -= 2) * a * a * a - 2)
                    },
                    vg: function(a) {
                        return a * a * a * a * a
                    },
                    gg: function(a) {
                        return (a -= 1) * a * a * a * a + 1
                    },
                    jg: function(a) {
                        return (a *= 2) < 1 ? 1 / 2 * a * a * a * a * a : 1 / 2 * ((a -= 2) * a * a * a * a + 2)
                    },
                    kg: function(a) {
                        return 1 - c.cos(c.PI / 2 * a)
                    },
                    qg: function(a) {
                        return c.sin(c.PI / 2 * a)
                    },
                    Zf: function(a) {
                        return -1 / 2 * (c.cos(c.PI * a) - 1)
                    },
                    Df: function(a) {
                        return a == 0 ? 0 : c.pow(2, 10 * (a - 1))
                    },
                    Ve: function(a) {
                        return a == 1 ? 1 : -c.pow(2, -10 * a) + 1
                    },
                    Se: function(a) {
                        return a == 0 || a == 1 ? a : (a *= 2) < 1 ? 1 / 2 * c.pow(2, 10 * (a - 1)) : 1 / 2 * (-c.pow(2, -10 * --a) + 2)
                    },
                    Pe: function(a) {
                        return -(c.sqrt(1 - a * a) - 1)
                    },
                    mf: function(a) {
                        return c.sqrt(1 - (a -= 1) * a)
                    },
                    gf: function(a) {
                        return (a *= 2) < 1 ? -1 / 2 * (c.sqrt(1 - a * a) - 1) : 1 / 2 * (c.sqrt(1 - (a -= 2) * a) + 1)
                    },
                    ff: function(a) {
                        if (!a || a == 1) return a;
                        var b = .3,
                            d = .075;
                        return -(c.pow(2, 10 * (a -= 1)) * c.sin((a - d) * 2 * c.PI / b))
                    },
                    bg: function(a) {
                        if (!a || a == 1) return a;
                        var b = .3,
                            d = .075;
                        return c.pow(2, -10 * a) * c.sin((a - d) * 2 * c.PI / b) + 1
                    },
                    Cf: function(a) {
                        if (!a || a == 1) return a;
                        var b = .45,
                            d = .1125;
                        return (a *= 2) < 1 ? -.5 * c.pow(2, 10 * (a -= 1)) * c.sin((a - d) * 2 * c.PI / b) : c.pow(2, -10 * (a -= 1)) * c.sin((a - d) * 2 * c.PI / b) * .5 + 1
                    },
                    af: function(a) {
                        var b = 1.70158;
                        return a * a * ((b + 1) * a - b)
                    },
                    bf: function(a) {
                        var b = 1.70158;
                        return (a -= 1) * a * ((b + 1) * a + b) + 1
                    },
                    cf: function(a) {
                        var b = 1.70158;
                        return (a *= 2) < 1 ? 1 / 2 * a * a * (((b *= 1.525) + 1) * a - b) : 1 / 2 * ((a -= 2) * a * (((b *= 1.525) + 1) * a + b) + 2)
                    },
                    gd: function(a) {
                        return 1 - e.hc(1 - a)
                    },
                    hc: function(a) {
                        return a < 1 / 2.75 ? 7.5625 * a * a : a < 2 / 2.75 ? 7.5625 * (a -= 1.5 / 2.75) * a + .75 : a < 2.5 / 2.75 ? 7.5625 * (a -= 2.25 / 2.75) * a + .9375 : 7.5625 * (a -= 2.625 / 2.75) * a + .984375
                    },
                    df: function(a) {
                        return a < 1 / 2 ? e.gd(a * 2) * .5 : e.hc(a * 2 - 1) * .5 + .5
                    },
                    ef: function() {
                        return 1 - c.abs(1)
                    },
                    hf: function(a) {
                        return 1 - c.cos(a * c.PI * 2)
                    },
                    jf: function(a) {
                        return c.sin(a * c.PI * 2)
                    },
                    kf: function(a) {
                        return 1 - ((a *= 2) < 1 ? (a = 1 - a) * a * a : (a -= 1) * a * a)
                    },
                    lf: function(a) {
                        return (a *= 2) < 1 ? a * a * a : (a = 2 - a) * a * a
                    }
                },
                f = {
                    of: e.xd,
                    Bf: e.md,
                    pf: e.sg,
                    qf: e.Rc,
                    rf: e.og,
                    sf: e.ng,
                    tf: e.lg,
                    uf: e.fg,
                    vf: e.eg,
                    wf: e.dg,
                    xf: e.ug,
                    yf: e.vg,
                    zf: e.gg,
                    Af: e.jg,
                    Ze: e.kg,
                    Ye: e.qg,
                    Wc: e.Zf,
                    Xe: e.Df,
                    We: e.Ve,
                    xe: e.Se,
                    ye: e.Pe,
                    ze: e.mf,
                    Ae: e.gf,
                    Be: e.ff,
                    Ce: e.bg,
                    De: e.Cf,
                    Ee: e.af,
                    we: e.bf,
                    Ge: e.cf,
                    He: e.gd,
                    Ie: e.hc,
                    Je: e.df,
                    Ke: e.ef,
                    Le: e.hf,
                    Me: e.jf,
                    Ne: e.kf,
                    Oe: e.lf
                };
            var b = new function() {
                var f = this,
                    Ab = /\S+/g,
                    F = 1,
                    yb = 2,
                    fb = 3,
                    eb = 4,
                    jb = 5,
                    G, r = 0,
                    i = 0,
                    s = 0,
                    X = 0,
                    z = 0,
                    I = navigator,
                    ob = I.appName,
                    o = I.userAgent,
                    p = parseFloat;

                function Ib() {
                    if (!G) {
                        G = {
                            cg: "ontouchstart" in g || "createTouch" in h
                        };
                        var a;
                        if (I.pointerEnabled || (a = I.msPointerEnabled)) G.od = a ? "msTouchAction" : "touchAction"
                    }
                    return G
                }

                function v(j) {
                    if (!r) {
                        r = -1;
                        if (ob == "Microsoft Internet Explorer" && !!g.attachEvent && !!g.ActiveXObject) {
                            var e = o.indexOf("MSIE");
                            r = F;
                            s = p(o.substring(e + 5, o.indexOf(";", e))); /*@cc_on X=@_jscript_version@*/ ;
                            i = h.documentMode || s
                        } else if (ob == "Netscape" && !!g.addEventListener) {
                            var d = o.indexOf("Firefox"),
                                b = o.indexOf("Safari"),
                                f = o.indexOf("Chrome"),
                                c = o.indexOf("AppleWebKit");
                            if (d >= 0) {
                                r = yb;
                                i = p(o.substring(d + 8))
                            } else if (b >= 0) {
                                var k = o.substring(0, b).lastIndexOf("/");
                                r = f >= 0 ? eb : fb;
                                i = p(o.substring(k + 1, b))
                            } else {
                                var a = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);
                                if (a) {
                                    r = F;
                                    i = s = p(a[1])
                                }
                            }
                            if (c >= 0) z = p(o.substring(c + 12))
                        } else {
                            var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);
                            if (a) {
                                r = jb;
                                i = p(a[2])
                            }
                        }
                    }
                    return j == r
                }

                function q() {
                    return v(F)
                }

                function Q() {
                    return q() && (i < 6 || h.compatMode == "BackCompat")
                }

                function db() {
                    return v(fb)
                }

                function ib() {
                    return v(jb)
                }

                function vb() {
                    return db() && z > 534 && z < 535
                }

                function J() {
                    v();
                    return z > 537 || i > 42 || r == F && i >= 11
                }

                function O() {
                    return q() && i < 9
                }

                function wb(a) {
                    var b, c;
                    return function(f) {
                        if (!b) {
                            b = d;
                            var e = a.substr(0, 1).toUpperCase() + a.substr(1);
                            n([a].concat(["WebKit", "ms", "Moz", "O", "webkit"]), function(g, d) {
                                var b = a;
                                if (d) b = g + e;
                                if (f.style[b] != l) return c = b
                            })
                        }
                        return c
                    }
                }

                function ub(b) {
                    var a;
                    return function(c) {
                        a = a || wb(b)(c) || b;
                        return a
                    }
                }
                var K = ub("transform");

                function nb(a) {
                    return {}.toString.call(a)
                }
                var kb = {};
                n(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function(a) {
                    kb["[object " + a + "]"] = a.toLowerCase()
                });

                function n(b, d) {
                    var a, c;
                    if (nb(b) == "[object Array]") {
                        for (a = 0; a < b.length; a++)
                            if (c = d(b[a], a, b)) return c
                    } else
                        for (a in b)
                            if (c = d(b[a], a, b)) return c
                }

                function C(a) {
                    return a == j ? String(a) : kb[nb(a)] || "object"
                }

                function lb(a) {
                    for (var b in a) return d
                }

                function A(a) {
                    try {
                        return C(a) == "object" && !a.nodeType && a != a.window && (!a.constructor || {}.hasOwnProperty.call(a.constructor.prototype, "isPrototypeOf"))
                    } catch (b) {}
                }

                function u(a, b) {
                    return {
                        x: a,
                        y: b
                    }
                }

                function rb(b, a) {
                    setTimeout(b, a || 0)
                }

                function H(b, d, c) {
                    var a = !b || b == "inherit" ? "" : b;
                    n(d, function(c) {
                        var b = c.exec(a);
                        if (b) {
                            var d = a.substr(0, b.index),
                                e = a.substr(b.index + b[0].length + 1, a.length - 1);
                            a = d + e
                        }
                    });
                    a = c + (!a.indexOf(" ") ? "" : " ") + a;
                    return a
                }

                function tb(b, a) {
                    if (i < 9) b.style.filter = a
                }
                f.ig = Ib;
                f.sd = q;
                f.mg = db;
                f.pg = J;
                f.Kc = O;
                wb("transform");
                f.Bc = function() {
                    return i
                };
                f.zc = rb;

                function Y(a) {
                    a.constructor === Y.caller && a.Fc && a.Fc.apply(a, Y.caller.arguments)
                }
                f.Fc = Y;
                f.vb = function(a) {
                    if (f.ag(a)) a = h.getElementById(a);
                    return a
                };

                function t(a) {
                    return a || g.event
                }
                f.Hc = t;
                f.Wb = function(b) {
                    b = t(b);
                    var a = b.target || b.srcElement || h;
                    if (a.nodeType == 3) a = f.Mc(a);
                    return a
                };
                f.Oc = function(a) {
                    a = t(a);
                    return {
                        x: a.pageX || a.clientX || 0,
                        y: a.pageY || a.clientY || 0
                    }
                };

                function D(c, d, a) {
                    if (a !== l) c.style[d] = a == l ? "" : a;
                    else {
                        var b = c.currentStyle || c.style;
                        a = b[d];
                        if (a == "" && g.getComputedStyle) {
                            b = c.ownerDocument.defaultView.getComputedStyle(c, j);
                            b && (a = b.getPropertyValue(d) || b[d])
                        }
                        return a
                    }
                }

                function ab(b, c, a, d) {
                    if (a !== l) {
                        if (a == j) a = "";
                        else d && (a += "px");
                        D(b, c, a)
                    } else return p(D(b, c))
                }

                function m(c, a) {
                    var d = a ? ab : D,
                        b;
                    if (a & 4) b = ub(c);
                    return function(e, f) {
                        return d(e, b ? b(e) : c, f, a & 2)
                    }
                }

                function Db(b) {
                    if (q() && s < 9) {
                        var a = /opacity=([^)]*)/.exec(b.style.filter || "");
                        return a ? p(a[1]) / 100 : 1
                    } else return p(b.style.opacity || "1")
                }

                function Fb(b, a, f) {
                    if (q() && s < 9) {
                        var h = b.style.filter || "",
                            i = new RegExp(/[\s]*alpha\([^\)]*\)/g),
                            e = c.round(100 * a),
                            d = "";
                        if (e < 100 || f) d = "alpha(opacity=" + e + ") ";
                        var g = H(h, [i], d);
                        tb(b, g)
                    } else b.style.opacity = a == 1 ? "" : c.round(a * 100) / 100
                }
                var L = {
                    fb: ["rotate"],
                    T: ["rotateX"],
                    Z: ["rotateY"],
                    Db: ["skewX"],
                    Gb: ["skewY"]
                };
                if (!J()) L = B(L, {
                    u: ["scaleX", 2],
                    z: ["scaleY", 2],
                    M: ["translateZ", 1]
                });

                function M(d, a) {
                    var c = "";
                    if (a) {
                        if (q() && i && i < 10) {
                            delete a.T;
                            delete a.Z;
                            delete a.M
                        }
                        b.f(a, function(d, b) {
                            var a = L[b];
                            if (a) {
                                var e = a[1] || 0;
                                if (N[b] != d) c += " " + a[0] + "(" + d + (["deg", "px", ""])[e] + ")"
                            }
                        });
                        if (J()) {
                            if (a.gb || a.hb || a.M) c += " translate3d(" + (a.gb || 0) + "px," + (a.hb || 0) + "px," + (a.M || 0) + "px)";
                            if (a.u == l) a.u = 1;
                            if (a.z == l) a.z = 1;
                            if (a.u != 1 || a.z != 1) c += " scale3d(" + a.u + ", " + a.z + ", 1)"
                        }
                    }
                    d.style[K(d)] = c
                }
                f.Ac = m("transformOrigin", 4);
                f.Ff = m("backfaceVisibility", 4);
                f.Gf = m("transformStyle", 4);
                f.Hf = m("perspective", 6);
                f.If = m("perspectiveOrigin", 4);
                f.Jf = function(a, b) {
                    if (q() && s < 9 || s < 10 && Q()) a.style.zoom = b == 1 ? "" : b;
                    else {
                        var c = K(a),
                            f = "scale(" + b + ")",
                            e = a.style[c],
                            g = new RegExp(/[\s]*scale\(.*?\)/g),
                            d = H(e, [g], f);
                        a.style[c] = d
                    }
                };
                f.sc = function(b, a) {
                    return function(c) {
                        c = t(c);
                        var e = c.type,
                            d = c.relatedTarget || (e == "mouseout" ? c.toElement : c.fromElement);
                        (!d || d !== a && !f.Kf(a, d)) && b(c)
                    }
                };
                f.a = function(a, d, b, c) {
                    a = f.vb(a);
                    if (a.addEventListener) {
                        d == "mousewheel" && a.addEventListener("DOMMouseScroll", b, c);
                        a.addEventListener(d, b, c)
                    } else if (a.attachEvent) {
                        a.attachEvent("on" + d, b);
                        c && a.setCapture && a.setCapture()
                    }
                };
                f.J = function(a, c, d, b) {
                    a = f.vb(a);
                    if (a.removeEventListener) {
                        c == "mousewheel" && a.removeEventListener("DOMMouseScroll", d, b);
                        a.removeEventListener(c, d, b)
                    } else if (a.detachEvent) {
                        a.detachEvent("on" + c, d);
                        b && a.releaseCapture && a.releaseCapture()
                    }
                };
                f.Ob = function(a) {
                    a = t(a);
                    a.preventDefault && a.preventDefault();
                    a.cancel = d;
                    a.returnValue = k
                };
                f.Lf = function(a) {
                    a = t(a);
                    a.stopPropagation && a.stopPropagation();
                    a.cancelBubble = d
                };
                f.K = function(d, c) {
                    var a = [].slice.call(arguments, 2),
                        b = function() {
                            var b = a.concat([].slice.call(arguments, 0));
                            return c.apply(d, b)
                        };
                    return b
                };
                f.Mf = function(a, b) {
                    if (b == l) return a.textContent || a.innerText;
                    var c = h.createTextNode(b);
                    f.kc(a);
                    a.appendChild(c)
                };
                f.nb = function(d, c) {
                    for (var b = [], a = d.firstChild; a; a = a.nextSibling)(c || a.nodeType == 1) && b.push(a);
                    return b
                };

                function mb(a, c, e, b) {
                    b = b || "u";
                    for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                        if (a.nodeType == 1) {
                            if (U(a, b) == c) return a;
                            if (!e) {
                                var d = mb(a, c, e, b);
                                if (d) return d
                            }
                        }
                }
                f.G = mb;

                function S(a, d, f, b) {
                    b = b || "u";
                    var c = [];
                    for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                        if (a.nodeType == 1) {
                            U(a, b) == d && c.push(a);
                            if (!f) {
                                var e = S(a, d, f, b);
                                if (e.length) c = c.concat(e)
                            }
                        }
                    return c
                }

                function gb(a, c, d) {
                    for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                        if (a.nodeType == 1) {
                            if (a.tagName == c) return a;
                            if (!d) {
                                var b = gb(a, c, d);
                                if (b) return b
                            }
                        }
                }
                f.Qf = gb;
                f.Rf = function(b, a) {
                    return b.getElementsByTagName(a)
                };

                function B() {
                    var e = arguments,
                        d, c, b, a, g = 1 & e[0],
                        f = 1 + g;
                    d = e[f - 1] || {};
                    for (; f < e.length; f++)
                        if (c = e[f])
                            for (b in c) {
                                a = c[b];
                                if (a !== l) {
                                    a = c[b];
                                    var h = d[b];
                                    d[b] = g && (A(h) || A(a)) ? B(g, {}, h, a) : a
                                }
                            }
                        return d
                }
                f.I = B;

                function Z(f, g) {
                    var d = {},
                        c, a, b;
                    for (c in f) {
                        a = f[c];
                        b = g[c];
                        if (a !== b) {
                            var e;
                            if (A(a) && A(b)) {
                                a = Z(a, b);
                                e = !lb(a)
                            }!e && (d[c] = a)
                        }
                    }
                    return d
                }
                f.Dc = function(a) {
                    return C(a) == "function"
                };
                f.ag = function(a) {
                    return C(a) == "string"
                };
                f.cc = function(a) {
                    return !isNaN(p(a)) && isFinite(a)
                };
                f.f = n;
                f.Uf = A;

                function R(a) {
                    return h.createElement(a)
                }
                f.Kb = function() {
                    return R("DIV")
                };
                f.Wf = function() {
                    return R("SPAN")
                };
                f.xc = function() {};

                function V(b, c, a) {
                    if (a == l) return b.getAttribute(c);
                    b.setAttribute(c, a)
                }

                function U(a, b) {
                    return V(a, b) || V(a, "data-" + b)
                }
                f.s = V;
                f.j = U;

                function x(b, a) {
                    if (a == l) return b.className;
                    b.className = a
                }
                f.yc = x;

                function qb(b) {
                    var a = {};
                    n(b, function(b) {
                        a[b] = b
                    });
                    return a
                }

                function sb(b, a) {
                    return b.match(a || Ab)
                }

                function P(b, a) {
                    return qb(sb(b || "", a))
                }
                f.Xf = sb;

                function bb(b, c) {
                    var a = "";
                    n(c, function(c) {
                        a && (a += b);
                        a += c
                    });
                    return a
                }

                function E(a, c, b) {
                    x(a, bb(" ", B(Z(P(x(a)), P(c)), P(b))))
                }
                f.Mc = function(a) {
                    return a.parentNode
                };
                f.O = function(a) {
                    f.U(a, "none")
                };
                f.Q = function(a, b) {
                    f.U(a, b ? "none" : "")
                };
                f.ue = function(b, a) {
                    b.removeAttribute(a)
                };
                f.yd = function() {
                    return q() && i < 10
                };
                f.Ed = function(d, a) {
                    if (a) d.style.clip = "rect(" + c.round(a.k || a.v || 0) + "px " + c.round(a.E) + "px " + c.round(a.F) + "px " + c.round(a.i || a.B || 0) + "px)";
                    else if (a !== l) {
                        var g = d.style.cssText,
                            f = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)],
                            e = H(g, f, "");
                        b.Bb(d, e)
                    }
                };
                f.W = function() {
                    return +new Date
                };
                f.V = function(b, a) {
                    b.appendChild(a)
                };
                f.Ib = function(b, a, c) {
                    (c || a.parentNode).insertBefore(b, a)
                };
                f.Pb = function(b, a) {
                    a = a || b.parentNode;
                    a && a.removeChild(b)
                };
                f.pe = function(a, b) {
                    n(a, function(a) {
                        f.Pb(a, b)
                    })
                };
                f.kc = function(a) {
                    f.pe(f.nb(a, d), a)
                };
                f.oe = function(a, b) {
                    var c = f.Mc(a);
                    b & 1 && f.D(a, (f.n(c) - f.n(a)) / 2);
                    b & 2 && f.H(a, (f.p(c) - f.p(a)) / 2)
                };
                f.pc = function(b, a) {
                    return parseInt(b, a || 10)
                };
                f.be = p;
                f.Kf = function(b, a) {
                    var c = h.body;
                    while (a && b !== a && c !== a) try {
                        a = a.parentNode
                    } catch (d) {
                        return k
                    }
                    return b === a
                };

                function W(d, c, b) {
                    var a = d.cloneNode(!c);
                    !b && f.ue(a, "id");
                    return a
                }
                f.jb = W;
                f.zb = function(e, g) {
                    var a = new Image;

                    function b(e, d) {
                        f.J(a, "load", b);
                        f.J(a, "abort", c);
                        f.J(a, "error", c);
                        g && g(a, d)
                    }

                    function c(a) {
                        b(a, d)
                    }
                    if (ib() && i < 11.6 || !e) b(!e);
                    else {
                        f.a(a, "load", b);
                        f.a(a, "abort", c);
                        f.a(a, "error", c);
                        a.src = e
                    }
                };
                f.Zd = function(d, a, e) {
                    var c = d.length + 1;

                    function b(b) {
                        c--;
                        if (a && b && b.src == a.src) a = b;
                        !c && e && e(a)
                    }
                    n(d, function(a) {
                        f.zb(a.src, b)
                    });
                    b()
                };
                f.Xd = function(a, g, i, h) {
                    if (h) a = W(a);
                    var c = S(a, g);
                    if (!c.length) c = b.Rf(a, g);
                    for (var f = c.length - 1; f > -1; f--) {
                        var d = c[f],
                            e = W(i);
                        x(e, x(d));
                        b.Bb(e, d.style.cssText);
                        b.Ib(e, d);
                        b.Pb(d)
                    }
                    return a
                };

                function Gb(a) {
                    var k = this,
                        p = "",
                        r = ["av", "pv", "ds", "dn"],
                        e = [],
                        q, j = 0,
                        g = 0,
                        d = 0;

                    function i() {
                        E(a, q, e[d || j || g & 2 || g]);
                        b.S(a, "pointer-events", d ? "none" : "")
                    }

                    function c() {
                        j = 0;
                        i();
                        f.J(h, "mouseup", c);
                        f.J(h, "touchend", c);
                        f.J(h, "touchcancel", c)
                    }

                    function o(a) {
                        if (d) f.Ob(a);
                        else {
                            j = 4;
                            i();
                            f.a(h, "mouseup", c);
                            f.a(h, "touchend", c);
                            f.a(h, "touchcancel", c)
                        }
                    }
                    k.Ud = function(a) {
                        if (a === l) return g;
                        g = a & 2 || a & 1;
                        i()
                    };
                    k.Cc = function(a) {
                        if (a === l) return !d;
                        d = a ? 0 : 3;
                        i()
                    };
                    k.R = a = f.vb(a);
                    var m = b.Xf(x(a));
                    if (m) p = m.shift();
                    n(r, function(a) {
                        e.push(p + a)
                    });
                    q = bb(" ", e);
                    e.unshift("");
                    f.a(a, "mousedown", o);
                    f.a(a, "touchstart", o)
                }
                f.mc = function(a) {
                    return new Gb(a)
                };
                f.S = D;
                f.Fb = m("overflow");
                f.H = m("top", 2);
                f.D = m("left", 2);
                f.n = m("width", 2);
                f.p = m("height", 2);
                f.Sd = m("marginLeft", 2);
                f.Td = m("marginTop", 2);
                f.C = m("position");
                f.U = m("display");
                f.A = m("zIndex", 1);
                f.Vb = function(b, a, c) {
                    if (a != l) Fb(b, a, c);
                    else return Db(b)
                };
                f.Bb = function(a, b) {
                    if (b != l) a.style.cssText = b;
                    else return a.style.cssText
                };
                var T = {
                    ub: f.Vb,
                    k: f.H,
                    i: f.D,
                    sb: f.n,
                    rb: f.p,
                    pb: f.C,
                    Dg: f.U,
                    ob: f.A
                };

                function w(g, k) {
                    var e = O(),
                        b = J(),
                        d = vb(),
                        h = K(g);

                    function i(b, d, a) {
                        var e = b.eb(u(-d / 2, -a / 2)),
                            f = b.eb(u(d / 2, -a / 2)),
                            g = b.eb(u(d / 2, a / 2)),
                            h = b.eb(u(-d / 2, a / 2));
                        b.eb(u(300, 300));
                        return u(c.min(e.x, f.x, g.x, h.x) + d / 2, c.min(e.y, f.y, g.y, h.y) + a / 2)
                    }

                    function a(d, a) {
                        a = a || {};
                        var n = a.M || 0,
                            p = (a.T || 0) % 360,
                            q = (a.Z || 0) % 360,
                            u = (a.fb || 0) % 360,
                            k = a.u,
                            m = a.z,
                            g = a.Cg;
                        if (k == l) k = 1;
                        if (m == l) m = 1;
                        if (g == l) g = 1;
                        if (e) {
                            n = 0;
                            p = 0;
                            q = 0;
                            g = 0
                        }
                        var c = new Cb(a.gb, a.hb, n);
                        c.T(p);
                        c.Z(q);
                        c.ae(u);
                        c.ce(a.Db, a.Gb);
                        c.Tb(k, m, g);
                        if (b) {
                            c.kb(a.B, a.v);
                            d.style[h] = c.de()
                        } else if (!X || X < 9) {
                            var o = "",
                                j = {
                                    x: 0,
                                    y: 0
                                };
                            if (a.X) j = i(c, a.X, a.ab);
                            f.Td(d, j.y);
                            f.Sd(d, j.x);
                            o = c.ee();
                            var s = d.style.filter,
                                t = new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),
                                r = H(s, [t], o);
                            tb(d, r)
                        }
                    }
                    w = function(e, c) {
                        c = c || {};
                        var h = c.B,
                            i = c.v,
                            g;
                        n(T, function(a, b) {
                            g = c[b];
                            g !== l && a(e, g)
                        });
                        f.Ed(e, c.g);
                        if (!b) {
                            h != l && f.D(e, (c.id || 0) + h);
                            i != l && f.H(e, (c.Yc || 0) + i)
                        }
                        if (c.fe)
                            if (d) rb(f.K(j, M, e, c));
                            else a(e, c)
                    };
                    f.Qb = M;
                    if (d) f.Qb = w;
                    if (e) f.Qb = a;
                    else if (!b) a = M;
                    f.P = w;
                    w(g, k)
                }
                f.Qb = w;
                f.P = w;

                function Cb(i, k, o) {
                    var d = this,
                        b = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, i || 0, k || 0, o || 0, 1],
                        h = c.sin,
                        g = c.cos,
                        l = c.tan;

                    function f(a) {
                        return a * c.PI / 180
                    }

                    function n(a, b) {
                        return {
                            x: a,
                            y: b
                        }
                    }

                    function m(c, e, l, m, o, r, t, u, w, z, A, C, E, b, f, k, a, g, i, n, p, q, s, v, x, y, B, D, F, d, h, j) {
                        return [c * a + e * p + l * x + m * F, c * g + e * q + l * y + m * d, c * i + e * s + l * B + m * h, c * n + e * v + l * D + m * j, o * a + r * p + t * x + u * F, o * g + r * q + t * y + u * d, o * i + r * s + t * B + u * h, o * n + r * v + t * D + u * j, w * a + z * p + A * x + C * F, w * g + z * q + A * y + C * d, w * i + z * s + A * B + C * h, w * n + z * v + A * D + C * j, E * a + b * p + f * x + k * F, E * g + b * q + f * y + k * d, E * i + b * s + f * B + k * h, E * n + b * v + f * D + k * j]
                    }

                    function e(c, a) {
                        return m.apply(j, (a || b).concat(c))
                    }
                    d.Tb = function(a, c, d) {
                        if (a != 1 || c != 1 || d != 1) b = e([a, 0, 0, 0, 0, c, 0, 0, 0, 0, d, 0, 0, 0, 0, 1])
                    };
                    d.kb = function(a, c, d) {
                        b[12] += a || 0;
                        b[13] += c || 0;
                        b[14] += d || 0
                    };
                    d.T = function(c) {
                        if (c) {
                            a = f(c);
                            var d = g(a),
                                i = h(a);
                            b = e([1, 0, 0, 0, 0, d, i, 0, 0, -i, d, 0, 0, 0, 0, 1])
                        }
                    };
                    d.Z = function(c) {
                        if (c) {
                            a = f(c);
                            var d = g(a),
                                i = h(a);
                            b = e([d, 0, -i, 0, 0, 1, 0, 0, i, 0, d, 0, 0, 0, 0, 1])
                        }
                    };
                    d.ae = function(c) {
                        if (c) {
                            a = f(c);
                            var d = g(a),
                                i = h(a);
                            b = e([d, i, 0, 0, -i, d, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                        }
                    };
                    d.ce = function(a, c) {
                        if (a || c) {
                            i = f(a);
                            k = f(c);
                            b = e([1, l(k), 0, 0, l(i), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                        }
                    };
                    d.eb = function(c) {
                        var a = e(b, [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, c.x, c.y, 0, 1]);
                        return n(a[12], a[13])
                    };
                    d.de = function() {
                        return "matrix3d(" + b.join(",") + ")"
                    };
                    d.ee = function() {
                        return "progid:DXImageTransform.Microsoft.Matrix(M11=" + b[0] + ", M12=" + b[4] + ", M21=" + b[1] + ", M22=" + b[5] + ", SizingMethod='auto expand')"
                    }
                }
                new function() {
                    var a = this;

                    function b(d, g) {
                        for (var j = d[0].length, i = d.length, h = g[0].length, f = [], c = 0; c < i; c++)
                            for (var k = f[c] = [], b = 0; b < h; b++) {
                                for (var e = 0, a = 0; a < j; a++) e += d[c][a] * g[a][b];
                                k[b] = e
                            }
                        return f
                    }
                    a.u = function(b, c) {
                        return a.jd(b, c, 0)
                    };
                    a.z = function(b, c) {
                        return a.jd(b, 0, c)
                    };
                    a.jd = function(a, c, d) {
                        return b(a, [
                            [c, 0],
                            [0, d]
                        ])
                    };
                    a.eb = function(d, c) {
                        var a = b(d, [
                            [c.x],
                            [c.y]
                        ]);
                        return u(a[0][0], a[1][0])
                    }
                };
                var N = {
                    id: 0,
                    Yc: 0,
                    B: 0,
                    v: 0,
                    bb: 1,
                    u: 1,
                    z: 1,
                    fb: 0,
                    T: 0,
                    Z: 0,
                    gb: 0,
                    hb: 0,
                    M: 0,
                    Db: 0,
                    Gb: 0
                };
                f.Tc = function(a) {
                    var c = a || {};
                    if (a)
                        if (b.Dc(a)) c = {
                            tc: c
                        };
                        else if (b.Dc(a.g)) c.g = {
                        tc: a.g
                    };
                    return c
                };

                function pb(c, a) {
                    var b = {};
                    n(c, function(c, d) {
                        var e = c;
                        if (a[d] != l)
                            if (f.cc(c)) e = c + a[d];
                            else e = pb(c, a[d]);
                        b[d] = e
                    });
                    return b
                }
                f.ie = pb;
                f.je = function(k, m, x, q, z, A, n) {
                    var a = m;
                    if (k) {
                        a = {};
                        for (var g in m) {
                            var B = A[g] || 1,
                                w = z[g] || [0, 1],
                                f = (x - w[0]) / w[1];
                            f = c.min(c.max(f, 0), 1);
                            f = f * B;
                            var u = c.floor(f);
                            if (f != u) f -= u;
                            var h = q.tc || e.xd,
                                i, C = k[g],
                                o = m[g];
                            if (b.cc(o)) {
                                h = q[g] || h;
                                var y = h(f);
                                i = C + o * y
                            } else {
                                i = b.I({
                                    Eb: {}
                                }, k[g]);
                                var v = q[g] || {};
                                b.f(o.Eb || o, function(d, a) {
                                    h = v[a] || v.tc || h;
                                    var c = h(f),
                                        b = d * c;
                                    i.Eb[a] = b;
                                    i[a] += b
                                })
                            }
                            a[g] = i
                        }
                        var t = b.f(m, function(b, a) {
                            return N[a] != l
                        });
                        t && b.f(N, function(c, b) {
                            if (a[b] == l && k[b] !== l) a[b] = k[b]
                        });
                        if (t) {
                            if (a.bb) a.u = a.z = a.bb;
                            a.X = n.X;
                            a.ab = n.ab;
                            a.fe = d
                        }
                    }
                    if (m.g && n.kb) {
                        var p = a.g.Eb,
                            s = (p.k || 0) + (p.F || 0),
                            r = (p.i || 0) + (p.E || 0);
                        a.i = (a.i || 0) + r;
                        a.k = (a.k || 0) + s;
                        a.g.i -= r;
                        a.g.E -= r;
                        a.g.k -= s;
                        a.g.F -= s
                    }
                    if (a.g && b.yd() && !a.g.k && !a.g.i && !a.g.v && !a.g.B && a.g.E == n.X && a.g.F == n.ab) a.g = j;
                    return a
                }
            };

            function n() {
                var a = this,
                    d = [];

                function i(a, b) {
                    d.push({
                        rc: a,
                        oc: b
                    })
                }

                function h(a, c) {
                    b.f(d, function(b, e) {
                        b.rc == a && b.oc === c && d.splice(e, 1)
                    })
                }
                a.lb = a.addEventListener = i;
                a.removeEventListener = h;
                a.l = function(a) {
                    var c = [].slice.call(arguments, 1);
                    b.f(d, function(b) {
                        b.rc == a && b.oc.apply(g, c)
                    })
                }
            }
            var m = function(z, C, i, J, M, L) {
                z = z || 0;
                var a = this,
                    q, n, o, u, A = 0,
                    G, H, F, B, y = 0,
                    h = 0,
                    m = 0,
                    D, l, f, e, p, w = [],
                    x;

                function O(a) {
                    f += a;
                    e += a;
                    l += a;
                    h += a;
                    m += a;
                    y += a
                }

                function t(o) {
                    var g = o;
                    if (p && (g >= e || g <= f)) g = ((g - f) % p + p) % p + f;
                    if (!D || u || h != g) {
                        var j = c.min(g, e);
                        j = c.max(j, f);
                        if (!D || u || j != m) {
                            if (L) {
                                var k = (j - l) / (C || 1);
                                if (i.ne) k = 1 - k;
                                var n = b.je(M, L, k, G, F, H, i);
                                if (x) b.f(n, function(b, a) {
                                    x[a] && x[a](J, b)
                                });
                                else b.P(J, n)
                            }
                            a.uc(m - l, j - l);
                            m = j;
                            b.f(w, function(b, c) {
                                var a = o < h ? w[w.length - c - 1] : b;
                                a.q(m - y)
                            });
                            var r = h,
                                q = m;
                            h = g;
                            D = d;
                            a.Lb(r, q)
                        }
                    }
                }

                function E(a, b, d) {
                    b && a.Mb(e);
                    if (!d) {
                        f = c.min(f, a.nc() + y);
                        e = c.max(e, a.Nb() + y)
                    }
                    w.push(a)
                }
                var r = g.requestAnimationFrame || g.webkitRequestAnimationFrame || g.mozRequestAnimationFrame || g.msRequestAnimationFrame;
                if (b.mg() && b.Bc() < 7) r = j;
                r = r || function(a) {
                    b.zc(a, i.Xc)
                };

                function I() {
                    if (q) {
                        var d = b.W(),
                            e = c.min(d - A, i.Zc),
                            a = h + e * o;
                        A = d;
                        if (a * o >= n * o) a = n;
                        t(a);
                        if (!u && a * o >= n * o) K(B);
                        else r(I)
                    }
                }

                function s(g, i, j) {
                    if (!q) {
                        q = d;
                        u = j;
                        B = i;
                        g = c.max(g, f);
                        g = c.min(g, e);
                        n = g;
                        o = n < h ? -1 : 1;
                        a.Qc();
                        A = b.W();
                        r(I)
                    }
                }

                function K(b) {
                    if (q) {
                        u = q = B = k;
                        a.ad();
                        b && b()
                    }
                }
                a.bd = function(a, b, c) {
                    s(a ? h + a : e, b, c)
                };
                a.cd = s;
                a.db = K;
                a.qe = function(a) {
                    s(a)
                };
                a.N = function() {
                    return h
                };
                a.ed = function() {
                    return n
                };
                a.xb = function() {
                    return m
                };
                a.q = t;
                a.kb = function(a) {
                    t(h + a)
                };
                a.Sc = function() {
                    return q
                };
                a.Rd = function(a) {
                    p = a
                };
                a.Mb = O;
                a.qb = function(a, b) {
                    E(a, 0, b)
                };
                a.lc = function(a) {
                    E(a, 1)
                };
                a.te = function(a) {
                    e += a
                };
                a.nc = function() {
                    return f
                };
                a.Nb = function() {
                    return e
                };
                a.Lb = a.Qc = a.ad = a.uc = b.xc;
                a.ec = b.W();
                i = b.I({
                    Xc: 16,
                    Zc: 50
                }, i);
                p = i.fd;
                x = i.Cd;
                f = l = z;
                e = z + C;
                H = i.Od || {};
                F = i.Fd || {};
                G = b.Tc(i.Y)
            };
            new(function() {});
            var i = function(p, fc) {
                var f = this;

                function Bc() {
                    var a = this;
                    m.call(a, -1e8, 2e8);
                    a.Kd = function() {
                        var b = a.xb(),
                            d = c.floor(b),
                            f = t(d),
                            e = b - c.floor(b);
                        return {
                            cb: f,
                            Jd: d,
                            pb: e
                        }
                    };
                    a.Lb = function(b, a) {
                        var e = c.floor(a);
                        if (e != a && a > b) e++;
                        Tb(e, d);
                        f.l(i.Id, t(a), t(b), a, b)
                    }
                }

                function Ac() {
                    var a = this;
                    m.call(a, 0, 0, {
                        fd: r
                    });
                    b.f(C, function(b) {
                        D & 1 && b.Rd(r);
                        a.lc(b);
                        b.Mb(kb / bc)
                    })
                }

                function zc() {
                    var a = this,
                        b = Ub.R;
                    m.call(a, -1, 2, {
                        Y: e.md,
                        Cd: {
                            pb: Zb
                        },
                        fd: r
                    }, b, {
                        pb: 1
                    }, {
                        pb: -2
                    });
                    a.dc = b
                }

                function mc(o, n) {
                    var b = this,
                        e, g, h, l, c;
                    m.call(b, -1e8, 2e8, {
                        Zc: 100
                    });
                    b.Qc = function() {
                        M = d;
                        R = j;
                        f.l(i.Dd, t(w.N()), w.N())
                    };
                    b.ad = function() {
                        M = k;
                        l = k;
                        var a = w.Kd();
                        f.l(i.zd, t(w.N()), w.N());
                        !a.pb && Dc(a.Jd, s)
                    };
                    b.Lb = function(i, f) {
                        var b;
                        if (l) b = c;
                        else {
                            b = g;
                            if (h) {
                                var d = f / h;
                                b = a.kd(d) * (g - e) + e
                            }
                        }
                        w.q(b)
                    };
                    b.Jb = function(a, d, c, f) {
                        e = a;
                        g = d;
                        h = c;
                        w.q(a);
                        b.q(0);
                        b.cd(c, f)
                    };
                    b.se = function(a) {
                        l = d;
                        c = a;
                        b.bd(a, j, d)
                    };
                    b.re = function(a) {
                        c = a
                    };
                    w = new Bc;
                    w.qb(o);
                    w.qb(n)
                }

                function oc() {
                    var c = this,
                        a = Xb();
                    b.A(a, 0);
                    b.S(a, "pointerEvents", "none");
                    c.R = a;
                    c.Cb = function() {
                        b.O(a);
                        b.kc(a)
                    }
                }

                function xc(o, g) {
                    var e = this,
                        q, M, v, l, y = [],
                        x, B, W, H, S, F, h, w, p;
                    m.call(e, -u, u + 1, {});

                    function E(a) {
                        q && q.dd();
                        T(o, a, 0);
                        F = d;
                        q = new I.L(o, I, b.be(b.j(o, "idle")) || lc);
                        q.q(0)
                    }

                    function Z() {
                        q.ec < I.ec && E()
                    }

                    function O(p, r, o) {
                        if (!H) {
                            H = d;
                            if (l && o) {
                                var h = o.width,
                                    c = o.height,
                                    n = h,
                                    m = c;
                                if (h && c && a.mb) {
                                    if (a.mb & 3 && (!(a.mb & 4) || h > K || c > J)) {
                                        var j = k,
                                            q = K / J * c / h;
                                        if (a.mb & 1) j = q > 1;
                                        else if (a.mb & 2) j = q < 1;
                                        n = j ? h * J / c : K;
                                        m = j ? J : c * K / h
                                    }
                                    b.n(l, n);
                                    b.p(l, m);
                                    b.H(l, (J - m) / 2);
                                    b.D(l, (K - n) / 2)
                                }
                                b.C(l, "absolute");
                                f.l(i.me, g)
                            }
                        }
                        b.O(r);
                        p && p(e)
                    }

                    function Y(b, c, d, f) {
                        if (f == R && s == g && N)
                            if (!Cc) {
                                var a = t(b);
                                A.Pd(a, g, c, e, d);
                                c.le();
                                U.Mb(a - U.nc() - 1);
                                U.q(a);
                                z.Jb(b, b, 0)
                            }
                    }

                    function bb(b) {
                        if (b == R && s == g) {
                            if (!h) {
                                var a = j;
                                if (A)
                                    if (A.cb == g) a = A.Md();
                                    else A.Cb();
                                Z();
                                h = new vc(o, g, a, q);
                                h.Vc(p)
                            }!h.Sc() && h.qc()
                        }
                    }

                    function G(d, f, l) {
                        if (d == g) {
                            if (d != f) C[f] && C[f].Uc();
                            else !l && h && h.ke();
                            p && p.Cc();
                            var m = R = b.W();
                            e.zb(b.K(j, bb, m))
                        } else {
                            var k = c.min(g, d),
                                i = c.max(g, d),
                                o = c.min(i - k, k + r - i),
                                n = u + a.he - 1;
                            (!S || o <= n) && e.zb()
                        }
                    }

                    function db() {
                        if (s == g && h) {
                            h.db();
                            p && p.ge();
                            p && p.Yd();
                            h.td()
                        }
                    }

                    function eb() {
                        s == g && h && h.db()
                    }

                    function ab(a) {
                        !P && f.l(i.Wd, g, a)
                    }

                    function Q() {
                        p = w.pInstance;
                        h && h.Vc(p)
                    }
                    e.zb = function(c, a) {
                        a = a || v;
                        if (y.length && !H) {
                            b.Q(a);
                            if (!W) {
                                W = d;
                                f.l(i.Vd, g);
                                b.f(y, function(a) {
                                    if (!b.s(a, "src")) {
                                        a.src = b.j(a, "src2");
                                        b.U(a, a["display-origin"])
                                    }
                                })
                            }
                            b.Zd(y, l, b.K(j, O, c, a))
                        } else O(c, a)
                    };
                    e.Qd = function() {
                        var i = g;
                        if (a.hd < 0) i -= r;
                        var d = i + a.hd * tc;
                        if (D & 2) d = t(d);
                        if (!(D & 1) && !ib) d = c.max(0, c.min(d, r - u));
                        if (d != g) {
                            if (A) {
                                var f = A.Bd(r);
                                if (f) {
                                    var k = R = b.W(),
                                        h = C[t(d)];
                                    return h.zb(b.K(j, Y, d, h, f, k), v)
                                }
                            }
                            cb(d)
                        } else if (a.ib) {
                            e.Uc();
                            G(g, g)
                        }
                    };
                    e.gc = function() {
                        G(g, g, d)
                    };
                    e.Uc = function() {
                        p && p.ge();
                        p && p.Yd();
                        e.Ic();
                        h && h.Ad();
                        h = j;
                        E()
                    };
                    e.le = function() {
                        b.O(o)
                    };
                    e.Ic = function() {
                        b.Q(o)
                    };
                    e.Fe = function() {
                        p && p.Cc()
                    };

                    function T(a, c, e) {
                        if (b.s(a, "jssor-slider")) return;
                        if (!F) {
                            if (a.tagName == "IMG") {
                                y.push(a);
                                if (!b.s(a, "src")) {
                                    S = d;
                                    a["display-origin"] = b.U(a);
                                    b.O(a)
                                }
                            }
                            b.Kc() && b.A(a, (b.A(a) || 0) + 1)
                        }
                        var f = b.nb(a);
                        b.f(f, function(f) {
                            var h = f.tagName,
                                i = b.j(f, "u");
                            if (i == "player" && !w) {
                                w = f;
                                if (w.pInstance) Q();
                                else b.a(w, "dataavailable", Q)
                            }
                            if (i == "caption") {
                                if (c) {
                                    b.Ac(f, b.j(f, "to"));
                                    b.Ff(f, b.j(f, "bf"));
                                    b.j(f, "3d") && b.Gf(f, "preserve-3d")
                                } else if (!b.sd()) {
                                    var g = b.jb(f, k, d);
                                    b.Ib(g, f, a);
                                    b.Pb(f, a);
                                    f = g;
                                    c = d
                                }
                            } else if (!F && !e && !l) {
                                if (h == "A") {
                                    if (b.j(f, "u") == "image") l = b.Qf(f, "IMG");
                                    else l = b.G(f, "image", d);
                                    if (l) {
                                        x = f;
                                        b.U(x, "block");
                                        b.P(x, V);
                                        B = b.jb(x, d);
                                        b.C(x, "relative");
                                        b.Vb(B, 0);
                                        b.S(B, "backgroundColor", "#000")
                                    }
                                } else if (h == "IMG" && b.j(f, "u") == "image") l = f;
                                if (l) {
                                    l.border = 0;
                                    b.P(l, V)
                                }
                            }
                            T(f, c, e + 1)
                        })
                    }
                    e.uc = function(c, b) {
                        var a = u - b;
                        Zb(M, a)
                    };
                    e.cb = g;
                    n.call(e);
                    b.Hf(o, b.j(o, "p"));
                    b.If(o, b.j(o, "po"));
                    var L = b.G(o, "thumb", d);
                    if (L) {
                        b.jb(L);
                        b.O(L)
                    }
                    b.Q(o);
                    v = b.jb(gb);
                    b.A(v, 1e3);
                    b.a(o, "click", ab);
                    E(d);
                    e.Nd = l;
                    e.wc = B;
                    e.dc = M = o;
                    b.V(M, v);
                    f.lb(203, G);
                    f.lb(28, eb);
                    f.lb(24, db)
                }

                function vc(y, g, p, q) {
                    var a = this,
                        n = 0,
                        u = 0,
                        h, j, e, c, l, t, r, o = C[g];
                    m.call(a, 0, 0);

                    function v() {
                        b.kc(L);
                        cc && l && o.wc && b.V(L, o.wc);
                        b.Q(L, !l && o.Nd)
                    }

                    function w() {
                        a.qc()
                    }

                    function x(b) {
                        r = b;
                        a.db();
                        a.qc()
                    }
                    a.qc = function() {
                        var b = a.xb();
                        if (!B && !M && !r && s == g) {
                            if (!b) {
                                if (h && !l) {
                                    l = d;
                                    a.td(d);
                                    f.l(i.Yf, g, n, u, h, c)
                                }
                                v()
                            }
                            var k, p = i.vc;
                            if (b != c)
                                if (b == e) k = c;
                                else if (b == j) k = e;
                            else if (!b) k = j;
                            else k = a.ed();
                            f.l(p, g, b, n, j, e, c);
                            var m = N && (!E || F);
                            if (b == c)(e != c && !(E & 12) || m) && o.Qd();
                            else(m || b != e) && a.cd(k, w)
                        }
                    };
                    a.ke = function() {
                        e == c && e == a.xb() && a.q(j)
                    };
                    a.Ad = function() {
                        A && A.cb == g && A.Cb();
                        var b = a.xb();
                        b < c && f.l(i.vc, g, -b - 1, n, j, e, c)
                    };
                    a.td = function(a) {
                        p && b.Fb(lb, a && p.ac.yg ? "" : "hidden")
                    };
                    a.uc = function(b, a) {
                        if (l && a >= h) {
                            l = k;
                            v();
                            o.Ic();
                            A.Cb();
                            f.l(i.Vf, g, n, u, h, c)
                        }
                        f.l(i.Tf, g, a, n, j, e, c)
                    };
                    a.Vc = function(a) {
                        if (a && !t) {
                            t = a;
                            a.lb($JssorPlayer$.Hd, x)
                        }
                    };
                    p && a.lc(p);
                    h = a.Nb();
                    a.lc(q);
                    j = h + q.Nc;
                    e = h + q.Ec;
                    c = a.Nb()
                }

                function Kb(a, c, d) {
                    b.D(a, c);
                    b.H(a, d)
                }

                function Zb(c, b) {
                    var a = x > 0 ? x : fb,
                        d = zb * b * (a & 1),
                        e = Ab * b * (a >> 1 & 1);
                    Kb(c, d, e)
                }

                function Pb() {
                    qb = M;
                    Ib = z.ed();
                    G = w.N()
                }

                function gc() {
                    Pb();
                    if (B || !F && E & 12) {
                        z.db();
                        f.l(i.Sf)
                    }
                }

                function ec(f) {
                    if (!B && (F || !(E & 12)) && !z.Sc()) {
                        var d = w.N(),
                            b = c.ceil(G);
                        if (f && c.abs(H) >= a.Gc) {
                            b = c.ceil(d);
                            b += jb
                        }
                        if (!(D & 1)) b = c.min(r - u, c.max(b, 0));
                        var e = c.abs(b - d);
                        e = 1 - c.pow(1 - e, 5);
                        if (!P && qb) z.qe(Ib);
                        else if (d == b) {
                            tb.Fe();
                            tb.gc()
                        } else z.Jb(d, b, e * Vb)
                    }
                }

                function Hb(a) {
                    !b.j(b.Wb(a), "nodrag") && b.Ob(a)
                }

                function rc(a) {
                    Yb(a, 1)
                }

                function Yb(a, c) {
                    a = b.Hc(a);
                    var l = b.Wb(a);
                    if (!O && !b.j(l, "nodrag") && sc() && (!c || a.touches.length == 1)) {
                        B = d;
                        yb = k;
                        R = j;
                        b.a(h, c ? "touchmove" : "mousemove", Bb);
                        b.W();
                        P = 0;
                        gc();
                        if (!qb) x = 0;
                        if (c) {
                            var g = a.touches[0];
                            ub = g.clientX;
                            vb = g.clientY
                        } else {
                            var e = b.Oc(a);
                            ub = e.x;
                            vb = e.y
                        }
                        H = 0;
                        hb = 0;
                        jb = 0;
                        f.l(i.Pf, t(G), G, a)
                    }
                }

                function Bb(e) {
                    if (B) {
                        e = b.Hc(e);
                        var f;
                        if (e.type != "mousemove") {
                            var l = e.touches[0];
                            f = {
                                x: l.clientX,
                                y: l.clientY
                            }
                        } else f = b.Oc(e);
                        if (f) {
                            var j = f.x - ub,
                                k = f.y - vb;
                            if (c.floor(G) != G) x = x || fb & O;
                            if ((j || k) && !x) {
                                if (O == 3)
                                    if (c.abs(k) > c.abs(j)) x = 2;
                                    else x = 1;
                                else x = O;
                                if (ob && x == 1 && c.abs(k) - c.abs(j) > 3) yb = d
                            }
                            if (x) {
                                var a = k,
                                    i = Ab;
                                if (x == 1) {
                                    a = j;
                                    i = zb
                                }
                                if (!(D & 1)) {
                                    if (a > 0) {
                                        var g = i * s,
                                            h = a - g;
                                        if (h > 0) a = g + c.sqrt(h) * 5
                                    }
                                    if (a < 0) {
                                        var g = i * (r - u - s),
                                            h = -a - g;
                                        if (h > 0) a = -g - c.sqrt(h) * 5
                                    }
                                }
                                if (H - hb < -2) jb = 0;
                                else if (H - hb > 2) jb = -1;
                                hb = H;
                                H = a;
                                sb = G - H / i / (Y || 1);
                                if (H && x && !yb) {
                                    b.Ob(e);
                                    if (!M) z.se(sb);
                                    else z.re(sb)
                                }
                            }
                        }
                    }
                }

                function bb() {
                    qc();
                    if (B) {
                        B = k;
                        b.W();
                        b.J(h, "mousemove", Bb);
                        b.J(h, "touchmove", Bb);
                        P = H;
                        z.db();
                        var a = w.N();
                        f.l(i.Of, t(a), a, t(G), G);
                        E & 12 && Pb();
                        ec(d)
                    }
                }

                function jc(c) {
                    if (P) {
                        b.Lf(c);
                        var a = b.Wb(c);
                        while (a && v !== a) {
                            a.tagName == "A" && b.Ob(c);
                            try {
                                a = a.parentNode
                            } catch (d) {
                                break
                            }
                        }
                    }
                }

                function Jb(a) {
                    C[s];
                    s = t(a);
                    tb = C[s];
                    Tb(a);
                    return s
                }

                function Dc(a, b) {
                    x = 0;
                    Jb(a);
                    f.l(i.Nf, t(a), b)
                }

                function Tb(a, c) {
                    wb = a;
                    b.f(S, function(b) {
                        b.Yb(t(a), a, c)
                    })
                }

                function sc() {
                    var b = i.Lc || 0,
                        a = X;
                    if (ob) a & 1 && (a &= 1);
                    i.Lc |= a;
                    return O = a & ~b
                }

                function qc() {
                    if (O) {
                        i.Lc &= ~X;
                        O = 0
                    }
                }

                function Xb() {
                    var a = b.Kb();
                    b.P(a, V);
                    b.C(a, "absolute");
                    return a
                }

                function t(a) {
                    return (a % r + r) % r
                }

                function kc(b, d) {
                    if (d)
                        if (!D) {
                            b = c.min(c.max(b + wb, 0), r - u);
                            d = k
                        } else if (D & 2) {
                        b = t(b + wb);
                        d = k
                    }
                    cb(b, a.ic, d)
                }

                function xb() {
                    b.f(S, function(a) {
                        a.jc(a.Hb.xg <= F)
                    })
                }

                function hc() {
                    if (!F) {
                        F = 1;
                        xb();
                        if (!B) {
                            E & 12 && ec();
                            E & 3 && C[s].gc()
                        }
                    }
                }

                function Ec() {
                    if (F) {
                        F = 0;
                        xb();
                        B || !(E & 12) || gc()
                    }
                }

                function ic() {
                    V = {
                        sb: K,
                        rb: J,
                        k: 0,
                        i: 0
                    };
                    b.f(T, function(a) {
                        b.P(a, V);
                        b.C(a, "absolute");
                        b.Fb(a, "hidden");
                        b.O(a)
                    });
                    b.P(gb, V)
                }

                function ab(b, a) {
                    cb(b, a, d)
                }

                function cb(g, f, j) {
                    if (Rb && (!B && (F || !(E & 12)) || a.Jc)) {
                        M = d;
                        B = k;
                        z.db();
                        if (f == l) f = Vb;
                        var e = Cb.xb(),
                            b = g;
                        if (j) {
                            b = e + g;
                            if (g > 0) b = c.ceil(b);
                            else b = c.floor(b)
                        }
                        if (D & 2) b = t(b);
                        if (!(D & 1)) b = c.max(0, c.min(b, r - u));
                        var i = (b - e) % r;
                        b = e + i;
                        var h = e == b ? 0 : f * c.abs(i);
                        h = c.min(h, f * u * 1.5);
                        z.Jb(e, b, h || 1)
                    }
                }
                f.bd = function() {
                    if (!N) {
                        N = d;
                        C[s] && C[s].gc()
                    }
                };

                function W() {
                    return b.n(y || p)
                }

                function nb() {
                    return b.p(y || p)
                }
                f.X = W;
                f.ab = nb;

                function Eb(c, d) {
                    if (c == l) return b.n(p);
                    if (!y) {
                        var a = b.Kb(h);
                        b.yc(a, b.yc(p));
                        b.Bb(a, b.Bb(p));
                        b.U(a, "block");
                        b.C(a, "relative");
                        b.H(a, 0);
                        b.D(a, 0);
                        b.Fb(a, "visible");
                        y = b.Kb(h);
                        b.C(y, "absolute");
                        b.H(y, 0);
                        b.D(y, 0);
                        b.n(y, b.n(p));
                        b.p(y, b.p(p));
                        b.Ac(y, "0 0");
                        b.V(y, a);
                        var g = b.nb(p);
                        b.V(p, y);
                        b.S(p, "backgroundImage", "");
                        b.f(g, function(c) {
                            b.V(b.j(c, "noscale") ? p : a, c);
                            b.j(c, "autocenter") && Lb.push(c)
                        })
                    }
                    Y = c / (d ? b.p : b.n)(y);
                    b.Jf(y, Y);
                    var f = d ? Y * W() : c,
                        e = d ? c : Y * nb();
                    b.n(p, f);
                    b.p(p, e);
                    b.f(Lb, function(a) {
                        var c = b.pc(b.j(a, "autocenter"));
                        b.oe(a, c)
                    })
                }
                f.hg = Eb;
                n.call(f);
                f.R = p = b.vb(p);
                var a = b.I({
                    mb: 0,
                    he: 1,
                    Rb: 1,
                    Sb: 0,
                    Ub: k,
                    ib: 1,
                    Ab: d,
                    Jc: d,
                    hd: 1,
                    Pc: 3e3,
                    nd: 1,
                    ic: 500,
                    kd: e.Rc,
                    Gc: 20,
                    qd: 0,
                    tb: 1,
                    ud: 0,
                    rg: 1,
                    Xb: 1,
                    wd: 1
                }, fc);
                a.Ab = a.Ab && b.pg();
                if (a.tg != l) a.Pc = a.tg;
                if (a.Ef != l) a.ud = a.Ef;
                var fb = a.Xb & 3,
                    tc = (a.Xb & 4) / -4 || 1,
                    mb = a.wg,
                    I = b.I({
                        L: q,
                        Ab: a.Ab
                    }, a.nf);
                I.wb = I.wb || I.Bg;
                var Fb = a.Ue,
                    Z = a.Te,
                    eb = a.Ag,
                    Q = !a.rg,
                    y, v = b.G(p, "slides", Q),
                    gb = b.G(p, "loading", Q) || b.Kb(h),
                    Nb = b.G(p, "navigator", Q),
                    dc = b.G(p, "arrowleft", Q),
                    ac = b.G(p, "arrowright", Q),
                    Mb = b.G(p, "thumbnavigator", Q),
                    pc = b.n(v),
                    nc = b.p(v),
                    V, T = [],
                    uc = b.nb(v);
                b.f(uc, function(a) {
                    if (a.tagName == "DIV" && !b.j(a, "u")) T.push(a);
                    else b.Kc() && b.A(a, (b.A(a) || 0) + 1)
                });
                var s = -1,
                    wb, tb, r = T.length,
                    K = a.Re || pc,
                    J = a.Qe || nc,
                    Wb = a.qd,
                    zb = K + Wb,
                    Ab = J + Wb,
                    bc = fb & 1 ? zb : Ab,
                    u = c.min(a.tb, r),
                    lb, x, O, yb, S = [],
                    Qb, Sb, Ob, cc, Cc, N, E = a.nd,
                    lc = a.Pc,
                    Vb = a.ic,
                    rb, ib, kb, Rb = u < r,
                    D = Rb ? a.ib : 0,
                    X, P, F = 1,
                    M, B, R, ub = 0,
                    vb = 0,
                    H, hb, jb, Cb, w, U, z, Ub = new oc,
                    Y, Lb = [];
                if (r) {
                    if (a.Ab) Kb = function(a, c, d) {
                        b.Qb(a, {
                            gb: c,
                            hb: d
                        })
                    };
                    N = a.Ub;
                    f.Hb = fc;
                    ic();
                    b.s(p, "jssor-slider", d);
                    b.A(v, b.A(v) || 0);
                    b.C(v, "absolute");
                    lb = b.jb(v, d);
                    b.Ib(lb, v);
                    if (mb) {
                        cc = mb.zg;
                        rb = mb.L;
                        ib = u == 1 && r > 1 && rb && (!b.sd() || b.Bc() >= 8)
                    }
                    kb = ib || u >= r || !(D & 1) ? 0 : a.ud;
                    X = (u > 1 || kb ? fb : -1) & a.wd;
                    var Gb = v,
                        C = [],
                        A, L, Db = b.ig(),
                        ob = Db.cg,
                        G, qb, Ib, sb;
                    Db.od && b.S(Gb, Db.od, ([j, "pan-y", "pan-x", "none"])[X] || "");
                    U = new zc;
                    if (ib) A = new rb(Ub, K, J, mb, ob);
                    b.V(lb, U.dc);
                    b.Fb(v, "hidden");
                    L = Xb();
                    b.S(L, "backgroundColor", "#000");
                    b.Vb(L, 0);
                    b.Ib(L, Gb.firstChild, Gb);
                    for (var db = 0; db < T.length; db++) {
                        var wc = T[db],
                            yc = new xc(wc, db);
                        C.push(yc)
                    }
                    b.O(gb);
                    Cb = new Ac;
                    z = new mc(Cb, U);
                    b.a(v, "click", jc, d);
                    b.a(p, "mouseout", b.sc(hc, p));
                    b.a(p, "mouseover", b.sc(Ec, p));
                    if (X) {
                        b.a(v, "mousedown", Yb);
                        b.a(v, "touchstart", rc);
                        b.a(v, "dragstart", Hb);
                        b.a(v, "selectstart", Hb);
                        b.a(h, "mouseup", bb);
                        b.a(h, "touchend", bb);
                        b.a(h, "touchcancel", bb);
                        b.a(g, "blur", bb)
                    }
                    E &= ob ? 10 : 5;
                    if (Nb && Fb) {
                        Qb = new Fb.L(Nb, Fb, W(), nb());
                        S.push(Qb)
                    }
                    if (Z && dc && ac) {
                        Z.ib = D;
                        Z.tb = u;
                        Sb = new Z.L(dc, ac, Z, W(), nb());
                        S.push(Sb)
                    }
                    if (Mb && eb) {
                        eb.Sb = a.Sb;
                        Ob = new eb.L(Mb, eb);
                        S.push(Ob)
                    }
                    b.f(S, function(a) {
                        a.fc(r, C, gb);
                        a.lb(o.Zb, kc)
                    });
                    b.S(p, "visibility", "visible");
                    Eb(W());
                    xb();
                    a.Rb && b.a(h, "keydown", function(b) {
                        if (b.keyCode == 37) ab(-a.Rb);
                        else b.keyCode == 39 && ab(a.Rb)
                    });
                    var pb = a.Sb;
                    if (!(D & 1)) pb = c.max(0, c.min(pb, r - u));
                    z.Jb(pb, pb, 0)
                }
            };
            i.Wd = 21;
            i.Pf = 22;
            i.Of = 23;
            i.Dd = 24;
            i.zd = 25;
            i.Vd = 26;
            i.me = 27;
            i.Sf = 28;
            i.Id = 202;
            i.Nf = 203;
            i.Yf = 206;
            i.Vf = 207;
            i.Tf = 208;
            i.vc = 209;
            var o = {
                    Zb: 1
                },
                r = function(e, C) {
                    var f = this;
                    n.call(f);
                    e = b.vb(e);
                    var s, A, z, r, l = 0,
                        a, m, i, w, x, h, g, q, p, B = [],
                        y = [];

                    function v(a) {
                        a != -1 && y[a].Ud(a == l)
                    }

                    function t(a) {
                        f.l(o.Zb, a * m)
                    }
                    f.R = e;
                    f.Yb = function(a) {
                        if (a != r) {
                            var d = l,
                                b = c.floor(a / m);
                            l = b;
                            r = a;
                            v(d);
                            v(b)
                        }
                    };
                    f.jc = function(a) {
                        b.Q(e, a)
                    };
                    var u;
                    f.fc = function(D) {
                        if (!u) {
                            s = c.ceil(D / m);
                            l = 0;
                            var o = q + w,
                                r = p + x,
                                n = c.ceil(s / i) - 1;
                            A = q + o * (!h ? n : i - 1);
                            z = p + r * (h ? n : i - 1);
                            b.n(e, A);
                            b.p(e, z);
                            for (var f = 0; f < s; f++) {
                                var C = b.Wf();
                                b.Mf(C, f + 1);
                                var k = b.Xd(g, "numbertemplate", C, d);
                                b.C(k, "absolute");
                                var v = f % (n + 1);
                                b.D(k, !h ? o * v : f % i * o);
                                b.H(k, h ? r * v : c.floor(f / (n + 1)) * r);
                                b.V(e, k);
                                B[f] = k;
                                a.bc & 1 && b.a(k, "click", b.K(j, t, f));
                                a.bc & 2 && b.a(k, "mouseover", b.sc(b.K(j, t, f), k));
                                y[f] = b.mc(k)
                            }
                            u = d
                        }
                    };
                    f.Hb = a = b.I({
                        vd: 10,
                        rd: 10,
                        ld: 1,
                        bc: 1
                    }, C);
                    g = b.G(e, "prototype");
                    q = b.n(g);
                    p = b.p(g);
                    b.Pb(g, e);
                    m = a.pd || 1;
                    i = a.Ld || 1;
                    w = a.vd;
                    x = a.rd;
                    h = a.ld - 1;
                    a.Tb == k && b.s(e, "noscale", d);
                    a.yb && b.s(e, "autocenter", a.yb)
                },
                s = function(a, g, h) {
                    var c = this;
                    n.call(c);
                    var r, q, e, f, i;
                    b.n(a);
                    b.p(a);

                    function l(a) {
                        c.l(o.Zb, a, d)
                    }

                    function p(c) {
                        b.Q(a, c || !h.ib && e == 0);
                        b.Q(g, c || !h.ib && e >= q - h.tb);
                        r = c
                    }
                    c.Yb = function(b, a, c) {
                        if (c) e = a;
                        else {
                            e = b;
                            p(r)
                        }
                    };
                    c.jc = p;
                    var m;
                    c.fc = function(c) {
                        q = c;
                        e = 0;
                        if (!m) {
                            b.a(a, "click", b.K(j, l, -i));
                            b.a(g, "click", b.K(j, l, i));
                            b.mc(a);
                            b.mc(g);
                            m = d
                        }
                    };
                    c.Hb = f = b.I({
                        pd: 1
                    }, h);
                    i = f.pd;
                    if (f.Tb == k) {
                        b.s(a, "noscale", d);
                        b.s(g, "noscale", d)
                    }
                    if (f.yb) {
                        b.s(a, "autocenter", f.yb);
                        b.s(g, "autocenter", f.yb)
                    }
                };

            function q(e, d, c) {
                var a = this;
                m.call(a, 0, c);
                a.dd = b.xc;
                a.Nc = 0;
                a.Ec = c
            }
            var t = function(n, g, l) {
                var a = this,
                    o, h = {},
                    i = g.wb,
                    c = new m(0, 0);
                m.call(a, 0, 0);

                function j(d, c) {
                    var a = {};
                    b.f(d, function(d, f) {
                        var e = h[f];
                        if (e) {
                            if (b.Uf(d)) d = j(d, c || f == "e");
                            else if (c)
                                if (b.cc(d)) d = o[d];
                            a[e] = d
                        }
                    });
                    return a
                }

                function k(e, c) {
                    var a = [],
                        d = b.nb(e);
                    b.f(d, function(d) {
                        var h = b.j(d, "u") == "caption";
                        if (h) {
                            var e = b.j(d, "t"),
                                g = i[b.pc(e)] || i[e],
                                f = {
                                    R: d,
                                    ac: g
                                };
                            a.push(f)
                        }
                        if (c < 5) a = a.concat(k(d, c + 1))
                    });
                    return a
                }

                function r(e, f, a) {
                    b.f(f, function(h) {
                        var f = b.I(d, {}, j(h)),
                            g = b.Tc(f.Y);
                        delete f.Y;
                        if (f.i) {
                            f.B = f.i;
                            g.B = g.i;
                            delete f.i
                        }
                        if (f.k) {
                            f.v = f.k;
                            g.v = g.k;
                            delete f.k
                        }
                        var k = {
                                Y: g,
                                X: a.sb,
                                ab: a.rb
                            },
                            i = new m(h.b, h.d, k, e, a, f);
                        c.qb(i);
                        a = b.ie(a, f)
                    });
                    return a
                }

                function q(a) {
                    b.f(a, function(d) {
                        var a = d.R,
                            f = b.n(a),
                            e = b.p(a),
                            c = {
                                i: b.D(a),
                                k: b.H(a),
                                B: 0,
                                v: 0,
                                ub: 1,
                                ob: b.A(a) || 0,
                                fb: 0,
                                T: 0,
                                Z: 0,
                                u: 1,
                                z: 1,
                                gb: 0,
                                hb: 0,
                                M: 0,
                                Db: 0,
                                Gb: 0,
                                sb: f,
                                rb: e,
                                g: {
                                    k: 0,
                                    E: f,
                                    F: e,
                                    i: 0
                                }
                            };
                        c.id = c.i;
                        c.Yc = c.k;
                        r(a, d.ac, c)
                    })
                }

                function t(g, f, h) {
                    var e = g.b - f;
                    if (e) {
                        var b = new m(f, e);
                        b.qb(c, d);
                        b.Mb(h);
                        a.qb(b)
                    }
                    a.te(g.d);
                    return e
                }

                function s(f) {
                    var d = c.nc(),
                        e = 0;
                    b.f(f, function(c, f) {
                        c = b.I({
                            d: l
                        }, c);
                        t(c, d, e);
                        d = c.b;
                        e += c.d;
                        if (!f || c.t == 2) {
                            a.Nc = d;
                            a.Ec = d + c.d
                        }
                    })
                }
                a.dd = function() {
                    a.q(-1, d)
                };
                o = [f.of, f.Bf, f.pf, f.qf, f.rf, f.sf, f.tf, f.uf, f.vf, f.wf, f.xf, f.yf, f.zf, f.Af, f.Ze, f.Ye, f.Wc, f.Xe, f.We, f.xe, f.ye, f.ze, f.Ae, f.Be, f.Ce, f.De, f.Ee, f.we, f.Ge, f.He, f.Ie, f.Je, f.Ke, f.Le, f.Me, f.Ne, f.Oe];
                var u = {
                    k: "y",
                    i: "x",
                    F: "m",
                    E: "t",
                    fb: "r",
                    T: "rX",
                    Z: "rY",
                    u: "sX",
                    z: "sY",
                    gb: "tX",
                    hb: "tY",
                    M: "tZ",
                    Db: "kX",
                    Gb: "kY",
                    ub: "o",
                    Y: "e",
                    ob: "i",
                    g: "c"
                };
                b.f(u, function(b, a) {
                    h[b] = a
                });
                q(k(n, 1));
                c.q(-1);
                var p = g.ve || [],
                    e = [].concat(p[b.pc(b.j(n, "b"))] || []);
                e.push({
                    b: c.Nb(),
                    d: e.length ? 0 : l
                });
                s(e);
                a.q(-1)
            };
            jssor_1_slider_init = function() {
                var h = [
                        [{
                            b: -1,
                            d: 1,
                            o: -1
                        }, {
                            b: 0,
                            d: 1e3,
                            x: -257,
                            y: -5,
                            o: 1
                        }],
                        [{
                            b: 480,
                            d: 520,
                            x: 120,
                            y: -270
                        }],
                        [{
                            b: 1e3,
                            d: 500,
                            y: 250
                        }, {
                            b: 8e3,
                            d: 1e3,
                            x: 600
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1,
                            sX: -.6,
                            sY: -.6
                        }, {
                            b: 1500,
                            d: 500,
                            o: 1,
                            r: 360,
                            sX: .6,
                            sY: .6
                        }, {
                            b: 8e3,
                            d: 1e3,
                            y: -150
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1,
                            tZ: -200
                        }, {
                            b: 2e3,
                            d: 1e3,
                            o: 1,
                            tZ: 200
                        }, {
                            b: 3e3,
                            d: 1e3,
                            o: -1,
                            tZ: 200
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1,
                            tZ: -200
                        }, {
                            b: 3e3,
                            d: 1e3,
                            o: 1,
                            tZ: 200
                        }, {
                            b: 4e3,
                            d: 1e3,
                            o: -1,
                            tZ: 200
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1,
                            tZ: -200
                        }, {
                            b: 4e3,
                            d: 1e3,
                            o: 1,
                            tZ: 200
                        }, {
                            b: 5e3,
                            d: 1e3,
                            o: -1,
                            tZ: 200
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1,
                            tZ: -200
                        }, {
                            b: 5e3,
                            d: 1e3,
                            o: 1,
                            tZ: 200
                        }, {
                            b: 6e3,
                            d: 1e3,
                            o: -1,
                            tZ: 200
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1,
                            tZ: -200
                        }, {
                            b: 6e3,
                            d: 1e3,
                            o: 1,
                            tZ: 200
                        }, {
                            b: 7e3,
                            d: 1e3,
                            o: -1,
                            tZ: 200
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1,
                            tZ: -200
                        }, {
                            b: 7e3,
                            d: 1e3,
                            o: 1,
                            tZ: 200
                        }, {
                            b: 8e3,
                            d: 1e3,
                            o: -1,
                            tZ: 200
                        }],
                        [{
                            b: -1,
                            d: 1,
                            c: {
                                x: 250,
                                t: -250
                            }
                        }, {
                            b: 0,
                            d: 1e3,
                            c: {
                                x: -250,
                                t: 250
                            }
                        }, {
                            b: 5e3,
                            d: 1e3,
                            y: 100
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1
                        }, {
                            b: 1e3,
                            d: 1e3,
                            o: 1
                        }, {
                            b: 5e3,
                            d: 1e3,
                            y: 280
                        }],
                        [{
                            b: 2e3,
                            d: 1e3,
                            y: 190,
                            e: {
                                y: 28
                            }
                        }, {
                            b: 5e3,
                            d: 1e3,
                            x: 280
                        }],
                        [{
                            b: 3e3,
                            d: 520,
                            y: 50
                        }, {
                            b: 5e3,
                            d: 1e3,
                            y: -50
                        }],
                        [{
                            b: 3520,
                            d: 480,
                            x: -400
                        }, {
                            b: 5e3,
                            d: 800,
                            x: 400,
                            e: {
                                x: 7
                            }
                        }],
                        [{
                            b: 4e3,
                            d: 500,
                            x: -400
                        }, {
                            b: 5e3,
                            d: 800,
                            x: 400,
                            e: {
                                x: 7
                            }
                        }],
                        [{
                            b: 4500,
                            d: 500,
                            x: -400
                        }, {
                            b: 5e3,
                            d: 800,
                            x: 400,
                            e: {
                                x: 7
                            }
                        }],
                        [{
                            b: -1,
                            d: 1,
                            c: {
                                x: 250,
                                t: -250
                            }
                        }, {
                            b: 0,
                            d: 1e3,
                            c: {
                                x: -250,
                                t: 250
                            }
                        }, {
                            b: 1e4,
                            d: 500,
                            y: 90
                        }],
                        [{
                            b: -1,
                            d: 1,
                            c: {
                                x: 150,
                                t: -150
                            }
                        }, {
                            b: 1e3,
                            d: 1e3,
                            c: {
                                x: -150,
                                t: 150
                            }
                        }, {
                            b: 1e4,
                            d: 500,
                            c: {
                                y: 150,
                                m: -150
                            }
                        }],
                        [{
                            b: 2e3,
                            d: 500,
                            x: 220
                        }],
                        [{
                            b: 3500,
                            d: 500,
                            rX: -20
                        }, {
                            b: 4e3,
                            d: 1e3,
                            rX: 40
                        }, {
                            b: 5e3,
                            d: 500,
                            rX: -10
                        }, {
                            b: 9500,
                            d: 500,
                            o: -1
                        }],
                        [{
                            b: 3500,
                            d: 2e3,
                            r: 360
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1
                        }, {
                            b: 2500,
                            d: 500,
                            x: 76,
                            y: -25,
                            o: 1
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1
                        }, {
                            b: 2500,
                            d: 500,
                            x: 47,
                            y: 65,
                            o: 1
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1
                        }, {
                            b: 2500,
                            d: 500,
                            x: -47,
                            y: 65,
                            o: 1
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1
                        }, {
                            b: 2500,
                            d: 500,
                            x: -76,
                            y: -25,
                            o: 1
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1
                        }, {
                            b: 2500,
                            d: 500,
                            y: -80,
                            o: 1
                        }],
                        [{
                            b: -1,
                            d: 1,
                            c: {
                                x: 120,
                                t: -120
                            }
                        }, {
                            b: 6100,
                            d: 400,
                            c: {
                                x: -120,
                                t: 120
                            }
                        }, {
                            b: 1e4,
                            d: 500,
                            y: -120
                        }],
                        [{
                            b: 6500,
                            d: 500,
                            x: 220
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1,
                            r: 180,
                            sX: -.5,
                            sY: -.5
                        }, {
                            b: 7e3,
                            d: 500,
                            o: 1,
                            r: 180,
                            sX: .5,
                            sY: .5
                        }, {
                            b: 8e3,
                            d: 500,
                            o: -1,
                            r: 180,
                            sX: 9,
                            sY: 9
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1,
                            r: 180,
                            sX: -.5,
                            sY: -.5
                        }, {
                            b: 8e3,
                            d: 500,
                            o: 1,
                            r: 180,
                            sX: .5,
                            sY: .5
                        }, {
                            b: 9e3,
                            d: 500,
                            o: -1,
                            r: 180,
                            sX: 9,
                            sY: 9
                        }],
                        [{
                            b: -1,
                            d: 1,
                            o: -1,
                            r: 180,
                            sX: -.5,
                            sY: -.5
                        }, {
                            b: 9e3,
                            d: 500,
                            o: 1,
                            r: 180,
                            sX: .5,
                            sY: .5
                        }, {
                            b: 9500,
                            d: 500,
                            o: -1,
                            r: 180,
                            sX: 9,
                            sY: 9
                        }]
                    ],
                    j = {
                        Ub: d,
                        kd: f.Wc,
                        nf: {
                            L: t,
                            wb: h,
                            ve: [
                                [{
                                    d: 3e3,
                                    b: 8e3,
                                    t: 2
                                }],
                                [{
                                    d: 2e3,
                                    b: 5e3
                                }],
                                [{
                                    d: 3e3,
                                    b: 9500,
                                    t: 2
                                }]
                            ]
                        },
                        Te: {
                            L: s
                        },
                        Ue: {
                            L: r
                        }
                    },
                    e = new i("jssor_1", j);

                function a() {
                    var b = e.R.parentNode.clientWidth;
                    if (b) {
                        b = c.min(b, 980);
                        e.hg(b)
                    } else g.setTimeout(a, 30)
                }
                a();
                b.a(g, "load", a);
                b.a(g, "resize", a);
                b.a(g, "orientationchange", a)
            }
        })(window, document, Math, null, true, false)
    </script>
    <style>
        .jssorb05 {
            position: absolute
        }
        
        .jssorb05 div,
        .jssorb05 div:hover,
        .jssorb05 .av {
            position: absolute;
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer
        }
        
        .jssorb05 div {
            background-position: -7px -7px
        }
        
        .jssorb05 div:hover,
        .jssorb05 .av:hover {
            background-position: -37px -7px
        }
        
        .jssorb05 .av {
            background-position: -67px -7px
        }
        
        .jssorb05 .dn,
        .jssorb05 .dn:hover {
            background-position: -97px -7px
        }
        
        .jssora22l,
        .jssora22r {
            display: block;
            position: absolute;
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden
        }
        
        .jssora22l {
            background-position: -10px -31px
        }
        
        .jssora22r {
            background-position: -70px -31px
        }
        
        .jssora22l:hover {
            background-position: -130px -31px
        }
        
        .jssora22r:hover {
            background-position: -190px -31px
        }
        
        .jssora22l.jssora22ldn {
            background-position: -250px -31px
        }
        
        .jssora22r.jssora22rdn {
            background-position: -310px -31px
        }
        
        .jssora22l.jssora22lds {
            background-position: -10px -31px;
            opacity: .3;
            pointer-events: none
        }
        
        .jssora22r.jssora22rds {
            background-position: -70px -31px;
            opacity: .3;
            pointer-events: none
        }
    </style>
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 380px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 380px; overflow: hidden;">
            <div data-b="0" data-p="170.00" data-po="80% 55%">
                <img data-u="image" src="img/01.jpg" />
                <div data-u="caption" data-t="0" style="position: absolute; top: 25px; left: 277px; width: 500px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">Touch swipe and responsive javascript image slider</div>
                <div data-u="caption" data-t="1" style="position: absolute; top: 600px; left: -100px; width: 330px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">slideshow and responsive slider ...</div>
                <div data-u="caption" data-t="2" style="position: absolute; top: -50px; left: 400px; width: 80px; height: 40px; background-color: rgba(0,0,0,0.5); font-size: 16px; color: #ffffff; line-height: 40px; text-align: center;">Comes</div>
                <div data-u="caption" data-t="3" style="position: absolute; top: 100px; left: 400px; width: 80px; height: 40px; background-color: rgba(0,0,0,0.5); font-size: 16px; color: #ffffff; line-height: 40px; text-align: center;">with</div>
                <div data-u="caption" data-t="4" data-3d="1" style="position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.5); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Image Slider</div>
                <div data-u="caption" data-t="5" data-3d="1" style="position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.5); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Banner Slider</div>
                <div data-u="caption" data-t="6" data-3d="1" style="position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.5); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Image Gallery</div>
                <div data-u="caption" data-t="7" data-3d="1" style="position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.5); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Carousel Slider</div>
                <div data-u="caption" data-t="8" data-3d="1" style="position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.5); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Slideshow</div>
                <div data-u="caption" data-t="9" data-3d="1" style="position: absolute; top: 200px; left: 550px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.5); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">many more ...</div>
            </div>
            <div data-b="1" data-p="170.00" style="display: none;">
                <img data-u="image" src="img/02.jpg" />
                <div data-u="caption" data-t="10" style="position: absolute; top: 300px; left: 20px; width: 500px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">Jssor Slider is one of the best performance sliders</div>
                <div data-u="caption" data-t="11" style="position: absolute; top: 120px; left: 700px; width: 200px; height: 90px; background-color: rgba(0,0,0,0.5); font-size: 16px; color: #ffffff; line-height: 28px; text-align: center; padding: 2px; box-sizing: border-box;">No-JQuery
                    <br /> Independent
                    <br /> Javascript Code
                </div>
                <div data-u="caption" data-t="12" style="position: absolute; top: -100px; left: 720px; width: 160px; height: 90px; background-color: rgba(235,81,0,0.7); font-size: 20px; color: #ffffff; line-height: 90px; text-align: center;">Compress</div>
                <div style="position: absolute; top: 40px; left: 300px; width: 400px; height: 200px; overflow: hidden;">
                    <div data-u="caption" data-t="13" style="position: absolute; top: -50px; left: 205px; width: 200px; height: 30px; font-size: 18px; color: #ffffff; line-height: 30px;">Size&nbsp; &nbsp; &nbsp;CPU Usage</div>
                    <div data-u="caption" data-t="14" style="position: absolute; top: 50px; left: 400px; width: 450px; height: 30px; font-size: 18px; color: #ffffff; line-height: 30px;">Slider with Slideshow&nbsp; &nbsp; &nbsp; 23KB&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ~4%</div>
                    <div data-u="caption" data-t="15" style="position: absolute; top: 100px; left: 400px; width: 450px; height: 30px; font-size: 18px; color: #ffffff; line-height: 30px;">Slider with Caption&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 18KB&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ~4%</div>
                    <div data-u="caption" data-t="16" style="position: absolute; top: 150px; left: 400px; width: 450px; height: 30px; font-size: 18px; color: #ffffff; line-height: 30px;">Slider&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;17KB&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ~1%</div>
                </div>
                <a href="http://www.jssor.com/help/slideshow-transitions.html" style="display: block; position: absolute; top: 300px; left: 600px; width: 300px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">360+ slideshow transitions</a>
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Introduction Slider</a>
            <div data-b="2" data-p="170.00" style="display: none;">
                <img data-u="image" src="img/04.jpg" />
                <div data-u="caption" data-t="17" style="position: absolute; top: 310px; left: 50px; width: 500px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">Jssor Slider is one of the most reliable sliders </div>
                <div data-u="caption" data-t="18" style="position: absolute; top: 40px; left: 640px; width: 300px; height: 300px; background-color: rgba(40,177,255,0.6); overflow: hidden;">
                    <div style="position: absolute; top: 0px; left: 0px; width: 240px; height: 80px; overflow: hidden;">
                        <div style="position: absolute; top: 0px; left: 20px; width: 200px; height: 50px; font-size: 24px; line-height: 50px;">All Browsers

                        </div>
                        <div data-u="caption" data-t="19" style="position: absolute; top: 40px; left: -200px; width: 200px; height: 40px; font-size: 24px; line-height: 40px; text-align: right;">Supported

                        </div>
                    </div>
                </div>
                <div data-u="caption" data-t="20" data-3d="1" style="position: absolute; top: 140px; left: 690px; width: 200px; height: 200px;">
                    <div data-u="caption" data-t="21" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 200px;">
                        <img data-u="caption" data-t="22" style="position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;" src="img/icon_opera.png" />
                        <img data-u="caption" data-t="23" style="position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;" src="img/icon_safari.png" />
                        <img data-u="caption" data-t="24" style="position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;" src="img/icon_ie.png" />
                        <img data-u="caption" data-t="25" style="position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;" src="img/icon_firefox.png" />
                        <img data-u="caption" data-t="26" style="position: absolute; top: 85px; left: 85px; width: 30px; height: 30px;" src="img/icon_chrome.png" />
                    </div>
                </div>
                <div data-u="caption" data-t="27" style="position: absolute; top: 20px; left: 20px; width: 240px; height: 80px; background-color: rgba(0,0,124,0.3); overflow: hidden;">
                    <div style="position: absolute; top: 0px; left: 20px; width: 200px; height: 50px; font-size: 24px; color: #ffffff; line-height: 50px;">All Devices

                    </div>
                    <div data-u="caption" data-t="28" style="position: absolute; top: 40px; left: -200px; width: 200px; height: 40px; font-size: 24px; color: #ffffff; line-height: 40px; text-align: right;">Supported</div>
                </div>
                <div data-u="caption" data-t="29" style="position: absolute; top: 150px; left: 250px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.7); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Windows</div>
                <div data-u="caption" data-t="30" style="position: absolute; top: 150px; left: 250px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.7); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">Android</div>
                <div data-u="caption" data-t="31" style="position: absolute; top: 150px; left: 250px; width: 200px; height: 100px; background-color: rgba(235,81,0,0.7); font-size: 24px; color: #ffffff; line-height: 100px; text-align: center;">IOS</div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:10px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:10px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">
        jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->
