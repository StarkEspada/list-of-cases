<!DOCTYPE html>
<html>
<head>
	<title>Список дел</title>
</head>
<body>

<style>
.days{
	width: 300px;
    height: 50px;
    font-size: 20px;
    border-radius: 10px;
    border: 2px solid black;

	}
.event{
	width: 500px;
    height: 50px;
    font-size: 20px;
    border-radius: 10px;
    border: 2px solid black;
    margin-left: 30px;
	}
	
.block{
	

	}
.container{
		display: inline-block;
		border: 2px solid black;
	}
.button{
	width: 120px;
    height: 56px;
    vertical-align: top;
    border: solid black;
    border-radius: 10px;
    background: transparent;
    margin-left: 34px;
	}
.del{
	width: 120px;
    height: 110px;
    margin-top: 0px;
    border-radius: 10px;
    font-size: 35px;
    background: #03a9f485;
    border: 2px solid #03a9f400;
    color: white;
	}

.container-days{
	display: inline-block;
    height: 110px;
    border-radius: 10px;
    line-height: 40px;
    background: #03a9f485;
    color: white;
    font-size: 20px;
	}
.container-event{
	display: inline-block;
    height: 110px;
    border-radius: 10px;
 	vertical-align: top;
    margin-left: -4px;
}
.add-task{
	width: 1000px;
    height: 72px;
    border-radius: 10px;
    margin: auto;
}

</style>

<div class="add-task">
	<form action="" method="POST">
	<!-- <textarea class="days" name="days" placeholder="Когда..." ></textarea>
	<textarea class="event" name="event" placeholder="Что делать..."></textarea> -->
		<input class="days" name="days" placeholder="  Когда...">
		<input class="event" name="event" maxlength=125 placeholder="  Что делать..."> 
		<input class="button" type="submit" value="Сохранить">
	</form>
	
</div>

<?php

  	include 'taskDB.php';
	$days = $_POST["days"];
	$event = $_POST["event"];



if(!empty($days) && !empty($event)) {
	mysqli_query($link, "INSERT INTO user(days, event) VALUES('$days', '$event')");
}

$query = mysqli_query($link, "SELECT * FROM user");



while($data = mysqli_fetch_assoc($query)) {
	echo "	<form action='deletTask.php' method='POST'>

	<div class='block'>
		  	<div class='container-days'>"."Когда:  " .$data['days']. '<br>'. "Что делать:  " .$data['event']."  
		  	</div>
		  	<div class='container-event'>
				<input type='submit' value='delete' class='del'>
		  	</div>
		  	<input type='hidden' name='id' value='".$data['id']."'>
	</div>	  	
		  	<br><br>
		  	
		  	
		  	</form>
		  
	";

	}


?>
<!-- 	
 -->



</body>
</html>