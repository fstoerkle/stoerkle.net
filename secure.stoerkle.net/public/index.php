<?php

$apps = array(
	'/stats/'	=> 'Statistiken',
	'/mail/'	=> 'Webmail',
	'/thinkup/'	=> 'ThinkUp'
);

?>

<ul>
<?php foreach ($apps as $url => $title): ?>
	<li><a href="<?php echo $url ?>"><?php echo $title ?></a></li>
<?php endforeach ?>
</ul>
