<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Daftar Belanja</title>
		<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bebas Neue" rel="stylesheet">
</head>
	<body>
    <div class="container">
    <header><h2>Shopping Cart</h2></header>
    <section>
        <div>
	<table>
            <form action="keranjang.php" method="POST" id="keranjang" name="keranjang" enctype="multipart/form">
                <lable for=""><pre>Mangga Rp 15.000 <input type="number" id="mangga" onchange="setValue()" name="mangga"></pre></lable> <br>
                <lable for=""><pre>Jambu  Rp 13.000 <input type="number" id="jambu" onchange="setValue()" name="jambu"></pre></lable> <br>
                <lable for=""><pre>Salak  Rp 10.000 <input type="number" id="salak" onchange="setValue()" name="salak"></pre></lable> <br>
                <lable for=""><pre>Total Harga    : <input type="text" id="total" name="total" readonly></pre> </lable><br>
                <button type="submit" name="">Submit</button>
            </form>
		 </table>
        </div>
    </section>
   </div>
   
</body>
<script>
    function setValue(){
        var total = document.getElementById("total");
        var mangga = document.getElementById("mangga").value * 15000;
        var jambu = document.getElementById("jambu").value * 13000;
        var salak = document.getElementById("salak").value * 10000;
        console.log(mangga + jambu + salak);
        var hasil = mangga + jambu + salak;
        total.value = hasil;
    }
    
</script>
</html>