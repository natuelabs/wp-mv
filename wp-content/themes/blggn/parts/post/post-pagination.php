<?php $prev_post = get_previous_post(); ?>
<?php $next_post = get_next_post(); ?>

<?php if( $prev_post || $next_post ) : ?>

	<div class="post-pagination">

		<?php if($prev_post): ?>
			<div class="older-post-link col-md-6">

				<div>
					<a href="<?php echo esc_url(get_permalink( $prev_post->ID )); ?>">
						<h4 class="voss-link upper">
							<svg><use xlink:href="#arrow-left"></use></svg>
							<?php echo esc_html_e( 'Previous Post', 'blggn' ); ?>
						</h4>
						<p><?php echo esc_html($prev_post->post_title); ?></p>
					</a>
				</div>

				<?php blggn_single_pagination( $prev_post, 'blggn_300x300' ); ?>

			</div>
		<?php endif ?>

		<?php if($next_post): ?>
			<div class="newer-post-link col-md-6">
				<a href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>">
					<h4 class="voss-link upper">
						<?php echo esc_html_e( 'Next Post', 'blggn' ); ?>
						<svg><use xlink:href="#arrow-right"></use></svg>
					</h4>
					<p class="vs-head-st"><?php echo esc_html($next_post->post_title); ?></p>
				</a>

				<?php blggn_single_pagination( $next_post, 'blggn_300x300' ); ?>

			</div>
		<?php endif ?>

	</div>

<?php endif; ?>
