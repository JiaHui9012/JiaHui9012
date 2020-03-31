<!DOCTYPE html>

<html>
	<head>
		<title>Sakila Database</title>
		<!-- <link rel="stylesheet" href=""> -->
		<style>
			h1 {
				margin-left: 270px;
				font-size: 50px;
			/*	margin: 0px;
				margin-bottom: 70px;
				padding: 0px 10px;
				background-color: grey;
				height: 70px;
				width: 100%;
				position: absolute;
				top: 0;
				left: 0;
				color: blanchedalmond;*/
			}

			p{
				margin-left: 270px;
				font-size: 20px;
			}

			.sidebar {
				margin-top: 0px;
				padding: 0px 10px;
				height: 100%;
				width: 200px;
				position: absolute;
				z-index: 0;
				top: 0;
				left: 0;
				background-color: grey;
				overflow-x: hidden;
				padding-top: 15px;
			}

			.sidebar a.title {
				padding: 8px 10px 8px 30px;
				text-decoration: none;
				font-size: 23px;
				color: rgb(252, 252, 252);
				display: block;
			}

			/*.sidebar a.subtitle {
				padding: 5px 10px 5px 35px;
				text-decoration: none;
				font-size: 15px;
				color: #818181;
				display: block;
			}*/

			.sidebar a:hover {
				text-decoration: underline;
			}

		</style>
	</head>
	<body>
		<h1>Sakila Database</h1>
		<nav>
			<div class="sidebar">
				<a href="" class="title">Home</a>
				<a href="actor.php" class="title">actor</a>
				<a class="title">address</a>
				<a class="title">category</a>
				<a class="title">city</a>
				<a class="title">country</a>
				<a class="title">customer</a>
				<a class="title">film</a>
				<a class="title">film_actor</a>
				<a class="title">film_category</a>
				<a class="title">film_text</a>
				<a class="title">inventory</a>
				<a class="title">language</a>
				<a class="title">payment</a>
				<a class="title">rental</a>
				<a class="title">staff</a>
				<a class="title">store</a>
			</div>
		</nav>
		<p>
			Please select a table provided at the left side to make some changes. 
			<br/>You could <b>select/update/insert/delete</b> the dataset.
			<br/>The changes will update into the database as well.
		</p>
	</body>
</html>