document.addEventListener("DOMContentLoaded", function() {
    var links = document.querySelectorAll('.nav-link');
    var currentUrl = window.location.origin + window.location.pathname;

    links.forEach(function(link) {
        var linkHref = new URL(link.getAttribute('href'), window.location.origin).href;
        if (linkHref === currentUrl) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});

window.addEventListener('hashchange', function() {
    var links = document.querySelectorAll('.nav-link');
    var currentUrl = window.location.origin + window.location.pathname;

    links.forEach(function(link) {
        var linkHref = new URL(link.getAttribute('href'), window.location.origin).href;
        if (linkHref === currentUrl) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});

function goBack() {
    window.history.back();
}