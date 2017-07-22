<html>
	<head>
		<title>Make Div Contnet Editable</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</head>
	<body>
		<div contenteditable="plaintext-only" id="editor">
			Helo
		</div>
		<button id="save">Click to Save</button>
		<script type="text/javascript">
			$(document).ready(function(argument) {
				$('#save').click(function(){
					// Get edit field value
					$edit = $('#editor').html();
					$.ajax({
						url: 'get.php',
						type: 'post',
						data: {data: $edit},
						datatype: 'html',
						success: function(rsp){
								alert(rsp);
							}
					});
alert(1);
				});
			});
		</script>
	</body>
</html>
