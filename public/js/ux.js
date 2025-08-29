(function() {
    if ('scrollBehavior' in document.documentElement.style) return;
    var links = document.querySelectorAll('a[href^="#"]');
    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener('click', function(e) {
            var targetId = this.getAttribute('href').slice(1);
            var target = document.getElementById(targetId);
            if (target) {
                e.preventDefault();
                var start = window.pageYOffset;
                var end = target.getBoundingClientRect().top + start;
                var duration = 400;
                var startTime = null;
                function animateScroll(timestamp) {
                    if (!startTime) startTime = timestamp;
                    var progress = timestamp - startTime;
                    var percent = Math.min(progress / duration, 1);
                    window.scrollTo(0, start + (end - start) * percent);
                    if (progress < duration) requestAnimationFrame(animateScroll);
                }
                requestAnimationFrame(animateScroll);
            }
        });
    }
})();


