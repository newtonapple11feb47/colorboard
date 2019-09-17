<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Edifyn | Online Learning Soluction</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="http://192.168.56.101/css/font.css">
        <link rel="stylesheet" href="http://192.168.56.101/css/normal.css">

		<link rel="stylesheet" href="css/drawingboard.css">

		<style>
		/*
		* drawingboards styles: set the board dimensions you want with CSS
		*/
		.board {
			margin: 0 auto;
			width: 100%;
			height: 100%;
			padding-top: 60px;
		}
                
                body{
                        background:rgb(230,230,230);
                        padding:0;
                        margin:0;
                 }
		</style>

		
		<style data-example="1">
			#default-board {
				width: 100%;
				height: 1200px;;
                background:#fff;
			}
		</style>

		</head>
	<body>

		<?php include '/var/www/main/global/app-nav.php'?>
		
		<div id="container">


			<div class="example" data-example="1">
				<div class="board" id="default-board"></div>
			</div>

			
		</div>

		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<script src="bower_components/simple-undo/lib/simple-undo.js"></script>


		<script src="js/utils.js"></script>
		<script src="js/board.js"></script>
		<script src="js/controls/control.js"></script>
		<script src="js/controls/color.js"></script>
		<script src="js/controls/drawingmode.js"></script>
		<script src="js/controls/navigation.js"></script>
		<script src="js/controls/size.js"></script>
		<script src="js/controls/download.js"></script>



		<script data-example="1">
			//create the drawingboard by passing it the #id of the wanted container
			var defaultBoard = new DrawingBoard.Board('default-board');
		</script>

		<?php include '/var/www/main/global/app-footer.php'?>
	</body>
</html>
