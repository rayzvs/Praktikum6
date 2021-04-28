<?php
    if(!isset($_COOKIE['cookieray']))
	{
        header("location:login.php");
    }

    if(!empty($_POST))
	{
        $tebak = $_POST['tebak'];
        $num = $_POST['num'];

        $isSalah = false;
        $pesan = '';
        if($tebak > $num)
		{
            $isSalah = true;
            $pesan =  'tinggi';
        }
			else if($tebak < $num)
		{
            $isSalah = true;
            $pesan = 'rendah';
        }
    }
	else
	{
        $num = rand(0,100);
        $count = 0;
    }
?>
<html>
    <body>
        Halo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silahkan anda menebak ya!<br/>
        <?php if(isset($isSalah) && $isSalah == false){ echo "Selamat, tebakan anda benar. anda menebak angka ". $num . "<br/> <a href='game.php'>Ulangi lagi</a> <-- link untuk mengulangi permainan lagi";} ?>
        <?php if(isset($isSalah) && isset($pesan) && $isSalah == true){echo "Wah, masih salah ya? bilangan anda terlalu ";}?>
        <?php if(isset($pesan) && $pesan != ''){ echo $pesan;}?><br/>

        <form method="post" action="game.php">
            Tebakan anda 
            <input type="text" name="tebak" size="3" /><br/>
            <input type="hidden" name="num" value="<?php echo $num;?>"/>
            <input type="submit" name="submit" value="submit"/>
        </form>
    </body>
</html>