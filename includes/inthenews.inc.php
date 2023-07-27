<?php

  list($newsRecords, $newsMetaData) = getRecords(array(
    'tableName'   => 'news',
    'limit'       => '6',
    'loadUploads' => '0',
    'allowSearch' => '0',
    'where' => 'archive=0 and cep_news=0',
  ));

?>
	<div class="inset news">
		<h4>in the news:</h4>
		<ul>
			<?php foreach ($newsRecords as $record): ?>
					<li>
						<a href="<?php echo $record['url'] ?>">
							<?php echo $record['title'] ?><br>
							<span class="meta">
								<?php echo date("M j, Y", strtotime($record['date'])) ?> / @<?php echo $record['source'] ?>
							</span>
						</a>
					</li>
			<?php endforeach; ?>
		</ul>
	</div>
