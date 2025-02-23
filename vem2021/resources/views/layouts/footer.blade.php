<!-- Socials Start -->
<div class="socials socials-absolute" style='z-index: 999'>
    <div class='row'>
        <div class='col-lg-3'>
            <div class='row'>
                <div class='col-lg-12'>
                    <img id='me-avatar' src='{{ $usr->avatar }}' />
                </div>
            </div>
        </div>
        <div class='col-lg-9 my-auto'>
            <div class='row'>
                <div class='col-lg-12  text-left'>
                    <div id='me-name'>{{ $usr->name }}</div>
                    <div id='me-menu'>
                        <a href='https://myaccount.google.com/' target='_blank'>editar</a>
                        |
                        <a href='/sair'>sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Socials End -->

<!-- Custom HTML End -->

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
    It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<!-- Load Scripts Start-->
<script src="/js/libs.min.js"></script>
<script src="/js/gallery-init.js"></script>
<script src="/js/unio-custom.js"></script>

<!-- Load Scripts End-->

</body>

</html>
