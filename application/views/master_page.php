<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<base href="<?= base_url() ?>">
	<meta charset="utf-8">
	<title>Tech Tech</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="main-bg" style="overflow: hidden; ">
	<div id="container-fluid">
		<?= $content ?>
	</div>
</body>

</html>