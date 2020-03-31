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
            
            h2 {
                margin-left: 270px;
                font-size: 30px;
			}
			
			table{
				margin-left: 270px;
			}

            /*p{
				margin-left: 270px;
                font-size: 20px;
                
            }*/
            
			.sidebar {
				margin-top: 0px;
				padding: 0px 10px;
				height: 100%;
				width: 200px;
				position: fixed;
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
				color: black;
  				background-color: white;
			}

		</style>
	</head>
	<body>
        <h1>Sakila Database</h1>
        <h2>Actor</h2>
		<nav>
			<div class="sidebar">
				<a href="index.php" class="title">Home</a>
				<a href="" class="title">actor</a>
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
        <!-- method="post" action="connection.php" -->
        <form>
            <table align="left" border="1px" style="width: 600px; line-height: 40px;">
                <tr>
                    <th>actor_id</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>last_update</th>
                </tr>
                <?php
                $conn = mysqli_connect("localhost","root","","sakila");
                if ($conn -> connect_error){
                    die("Connection failed:". $conn -> connect_error);
                }
                $sql = "SELECT actor_id, first_name, last_name, last_update from actor";
                $result= $conn -> query($sql);
                if ($result -> num_rows > 0){
                    while ($rows = $result -> fetch_assoc()){
                ?>        
                        <tr>
                            <td><?php echo $rows['actor_id']; ?></td>
                            <td><?php echo $rows['first_name']; ?></td>
                            <td><?php echo $rows['last_name']; ?></td>
                            <td><?php echo $rows['last_update']; ?></td>
                        </tr>
                <?php 
                    }
                }
                else {
                    echo "0 result";
                }
                $conn -> close();
                ?>
                
            </table>
        </form>
	</body>
</html>