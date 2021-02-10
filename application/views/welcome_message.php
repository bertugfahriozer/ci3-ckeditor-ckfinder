<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<textarea name="editor-ckeditor" id="editor-ckeditor" rows="10" cols="80"></textarea>
</div>
<script src="/plugins/ckeditor5-build-classic/ckeditor.js"></script>
<script src="/plugins/ckeditor5-build-classic/translations/tr.js"></script>
<script src="/plugins/ckfinder/ckfinder.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
		crossorigin="anonymous"></script>
<script>
	ClassicEditor
			.create(document.querySelector('#editor-ckeditor'), {
				height: '350px',
				language: 'tr',
				ckfinder: {
					uploadUrl: '/gallery'
				},
				toolbar: [ 'ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
			})
			.catch(error => {
				console.error(error);
			});
</script>
<!--http://filemanager9/plugins/ckfinder/core/connector/php/connector.php?command=Init&lang=tr-->
</body>
</html>
