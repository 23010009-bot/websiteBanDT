<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Không cho truy cập trực tiếp
}

get_header();

// Lấy số trang hiện tại
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

// Query sản phẩm
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 8, // số sản phẩm mỗi trang
    'paged'          => $paged
);

$products = new WP_Query($args);
?>

<div class="container">
    <h1 class="page-title">Sản phẩm iPhone</h1>

    <?php if ($products->have_posts()) : ?>
        <div class="product-grid">
            <?php while ($products->have_posts()) : $products->the_post(); ?>
                <div class="product-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } ?>
                        <h2><?php the_title(); ?></h2>
                        <p class="price - front-page.php:33"><?php echo get_post_meta(get_the_ID(), '_price', true); ?> ₫</p>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- Phân trang -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total'   => $products->max_num_pages,
                'current' => $paged,
                'prev_text' => __('« Trang trước'),
                'next_text' => __('Trang sau »'),
            ));
            ?>
        </div>

    <?php else : ?>
        <p>Không có sản phẩm nào để hiển thị.</p>
    <?php endif; ?>

</div>

<?php
wp_reset_postdata();
get_footer();
?>


<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>


get_header(); ?>

<div class="container">
    <div class="slider-wrapper">
        <div class="slider" id="slider">
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
            <div class="slide"></div>
        </div>


        <button class="slider-arrows prev" onclick="changeSlide(-1)">‹</button>
        <button class="slider-arrows next" onclick="changeSlide(1)">›</button>


        <div class="slider-nav">
            <span class="nav-dot active" onclick="currentSlide(1)"></span>
            <span class="nav-dot" onclick="currentSlide(2)"></span>
            <span class="nav-dot" onclick="currentSlide(3)"></span>
            <span class="nav-dot" onclick="currentSlide(4)"></span>
            <span class="nav-dot" onclick="currentSlide(5)"></span>
        </div>
    </div>
    <div class="category-list">
        <div class="category-item">
            <a href="<?php echo site_url('/iPhone/'); ?> - front-page.php:97"><img
                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/IP_Desk.png" alt=""></a>
            <a href="<?php echo site_url('/iPhone/'); ?> - front-page.php:99">
                <p>iPhone</p>
            </a>
        </div>
        <div class="category-item">
            <a href="<?php echo site_url('/iPad/'); ?> - front-page.php:104"><img
                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Ipad_Desk.png" alt=""></a>
            <a href="<?php echo site_url('/iPad/'); ?> - front-page.php:106">
                <p>iPad</p>
            </a>
        </div>
        <div class="category-item">
            <a href="<?php echo site_url('/mac/'); ?> - front-page.php:111"><img
                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Mac_Desk.png" alt=""></a>
            <a href="<?php echo site_url('/mac/'); ?> - front-page.php:113">
                <p>Mac</p>
            </a>
        </div>
        <div class="category-item">
            <a href="<?php echo site_url('/watch/'); ?> - front-page.php:118"><img
                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Watch_Desk.png" alt=""></a>
            <a href="<?php echo site_url('/watch/'); ?> - front-page.php:120">
                <p>Watch</p>
            </a>
        </div>
        <div class="category-item">
            <a href="<?php echo site_url('/phukien/'); ?> - front-page.php:125"><img
                    src="https://cdnv2.tgdd.vn/webmwg/2024/tz/images/desktop/Speaker_Desk.png" alt=""></a>
            <a href="<?php echo site_url('/phukien/'); ?> - front-page.php:127">
                <p>Tai nghe,Loa</p>
            </a>
        </div>
    </div>
    <div class="iphone-class">
        <h2>iPhone</h2>
        <div class="box-iphone">
            <div class="iphone-list">
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 4%</span>
                        <span class="badge new">Mới</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0048180_xanh-lam-khoi.jpeg"
                            alt="iPhone 17 256GB">
                    </div>
                    <div class="iphone-title">iPhone 17 256GB</div>
                    <div class="iphone-price">
                        <span class="price-new">26.990.000₫</span>
                        <span class="price-old">24.990.000₫</span>
                    </div>
                </div>
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 13%</span>
                        <span class="badge installment">Trả góp 0%</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0030444_iphone-16-pro-128gb_240.png"
                            alt="iPhone 16 Pro 128GB">
                    </div>
                    <div class="iphone-title">iPhone 16 Pro 128GB</div>
                    <div class="iphone-price">
                        <span class="price-new">24.990.000₫</span>
                        <span class="price-old">28.990.000₫</span>
                    </div>
                </div>
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 13%</span>
                        <span class="badge installment">Trả góp 0%</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0029155_iphone-16-pro-max-256gb_240.png"
                            alt="iPhone 16 Pro Max 256GB">
                    </div>
                    <div class="iphone-title">iPhone 16 Pro Max 256GB</div>
                    <div class="iphone-price">
                        <span class="price-new">30.290.000₫</span>
                        <span class="price-old">34.990.000₫</span>
                    </div>
                </div>
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 5%</span>
                        <span class="badge installment">Trả góp 0%</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0030771_iphone-16-128gb_240.png"
                            alt="iPhone 16 Plus 128GB">
                    </div>
                    <div class="iphone-title">iPhone 16 Plus 128GB</div>
                    <div class="iphone-price">
                        <span class="price-new">26.390.000₫</span>
                        <span class="price-old">27.990.000₫</span>
                    </div>
                </div>
            </div>
            <div class="iphone-viewall">
                <a href="<?php echo site_url('/iPhone/'); ?> - front-page.php:198">Xem tất cả iPhone &rarr;</a>
            </div>

        </div>
    </div>
    <div class="iphone-class">
        <h2>iPad</h2>
        <div class="box-iphone">
            <div class="iphone-list">
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 3%</span>
                        <span class="badge new">Mới</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0035054_ipad-air-m3-11-inch-wi-fi_240.png"
                            alt="iPad Air M3 11 inch Wi-Fi">
                    </div>
                    <div class="iphone-title">iPad Air M3 11 inch Wi-Fi</div>
                    <div class="iphone-price">
                        <span class="price-new">15.890.000₫</span>
                        <span class="price-old">16.490.000₫</span>
                    </div>
                </div>
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 8%</span>
                        <span class="badge installment">Trả góp 0%</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0035754_ipad-a16-11-inch-wi-fi_240.png"
                            alt="iPad Pro M4 11 inch Wi-Fi">
                    </div>
                    <div class="iphone-title">iPad Pro M4 11 inch Wi-Fi</div>
                    <div class="iphone-price">
                        <span class="price-new">9.190.000₫</span>
                        <span class="price-old">9.990.000₫</span>
                    </div>
                </div>
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 22%</span>
                        <span class="badge installment">Trả góp 0%</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0025630_ipad-air-6-m2-13-inch-wi-fi_240.jpeg"
                            alt="iPad Air M2 13 inch Wi-Fi">
                    </div>
                    <div class="iphone-title">iPad Air M2 13 inch Wi-Fi</div>
                    <div class="iphone-price">
                        <span class="price-new">8.490.000₫</span>
                        <span class="price-old">10.990.000₫</span>
                    </div>
                </div>
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 9%</span>
                        <span class="badge installment">Trả góp 0%</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0009725_ipad-gen-10-th-109-inch-wifi-64gb_240.png"
                            alt="iPad Gen 10 10.9 inch Wi-Fi 64GB">
                    </div>
                    <div class="iphone-title">iPad Gen 10 10.9 inch Wi-Fi 64GB</div>
                    <div class="iphone-price">
                        <span class="price-new">6.590.000₫</span>
                        <span class="price-old">7.299.000₫</span>
                    </div>
                </div>
            </div>
            <div class="iphone-viewall">
                <a href="<?php echo site_url('/iPad/'); ?> - front-page.php:269">Xem tất cả iPad &rarr;</a>
            </div>
        </div>
    </div>
    <div class="iphone-class">
        <h2>Mac</h2>
        <div class="box-iphone">
            <div class="iphone-list">
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 12%</span>
                        <span class="badge new">Mới</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0036014_macbook-air-m4-13-inch-8-core-gpu-16gb-ram-256gb-ssd_240.jpeg"
                            alt="MacBook Air M4 13 inch 256GB">
                    </div>
                    <div class="iphone-title">MacBook Air M4 13 inch 256GB</div>
                    <div class="iphone-price">
                        <span class="price-new">12.190.000₫</span>
                        <span class="price-old">13.990.000₫</span>
                    </div>
                </div>
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 20%</span>
                        <span class="badge installment">Trả góp 0%</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0008502_macbook-air-m2-13-inch-8gb-ram-256gb-ssd_240.png"
                            alt="MacBook Air M2 13 inch 256GB">
                    </div>
                    <div class="iphone-title">MacBook Air M2 13 inch 256GB</div>
                    <div class="iphone-price">
                        <span class="price-new">5.390.000₫</span>
                        <span class="price-old">6.790.000₫</span>
                    </div>
                </div>
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 28%</span>
                        <span class="badge installment">Trả góp 0%</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0022586_macbook-pro-16-inch-m3-pro-2023-18gb-ram-18-core-gpu-512gb-ssd_240.jpeg"
                            alt="MacBook Pro M3 16 inch 512GB">
                    </div>
                    <div class="iphone-title">MacBook Pro M3 16 inch 512GB</div>
                    <div class="iphone-price">
                        <span class="price-new">4.850.000₫</span>
                        <span class="price-old">6.790.000₫</span>
                    </div>
                </div>
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 27%</span>
                        <span class="badge installment">Trả góp 0%</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0036240_macbook-air-m4-15-inch-10-core-gpu-24gb-ram-512gb-ssd_240.jpeg"
                            alt="MacBook Air M4 15 inch 512GB">
                    </div>
                    <div class="iphone-title">MacBook Air M4 15 inch 512GB</div>
                    <div class="iphone-price">
                        <span class="price-new">499.000₫</span>
                        <span class="price-old">690.000₫</span>
                    </div>
                </div>
            </div>
            <div class="iphone-viewall">
                <a href="<?php echo site_url('/mac/'); ?> - front-page.php:339">Xem tất cả Mac &rarr;</a>
            </div>
        </div>
    </div>
    <div class="iphone-class">
        <h2>Watch</h2>
        <div class="box-iphone">
            <div class="iphone-list">
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 40%</span>
                        <span class="badge new">Mới</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0029160_apple-watch-series-10-nhom-gps-42mm-sport-band_240.jpeg"
                            alt="Apple Watch Series 10">
                    </div>
                    <div class="iphone-title">Apple Watch Series 10</div>
                    <div class="iphone-price">
                        <span class="price-new">1.790.000₫</span>
                        <span class="price-old">2.990.000₫</span>
                    </div>
                </div>
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 42%</span>
                        <span class="badge installment">Trả góp 0%</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0030238_apple-watch-ultra-2-gps-cellular-49mm-ocean-2024_240.png"
                            alt="Apple Watch Series 9">
                    </div>
                    <div class="iphone-title">Apple Watch Series 9</div>
                    <div class="iphone-price">
                        <span class="price-new">3.990.000₫</span>
                        <span class="price-old">6.990.000₫</span>
                    </div>
                </div>
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 15%</span>
                        <span class="badge installment">Trả góp 0%</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0032869_apple-watch-se-gps-cellular-2024-sport-band-size-sm_240.jpeg"
                            alt="Apple Watch SE">
                    </div>
                    <div class="iphone-title">Apple Watch SE</div>
                    <div class="iphone-price">
                        <span class="price-new">2.950.000₫</span>
                        <span class="price-old">3.499.000₫</span>
                    </div>
                </div>
                <div class="iphone-item">
                    <div class="iphone-badges">
                        <span class="badge sale">Giảm 3%</span>
                        <span class="badge installment">Trả góp 0%</span>
                    </div>
                    <div class="iphone-img">
                        <img src="https://shopdunk.com/images/thumbs/0030450_apple-watch-se-gps-2024-sport-band-size-sm_240.jpeg"
                            alt="Apple Watch Ultra 2">
                    </div>
                    <div class="iphone-title">Apple Watch Ultra 2</div>
                    <div class="iphone-price">
                        <span class="price-new">15.890.000₫</span>
                        <span class="price-old">16.490.000₫</span>
                    </div>
                </div>
            </div>
            <div class="iphone-viewall">
                <a href="<?php echo site_url('/watch/'); ?> - front-page.php:409">Xem tất cả Watch &rarr;</a>
            </div>
        </div>
    </div>
    <div class="topic-block-body">
        <a href="<?php echo site_url('/shop/'); ?> - front-page.php:414"><img src="https://shopdunk.com/images/uploaded/Trang%20ch%E1%BB%A7/2.jpeg" alt=""></a>
    </div>
</div>

<?php
get_footer();
