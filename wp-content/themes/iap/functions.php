<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

// add_action( 'get_header', 'bake_my_wp_remove_storefront_sidebar' );
function bake_my_wp_remove_storefront_sidebar() {
	if ( is_product() || is_checkout() || is_cart() ) {
		remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
	}
}


	
add_action( 'woocommerce_after_shop_loop_item', 'iap_show_text', '10' );
function iap_show_text() {
	echo '<p>am facut un hook P10</p>';
}

add_action( 'woocommerce_after_shop_loop_item', 'iap_show_text2', '20' );
function iap_show_text2() {
	echo '<p>am facut un hook P11</p>';
}

add_action( 'woocommerce_after_shop_loop_item', 'iap_show_text3', '30' );
function iap_show_text3() {
	echo '<p>am facut un hook P12</p>';
}


add_action( 'woocommerce_after_shop_loop_item', 'iap_show_text4', '11' );
function iap_show_text4() {
	echo '<p>am facut un hook P14</p>';
}

add_action( 'woocommerce_single_product_summary', 'iap_text_after_title', 18 );
function iap_text_after_title() {
	echo '<p>Acest produst este redus!</p>';
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 20 );



function iap_show_custom_product_message()  {
	
	$product_id = get_the_ID();
	$categorii = get_the_terms( $product_id, 'product_cat' );
	
	foreach ($categorii as $categorie) {
		if ( $categorie->term_id == '24' ) : 
			echo '<div class="woocommerce-notices-wrapper"><div class="woocommerce-message" role="alert">
			Acest produs face parte din gama produselor <strong>ECO</strong>.	</div></div>';  
		endif;
	}

};

add_action( 'woocommerce_single_product_summary', 'iap_show_custom_product_message', $priority = 20 );

function storefront_product_search() {
	if ( storefront_is_woocommerce_activated() ) {
		?>
		<div class="site-search">
			<?php aws_get_search_form( true ); ?>
		</div>
		<?php
	}
}