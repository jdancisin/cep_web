<?php

  // load records
  list($recent_posts, $recent_postsMetaData) = getRecords(array(
    'tableName'   => 'main_feed',
    'limit'     => '5',
    'allowSearch' => false,
  ));

?>

	<div class="inset news">
		<h4>recent posts:</h4>
		<ul>
			<?php foreach ($recent_posts as $record): ?>
					<li>
						<a href="<?php echo $record['_link'] ?>">
							<?php echo $record['title'] ?><br>
							<span class="meta">
								Posted on <?php echo date("M j, Y", strtotime($record['date'])) ?>
							</span>
						</a>
					</li>
			<?php endforeach; ?>
		</ul>
	</div>
