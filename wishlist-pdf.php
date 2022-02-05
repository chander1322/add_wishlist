<?php
/**
 * Wishlist page template
 *
 * @author YITH
 * @package YITH\Wishlist\Templates\Wishlist
 * @version 3.0.0
 */

/**
 * Template variables:
 *
 * @var $wishlist              \YITH_WCWL_Wishlist Current wishlist
 * @var $wishlist_items        array Array of items to show for current page
 * @var $page_title            string Page title
 * @var $show_price            bool Whether to show price column
 * @var $show_dateadded        bool Whether to show item date of addition
 * @var $show_stock_status     bool Whether to show product stock status
 * @var $show_price_variations bool Whether to show price variation over time
 * @var $show_variation        bool Whether to show variation attributes when possible
 * @var $show_quantity         bool Whether to show input quantity or not
 * @var $css_url               string Url to css file
 */

if ( ! defined( 'YITH_WCWL' ) ) {
	exit;
} // Exit if accessed directly
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>    
	
	<title><?php echo esc_html( $page_title ); ?></title>

	<link rel="stylesheet" href="<?php echo esc_url( $css_url ); // phpcs:ignore WordPress.WP.EnqueuedResources.NonEnqueuedStylesheet ?>"/>
</head>
<body>	
<!--Front Page-->
<style>
	/*Frontpage*/
	@page{
		margin:160px 0 100px 0px;
	}
	#first-page-image{
		margin-top:-160px;
		margin-bottom:-100px;
		height: 1122px;
		z-index:1;
	}
	#center-content-1{
		position: absolute;
		top:320px;
		left:420px;
		z-index:2;
		transform:scale(3);
	}
	#center-content-2{
		position: absolute;
		top:370px;
		left:318px;
		z-index:2;		
	}
	#center-content-3{
		position: absolute;
		top:430px;
		left:324px;
		z-index:2;		
	}
	#bottom-content{
		position: absolute;
		top:770px;
		left:150px;
		z-index:2;
	}
	#bottom-content-1{
		color:white;
		z-index:2;		
	}
	#bottom-content-2{
		color:white;
		z-index:2;
		position: relative;
		left:21px;
	}
	#price_division{
		display:flex;
		flex-direction:column;
	}
	#custom_price{
		font-size:0.7rem;
	}
	#edit_price{
		font-size:0.7rem;
	}
	/*Frontpage*/
</style>
	<!--Background Image-->	
<?php			
	$image_id = 89;
	if ( $image_id ) {
		$thumbnail_id  = $image_id;
		$thumbnail_url = apply_filters( 'yith_wcwl_product_thumbnail', get_attached_file( $thumbnail_id ), $thumbnail_id );
	}
	if ( empty( $thumbnail_url ) ) {
		$thumbnail_url = function_exists( 'wc_placeholder_img_src' ) ? str_replace( get_home_url(), ABSPATH, wc_placeholder_img_src() ) : '';
	}

	echo apply_filters( 'yith_wcwl_get_product_image_with_path', sprintf( '<img id="first-page-image" src="%s"/>', $thumbnail_url ), $thumbnail_url );
?>
<!--Background Image-->	
<h1 id="center-content-1">CATALOGO</h1>
<h2 id="center-content-2">TITOLO</h2>		
<h4 id="center-content-3">USO INTERNO</h4>
<div id="bottom-content">
	<h4 id="bottom-content-1">NOME CLIENTE</h4>
	<h4 id="bottom-content-2">V. <?php echo date("d.m.Y")?></h4>
</div>
<!--Front Page-->
<style>
	/*Mainpage*/
	header{
		position: fixed; 
		left: 50px; 
		top: -150px; 
		right: 0px;
		height:160px;
	}
	footer{
		position: fixed; 
		left: 50px; 
		bottom: -100px; 
		right: 0px;
		height:100px;
	}
	#main-h1{
		width:700px;
		background-color:#d3d3d3;
		height:37px;
		text-align:center;
		margin-bottom:10px;
	}
	#main-h1 h1{
		padding:5px 0;
	}
	.main-body-table{		
		width:700px;
		margin-left:38px;
		margin-right:55px;				
	}
	.main-body-th{
		border: 1px solid black;
		margin-top:50px;
		
	
	}
	.main-body-td{
		border: 1px solid black;
	}
	#sizeth{
		font-color:red;
		font-size:7px !important;
	}
	/*Mainpage*/
</style>
<!--Front Page-->

<!--Main Page-->
<!--Header-->
<header>hello
	<?php			
		$image_id = 87;
		if ( $image_id ) {
			$thumbnail_id  = $image_id;
		
			$thumbnail_url = apply_filters( 'yith_wcwl_product_thumbnail', get_attached_file( $thumbnail_id ), $thumbnail_id );
		}
		if ( empty( $thumbnail_url ) ) {
			$thumbnail_url = function_exists( 'wc_placeholder_img_src' ) ? str_replace( get_home_url(), ABSPATH, wc_placeholder_img_src() ) : '';
		}
		echo apply_filters( 'yith_wcwl_get_product_image_with_path', sprintf( '<img id="main-page-header-image" src="%s" width="700px" height="100px"/>', $thumbnail_url ), $thumbnail_url );		
	?>
	<div id="main-h1">
		<h1>Equipment</h1>
	</div>
</header>
<!--Header-->
<!--Footer-->
<footer>
	<?php			
		$image_id = 88;
		if ( $image_id ) {
			$thumbnail_id  = $image_id;
		
			$thumbnail_url = apply_filters( 'yith_wcwl_product_thumbnail', get_attached_file( $thumbnail_id ), $thumbnail_id );
		}
		if ( empty( $thumbnail_url ) ) {
			$thumbnail_url = function_exists( 'wc_placeholder_img_src' ) ? str_replace( get_home_url(), ABSPATH, wc_placeholder_img_src() ) : '';
		}
		echo apply_filters( 'yith_wcwl_get_product_image_with_path', sprintf( '<img id="main-page-footer-image" src="%s" width="700px" height="100px"/>', $thumbnail_url ), $thumbnail_url );
	?>
</footer>
<!--Footer-->
<!-- <h1 id="main-h1">Equipment</h1>
<table id="main-table">
	<thead>
		<tr>
			<th>PART NUMBER</th>
			<th>PART NUMBER</th>
			<th>DESCRIPTION</th>
			<th>PRICE</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Data1</td>
			<td>Data2</td>
			<td>Data3</td>
			<td>Data4</td>
		</tr>
	</tbody>
</table> -->
<!--Main Page-->

<!-- <div class="heading">
	<div id="logo">
	    <?php			
	        // $image_id = 63;
			// if ( $image_id ) {
			// 	$thumbnail_id  = $image_id;
			// 	$thumbnail_url = apply_filters( 'yith_wcwl_product_thumbnail', get_attached_file( $thumbnail_id ), $thumbnail_id );
			// }
			// if ( empty( $thumbnail_url ) ) {
			// 	$thumbnail_url = function_exists( 'wc_placeholder_img_src' ) ? str_replace( get_home_url(), ABSPATH, wc_placeholder_img_src() ) : '';
			// }

			// echo apply_filters( 'yith_wcwl_get_product_image_with_path', sprintf( '<img src="%s" width="100px"/>', $thumbnail_url ), $thumbnail_url );
		?>
		<h1><?php echo esc_html( get_option( 'blogname' ) ); ?></h1>
	</div>
	<div id="tagline"><?php echo esc_html( get_option( 'blogdescription' ) ); ?></div>
</div> -->
<!-- TITLE -->
<?php
do_action( 'yith_wcwl_pdf_before_wishlist_title', $wishlist );

if ( ! empty( $page_title ) ) :
	?>
	<div class="wishlist-title">
		<?php /*echo wp_kses_post( apply_filters( 'yith_wcwl_wishlist_title', '<h2>' . esc_html( $page_title ) . '</h2>' ) );*/ ?>
	</div>
	<?php
endif;

do_action( 'yith_wcwl_pdf_before_wishlist', $wishlist );
?>

<!-- WISHLIST TABLE -->
<table class="shop_table cart wishlist_table main-body-table">
	<?php $column_count = 2; ?>

	<thead>

	<tr>
		<th class="product-name main-body-th" id="sizeth">PART 
			<span class="nobr">
				<?php /*echo esc_html( apply_filters( 'yith_wcwl_wishlist_view_name_heading', __( 'Product Name', 'yith-woocommerce-wishlist' ) ) );*/ ?>
			</span>
		</th>

		<th class="product-name main-body-th" id="sizeth">IMAGE
			<span class="nobr">
			</span>
		</th>

		<?php
		if ( $show_price || $show_price_variations ) :
			$column_count ++;
			?>
			<th class="product-price main-body-th"  id="sizeth">
				<span class="nobr">DESCRIPTION
					<?php /* echo esc_html( apply_filters( 'yith_wcwl_wishlist_view_price_heading', __( 'Unit Price', 'yith-woocommerce-wishlist' ) ) ); */?>
				</span>
			</th>
		<?php endif; ?>

		<?php
		if ( $show_quantity ) :
			$column_count ++;
			?>
			<th class="product-quantity main-body-th">
				<span class="nobr">					
					<?php /* echo esc_html( apply_filters( 'yith_wcwl_wishlist_view_quantity_heading', __( 'Quantity', 'yith-woocommerce-wishlist' ) ) ); */?>
				</span>
			</th>
		<?php endif; ?>

		<?php
		if ( $show_stock_status ) :
			$column_count ++;
			?>
			<th class="product-stock-status main-body-th" id="sizeth">
				<span class="nobr">
					PRICE
					<?php /*echo esc_html( apply_filters( 'yith_wcwl_wishlist_view_stock_heading', __( 'Stock status', 'yith-woocommerce-wishlist' ) ) ); */?>
				</span>
			</th>
		<?php endif; ?>

		<?php
		if ( $show_dateadded ) :
			$column_count ++;
			?>
			<th class="product-add-to-cart main-body-th"></th>
		<?php endif; ?>
	</tr>
	</thead>

	<tbody>
	<?php
	if ( count( $wishlist_items ) > 0 ) :
		foreach ( $wishlist_items as $item ) :
			/**
			 * Each of wishlist item
			 *
			 * @var $item \YITH_WCWL_Wishlist_Item
			 */
			global $product;

			$product      = $item->get_product();
			$availability = $product->get_availability();
			$stock_status = isset( $availability['class'] ) ? $availability['class'] : false;

			if ( $product && $product->exists() ) :
				?>
				<tr id="yith-wcwl-row-<?php echo esc_attr( $item->get_product_id() ); ?>" data-row-id="<?php echo esc_attr( $item->get_product_id() ); ?>">

					<td class="product-price main-body-td">		
						<?php 
							$productid = $item->get_product_id();
							echo wc_get_product( $item->get_product_id())->get_sku();
						?>
					</td>

					<td class="product-name main-body-td">
						<a href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $item->get_product_id() ) ) ); ?>">
							<?php echo wp_kses_post( YITH_WCWL_Frontend()->get_product_image_with_path( $product ) ); ?>
							<?php
							// 			$testtt =  YITH_WCWL_Frontend()->get_product_image_with_path( $product );
							// 			echo "<pre>".print_r($testtt, true)."</pre>";
							// 			echo "<pre>".print_r($product, true)."</pre>";
							?>
						</a>
						<?php
							/*
							<a href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $item->get_product_id() ) ) ); ?>"><?php echo esc_html( apply_filters( 'woocommerce_in_cartproduct_obj_title', $product->get_title(), $product ) ); ?></a>

							<?php
							if ( $show_variation && $product->is_type( 'variation' ) ) {
							*/
								/**
								 * If we enter here, product is a variation
								 *
								 * @var $product \WC_Product_Variation
								 */
							/*
								echo wp_kses_post( wc_get_formatted_variation( $product ) );
							}
							?>

							<?php do_action( 'yith_wcwl_table_after_product_name', $item ); ?>
							*/
						?>
					</td>

					<td class="product-price main-body-td">
						<div class="main-body-td-description">	
							<?php 
								$connect0 = new mysqli("localhost","u921180304_kdiesel","CsmU&7rI?","u921180304_kdiesel");
								$id0 = $item->get_id();
								$sql0 = "SELECT * FROM wpu1_yith_wcwl WHERE ID='$id0'";
								$results0 = $connect0->query($sql0);
								$results1 = $results0->fetch_assoc();
								if($results1["edit_description"]!=""){
									$desc = $results1["edit_description"];
									echo $desc;
								}
								else{
									$desc0 = (wc_get_product( $item->get_product_id())->get_data())['description'];
									echo $desc0;
								}							
							?>
						</div>
					</td>

					<td class="product-price main-body-td">
						<div class="price_division">						
							<p id="regular_price">	
								<?php 
                                      $symbol0 = get_woocommerce_currency_symbol();
                                      echo "<span style='font-family: DejaVu Sans; sans-serif;'>$symbol0<span>"." ".
                                            wc_get_product( $item->get_product_id())->get_regular_price()?>
							</p>
							<p id="custom_price">
								<?php	
                                    $symbol1 = get_woocommerce_currency_symbol();							
									$prod_id = $item->get_id();
									$connect0 = new mysqli("localhost","u921180304_kdiesel","CsmU&7rI?","u921180304_kdiesel");
									$sql0 = "SELECT * FROM wpu1_yith_wcwl WHERE ID='$prod_id'";
									$results0 = $connect0->query($sql0); 
									$results1 = $results0->fetch_assoc();
									echo "Custom Price: "."<span style='font-family: DejaVu Sans; sans-serif;'>$symbol1<span>"." ".$results1["custom_price"];
								?>
							</p>							
						</div>						
					</td>
<?php
/*
					<?php if ( $show_price || $show_price_variations ) : ?>
						<td class="product-price main-body-td">
							<?php
							if ( $show_price ) {
								echo wp_kses_post( $item->get_formatted_product_price() );
							}

							if ( $show_price_variations ) {
								echo wp_kses_post( $item->get_price_variation() );
							}
							?>
						</td>
					<?php endif ?>						

					<?php if ( $show_quantity ) : ?>
						<td class="product-quantity main-body-td">
							<?php echo esc_html( $item->get_quantity() ); ?>
						</td>
					<?php endif; ?>

					<?php if ( $show_stock_status ) : ?>
						<td class="product-stock-status main-body-td">
							<?php echo 'out-of-stock' === $stock_status ? '<span class="wishlist-out-of-stock">' . esc_html__( 'Out of stock', 'yith-woocommerce-wishlist' ) . '</span>' : '<span class="wishlist-in-stock">' . esc_html__( 'In Stock', 'yith-woocommerce-wishlist' ) . '</span>'; ?>
						</td>
					<?php endif ?>

					<?php if ( $show_dateadded ) : ?>
						<td class="product-add-to-cart main-body-td">
							<!-- Date added -->
							<?php if ( $show_dateadded && isset( $item['dateadded'] ) ) : ?>
								<span class="dateadded">
									<?php
									// translators: 1. Date product was added to wishlist.
									esc_html( sprintf( __( 'Added on: %s', 'yith-woocommerce-wishlist' ), date_i18n( get_option( 'date_format' ), strtotime( $item['dateadded'] ) ) ) );
									?>
								</span>
							<?php endif; ?>
						</td>
					<?php endif; ?>
*/
?>
				</tr>
				<?php
			endif;
		endforeach;
	else :
		?>
		<tr>
			<td colspan="<?php echo esc_attr( $column_count ); ?>" class="wishlist-empty main-body-td"><?php echo esc_html( apply_filters( 'yith_wcwl_no_product_to_remove_message', __( 'No products added to the wishlist', 'yith-woocommerce-wishlist' ) ) ); ?></td>
		</tr>
	<?php endif; ?>
	</tbody>
</table>
<?php do_action( 'yith_wcwl_pdf_after_wishlist', $wishlist ); ?>
<!--Back Page-->
<style>
	#last-page-image{
		margin-top:-160px;
		margin-bottom:-100px;
		height:1122px;
		z-index:2;
	}
</style>
<!--Background Image-->
<?php			
	$image_id = 86;
	if ( $image_id ) {
		$thumbnail_id  = $image_id;
		$thumbnail_url = apply_filters( 'yith_wcwl_product_thumbnail', get_attached_file( $thumbnail_id ), $thumbnail_id );
	}
	if ( empty( $thumbnail_url ) ) {
		$thumbnail_url = function_exists( 'wc_placeholder_img_src' ) ? str_replace( get_home_url(), ABSPATH, wc_placeholder_img_src() ) : '';
	}

	echo apply_filters( 'yith_wcwl_get_product_image_with_path', sprintf( '<img id="last-page-image" src="%s"/>', $thumbnail_url ), $thumbnail_url );
	echo "hello";
?>
<!--Background Image-->	
<!--Back Page-->
</body>
</html>