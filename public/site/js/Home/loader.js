
/* =========================================
   STUDIO MORADIX - GLOBAL LOADER
========================================= */

(function () {
    const loader = document.getElementById('moradix-loader');

    if (!loader) return;

    let navigating = false;

    function hideLoader() {
        loader.classList.add('loader-hide');
        navigating = false;
    }

    function showLoader() {
        if (navigating) return;

        navigating = true;
        loader.classList.remove('loader-hide');
    }

    window.addEventListener('load', hideLoader);

    window.addEventListener('pageshow', hideLoader);

    document.addEventListener('click', function (event) {
        const link = event.target.closest('a');

        if (!link || event.defaultPrevented) return;

        if (
            event.button !== 0 ||
            event.ctrlKey ||
            event.shiftKey ||
            event.altKey ||
            event.metaKey ||
            link.target === '_blank' ||
            link.hasAttribute('download')
        ) return;

        const url = new URL(link.href, location.href);

        if (url.origin !== location.origin) return;

        if (
            url.pathname === location.pathname &&
            url.search === location.search
        ) return;

        showLoader();
    });

    // Safety fallback
    setTimeout(hideLoader, 12000);
})();
