(function ($) {
    "use strict";

    function activateGoogleSiteTag()
    {
        (function(w,d,s,l,i) {w[l]=w[l]||[];function g(){w[l].push(arguments);}
        g("js", new Date());g("config", i, {"anonymize_ip": true});
        var f=d.getElementsByTagName(s)[0],j=d.createElement(s);j.async=true;
        j.src="https://www.googletagmanager.com/gtag/js?id="+i;
        f.parentNode.insertBefore(j,f);
        })(window,document,"script","dataLayer","G-X78T6JPSKD");
    }

    function activateMatomo()
    {
        (function (d,s,i) {
            var _paq = window._paq = window._paq || [];
            _paq.push(["trackPageView"]);
            _paq.push(["enableLinkTracking"]);
            (function() {
                var u = "https://tycserver.com/na/piwik/";
                _paq.push(["setTrackerUrl", u+"piwik.php"]);
                _paq.push(["setSiteId", i]);
                var g=d.createElement(s),
                    f=d.getElementsByTagName(s)[0];
                g.async=true;
                g.src=u+"piwik.js";
                f.parentNode.insertBefore(g,f);
            })();
        })(document,"script","29");
    }

    function deleteCookiesByPattern(pattern, exceptions)
    {
        var allcookies = GdprConsent.cookies.getAll();
        Object.keys(allcookies).forEach(function (cookiename) {
            var isConsentCookie = -1 !== exceptions.indexOf(cookiename);
            if (!isConsentCookie && pattern.test(cookiename)) {
                console.log('deleting cookie "' + cookiename + '"')
                GdprConsent.cookies.remove(cookiename, {
                    path: "/",
                    domain: "www.canaryhotels.com",
                    expires: new Date()
                });
                GdprConsent.cookies.remove(cookiename, {
                    path: "/",
                    domain: "www.canaryhotels.com",
                    expires: new Date()
                });
            }
        });
    }

    function cookieRemover (pattern, exceptions)
    {
        var qookies = document.cookie.split(";"),
            i, keyval, name, isAnException;

        for (i = 0; i < qookies.length; i++) {
            keyval = qookies[i].split("="),
            name = keyval[0].trim(),
            isAnException = -1 !== exceptions.indexOf(name);
            if (!isAnException && pattern.test(name)) {
                document.cookie += name + " =; expires = Thu, 01 Jan 1970 00:00:00 UTC";
            }
        }
    }

    function deactivateMatomo()
    {
        var matomoCookies = [/_pk/, /mtp_/];

        matomoCookies.forEach(function (pattern) {
            cookieRemover(pattern, [defaults.cookieName]);
        });
    }

    function deactivateGoogleSiteTag()
    {
        var googleCookies = [
            /_ga/,
            /OGPC/,
            /CONSENT/,
            /1P_JAR/,
            /NID/
        ];

        googleCookies.forEach(function (pattern) {
            deleteCookiesByPattern(pattern, [defaults.cookieName]);
        });
    }

    var lang = $("html").attr("lang") || "es",
        defaults = {
            cookieName: "THeCONSENT",
            showEditIcon: true,
            cookieConfig: {
                domain: "localhost",
                path: "/"
            },
            categories: {
                analytics: function(deleteCookies) {
                    deleteCookies ? deactivateMatomo() : activateMatomo();
                    deleteCookies ?
                        deactivateGoogleSiteTag() :
                        activateGoogleSiteTag();
                }
            }
        },
        options = {
            en: {
                heading: "Welcome to Canary Hotels!",
                description: "This website uses its own and third-party cookies for two purposes: to provide basic functionality and to improve the service by analysing anonymous site usage statistics. You can change your cookie settings at any time. For more information see our cookies policy.",
                acceptLabel: "Accept cookies",
                settingsLabel: "Cookie settings",
                closeLabel: "Close",
                choices: {
                    necessary: {
            			label: "Technical cookies (required)",
            			description: "They allow us to manage your consent to the use of cookies. They cannot be deactivated.",
            			value: true
            		},
            		tracking: null,
            		analytics: {
            			label: "Analytics cookies",
            			description: "They allow us to analyse the behaviour of our users in an aggregate and anonymous way when browsing the website, in order to improve our service.",
            			value: false
            		},
                    marketing: null
                }
            },
            es: {
                heading: "¡Bienvenido a Canary Hotels!",
                description: "Esta web utiliza cookies con dos finalidades: proporcionar funcionalidad básica y mejorar el servicio mediante el análisis de estadísticas anónimas de uso del sitio. Puede modificar la configuración de las cookies en cualquier momento. Para más información consulte nuestra política de cookies.",
                acceptLabel: "Aceptar cookies",
                settingsLabel: "Configuración de cookies",
                closeLabel: "Cerrar",
                choices: {
                    necessary: {
            			label: "Cookies técnicas (necesarias)",
            			description: "Permiten gestionar el consentimiento del uso de cookies. No se pueden desactivar.",
            			value: true
            		},
                    tracking: null,
            		analytics: {
            			label: "Cookies analíticas",
            			description: "Permiten analizar el comportamiento de los usuarios de forma agregada y anónima al navegar en la página web, con el fin de mejorar el servicio.",
            			value: false
            		},
                    marketing: null
                }
            }
        };

    GdprConsent.attachBanner(document.body, $.extend(defaults, options[lang]));

    $('.cookie-consent-open-settings').click(function () {
        $('.cookieConsentToggle').click();
    });

}(jQuery));
