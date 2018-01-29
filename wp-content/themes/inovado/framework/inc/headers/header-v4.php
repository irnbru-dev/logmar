<header id="header-v4" class="header clearfix">
		
		<div class="container header-v4-container">
			
			<div class="sixteen columns clearfix">
			
				<div class="four columns alpha">
					<div class="logo">
						<?php if($data['media_logo'] != "") { ?>
							<a href="<?php echo home_url(); ?>/"><img src="<?php echo $data['media_logo']; ?>" alt="<?php bloginfo('name'); ?>" class="logo_standard" /></a>
							<?php if($data['media_logo_retina'] != '') { ?><a href="<?php echo home_url(); ?>/"><img src="<?php echo $data['media_logo_retina'] ?>" width="<?php echo $data['logo_width']; ?>" height="<?php echo $data['logo_height']; ?>" alt="<?php bloginfo('name'); ?>" class="logo_retina" /></a><?php } ?>
						<?php } else { ?>
							<a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
						<?php } ?>
					</div>
				</div>
				
				<?php if($data['check_searchform'] == true) { ?>
					<form action="<?php echo home_url(); ?>/" id="header-searchform" method="get">
					        <input type="text" id="header-s" name="s" value="" autocomplete="off" />
					        <input type="submit" value="Search" id="header-searchsubmit" />
					</form>
				<?php } ?>

				<?php if (class_exists('Woocommerce') && $data['check_woocommerceicon'] == true) { // Check if WooCommerce Exists ?>
					<?php global $woocommerce; ?>
					<a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" id="header-cart" title="<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>"></a>
				<?php } ?>
				
				<!-- <div class="slogan"><?php // echo pre_process_shortcode($data['text_hv4slogan']); ?></div> -->
				
				<div class="phone-top four columns clearfix offset-by-three">
					<div><span>Санкт-Петербург</span><span><a rel="nofollow" itemprop="telephone" href="tel:+78123477790" title="Телефон +7 (812) 347-77-90">+7 (812) 347-77-90</a></span></div>
				</div>

				<div class="phone-top four columns clearfix">
					<div><span>Москва</span><span><a rel="nofollow" itemprop="telephone" href="tel:+74996496000" title="Телефон +7 (499) 649-60-00">+7 (499) 649-60-00</a></span></div>
                </div>

                <div class="clearfix btn-make-order">
                    <a href="http://www.logmar.ru/wpnew/zayavka-na-perevoz-gruzov/">Оставить заявку</a>
                </div>
			
				<!-- <div class="phone-top four columns clearfix">
					<div><span>Владивосток</span><span><a rel="nofollow" itemprop="telephone" href="tel:+74232060430" title="Телефон +7 (4232) 06-04-30">+7 (4232) 06-04-30</a></span></div>
				</div> -->
				
			</div>

		</div>
		
		<div id="navigation" class="sixteen columns clearfix alpha omega">
			<div class="container">
				<div class="sixteen columns">
					<?php wp_nav_menu(array('theme_location' => 'main_navigation', 'menu_id' => 'nav')); ?>
				</div>
			</div>
		</div>
		
</header>