$(document).ready(function () {

 // Mobile Sidebar
    var mobileSidebar = (function () {
        var animSpeed = 200;

        function init() {
            setEvents();
        }

        function setEvents() {
            // Open sidebar
            $('.mobile-open').on('click', function () {
                openSidebar();
            });

            // Close sidebar
            $('.mobile-close, .mobile__overlay').on('click', function () {
                closeSidebar();
            });

            // Mobile menu
            $('.menu-mobile__arrow').on('click', function () {
                toggleMenu($(this));
            });
        }

        function openSidebar() {
            $('.mobile__container').addClass('is-opened');
            $('.mobile__overlay').fadeIn(animSpeed);
        }

        function closeSidebar() {
            $('.mobile__container').removeClass('is-opened');
            $('.mobile__overlay').fadeOut(animSpeed);
        }

        function toggleMenu(el) {
            var li = el.closest('li');

            closeAll(li);

            el.toggleClass('is-active');
            li.toggleClass('is-active');

            li.children('ul').slideToggle(animSpeed, function () {
                li.children('ul').toggleClass('is-opened');
            });
        }

        function closeAll(li) {
            var active = li.siblings('.is-active');

            for (var i = 0; i < active.length; i++) {
                li = active[i];

                var el = li.querySelector('.menu-mobile__arrow');
                var ul = li.querySelector('.is-opened');

                el.classList.remove('is-active');
                li.classList.remove('is-active');

                $(ul).slideUp(animSpeed, function () {
                    ul.classList.remove('is-opened');
                });
            }
        }

        init();

        return {
            open: openSidebar,
            close: closeSidebar
        };
    })();


});

