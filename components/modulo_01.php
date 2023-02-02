<section class='modulo_01'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="slick-1">
                    <?php if (have_rows('repetidor')) { ?>
                        <?php while (have_rows('repetidor')) : the_row(); ?>
                            <?php $img_desktop = get_sub_field('img_desktop'); ?>
                            <?php $img_mobile = get_sub_field('img_mobile'); ?>
                            <div class="item">
                                <picture class="w-100">
                                    <source media='(min-width:992px)' srcset='<?php echo esc_url($img_desktop['url']); ?>'>
                                    <source media='(max-width:991px)' srcset='<?php echo esc_url($img_mobile['url']); ?>'>
                                    <img loading='lazy' class='img-fluid w-100' src='' alt='<?php echo esc_attr($img_desktop['alt']); ?>'>
                                </picture>
                            </div>
                        <?php endwhile; ?>
                    <?php } else { ?>
                        <div class="item">
                            <figure><img loading='lazy' class='img-fluid w0199' src='<?php bloginfo('template_url'); ?>/assets/img/modulo-01-1.webp' alt='' srcset=''></figure>
                        </div>
                        <div class="item">
                            <figure><img loading='lazy' class='img-fluid w0199' src='<?php bloginfo('template_url'); ?>/assets/img/modulo-01-1.webp' alt='' srcset=''></figure>
                        </div>
                        <div class="item">
                            <figure><img loading='lazy' class='img-fluid w0199' src='<?php bloginfo('template_url'); ?>/assets/img/modulo-01-1.webp' alt='' srcset=''></figure>
                        </div>
                    <?php }; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .modulo_01 .slick-1 .item.ativo:after {
        transition-duration: 2.5s;
    }
</style>
<script async>
    $(document).ready(function() {
        $('.modulo_01 .slick-1').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            autoplay: true,
            speed: 300,
            autoplaySpeed: 2500,
            cssEase: 'linear',
            pauseOnFocus: false,
            pauseOnHover: false,
            pauseOnDotsHover: false
        }).find('.item.slick-active').addClass('ativo');

        $('.modulo_01 .slick-1').on('afterChange', function(event, slick, currentSlide, nextSlide) {
            $('.modulo_01 .slick-1 .item').removeClass('ativo');
            $('.modulo_01 .slick-1 .item[data-slick-index="' + currentSlide + '"]').addClass('ativo');
            // console.log($('.modulo_01 .slick-1 .item[data-slick-index="' + currentSlide + '"]'));
        });
    });
    window.addEventListener('load', function() {

    });
</script>