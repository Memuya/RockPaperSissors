<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rock, Paper, Sissors</title>
		<style>
			body {
				font-size: 12px;
				font-family: arial;
				background-color: #EEE;
			}
			#box {
				width: 500px;
				margin: 15% auto;
				background-color: #FFF;
				box-shadow: 0px 0px 5px rgba(0,0,0,.2);
				text-align: center;
				border: 1px solid #DDD;
				padding: 20px;
			}

			#results {
				margin-top: 20px;
			}
		</style>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
		$(document).ready(function() {
			$("#submit").click(function() {
				$.ajax({
					type: "POST",
					url: "ajax.php",
					data: {
						selection: $("#selection").val()
					},
					success: function(data) {
						$("#results").html(data);
						console.log(data);
					},
					error: function(xhr, ajaxOptions, thrownError) {
						$("#results").html(thrownError);
						console.log(thrownError);
					}
				});

				return false;
			});
		});
		</script>
	</head>
	<body>
		<div id="box">
			<label for="selection">Your Selection</label>
			<select name="selection" id="selection">
				<option value="rock">Rock</option>
				<option value="paper">Paper</option>
				<option value="sissors">Sissors</option>
			</select>
			<input type="button" value="Play" id="submit">
			<div id="results"></div>
		</div>
	</body>
</html>
