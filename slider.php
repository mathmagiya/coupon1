<!DOCTYPE html>
<html lang="ru">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex,nofollow"> 
<meta name="revisit-after" content="999 days"> 
<meta name="author" content="">
<title>Купоны</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css">
<link href="css/coupon-style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.js" type="text/javascript"></script>

  
 
 <script type="text/javascript">

window.onload=function()
{
$('#pass').on("click", function(){
$('#pass').prop('value', ''); 
 
});
 

// With JQuery
$('#ex1').slider({
	formatter: function(value) {
		return ;//'Current value: ' + value;
	}
});

$("#ex1").mousedown(function(event){ 
  
        $(this).after("<p style='color:purple;'>Mouse button pressed down.</p>");  //$("#demo").$(this).text("jjjj");
		$("#demo").text("sadf");
});
 
 
 
 $('.div-pass').on("mouseup", function(event) {
 
  $("#demo1").html(document.getElementById("ex1").value).css('font-size','33px');
  $("#demo1").html(document.getElementById("ex1").value).css('font-size','33px');
 
});

}
</script>
</head>

<body>

<div class="brand"><h1>Выбрать размер скидки</h1></div>
<div class="address-bar">Фирма. Город | Район | Адрес | 8(XXX)XXX-XXX</div>
    <div class="container">
		<div class="row">
			<div class="box">
                <div class="col-lg-12 text-center">
				<form method="post" action="func.php" onSubmit="return validate_input(this)">
				<h2>Выбор суммы купона</h2><br/><br/>
					<div class="div-pass">
					<input id="ex1" name="price" data-slider-id='ex1Slider' type="text" data-slider-min="100" data-slider-max="2000" data-slider-step="100" data-slider-value="100" value="100"/>
					</div>
					<p id="demo1">100</p>
				<input type="submit" id="but" class="likeButton" value="создать купон!"/>
				</form>
                </div>
			</div>
		</div>
	</div> <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center col-md-12 col-sm-12">
				<div class="address-bar-footer">. Город | Район | Адрес | 8(XXX)XXX-XXX</div><hr>
                </div>
				<div class="col-lg-12 col-md-12 text-center col-sm-12"> &copy; Фирма 2007- <?php echo date('Y');?></div>			
            </div>
        </div>
    </footer>
</body>
</html>
