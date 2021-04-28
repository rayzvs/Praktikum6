<?php
    if(!empty($_POST))
	{
        $data = isset($_POST) ? $_POST : '';
        if($data['nama'] == 'ray' && $data['pass'] == '12345')
		{
            setcookie('cookieray',$data['nama'], time() + 3600);
            header("location:game.php");
        }
    }
    if(isset($_COOKIE['cookieray'])){
        header("location:game.php");
    }
?>
<html>
    <head></head>
    <body>
        <form method="post" action="login.php">
            <input type="text" name="nama" size="20"/><br/>
            <input type="password" name="pass" size="20"/><br/>
            <input type="submit" name="submit" value="submit"/>
        </form>
    </body>
</html>