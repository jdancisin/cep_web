	<div class="main_feed">
		<?php foreach ($main_feedRecords as $record): ?>
			<div class="listing">
				<h3 class="listing-title">
					<a href="<?php echo $record['_link'] ?>"><?php echo $record['title'] ?></a>
				</h3>
				<?php foreach ($record['image'] as $upload): ?>
					<div class="key_image<?php if($record['image_border']) echo " with_border"; ?>">
						<img src="<?php echo $upload['urlPath'] ?>">
					</div>
				<?php endforeach ?>

				<div class="listing-content">
				<?php if($record['category']=="1"): ?>
					<div class="listing-title-date">
						<strong>
							<?php echo date("F j, Y", strtotime($record['date'])) ?>
							<?php if($record['time_info']): ?>
								<br><?php echo $record['time_info']; ?>
							<?php endif; ?>
							<?php if($record['location_info']): ?>
								<br><?php echo $record['location_info']; ?>
							<?php endif; ?>
						</strong>
					</div>
				<?php endif; ?>

					<div style="margin-top: 15px;">
						<?php echo $record['content'] ?>
					</div>
					<?php if($record['additional_details'] or $record['google_map']): ?>
						<div style="margin-top: 15px;">
							<a href="<?php echo $record['_link'] ?>" class="more-link">
								More Info &raquo;
							</a>
						</div>
					<?php endif; ?>
					<?php if(!$record['additional_details']): ?>
						<?php if(($record['link']) AND ($record['link_text'])): ?>
							<div style="margin-top: 15px;">
								<a href="<?php echo $record['link'] ?>" class="more-link">
									<?php echo $record['link_text'] ?> &raquo;
								</a>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div><!-- listing-content -->

			</div>
		<?php endforeach; ?>
	</div>


	<div class="meta">
	<?php if ($main_feedMetaData['prevPage']): ?>
	  <a href="<?php echo $main_feedMetaData['prevPageLink'] ?>">&lt;&lt; prev</a>
		<?php else: ?>
		  &lt;&lt; prev
		<?php endif ?>
		- page <?php echo $main_feedMetaData['page'] ?> of <?php echo $main_feedMetaData['totalPages'] ?> -
		<?php if ($main_feedMetaData['nextPage']): ?>
		  <a href="<?php echo $main_feedMetaData['nextPageLink'] ?>">next &gt;&gt;</a>
		<?php else: ?>
		  next &gt;&gt;
		<?php endif ?>
	</div>    
