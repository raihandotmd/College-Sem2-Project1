<!-- FOOTER -->

<footer>
    <div class="copyright">©2023 Raihan. All rights reserved.</div>
    <div class="social-media_list">
        <ul>
            <li class="">
                <a href="https://www.instagram.com/notraihan_/"><i class="bi bi-instagram"></i></a>
            </li>
            <li class="">
                <a href="https://github.com/notRaihan"><i class="bi bi-github"></i></a>
            </li>
            <li class="">
                <a href="https://www.linkedin.com/in/muhammad-raihan-8b9075252/"><i class="bi bi-linkedin"></i></a>
            </li>
        </ul>
    </div>
    <div class="products"><a href="#product">our products</a></div>
</footer>

<script src="package/swiper-bundle.min.js"></script>
<script>
    // slide script

    const swiper = new Swiper(".swiper", {
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
</body>
</html>