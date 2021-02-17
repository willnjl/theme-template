<section class="grey-bg">
    <div class="wrap-tight">
        <div class="row">
            <div class="testimonial__buttons">
                <button id="prev-1"class="fa fa-chevron-left"></button>
                <button id="next-1" class="fa fa-chevron-right"></button>
            </div>
            <div class="swiper-testimonial">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide testimonial">
                        <span class="open-quotes"></span>
                        <p class="p-l">
                            <q>
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi augue orci, fringilla dictum massa vel, aliquam lacinia risus. Nulla non ipsum ac mi pellentesque ornare sed nec nulla. Nam ut auctor nisl. In volutpat finibus nisi, a sollicitudin mauris feugiat sed.”
                            </q>
                        </p>
                        <p>
                            Billy Joe Armstrong, Client Name Ltd
                        </p>
                    </li>
                    <li class="swiper-slide testimonial">
                        <span class="open-quotes"></span>
                        <p class="p-l">
                            <q>
                                blahlahlahlalhavabaha”
                                 blahlahlahlalhavabaha”
                                  blahlahlahlalhavabaha”
                                   blahlahlahlalhavabaha” blahlahlahlalhavabaha”
                            </q>
                        </p>
                        <p>
                            Billy Joe Armstrong, Client Name Ltd
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<script>

    const swiper = new Swiper('.swiper-testimonial', {
        direction: 'horizontal',
        effect: 'fade',
        loop: true,
        navigation: {
            prevEl: '#prev-1',
            nextEl: '#next-1',
        },
        });
</script>