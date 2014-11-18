<?php //session_start(); ?>
<div class="container">
    <?php
    require_once("conexaoDB.php");

    $conn = conexaoDB();
	
	if(isset($_GET['link'])){
	
	$link = $_GET['link'];
	
	}else{
	
	$link = $_SESSION['link'];
	
	};

   $sql = "select * from paginas where titulo = '$link'";
   $stmt = $conn->prepare($sql);
   $stmt ->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($res  as $result){
	
	echo "<hr><div style='font-family:Verdana, Arial, Helvetica, sans-serif; color:black; font-size:24px; padding-left:309px;'>".$result['titulo']."</div>";

	echo "<br><li><div style='font-family:Verdana, Arial, Helvetica, sans-serif; color:#0000FF; font-size:24px; padding-left:309px;'>".$result['texto']."</div></li>";

    }
    ?>
</div>
