<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php generate_do_microdata( 'article' ); ?>>
	<div class="inside-article">

			<?php if ( generate_show_entry_header() ) :
			?>

			<?php
				endif;
			?>
		
			<?php 
			global $post;?>

			<?php if (( $post->ID !== 33) && ( $post->ID !== 26875)) { ?>

			<div class="main-header-block full">
				<div class="grid-100">
					<div class="main-header-block__slogan"><?php the_field('main-titleblock-slogan'); ?></div>
					<div class="main-header-block__title"><?php the_field('main-titleblock-title'); ?></div>
					<?php if (( $post->ID == 27181)) { ?>
						<div class="green-block-button">
							<a href="<?php echo home_url(); ?>" class="request fancybox-inline" >На головну</a>
						</div>
					<?php } ?>
				</div>
				
				<?php if( $post->ID == 26756) { ?>
					<?php 
						$rows = get_field('features-blockicon');
						if( $rows ) {?>
						<div class="features-blocks green">
							<div class="grid-100 block-border">
						    <?php foreach( $rows as $row ) {?>
								<div class="grid-33">
									<div class="block-border-data">
							    		<img src="<?php echo $row['features-blockicon-img']; ?>" class="features-blockicon-image">
										<?php echo $row['features-blockicon-text']; ?>
										<span><?php echo $row['features-blockicon-desc']; ?></span>
									</div>
								</div>
						    <?php }?>
						    </div>
						</div>
						<?php } ?>
				<?php } ?>

			</div>

			<?php } ?>

			<?php if( $post->ID == 33) { ?>

			<div class="main-header-block">
				<div class="grid-70">
					<div class="main-header-block__slogan"><?php the_field('main-titleblock-slogan'); ?></div>
					<div class="main-header-block__title"><?php the_field('main-titleblock-title'); ?></div>
				</div>
				<div class="grid-30">
					<?php echo do_shortcode( '[calculator]' );?>
				</div>
				<?php 
				$rows = get_field('features-blockicon');
				if( $rows ) {?>
					<div class="features-blocks">
					<div class="grid-100 block-border">
				    <?php foreach( $rows as $row ) {?>
						<div class="grid-25">
							<div class="block-border-data">
					    		<img src="<?php echo $row['features-blockicon-img']; ?>" class="features-blockicon-image">
								<?php echo $row['features-blockicon-text']; ?>
								<span><?php echo $row['features-blockicon-desc']; ?></span>
							</div>
						</div>
				    <?php }?>
				    </div>
				</div>
				<?php } ?>					
			</div>

		
			<div class="featured-blocks">
				<div class="main-header-block__title">
					<?php the_field('featured-blocks-title', 33); ?>
				</div>
				<?php 
				$rows = get_field('featured-blocks', 33);
				if( $rows ) {?>
				    <?php foreach( $rows as $row ) {?>
				    	<div class="grid-100">
				    		<div class="grid-50 img border">
					    		<img src="<?php echo $row['featured-block-img']; ?>" class="features-image">
					    	</div>
							<div class="grid-25 text border">
								<?php echo $row['featured-block-text']; ?>
							</div>							
							<div class="grid-25 border">
							</div>
						</div>
				    <?php }
				}
				?>
			</div>


			<div class="green-blocks">
				<div class="grid-100">
					<div class="grid-35 img">
						<img src="<?php the_field('green-tariff-image'); ?>" class="green-block-image">
					</div>
					<div class="grid-65 blocktext">
						<div class="green-tariff-title"><?php the_field('green-tariff-title'); ?></div>
						<div class="green-tariff-desc"><?php the_field('green-tariff-desc'); ?></div>
						<?php 
						$rows = get_field('green-tariff-icon');
						if( $rows ) {?>
							<div class="grid-100 green-tariff-icon">
						    <?php foreach( $rows as $row ) {?>
						    		<div class="grid-10">
							    		<img src="<?php echo $row['green-tariff-icon-pic']; ?>" class="green-tariff-icon">
										<?php echo $row['green-tariff-icon-title']; ?>
									</div>
						    <?php } ?>
						    </div>
						<?php } ?>
						<div class="green-tariff-more"><a href="/green-tariff/">Детальніше про зелений тариф</a></div>
					</div>
				</div>

				<div class="grid-100 second">
					<div class="main-header-block__title">
						<?php the_field('green-tariff-title2'); ?>
					</div>
					<?php 
					$rows = get_field('green-tariff-feature');
					if( $rows ) {?>
						<div class="green-tariff-feature">
					    <?php foreach( $rows as $row ) {?>
							<div class="grid-33">
								<?php echo $row['green-tariff-feature-block']; ?>
							</div>							
					    <?php } ?>
							<div class="grid-33 last"></div>	
					</div>
					<?php } ?>
				</div>
				<div id="request" class="green-block-button">
					<a id="green-request" class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
				</div>
			</div>


			<div class="consult-home-blocks">
				<div class="grid-100">
					<div class="grid-35">
						<img src="<?php the_field('consult-home-image'); ?>" class="consult-home-image">
					</div>
					<div class="grid-65">
						<div class="title">
							<?php the_field('consult-home-title'); ?>
						</div>
						<?php echo do_shortcode('[contact-form-7 id="26487" title="Контактная форма 1"]'); ?>
					</div>
				</div>
			</div>


			<div class="calulator-dohid-blocks">
				<div class="grid-100">
					<div class="grid-50">
						<?php echo do_shortcode( '[calculator_dohid]' );?>
					</div>
					<div class="grid-50 background-image">
						<div class="calulator-background-image">
							<img src="../img/calculator-image.png" class="calulator-background-img">
							<div class="grid-100 block-border">
								При розрахунку річної виручки застосований діючий з 01.08.2020р. Тариф для наземної промислової СЕС. Генерація розрахована з урахуванням розташування СЕС у центральному регіоні України. Як середнє зважене значення. Крайні південні регіони України можуть давати генерацію більше на 6-8%. Крайні північні на 8-10% менше.
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="propos-company-blocks">
				<div class="grid-100 list">
					<div class="main-header-block__title">
						<?php the_field('propos-company-title'); ?>
					</div>
					<div class="main-header-block__desc">
						<?php the_field('propos-company-desc'); ?>
					</div>
					<?php 
				$rows = get_field('propos-company-blocks');
				if( $rows ) {?>
					<div class="grid-100 propos-blocks">
				    <?php foreach( $rows as $row ) {?>
						<div class="grid-33">
							<div class="block-border-data">
					    		<img src="<?php echo $row['propos-company-block-img']; ?>" class="propos-company-image">
								<span><?php echo $row['propos-company-block-text']; ?></span>
							</div>
						</div>
				    <?php }?>
				    </div>
				<?php } ?>		
				</div>
				<div class="grid-100 banner-block">
					<img src="<?php the_field('propos-company-banner-photo'); ?>" class="propos-company-banner-photo">
					<div class="propos-company-banner-text">
						<span><?php the_field('propos-company-banner-text'); ?></span>
						<div id="propos-company-more" class="request"><a href="solar-power-plants">Дізнатись більше</a></div>
					</div>
				</div>
			</div>


			<div class="etapi-blocks">
				<div class="grid-100">
					<div class="main-header-block__title">
						Етапи робіт
					</div>
					<?php 
					$rows = get_field('etapi-blocks');
					if( $rows ) {?>
						<input type="range" id="range" value="1" step="0.0001" min="0" max="<?php echo count($rows); ?>" oninput="fontRange(this)" onchange="fontRange(this)">
						<div class="grid-100 etapi-blocks">
					    <?php $i = 1; foreach( $rows as $row ) {?>
							<div class="grid-50 bl<?php echo $i; ?>">
								<div class="block-border-data">
						    		<img src="<?php echo $row['etapi-img']; ?>" class="propos-company-image">
									<span class="text"><?php echo $row['etapi-text']; ?></span>									
									<span class="list"><?php echo $row['etapi-list']; ?></span>
									<div id="etapi-company-more">
										
										<?php if ($i == 1) {?>
											<a class="fancybox-inline request" href="#popupform_shipping">Замовити виїзд</a>
										<?php } elseif ($i == 2) {?>
											<a class="fancybox-inline request" href="#popupform_rozrahunok">Отримати прорахунок</a>
										<?php } else {?>
											<a class="fancybox-inline request" href="#popupform">Замовити консультацію</a>
										<?php } ?>
									</div>
								</div>
								<div class="number_slide"><?php echo '0'.$i++; ?></div>
							</div>
					    <?php }?>
					    </div>
					<?php } ?>
				</div>
			</div>


			<div class="obladnannya-blocks">
				<div class="grid-100">
					<div class="main-header-block__title">
						Обладнання для сонячних електростанцій
					</div>

					<?php if( have_rows('obladnannya-cat-blocks') ): ?>
					<div class="tabs">
					    <?php while( have_rows('obladnannya-cat-blocks') ): the_row(); ?>
					    	<div class="tab">
								<input type="radio" id="tab-<?php echo get_row_index(); ?>" name="tab-group-1" <?php if (get_row_index() == 1) echo 'checked';?>>
						       	<label for="tab-<?php echo get_row_index(); ?>"><?php the_sub_field('obladnannya-cat-name'); ?></label>
						        	<?php $rows_l1 = get_sub_field('obladnannya-cat-block');
									if( $rows_l1 ) { ?>
										<div class="content owl-carousel">
											<?php foreach( $rows_l1 as $rowl1 ) { ?>
												<div class="slide">
													<div class="grid-40">
														<img src="<?php echo $rowl1['obladnannya-block-manuf'];?>" class="propos-company-manuf">
														<img src="<?php echo $rowl1['obladnannya-block-img'];?>" class="propos-company-image">
													</div>
													<div class="grid-60">
														<div class="name"><?php echo $rowl1['obladnannya-block-name'];?></div>
														<div class="haract-title">Основні технічні показники</div>
														<div class="haract-list">
															<?php
																$rows_prh = $rowl1['obladnannya-block-har'];
															 	if ( $rows_prh ) {
															 		foreach( $rows_prh as $row_prh ) {?>
															 			<div class="row">
															 				<div class="text"><?php echo $row_prh['obladnannya-block-har-name']; ?></div>									
																			<div class="list"><?php echo $row_prh['obladnannya-block-har-value']; ?></div>
																		</div>
																	<?php }
																} ?>
														</div>
														<div class="price">
															<div class="from">від </div>
															<div class="green"><?php echo $rowl1['obladnannya-block-price'];?></div>
															<?php if (get_row_index() == 1) {?>
																<div> / Ват</div>
															<?php } ?>
														</div>
													</div>
												</div>
											<?php } ?>
										</div>
									<?php } ?>
						    </div>
					    <?php endwhile; ?>
					</div>
					<?php endif; ?>
					<div class="shop-company-link">
						<a href="https://isolar.km.ua/ua/" class="link">В магазин</a>
					</div>
				</div>
			</div>

			<?php }
			
			if( $post->ID == 26705) {?>
				<div class="contact-blocks">
					<div class="grid-100">
						<div class="grid-33">
							<div class="phone"></div>
							<div class="cont"><?php echo get_option('admin_phone');?></div>
						</div>						
						<div class="grid-33">
							<div class="email"></div>
							<div class="cont"><?php echo get_option('admin_email');?></div>
						</div>
						<div class="grid-33">
							<div class="address"></div>
							<div class="cont"><?php echo get_field('contact-address');?></div>
						</div>
					</div>
				</div>
			<?php } ?>

			<?php if( $post->ID == 26719) {?>

			<div class="featured-blocks about">
				<div class="main-header-block__title">
					<?php the_field('featured-blocks-title', 33); ?>
				</div>
				<?php 
				$rows = get_field('featured-blocks', 33);
				if( $rows ) {?>
				    <?php foreach( $rows as $row ) {?>
				    	<div class="grid-100">
				    		<div class="grid-50 img border">
					    		<img src="<?php echo $row['featured-block-img']; ?>" class="features-image">
					    	</div>
							<div class="grid-25 text border">
								<?php echo $row['featured-block-text']; ?>
							</div>							
							<div class="grid-25 border">
							</div>
						</div>
				    <?php }
				}
				?>
			</div>
			<?php } ?>


			<?php if( $post->ID == 26727) {?>

			<div class="vacancy-blocks">
				<?php 
				$rows = get_field('vacancy_block');
				if( $rows ) {?>
				    <?php foreach( $rows as $row ) {?>
				    	<div class="grid-100 vacancy-list">
				    		<div class="vacancy-block-title">
				    			Вакансія "<?php echo $row['vacancy_block_title']; ?>"
				    		</div>
				    		<div class="vacancy-block-desc">
				    			<?php echo $row['vacancy_block_desc']; ?>
				    		</div>
				    		<div class="grid-100">
					    		<div class="grid-50 vacancy-block">
					    			<div class="vacancy-block-label">
					    				Завдання
					    			</div>
					    			<div class="vacancy-block-value">
					    				<?php echo $row['vacancy_block_task']; ?>
					    			</div>
						    	</div>
					    		<div class="grid-50 vacancy-block">
					    			<div class="vacancy-block-label">
					    				Вимоги
					    			</div>
					    			<div class="vacancy-block-value">
					    				<?php echo $row['vacancy_block_need']; ?>
					    			</div>
						    	</div>
					    	</div>
				    		<div class="grid-100">
					    		<div class="grid-50 vacancy-block">
					    			<div class="vacancy-block-label">
					    				Умови роботи
					    			</div>
					    			<div class="vacancy-block-value">
					    				<?php echo $row['vacancy_block_time']; ?>
					    			</div>
						    	</div>
					    		<div class="grid-50 vacancy-block">
					    			<div class="vacancy-block-label">
					    				Оплата
					    			</div>
					    			<div class="vacancy-block-value">
					    				<?php echo $row['vacancy_block_pay']; ?>
					    			</div>
						    	</div>
					    	</div>
					    	<div class="vacancy-more">
								<a class="fancybox-inline request" href="#popupform">Відгукнутись</a>
							</div>
						</div>
				    <?php }
				}
				?>
			</div>
			<?php } ?>


			<?php if( $post->ID == 26741) {?>

			<div class="calulator-dohid-blocks page">
				<div class="grid-100">
					<div class="grid-50">
						<?php echo do_shortcode( '[calculator_dohid]' );?>
					</div>
					<div class="grid-50 background-image">
						<div class="calulator-background-image">
							<img src="/img/calculator-image.png" class="calulator-background-img">
							<div class="grid-100 block-border">
								При розрахунку річної виручки застосований діючий з 01.08.2020р. Тариф для наземної промислової СЕС. Генерація розрахована з урахуванням розташування СЕС у центральному регіоні України. Як середнє зважене значення. Крайні південні регіони України можуть давати генерацію більше на 6-8%. Крайні північні на 8-10% менше.
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="consult-home-blocks calc-page">
				<div class="grid-100">
					<?php if ( !wp_is_mobile() ) { ?>
					<div class="grid-35">
						<img src="<?php the_field('consult-home-image', 33); ?>" class="consult-home-image">
					</div>
					<?php } ?>
					<div class="grid-65">
						<div class="title">
							<?php the_field('consult-home-title', 33); ?>
						</div>
						<?php echo do_shortcode('[contact-form-7 id="26487" title="Контактная форма 1"]'); ?>
					</div>
					<?php if ( wp_is_mobile() ) { ?>
					<div class="grid-35">
						<img src="<?php the_field('consult-home-image', 33); ?>" class="consult-home-image">
					</div>
					<?php } ?>
				</div>
			</div>

			<div class="calulator-featured-ses">
				<div class="grid-100 second">
					<div class="main-header-block__title">
						<?php the_field('green-tariff-title2'); ?>
					</div>
					<?php 
						$chunks = array_chunk(get_field('green-tariff-feature'), 3);
						foreach ($chunks as $chunk) {?>
						    <div class="grid-100 green-tariff-feature">
							<?php foreach ($chunk as $row) {?>
								<div class="grid-33">
									<?php echo $row['green-tariff-feature-block']; ?>
								</div>
							<?php } ?>
							</div>
						<?php } ?>
					<div id="request" class="green-block-button">
						<a id="green-request" class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
					</div>
				</div>
			</div>

			<?php } ?>

			<?php if( $post->ID == 26756) {?>

			<div class="quiz-block">
				<div class="main-header-block__title">
					<span class="bl"><?php the_field('quiz-block-title'); ?></span>
				</div>
				<div class="grid-100">
					<div class="grid-45 img-quiz">
						<img src="<?php the_field('quiz-block-img'); ?>" class="consult-home-image">
					</div>
					<div class="grid-55 quiz-block-code">
						<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
					</div>
				</div>
			</div>

			<?php } ?>


			<?php if( $post->ID == 26781) {?>
			
				<?php if( have_rows('solar-power-plants-fb7') ): ?>
						<div class="solar-power-block fb7 type">
							<div class="main-header-block__title">
								<span class="bl">Типи сонячних електростанцій</span>
							</div>
							<div class="grid-100">
								<?php while( have_rows('solar-power-plants-fb7') ) : the_row(); ?>
								<div class="grid-33">
									<div class="block-prod">
								    	<div class="block-prod-title">
								    		<img src="<?php the_sub_field('solar-power-plants-typeicon'); ?>" class="solar-power-image">
								    		<div class="prod-name"><?php the_sub_field('solar-power-plants-typename'); ?></div>
								    	</div>
								    	<div class="prod-desc"><?php the_sub_field('solar-power-plants-typedesc'); ?></div>
									</div>
								</div>
								<?php endwhile;?>
							</div>
    					</div>
    				<?php endif; ?>					

    				<div class="calulator-featured-ses">
						<div class="grid-100 second">
							<div class="main-header-block__title">
								<?php the_field('green-tariff-title2', 26741); ?>
							</div>
							<?php 
								$chunks = array_chunk(get_field('green-tariff-feature', 26741), 3);
								foreach ($chunks as $chunk) {?>
								    <div class="grid-100 green-tariff-feature">
									<?php foreach ($chunk as $row) {?>
										<div class="grid-33">
											<?php echo $row['green-tariff-feature-block']; ?>
										</div>
									<?php } ?>
									</div>
								<?php } ?>
							<div id="request" class="green-block-button">
								<a id="green-request" class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
							</div>
						</div>
					</div>


					<?php if( have_rows('solar-power-plants-fb6') ): ?>
						<div class="solar-power-block fb6">
							<div class="main-header-block__title">
								<span class="bl">Складові сонячних електростанцій</span>
							</div>
							<div class="grid-100">
								<?php while( have_rows('solar-power-plants-fb6') ) : the_row(); ?>
								<div class="grid-33">
									<div class="block-prod">
								    	<img src="<?php the_sub_field('solar-power-plants-prodphoto'); ?>" class="solar-power-image">
								    	<div class="prod-name"><?php the_sub_field('solar-power-plants-prodname'); ?></div>
								    	<div class="prod-desc"><?php the_sub_field('solar-power-plants-proddesc'); ?></div>
									</div>
								</div>
								<?php endwhile;?>
    						    <div class="request-block-button">
									<a class="request" href="https://isolar.km.ua/ua/">Підібрати обладанання</a>
								</div>
							</div>
    					</div>
    				<?php endif; ?>

				<?php
					if( have_rows('solar-power-plants-fb1') ): ?>
						<div class="solar-power-block fb1">
							<?php while( have_rows('solar-power-plants-fb1') ) : the_row(); ?>
							<div class="main-header-block__title">
								<span class="bl"><?php the_sub_field('solar-power-first-title'); ?></span>
							</div>
							<div class="grid-100">
									<div class="grid-50 img">
								    <img src="<?php the_sub_field('solar-power-first-img'); ?>" class="solar-power-image">
								</div>
								<div class="grid-50 text">
								    <?php the_sub_field('solar-power-first-text'); ?>
								    <div id="request" class="green-block-button">
										<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
									</div>
								</div>
    						</div>
    						<?php endwhile;?>
    					</div>
    				<?php endif; ?>

					<?php if( have_rows('solar-power-plants-fb2') ): ?>
						<div class="solar-power-block fb2">
							<div class="grid-100">
								<?php while( have_rows('solar-power-plants-fb2') ) : the_row(); ?>
								<div class="grid-50 text">
								    <div class="main-header-block__title">
										<span class="bl small"><?php the_sub_field('solar-power-sec-title'); ?></span>
									</div>
								    <?php the_sub_field('solar-power-sec-text'); ?>
								    <div id="request" class="green-block-button">
										<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
									</div>
								</div>
								<div class="grid-50 img">
								    <img src="<?php the_sub_field('solar-power-sec-img'); ?>" class="solar-power-image">
								</div>
    							<?php endwhile;?>
    						</div>
    					</div>
    				<?php endif; ?>

					<?php if( have_rows('solar-power-plants-fb3') ): ?>
						<div class="solar-power-block fb3">
							<?php while( have_rows('solar-power-plants-fb3') ) : the_row(); ?>
							<div class="main-header-block__title">
								<span class="bl"><?php the_sub_field('solar-power-thr-title'); ?></span>
							</div>
							<div class="grid-100">
								<div class="grid-50 img">
								    <img src="<?php the_sub_field('solar-power-thr-img'); ?>" class="solar-power-image">
								</div>
								<div class="grid-50 text">
								    <?php the_sub_field('solar-power-thr-text'); ?>
								    <div id="request" class="green-block-button">
										<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
									</div>
								</div>	
    						</div>
    						<?php endwhile;?>
    					</div>
    				<?php endif; ?>

					<?php if( have_rows('solar-power-plants-fb4') ): ?>
						<div class="solar-power-block fb4">
							<div class="grid-100">
								<?php while( have_rows('solar-power-plants-fb4') ) : the_row(); ?>
								<div class="grid-50 text">
									<div class="main-header-block__title">
										<span class="bl small"><?php the_sub_field('solar-power-for-title'); ?></span>
									</div>
								    <?php the_sub_field('solar-power-for-title'); ?>
								    <?php the_sub_field('solar-power-for-text'); ?>
								    <div id="request" class="green-block-button">
										<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
									</div>
								</div>
								<div class="grid-50 img">
								    <img src="<?php the_sub_field('solar-power-for-img'); ?>" class="solar-power-image">
								</div>
    							<?php endwhile;?>
    						</div>
    					</div>
    				<?php endif; ?>

					<?php if( have_rows('solar-power-plants-fb8') ): ?>
						<div class="solar-power-block fb8">
							<?php while( have_rows('solar-power-plants-fb8') ) : the_row(); ?>
							<div class="main-header-block__title">
								<span class="bl"><?php the_sub_field('solar-power-eight-title'); ?></span>
							</div>
							<div class="grid-100">
								<div class="grid-50 img">
								    <img src="<?php the_sub_field('solar-power-eight-img'); ?>" class="solar-power-image">
								</div>
								<div class="grid-50 text">
								    <?php the_sub_field('solar-power-eight-text'); ?>
								</div>	
    						</div>
    						<?php endwhile;?>
    					</div>
    				<?php endif; ?>

					<?php if( have_rows('solar-power-plants-fb5') ): ?>
						<div class="solar-power-block fb5">
							<?php while( have_rows('solar-power-plants-fb5') ) : the_row(); ?>
							<div class="main-header-block__title">
								<span class="bl"><?php the_sub_field('solar-power-fift-title'); ?></span>
							</div>
							<div class="grid-100">
								<div class="grid-50 img">
								    <img src="<?php the_sub_field('solar-power-fift-img'); ?>" class="solar-power-image">
								</div>
								<div class="grid-50 text">
								    <?php the_sub_field('solar-power-fift-text'); ?>
								</div>	
    						</div>
    						<?php endwhile;?>
    					</div>
    				<?php endif; ?>

			<?php } ?>


			<?php if( $post->ID == 26875) {?>
				<?php
					if( have_rows('service-header') ): ?>
						<div class="service-header">
							<?php while( have_rows('service-header') ) : the_row(); ?>
							<div class="grid-100">
								<div class="grid-50 text">
									<div class="main-header-block__title">
										<span class="bl"><?php the_sub_field('service-header-text'); ?></span>
									</div>
								    <?php the_sub_field('service-header-desc'); ?>
								    <div id="request" class="green-block-button">
										<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
									</div>
								</div>
								<div class="grid-50 img">
								    <img src="<?php the_sub_field('service-header-img'); ?>" class="solar-power-image">
								</div>
    						</div>
    						<?php endwhile;?>
    					</div>
		    		<?php endif; ?>

		    		<?php
					if( have_rows('service-garantiya-block') ): ?>
						<div class="service-garantiya-block">
							<?php while( have_rows('service-garantiya') ) : the_row(); ?>
							<div class="grid-100">
								<div class="grid-30 img">
								    <img src="<?php the_sub_field('service-garantiya-img'); ?>" class="solar-power-image">
								</div>
								<div class="grid-70 text">
								    <div class="service-garantiya-title">
										<?php the_sub_field('service-garantiya-title'); ?>
									</div>
									<div class="service-garantiya-desc">
										<?php the_sub_field('service-garantiya-desc'); ?>
									</div>
									<div class="service-garantiya-form">
									    <?php echo do_shortcode('[contact-form-7 id="26487" title="Контактная форма 1"]'); ?>
									</div>
								</div>
    						</div>
    						<?php endwhile;?>
    					</div>
		    		<?php endif;?>

					<div class="service-feature">
						<?php while( have_rows('service-header') ) : the_row(); ?>
							<div class="main-header-block__title">
								<span class="bl small">
									<?php the_sub_field('service-garantiya-title'); ?>
    							</span>
    						</div>
						<?php endwhile;?>
						
						<?php 
							$chunks = array_chunk(get_field('service-garantiya'), 3);
							foreach ($chunks as $chunk) {?>
							    <div class="grid-100 green-tariff-feature">
									<?php foreach ($chunk as $row) {?>
										<div class="grid-33">
											<?php echo $row['service-garantiya-block']; ?>
										</div>
									<?php } ?>
								</div>
							<?php } ?>
						<div id="request" class="service-block-button">
							<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
						</div>
					</div>

					<div class="service-subscr">
						<div class="grid-100">
							<div class="grid-35">
								<img src="<?php the_field('consult-service-image'); ?>" class="consult-home-image">
							</div>
							<div class="grid-65">
								<div class="title">
									<?php the_field('consult-service-title'); ?>
								</div>
								<div class="desc">
									<?php the_field('consult-service-desc'); ?>
								</div>
								<?php echo do_shortcode('[contact-form-7 id="26487" title="Контактная форма 1"]'); ?>
							</div>
						</div>
					</div>

					<?php if( have_rows('service-dogovir') ): ?>
						<div class="service-dogovir">
							<?php while( have_rows('service-dogovir') ) : the_row(); ?>
								<div class="main-header-block__title">
									<?php the_sub_field('service-dogovir-text'); ?>
								</div>
								<?php 
								$rows = get_sub_field('service-dogovir-block');
								if( $rows ) {?>
									<div class="grid-100 service-dogovir-block">
								    <?php foreach( $rows as $row ) {?>
										<div class="grid-33">
											<div class="block-border-data">
									    		<img src="<?php echo $row['service-dogovir-block-icon']; ?>" class="propos-company-image">
												<span><?php echo $row['service-dogovir-block-text']; ?></span>
											</div>
										</div>
								    <?php }?>
								    </div>
								<?php } ?>
							<?php endwhile;?>
						</div>
					<?php endif;?>

					<div class="service-price">
						<div class="grid-100">
							<div class="main-header-block__title">
								<?php the_field('service-dogovir-price-text'); ?>
							</div>
							<div class="grid-60">
								<?php echo do_shortcode('[table id=1 /]');?>
							</div>
							<div class="grid-40">
								<div class="desc">
									<?php the_field('service-dogovir-price-desc'); ?>
									<div id="request" class="service-price-button">
										<a id="green-request" class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			<?php } ?>


			<?php if( $post->ID == 26940) {?>
				<?php
					if( have_rows('kripl-header') ): ?>
						<div class="kripl-header">
							<?php while( have_rows('kripl-header') ) : the_row(); ?>
							<div class="grid-100">
								<div class="grid-50 text">
									<div class="main-header-block__title">
										<span class="bl"><?php the_sub_field('kripl-header-text'); ?></span>
									</div>
								    <?php the_sub_field('kripl-header-desc'); ?>
								    <div id="request" class="green-block-button">
										<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
									</div>
								</div>
								<div class="grid-50 img">
								    <img src="<?php the_sub_field('kripl-header-img'); ?>" class="solar-power-image">
								</div>
    						</div>
    						<?php endwhile;?>
    					</div>
		    		<?php endif; ?>

					<div class="kripl-feature grid-100">
						<?php while( have_rows('kripl-header') ) : the_row(); ?>
						<div class="grid-35 img">
						    <img src="<?php the_sub_field('kripl-list-image'); ?>" class="solar-power-image">
						</div>
						<div class="grid-65 text">
							<div class="main-header-block__title">
								<span class="bl small">
									<?php the_sub_field('kripl-list-title'); ?>
    							</span>
    						</div>
    						<div class="kripl-type-list">
	    						<?php 
								$chunks = array_chunk(get_field('kripl-type-list'), 2);
								foreach ($chunks as $chunk) {?>
									<div class="grid-100">
									<?php foreach ($chunk as $row) {?>
										<div class="grid-50">
											<span><?php echo $row['kripl-type-block-item']; ?></span>
										</div>
									<?php } ?>
									</div>
								<?php } ?>
							</div>
    					</div>
						<?php endwhile;?>	
					</div>


					<div class="kripl-typeimg grid-100">
						<?php while( have_rows('kripl-type-listart') ) : the_row(); ?>
						<div class="grid-33">
						    <div class="img">
						    	<img src="<?php the_sub_field('kripl-type-listart-img'); ?>" class="solar-power-image">
						    </div>
						    <div class="title">
						    	<?php the_sub_field('kripl-type-listart-name'); ?>
						    </div>
						    <div class="link green-block-button">
								<a class="request" href="<?php the_sub_field('kripl-type-listart-link'); ?>">Детальніше</a>
							</div>
						</div>
						<?php endwhile;?>	
					</div>

					<div class="kripl-propose-blocks">
						<div class="main-header-block__title">
							Компанія ISolar пропонує
						</div>
						<?php 
							$chunks = array_chunk(get_field('propose-feature'), 3);
							foreach ($chunks as $chunk) {?>
								<div class="grid-100 second">
								<?php foreach ($chunk as $row) {?>
									<div class="grid-33">
										<span><?php echo $row['propose-feature-text']; ?></span>
									</div>
								<?php } ?>
								</div>
							<?php } ?>
						<div id="request" class="request-block-button">
							<a id="green-request" class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
						</div>
					</div>

					<div class="feature-company-blocks">
						<div class="grid-100 list">
							<div class="main-header-block__title">
								<?php the_field('feature-company-title'); ?>
							</div>
							<?php 
							$chunks = array_chunk(get_field('feature-company-blocks'), 2);
							foreach ($chunks as $chunk) {?>
								<div class="grid-100 feature-blocks">
								<?php foreach ($chunk as $row) {?>
									<div class="grid-50">
										<div class="block-border-data">
								    		<img src="<?php echo $row['feature-company-block-img']; ?>" class="propos-company-image">
											<div class="title"><?php echo $row['feature-company-block-title']; ?></div>
											<div class="desc"><?php echo $row['feature-company-block-desc']; ?></div>
										</div>
									</div>
								<?php } ?>
								</div>
							<?php } ?>
						</div>
					</div>

					<?php if( have_rows('kripl-posts-system') ): ?>
						<div id="kripl-on-stal-otsunk-profil" class="kripl-posts-list1">
							<div class="main-header-block__title">
								<span class="bl"><?php the_field('kripl-posts-system-header'); ?></span>
							</div>
							<?php while( have_rows('kripl-posts-system') ) : the_row(); ?>
							<div class="grid-100">
								<div class="grid-50 text">
								    <div class="title"><?php the_sub_field('kripl-posts-system-title'); ?></div>
								    <div class="desc"><?php the_sub_field('kripl-posts-system-text'); ?></div>
								</div>
								<div class="grid-50 img">
								    <img src="<?php the_sub_field('kripl-posts-system-img'); ?>" class="solar-power-image">
								</div>

    						</div>
    						<?php endwhile;?>
    					</div>
    				<?php endif; ?>

					<?php if( have_rows('kripl-posts-types') ): ?>
						<div class="kripl-posts-list2">
							<div class="main-header-block__title">
								<span class="bl"><?php the_field('kripl-posts-types-header'); ?></span>
							</div>
							<div class="grid-100">
							<?php while( have_rows('kripl-posts-types') ) : the_row(); ?>
									<div class="grid-50 text">
									    <div class="title"><?php the_sub_field('kripl-posts-types-title'); ?></div>
									    <div class="desc"><?php the_sub_field('kripl-posts-types-text'); ?></div>
									</div>
							<?php endwhile;?>
							</div>
							<div class="grid-100 img">
							    <img src="<?php the_field('kripl-posts-types-img'); ?>" class="solar-power-image">
							</div>
    					</div>
    				<?php endif; ?>


					<?php if( have_rows('kripl-posts-dah') ): ?>
						<?php while( have_rows('kripl-posts-dah') ) : the_row(); ?>
						<div id="kripl-posts-dah" class="kripl-posts-dah">
							<div class="main-header-block__title">
								<span class="sub"><?php the_sub_field('kripl-posts-dah-sub'); ?></span>
								<span class="bl"><?php the_sub_field('kripl-posts-dah-title'); ?></span>
							</div>
							<div class="grid-100 block1">
								<div class="grid-50">
									<div class="text"><?php the_sub_field('kripl-posts-dah-block1-text'); ?></div>
								</div>
							    <div class="grid-50">
									<img src="<?php the_sub_field('kripl-posts-dah-block1-img'); ?>" class="kripl-dah-image">
								</div>
							</div>
							<div class="grid-100 block2">
								<div class="grid-50 text_title"><?php the_sub_field('kripl-posts-dah-block2-title'); ?></div>
								<div class="grid-50 text"><?php the_sub_field('kripl-posts-dah-block2-text'); ?></div>
							</div>
    					</div>
    					<div class="kripl-posts-dah-features">
							<div class="grid-100">
								<div class="grid-33">
									<div class="block">
										<div class="img"><img src="<?php the_sub_field('kripl-posts-dah-block3-icon1'); ?>" class="kripl-dah-image"></div>
										<div class="title"><?php the_sub_field('kripl-posts-dah-block3-title1'); ?></div>
										<div class="desc"><?php the_sub_field('kripl-posts-dah-block3-desc1'); ?></div>
									</div>
									<div class="block">
										<div class="img"><img src="<?php the_sub_field('kripl-posts-dah-block3-icon2'); ?>" class="kripl-dah-image"></div>
										<div class="title"><?php the_sub_field('kripl-posts-dah-block3-title2'); ?></div>
										<div class="desc"><?php the_sub_field('kripl-posts-dah-block3-desc2'); ?></div>
									</div>
								</div>
								<div class="grid-33">
									<img src="<?php the_sub_field('kripl-posts-dah-block3-img'); ?>" class="kripl-dah-image">
								</div>
								<div class="grid-33">
									<div class="block">
										<div class="img"><img src="<?php the_sub_field('kripl-posts-dah-block3-icon3'); ?>" class="kripl-dah-image"></div>
										<div class="title"><?php the_sub_field('kripl-posts-dah-block3-title3'); ?></div>
										<div class="desc"><?php the_sub_field('kripl-posts-dah-block3-desc3'); ?></div>
									</div>
									<div class="block">
										<div class="img"><img src="<?php the_sub_field('kripl-posts-dah-block3-icon4'); ?>" class="kripl-dah-image"></div>
										<div class="title"><?php the_sub_field('kripl-posts-dah-block3-title4'); ?></div>
										<div class="desc"><?php the_sub_field('kripl-posts-dah-block3-desc4'); ?></div>
									</div>
								</div>
    						</div>
    						<div class="kripl-dah-tabs grid-100">
								<div class="main-header-block__title">
									<span class="bl">Плаский дах</span>
								</div>
								<div class="grid-100 block-tab-cont">
									<?php if( have_rows('kripl-dah-tabs-blocks') ): ?>
									<div class="tabs">
									    <?php while( have_rows('kripl-dah-tabs-blocks') ): the_row(); ?>
									    	<div class="tab">
												<input type="radio" id="tab-<?php echo get_row_index(); ?>" name="tab-group-1" <?php if (get_row_index() == 1) echo 'checked';?>>
										       	<label for="tab-<?php echo get_row_index(); ?>"><?php the_sub_field('kripl-dah-cat-name'); ?></label>
										        	<?php $rows_l1 = get_sub_field('kripl-dah-cat-block');
													if( $rows_l1 ) {?>
														<div class="grid-100 content">
															<?php foreach( $rows_l1 as $rowl1 ) {?>
																<div class="grid-100 first">
																	<div class="grid-50">
																		<div class="title"><?php echo $rowl1['kripl-dah-block-title'];?></div>
																		<div class="desc text"><?php echo $rowl1['kripl-dah-block-desc'];?></div>
																	</div>
																	<div class="grid-50 img-right">
																		<img src="<?php echo $rowl1['kripl-dah-block-img'];?>" class="kripl-dah-image">
																	</div>
																</div>
																<div class="grid-100 last">
																	<div class="grid-33">
																		<img src="<?php echo $rowl1['kripl-dah-block-img2'];?>" class="kripl-dah-image">
																	</div>
																	<div class="grid-33">
																		<div class="block">
																			<img src="<?php echo $rowl1['kripl-dah-block-bl33-icon'];?>" class="kripl-dah-image">
																			<div class="title"><?php echo $rowl1['kripl-dah-block-bl33-title'];?></div>
																			<div class="desc text"><?php echo $rowl1['kripl-dah-block-bl33-desc'];?></div>
																		</div>
																		<div class="block">
																			<img src="<?php echo $rowl1['kripl-dah-block-bl33-icon2'];?>" class="kripl-dah-image">
																			<div class="title"><?php echo $rowl1['kripl-dah-block-bl33-title2'];?></div>
																			<div class="desc text"><?php echo $rowl1['kripl-dah-block-bl33-desc2'];?></div>
																		</div>
																	</div>
																	<div class="grid-33">
																		<div class="block">
																			<img src="<?php echo $rowl1['kripl-dah-block-bl33-icon3'];?>" class="kripl-dah-image">
																			<div class="title"><?php echo $rowl1['kripl-dah-block-bl33-title3'];?></div>
																			<div class="desc text"><?php echo $rowl1['kripl-dah-block-bl33-desc3'];?></div>
																		</div>
																		<div class="block">
																			<img src="<?php echo $rowl1['kripl-dah-block-bl33-icon4'];?>" class="kripl-dah-image">
																			<div class="title"><?php echo $rowl1['kripl-dah-block-bl33-title4'];?></div>
																			<div class="desc text"><?php echo $rowl1['kripl-dah-block-bl33-desc4'];?></div>
																		</div>
																	</div>
																</div>
															<?php } ?>
														</div>
													<?php } ?>		
												</div>
									    <?php endwhile; ?>
									</div>
									<?php endif; ?>
								</div>
							</div>
    					<?php endwhile;?>
    				<?php endif; ?>

			<?php } ?>

			<?php if( $post->ID == 26995) {?>
				<?php
					if( have_rows('green-header') ): ?>
						<div class="green-header">
							<?php while( have_rows('green-header') ) : the_row(); ?>
							<div class="grid-100">
								<div class="grid-50 text">
									<div class="main-header-block__title">
										<span class="bl"><?php the_sub_field('green-header-text'); ?></span>
									</div>
								    <?php the_sub_field('green-header-desc'); ?>
								    <div id="request" class="green-block-button">
										<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
									</div>
								</div>
    						</div>
    						<?php endwhile;?>
    					</div>
		    		<?php endif; ?>

					<?php
						if( have_rows('green-consult-block') ): ?>
							<div class="green-consult-block">
								<?php while( have_rows('green-consult-block') ) : the_row(); ?>
								<div class="green-consult-blocks">
									<div class="grid-100">
										<div class="grid-35">
											<img src="<?php the_sub_field('green-consult-image'); ?>" class="consult-home-image">
										</div>
										<div class="grid-65">
											<div class="title">
												<?php the_sub_field('green-consult-title'); ?>
											</div>
											<div class="desc">
												<?php the_sub_field('green-consult-desc'); ?>
												<div class="green-block-button">
													<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
												</div>
											</div>
										</div>
									</div>
								</div>
    							<?php endwhile;?>
							</div>
		    		<?php endif; ?>

					<?php if( have_rows('green-base-list') ): ?>
						<div class="green-base">
							<div class="main-header-block__title">
								<span class="bl"><?php the_field('green-base-title'); ?></span>
							</div>
							<div class="main-header-block__sub">
								<?php the_field('green-base-subtitle'); ?>
							</div>
							<div class="grid-100">
							<?php while( have_rows('green-base-list') ) : the_row(); ?>
									<div class="grid-33">
									    <div class="img"></div>
									    <div class="title"><?php the_sub_field('green-base-list-item'); ?></div>
									</div>
							<?php endwhile;?>
							</div>
    					</div>
    				<?php endif; ?>

					<div class="green-contact-blocks">
						<div class="grid-100">
							<div class="title"><?php the_field('green-contact-title'); ?></div>
							<div class="desc"><?php the_field('green-contact-tariff'); ?></div>
							<?php echo do_shortcode('[contact-form-7 id="27044" title="Контактная форма 2"]'); ?>
						</div>
					</div>
				
					<div class="green-etapi-blocks">
						<div class="grid-100 list">
							<div class="main-header-block__title">
								<span class="bl"><?php the_field('green-etapi-title'); ?></span>
							</div>
							<?php 
							$chunks = array_chunk(get_field('green-etapi-blocks'), 3);
							$i = 1; foreach ($chunks as $chunk) {?>
								<div class="grid-100">
								<?php foreach ($chunk as $row) {?>
									<div class="grid-33">
										<div class="block-border-data">
											<?php if ( wp_is_mobile() ) { ?>
												<div class="green-etapi-number-name">
													<div class="desc"><?php echo $i++; ?></div>
													<div class="title"><?php echo $row['green-etapi-block-title']; ?></div>
												</div>
									    		<img src="<?php echo $row['green-etapi-block-img']; ?>">
											<?php } else { ?>
												<div class="desc"><?php echo $i++; ?></div>
									    		<img src="<?php echo $row['green-etapi-block-img']; ?>">
												<div class="title"><?php echo $row['green-etapi-block-title']; ?></div>
											<?php } ?>	
										</div>
									</div>
								<?php } ?>
								</div>
							<?php } ?>
						</div>
					</div>
				
					<div class="green-ses-blocks">
						<div class="grid-100 list">
							<div class="main-header-block__title">
								<span class="bl"><?php the_field('green-ses-title'); ?></span>
							</div>
								<div class="grid-100">
									<div class="grid-33 first">
										<div class="block-border-data">
											<div class="img"></div>
											<div class="line stavka">Ставка, % річних</div>
											<div class="line">Валюта</div>
											<div class="line">Дохід</div>
											<div class="line">Тіло інвестиції</div>
										</div>
									</div>							<?php 
									$chunks = array_chunk(get_field('green-ses-blocks'), 3);
										foreach ($chunks as $chunk) {?>
											<?php foreach ($chunk as $row) {?>
												<div class="grid-33">
													<div class="block-border-data first">
														<div class="img"><img src="<?php echo $row['green-ses-img']; ?>"><?php echo $row['green-ses-img-text']; ?></div>
														<div class="black">
															<?php if ( wp_is_mobile() ) { ?>
																<div class="stavka"><?php echo $row['green-ses-stavka']; ?> % <div class="stavka-text">Ставка, % річних</div></div>
															<?php } else { ?>
																<div class="stavka"><?php echo $row['green-ses-stavka']; ?> <span class="persent">%</span></div>
															<?php } ?>
															<div class="line"><?php echo $row['green-ses-valuta']; ?></div>
															<div class="line"><?php echo $row['green-ses-dohid']; ?></div>
															<div class="line"><?php echo $row['green-ses-invest']; ?></div>
														</div>
													</div>
												</div>
											<?php } ?>
									<?php } ?>
								</div>
							
						</div>
					</div>


					<div class="consult-home-blocks ses-page">
						<div class="grid-100">
							<div class="grid-35">
								<img src="<?php the_field('consult-home-image', 33); ?>" class="consult-home-image">
							</div>
							<div class="grid-65">
								<div class="title">
									<?php the_field('consult-home-title', 33); ?>
								</div>
								<?php echo do_shortcode('[contact-form-7 id="26487" title="Контактная форма 1"]'); ?>
							</div>
						</div>
					</div>

					<div class="invest-block">
						<div class="main-header-block__title">
							<span class="bl">Інвестиція в СЕС ($) </span>
						</div>
						<?php if ( wp_is_mobile() ) { ?>
							<img src="/img/invest-graffik-mob.png" class="invest-block-image">
						<?php } else { ?>
							<img src="<?php the_field('invest-ses-grafik'); ?>" class="invest-block-image">
						<?php } ?>
    				</div>

					<?php if( have_rows('request-need-block') ): ?>
						<div class="request-need-block">
							<div class="main-header-block__title">
								<span class="bl"><?php the_field('request-need-title'); ?></span>
							</div>
							<div class="grid-100">
								<div class="grid-50 text">
									<?php while( have_rows('request-need-block') ) : the_row(); ?>
								    	<div class="block">
								    		<img src="<?php the_sub_field('request-need-img'); ?>" class="solar-power-image">
								    		<?php the_sub_field('request-need-text'); ?>
								    	</div>
									<?php endwhile;?>
								</div>
								<div class="grid-50 img">
								    <img src="<?php the_field('request-need-title-img'); ?>" class="solar-power-image">
								</div>
    						</div>
    					</div>
    				<?php endif; ?>

					<?php if( have_rows('order-ses-block') ): ?>
						<div class="order-ses-block">
							<div class="main-header-block__title">
								<span class="bl"><?php the_field('order-ses-title'); ?></span>
							</div>
							<div class="grid-100">
								<?php if ( !wp_is_mobile() ) { ?>
								<div class="grid-50 img">
								    <img src="<?php the_field('order-ses-img'); ?>" class="solar-power-image">
								</div>
								<?php } ?>
								<div class="grid-50 text">
									<?php $i = 1; while( have_rows('order-ses-block') ) : the_row(); ?>
								    	<div class="block">
								    		<div class="number">0<?php echo $i++; ?></div>
								    		<div class="title"><?php the_sub_field('order-ses-block-title'); ?></div>
								    		<div class="desc"><?php the_sub_field('order-ses-block-desc'); ?></div>
								    	</div>
									<?php endwhile;?>
								</div>
								<?php if ( wp_is_mobile() ) { ?>
								<div class="grid-50 img">
								    <img src="/img/order-ses-img-mob.jpg" class="solar-power-image">
								</div>
								<?php } ?>
    						</div>
    					</div>
    				<?php endif; ?>

					<?php if( have_rows('doc-ses-block') ): ?>
						<div class="doc-ses-block">
							<div class="main-header-block__title">
								<span class="bl"><?php the_field('doc-ses-title'); ?></span>
							</div>
							<?php 
							$chunks = array_chunk(get_field('doc-ses-block'), 3);
							foreach ($chunks as $chunk) {?>
								<div class="grid-100">
								<?php foreach ($chunk as $row) {?>
									<div class="grid-33">
										<div class="block-border-data">
											<div class="title"><?php echo $row['doc-ses-block-text']; ?></div>
										</div>
									</div>
								<?php } ?>
								</div>
							<?php } ?>
							<div id="request" class="green-block-button">
								<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
							</div>
						</div>
    				<?php endif; ?>

    		<?php } ?>

			<?php if( $post->ID == 27105) {?>
				<?php
					if( have_rows('our-projects-header') ): ?>
						<div class="our-projects-header">
							<?php while( have_rows('our-projects-header') ) : the_row(); ?>
							<div class="grid-100">
								<div class="grid-50 text">
									<div class="main-header-block__title">
										<span class="bl"><?php the_sub_field('our-projects-header-text'); ?></span>
									</div>
								    <?php the_sub_field('our-projects-header-desc'); ?>
								    <div class="green-block-button">
										<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
									</div>
								</div>
    						</div>
    						<?php endwhile;?>
    					</div>
		    		<?php endif; ?>


					<div class="our-projects-tabs">
						<div class="grid-100">
							<?php if( have_rows('our-projects-tabs-blocks') ): ?>
							<div class="tabs">
							    <?php while( have_rows('our-projects-tabs-blocks') ): the_row(); ?>
							    	<div class="tab">
										<input type="radio" id="tab-<?php echo get_row_index(); ?>" name="tab-group-1" <?php if (get_row_index() == 1) echo 'checked';?>>
								       	<label for="tab-<?php echo get_row_index(); ?>"><?php the_sub_field('our-projects-cat-name'); ?></label>
								        	<?php $rows_l1 = get_sub_field('our-projects-cat-block');
											if( $rows_l1 ) {?>
												<div class="grid-100 content">
													<?php foreach( $rows_l1 as $rowl1 ) {?>
														<div class="grid-50">
															<img src="<?php echo $rowl1['our-projects-block-img'];?>" class="our-projects-image">
															<div class="label">
																<div class="lb">Потужність</div>
																<div class="val"><?php echo $rowl1['our-projects-block-power'];?></div>
															</div>
															<div class="label">
																<div class="lb">Локація</div>
																<div class="val"><?php echo $rowl1['our-projects-block-locat'];?></div>
															</div>
														    <div class="green-block-button">
																<a class="request youtube" href="<?php echo $rowl1['our-projects-block-video'];?>">Дивитись відео</a>
															</div>

														</div>
													<?php } ?>
												</div>
											<?php } ?>		
										</div>
							    <?php endwhile; ?>
							</div>
							<?php endif; ?>
						</div>
					</div>

	    		<?php } ?>

				<?php if( $post->ID == 27409) {?>
					<?php
						if( have_rows('rezerv-header') ): ?>
							<div class="green-header">
								<?php while( have_rows('rezerv-header') ) : the_row(); ?>
								<div class="grid-100">
									<div class="grid-50 text">
										<div class="main-header-block__title">
											<span class="bl"><?php the_sub_field('rezerv-header-text'); ?></span>
										</div>
									    <?php the_sub_field('rezerv-header-desc'); ?>
									    <div id="request" class="green-block-button">
											<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
										</div>
									</div>
	    						</div>
	    						<?php endwhile;?>
	    					</div>
			    		<?php endif; ?>

						<?php
							if( have_rows('rezerv-consult-block') ): ?>
								<div class="green-consult-block">
									<?php while( have_rows('rezerv-consult-block') ) : the_row(); ?>
									<div class="green-consult-blocks">
										<div class="grid-100">
											<div class="grid-35">
												<img src="<?php the_sub_field('rezerv-consult-image'); ?>" class="consult-home-image">
											</div>
											<div class="grid-65">
												<div class="title">
													<?php the_sub_field('rezerv-consult-title'); ?>
												</div>
												<div class="desc">
													<?php the_sub_field('rezerv-consult-desc'); ?>
													<div class="green-block-button">
														<a class="request fancybox-inline" href="#popupform">Замовити консультацію</a>
													</div>
												</div>
											</div>
										</div>
									</div>
	    							<?php endwhile;?>
								</div>
			    		<?php endif; ?>

			    		<div class="rezerv-featured-ses">
							<div class="grid-100 second">
								<div class="rezerv-block__sub">
									<?php the_field('rezerv-title1'); ?>
								</div>								
								<div class="main-header-block__img">
									<img src="<?php the_field('rezerv-image'); ?>" class="rezerv-image">
								</div>
							</div>
							<div class="grid-100 second">
								<div class="rezerv-block__sub1">
									<?php the_field('rezerv-title2'); ?>
								</div>
								<?php 
									$chunks = array_chunk(get_field('rezerv-feature'), 3);
									foreach ($chunks as $chunk) {?>
									    <div class="grid-100 green-tariff-feature">
										<?php foreach ($chunk as $row) {?>
											<div class="grid-33">
												<?php echo $row['rezerv-block']; ?>
											</div>
										<?php } ?>
										</div>
									<?php } ?>
							</div>
							<div id="request" class="green-block-button">
								<a id="green-request" class="request fancybox-inline" href="#popupform">Отримати консультацію експерта</a>
							</div>
						</div>


			    		<div class="rezerv-avtonom-work">
							<div class="grid-100 second">
								<div class="main-header-block__title">
									<?php the_field('rezerv-work-title'); ?>
								</div>
								<?php 
									$rows = get_field('rezerv-blocks');
									if( $rows ) {?>
									    <?php foreach( $rows as $row ) {?>
									    	<div class="grid-100">
									    		<div class="grid-50 label">
										    		<?php echo $row['rezerv-block-label']; ?>
										    	</div>
												<div class="grid-50 text">
													<?php echo $row['rezerv-block-text']; ?>
												</div>
											</div>
									    <?php }
									}
								?>
							</div>
							<div id="request" class="green-block-button">
								<a id="green-request" class="request fancybox-inline" href="#popupform">Замовити прорахунок станції</a>
							</div>
						</div>


						<div class="green-consult-table">
							<div class="grid-100">
								<div class="grid-50">
									<?php echo do_shortcode('[table id=2 /]');?>
								</div>
								<div class="grid-50">
									<?php echo do_shortcode('[table id=3 /]');?>
								</div>
							</div>
						</div>


						<div class="rezerv-feature">
							<div class="grid-100 second">
								<div class="rezerv-block__sub1">
									<?php the_field('featured-avtonom-title'); ?>
								</div>
								<?php 
									$chunks = array_chunk(get_field('rezerv-featured-avtonom'), 3);
									foreach ($chunks as $chunk) {?>
									    <div class="grid-100 green-tariff-feature">
										<?php foreach ($chunk as $row) {?>
											<div class="grid-33">
												<?php echo $row['rezerv-featured-avtonom-block']; ?>
											</div>
										<?php } ?>
										</div>
								<?php } ?>
							</div>
						</div>



			    		<div class="rezerv-gibrid-work">
							<div class="grid-100 second">
								<div class="main-header-block__title">
									<?php the_field('rezerv-work-g-title'); ?>
								</div>
								<?php 
									$rows = get_field('rezerv-g-blocks');
									if( $rows ) {?>
									    <?php foreach( $rows as $row ) {?>
									    	<div class="grid-100">
									    		<div class="grid-50 label">
										    		<?php echo $row['rezerv-block-g-label']; ?>
										    	</div>
												<div class="grid-50 text">
													<?php echo $row['rezerv-block-g-text']; ?>
												</div>
											</div>
									    <?php }
									}
								?>
								<div class="rezerv-img">
									<img src="<?php the_field('rezerv-block-g-image'); ?>" class="rezerv-image">
								</div>
							</div>
						</div>


						<div class="green-consult-table">
							<div class="consult-home-blocks ses-page">
								<div class="grid-100">
									<div class="grid-65">
										<div class="title">
											<?php the_field('consult-home-title', 33); ?>
										</div>
										<?php echo do_shortcode('[contact-form-7 id="27514" title="Контактная форма 1"]'); ?>
									</div>
									<div class="grid-35">
										<img src="<?php the_field('consult-home-image', 33); ?>" class="consult-home-image">
									</div>
								</div>
							</div>
						</div>

						<div class="rezerv-feature">
							<div class="grid-100 second">
								<div class="rezerv-block__sub1">
									<?php the_field('featured-gibrid-title'); ?>
								</div>
								<?php 
									$chunks = array_chunk(get_field('rezerv-featured-gibrid'), 3);
									foreach ($chunks as $chunk) {?>
									    <div class="grid-100 green-tariff-feature">
										<?php foreach ($chunk as $row) {?>
											<div class="grid-33">
												<?php echo $row['rezerv-featured-gibrid-block']; ?>
											</div>
										<?php } ?>
										</div>
								<?php } ?>
							</div>
							<div id="request" class="green-block-button">
								<a id="green-request" class="request fancybox-inline" href="#popupform">Замовити безкоштовний прорахунок</a>
							</div>
						</div>

	    		<?php } ?>

	    	</div>


		<?php
		/**
		 * generate_before_content hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_featured_page_header_inside_single - 10
		 */
		do_action( 'generate_before_content' );

	
		/**
		 * generate_after_entry_header hook.
		 *
		 * @since 0.1
		 *
		 * @hooked generate_post_image - 10
		 */
		do_action( 'generate_after_entry_header' );

		$itemprop = '';

		if ( 'microdata' === generate_get_schema_type() ) {
			$itemprop = ' itemprop="text"';
		}
		?>

		<div class="entry-content"<?php echo $itemprop; // phpcs:ignore -- No escaping needed. ?>>
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'generatepress' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>

		<?php
		/**
		 * generate_after_content hook.
		 *
		 * @since 0.1
		 */
		do_action( 'generate_after_content' );
		?>
	</div>
</article>
