<?php
/**
 * Template Name: Home template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="hero-banar-top">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-8 col-xl-7">
                <div class="skip-bin-info-holder">
                    <div class="overlay-image-arrow">
                        <img src="<?php echo get_template_directory_uri();?>/img/Component 10 – 1.svg" alt="Arrow Up West Coast">
                    </div>
                    <div class="title">
                        <i class="fa fa-arrow-circle-up"></i> Skin Bin instant quote
                    </div>
                    <div class="desc">
                        Simply type your suburb above and you will be provided with an instant price across our range
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-xl-1">
                <div class="seven-day-skin-info">
                <img src="<?php echo get_template_directory_uri();?>/img/Layer 2.png" alt="West Coast Info" width="100%">
                    <div class="title">7-Day skip bin hire direct to your home covering Perth to Albany</div>
                </div>
            </div>
        </div>
        <div class="home-hero-slider">
            <div class="slider">
                <div class="slider-wrapper">
                    <div class="slide">
                        <div class="image"></div>
                        <div class="entry-content">
                            <div class="icon">
                                <img src="<?php echo get_template_directory_uri();?>/img/" alt="Truck">
                            </div>
                            <div class="info">
                                 We deliver the right skip bin for your residential and commercial projects.
                            </div>
                            <div class="slider-nav">
                                <a href="#"><i class="fa fa-arrow-circle-left"></i></a>
                                <a href="#"><i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home-product-info">
    <div class="home-special-offer-background-overlay">
        <div class="container">
            <div class="home-special-offer">
                <div class="discount-circle">
                    <div class="abs-holder">
                        <div class="save">Save</div>
                        <div class="percent">20%</div>
                    </div>
                </div>
                <div class="entry-content">
                    <div class="title">15 Day Storm Special on 9m3 Skip Bins</div>
                    <div class="desc">BIN SERVICES - Perth, Fremantle, Kwinana, Rockingham, Mandurah, 
                        Pinjarra, Waroona, Harvey, Australind, Bunbury, Busselton, Margaret River</div>
                    <a href="#" class="button confim">FIND OUT MORE INFORMATION</a>
                    <a href="#" class="button text">FIND OUT MORE</a>
                </div>
            </div>
        </div>
    </div>

    <div class="home-products-holder">
        <div class="container">
            <h2><i class="fa fa-arrow-circle-down"></i>Select the right skip bin for your project </h2>
            <div class="home-products">
                <?php
                    $args = array(
                        'post_type' => 'product',
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'product_cat' => 'Bin',
                        'posts_per_page' => 4
                    );
                    $index = 0;
                    $loop = new WP_Query($args);
                    while($loop->have_posts()) : $loop->the_post; global $product;
                    $index++;
                ?>
                <div class="home-product">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');?>
                            <a href='<?php the_permalink();?>'>
                                <img src="<?php echo $image[0];?>" alt="<?php the_field('full_title'); ?>">
                            </a>

                        </div>
                        <div class="col-xl-4 col-md-6">
                            <a href='<?php the_permalink();?>' class="title"><?php the_field('full_title')?></a>
                            <?php the_excerpt();?>
                            <!-- <ul>
                                <li>Garden & Household clean-up</li>
                                <li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul> -->
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="home-product-circles">
                               <div class="row">
                                    <div class="offset-lg-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="cricle">
                                           <div class="abs-circle-holder">
                                            <div class="content-holder">
                                                    Approx x <?php //the_field('approx_trailer');?> 4 traders
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri();?>/img/trailer.svg" alt="Product Trailer">
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="cricle">
                                           <div class="abs-circle-holder">
                                                <div class="content-holder">
                                                        Approx x <?php //the_field('approx_bin');?> 16 wheelie bins 
                                                </div>
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/home-bin.svg" alt="Product home bin">
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href='<?php the_permalink();?>' class="abs-holder-button">GET A QUOTE FOR THIS SKIP BIN</a>
                </div>
                
               
                <?php the_title();?>
                <?php endwhile;?>
                <?php wp_reset_query();?>
                
                <!-- <?php 
                    // if ($product->get_image_id()){
                    //     ?>
                    //     style="backgroud-image:url(<?php
                    //     echo wp_get_attachment_image_src($product->get_image_id(), 'medium')[0];
                    //     ?>);"
                    //     <?php
                    // }
                ?> -->

                <!-- <div class="home-product">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <img src="<?php echo get_template_directory_uri();?>/img/6m3-Skip-Bin.png" alt="Product Placeholder" width= "100%">
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="title">4 Cubic Metre Skip</div>
                            <ul>
                                <li>Garden & Household clean-up</li>
                                <li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="home-product-circles">
                               <div class="row">
                                    <div class=" offset-lg-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="cricle">
                                           <div class="abs-circle-holder">
                                            <div class="content-holder">
                                                    Approx x 4 traders
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri();?>/img/trailer.svg" alt="Product Trailer">
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="cricle">
                                           <div class="abs-circle-holder">
                                            <div class="content-holder">
                                            Approxx 16 wheelie bins 
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri();?>/img/home-bin.svg" alt="Product Trailer">
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="abs-holder-button">GET A QUOTE FOR THIS SKIP BIN</div>
                </div>
                <div class="home-product">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <img src="<?php echo get_template_directory_uri();?>/img/6m3-Skip-Bin.png" alt="Product Placeholder" width= "100%">
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="title">6 Cubic Metre Skip</div>
                            <ul>
                                <li>Garden & Household clean-up</li>
                                <li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="home-product-circles">
                               <div class="row">
                                    <div class=" offset-lg-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="cricle">
                                           <div class="abs-circle-holder">
                                            <div class="content-holder">
                                                    Approx x 4 traders
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri();?>/img/trailer.svg" alt="Product Trailer">
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="cricle">
                                           <div class="abs-circle-holder">
                                            <div class="content-holder">
                                            Approxx 16 wheelie bins 
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri();?>/img/home-bin.svg" alt="Product Trailer">
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="abs-holder-button">GET A QUOTE FOR THIS SKIP BIN</div>
                </div>
                <div class="home-product">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <img src="<?php echo get_template_directory_uri();?>/img/9m3-Skip-Bin.png" alt="Product Placeholder" width= "100%">
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="title">9 Cubic Metre Skip </div>
                            <ul>
                                <li>Garden & Household clean-up</li>
                                <li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="home-product-circles">
                               <div class="row">
                                    <div class=" offset-lg-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="cricle">
                                           <div class="abs-circle-holder">
                                            <div class="content-holder">
                                                    Approx x 4 traders
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri();?>/img/trailer.svg" alt="Product Trailer">
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="cricle">
                                           <div class="abs-circle-holder">
                                            <div class="content-holder">
                                            Approxx 16 wheelie bins 
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri();?>/img/home-bin.svg" alt="Product Trailer">
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="abs-holder-button">GET A QUOTE FOR THIS SKIP BIN</div>
                </div>
                <div class="home-product">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <img src="<?php echo get_template_directory_uri();?>/img/15m3-Skip-Bin.png" alt="Product Placeholder" width= "100%">
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="title">15m3 Hook Lift Bin</div>
                            <ul>
                                <li>Garden & Household clean-up</li>
                                <li>Heavy Loads (dirt, concrete, bricks or rubble)</li>
                                <li>Ideal for narrow alleys or small streets</li>
                                <li>Building Sites</li>
                            </ul>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="home-product-circles">
                               <div class="row">
                                    <div class=" offset-lg-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="cricle">
                                           <div class="abs-circle-holder">
                                            <div class="content-holder">
                                                    Approx x 4 traders
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri();?>/img/trailer.svg" alt="Product Trailer">
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="cricle">
                                           <div class="abs-circle-holder">
                                            <div class="content-holder">
                                            Approxx 16 wheelie bins 
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri();?>/img/home-bin.svg" alt="Product Trailer">
                                            </div>
                                           </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="abs-holder-button">GET A QUOTE FOR THIS SKIP BIN</div>
                </div> -->
            </div>
        </div>
    </div>

   

</div>


<?php
get_footer();
