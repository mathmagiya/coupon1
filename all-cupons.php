<?php
require_once 'dadaconf.php';
 
try {
$pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,
DB_USER, DB_PASS,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
 
    $sql = 'SELECT *
               FROM tab1';
 
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
 
<title>Купоны -- все купоны</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="css/business-casual.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="container">
		
 
            <div class="row">
			<div class="box">
                <div class="col-lg-12 col-md-12 col-sm-12  table-responsive text-center">
				  

            <h1>Все купоны</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id купона</th>
                        <th>номер купона</th>
                        <th>скидка</th>
						<th>дата</th>
						<th>погашен</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$json_data=array();					
					while ($row = $q->fetch()): 
					//echo is_string ($row['canceled']));
					?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); $json_array['id']=$row['id'];?></td>
                            <td><?php echo htmlspecialchars($row['couponN']); $json_array['couponN']=$row['couponN'];?></td>
                            <td><?php echo htmlspecialchars($row['sum']); $json_array['sum']=$row['sum'];  ?></td>
							<td><?php echo htmlspecialchars($row['couponDate']); $json_array['couponDate']=$row['couponDate'];?></td>
							<td><?php if ($row['canceled']=="1") {echo "YES";}
										else if ($row['canceled']=="0") echo "NO";
							/*htmlspecialchars($row['canceled']);*/
							$json_array['canceled']=$row['canceled'];
											?></td>
                        </tr>
                    <?php 
					array_push($json_data,$json_array);  	
					
					endwhile; ?>
                </tbody>
            </table>
			
			    </div>
				<div class="col-lg-12 col-md-12 col-sm-12  table-responsive text-center">
 
				<?php
 
				    $sql2 = 'SELECT * FROM tab1';

$fp = fopen('myfile.json', 'w');
fwrite($fp, json_encode($json_data));
fclose($fp);
				?>
				
		 
				<a href="myfile.json" download>Скачать JSON всех купонов</a>
				</div>
			  </div>	 		
            </div>
        </div>
    </body>
</html>
