<!DOCTYPE html>
<html lang="ru">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
		<meta name="robots" content="noindex,nofollow"> 
<meta name="revisit-after" content="9999 days"> 

 
    <meta name="author" content="">

<title>Купоны</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="css/coupon-style.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  
 
 <script type="text/javascript">

window.onload=function()
{
$('#pass').on("click", function(){
$('#pass').prop('value', ''); 
 
});
}
</script>

</head>
<body>

<div class="brand"><h1>Работа с купонами</h1></div>
<div class="address-bar">Фирма. Город | Район | Адрес | 8(XXX)XXX-XXX</div>
    
<div class="container">
<div class="row"> 
	<div class="box">
	<div class="col-lg-6 text-center">
		<a href="slider.php"><div class="col-lg-5 col-lg-offset-4 text-center likeButton">СОЗДАТЬ КУПОН</div></a>
	</div> 

	<div class="col-lg-6 text-center"> 
		<a href="check.php"><div class="col-lg-5 col-lg-offset-4 text-center likeButton">ПРОВЕРИТЬ КУПОН</div></a>
	</div>
	</div>
</div>

<div class="row">

<div class="box">
<a href="kupon.php"><div class="col-lg-5 col-lg-offset-4 text-center likeButton">ЕЩЕ РАЗ</div></a>
</div>
</div>
     </div><!-- /.container -->
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
