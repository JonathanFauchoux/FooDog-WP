<?php
/**
 * The template for displaying all single posts.
 *
 * @package FooDog
 */

get_header('single'); ?>


	<div class="container content_single">

		<div class="row">

			<div class="col-md-9">
				<article id="post-<?php  the_ID(); ?>" <?php post_class(); ?>>
					<div id="primary" class="content-area ">

						<main id="main" class="site-main  site-main--single" role="main">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php foodog_post_update_count(get_the_ID()); // Update count ?>

							<h4 class="cat_article_single"><?php foreach ( get_the_category() as $category) { echo strtoupper($category->name).chr(127); } ?></h4>
							<h2 class="title_article_single"><?php the_title(); ?></h2>
							<?php the_post_thumbnail('', array('class' => 'img-single attachment-latest size-latest headerbig wp-post-image img-fluid')); ?>
							<!-- barre de spéaration -->
							<div class="under_img_single container">
								<div class="left_under_img col-md-4">
									<img src="wp-content/themes/foodog/assets/img/dog.png" class=" logoFarmer_small" alt="logo">
									<p>The Farmer's dog</p>
								</div>
								<div class="right_under_img col-md-6">
									<div>
										<a href="#" class="comment_single"><i class="fa fa-comment-o"></i>COMMENT</a>
										<a href="#" class="share_single">SHARE</a>								
										<a href="#"><i class="facebook_single fa fa-facebook"></i></a>
										<a href="#"><i class="twitter_single fa fa-twitter"></i></a>
										<a href="#"><i class="print_single fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
							<!-- barre social start -->
							<div class="text_single"><?php echo $post->post_content; ?></div>
							<div class="container global_share_single">
								<a href="#" class="share_single">SHARE</a>
								<a href="#" class="comment_single"><i class="fa fa-comment-o"></i>COMMENT</a>
								<a href="#" class="facebook_single_bottom"><i class=" fa fa-facebook icon_single_bottom"></i> SHARE</a>
								<a href="#" class="twitter_single_bottom"><i class="fa fa-twitter icon_single_bottom"></i>TWEET</a>
								<a href="#" class="print_single_bottom"><i class=" fa fa-pinterest icon_single_bottom"></i>PIN IT</a>
							</div>	
							<div class="newletter_global container">
								<h2 class="title_newletter_single">Subscribe to the FooDog Newletter</h2>
								<p>Get health and wellness tips about your dog delivered to your inbox. </p>
								<div class="col-md-7 input_single inpunt-group-lg">
									<input type="text" value="" class="col-md-8" name="email" placeholder="Your email"/>
									<button type="submit" class="btn btn-newletter">SIGN UP</button>
								</div>
							</div>	
							<!-- barre social end -->
							<!-- Pagination XL start -->
							<div class="pagination_single row container">
								<div class="col-md-6 previous">
									<p class="nav_pagi"><a href="?p=<?= get_previous_post()->ID?>">< PREVIOUS ARTICLE</a></p>
									<p class="title_pagi uppercase"><?php previous_post_link('<strong>%link</strong>'); ?></p>
								</div>
								<div class="col-md-6">
									<p class="nav_pagi"><a href="?p=<?= get_next_post()->ID?>">NEXT ARTICLE ></a></p>
									<p class="title_pagi uppercase"><?php next_post_link('<strong>%link</strong>'); ?></p>
								</div>
							</div>
							<!-- Pagination XL end -->
							<div class="row container paragra_single">
								<div class="col-md-2 contain_logo">
									<img src="wp-content/themes/foodog/assets/img/dog.png" class=" logoFarmer_single" alt="logo">
								</div>
								<div class="col-md-10">
									<h6 class="title_paragra">The Farmer's Dog</h6>
									<p class="text_paragra">The Farmer’s Dog is the leading direct-to-consumer, fresh pet food company, offering customers and their pets the highest 
									quality and convenience without retail markups. All human-grade meal plans are made to order, designed by veterinarians,
									and personalized to provide the ideal nutritional balance for every dog. Get started today at https://www.thefarmersdog.com/.</p>
								</div>
							</div>



							<div class=" title_section_single container">
								<h2 class="section_article_single uppercase">YOU MIGHT ALSO LIKE</h2> 
							</div>
							<!-- Article du meme theme -->


							
							<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>

						<?php endwhile; // end of the loop. ?>
						
						</main><!-- #main -->

					</div><!-- #primary -->
				</article>
			</div>
			
			<div class="col-md-3">
				<?php get_sidebar('single'); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>