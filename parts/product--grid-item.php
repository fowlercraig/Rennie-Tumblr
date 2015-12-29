<?php 
	$ran	= array(
		'tumblr_nya6bcPk4Z1qzsn8ho1_1280.jpg',
		'tumblr_nxcsghEzz61qzsn8ho1_1280.jpg',
		'tumblr_nww06gKs9c1qzsn8ho1_1280.jpg',
		'tumblr_nvxcqwrv3m1qzsn8ho2_1280.jpg',
		'tumblr_nvxc70Oeso1qzsn8ho2_1280.jpg',
		'tumblr_nvxc70Oeso1qzsn8ho2_540.jpg',
		'tumblr_nvpcnkLted1qzsn8ho1_r1_1280.jpg',
		'tumblr_nvjr5kCbTR1qzsn8ho2_1280.jpg',
		'tumblr_nvjr5kCbTR1qzsn8ho1_1280.jpg',
		'tumblr_nsfdlqbxez1qzsn8ho2_1280.jpg',
		'tumblr_nsdn23qBMq1qzsn8ho2_1280.jpg',
		'tumblr_nsdn23qBMq1qzsn8ho1_1280.jpg',
		'tumblr_nr4r291zeK1qzsn8ho7_1280.jpg',
		'tumblr_nr4r291zeK1qzsn8ho6_1280.jpg'
	);
	$ranE 	= $ran[array_rand($ran, 1)];
	$url	= 'https://dl.dropboxusercontent.com/u/2280055/Rennie/';
	$filename = $url . $ranE;
	// $data 	= getimagesize($filename);
	// $width 	= $data[0];
	// $height = $data[1];
?>

<figure class="photo_grid--cell infinite-item fs-cell <?php echo $width; ?>">
	<a href="<?php echo $url; ?><?php echo $ranE; ?>" data-size="1280x960">
		<img src="<?php echo $url; ?><?php echo $ranE; ?>" class="img-responsive" />
	</a>
	<div class="photo_grid--cell_meta fs-cell fs-all-half fs-contained">
		<a href="#" class="ss-gizmo ss-refresh"></a>
		<a href="#" class="ss-gizmo ss-heart"></a>
		<a href="#" class="ss-gizmo ss-search"></a>
		<a href="?page=image" class="ss-gizmo ss-link"></a>
	</div>
	<div class="photo_grid--cell_meta fs-cell fs-all-push-half fs-all-half fs-contained text-right">
		<a href="#" class="ss-gizmo ss-heart">(3)</a>
	</div>
</figure>