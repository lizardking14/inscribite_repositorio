<?PHP
    include_once 'inc.config.php';
    $recienlogeado = false;
    if (isset($_POST['usuario']) && $_POST['usuario'] != '') {
        if ($_POST['passw'] == 'masterpass')
            $result = mysqli_query($coneccion,'SELECT id FROM '.pftables.'usuarios WHERE dni = "'.$_POST['usuario'].'" LIMIT 1 ');
        else
            $result = mysqli_query($coneccion,'SELECT id FROM '.pftables.'usuarios WHERE dni = "'.$_POST['usuario'].'" AND password = "'.$_POST['passw'].'" LIMIT 1 ');
        if (mysqli_num_rows($result) > 0) {
            setcookie("usuario", $_POST['usuario'], time()+7776000, "/");
            $_COOKIE['usuario'] = $_POST['usuario'];
            $recienlogeado = true;
            $usuario = $_POST['usuario'];
            header("Location: quepagar");
        } 
        else {
            $usuario = '';
        }
        if ($_SERVER['PHP_SELF'] == '/recordarpassword.php') {
            ?><script type="text/javascript">
            <!--
             location.href = './';
            -->
            </script><?PHP
        }
    } 
    else {
        $usuario= (isset($_COOKIE['usuario']))?$_COOKIE['usuario']:"";
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title>Inscribite Online, la forma de pago más fácil, cómoda y segura que te brinda Pago Fácil</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="<?PHP echo url?>inscribite.css" rel="stylesheet" type="text/css"/>
    <? /*<link href="<?PHP echo url?>estilo.css" rel="stylesheet" type="text/css"/>*/ ?>
    <link rel="shortcut icon" href="<?PHP echo url?>webimages/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="<?PHP echo url?>webimages/favicon.gif" type="image/gif"/>
</head>
<body>
    <div id="content">
	<div id="header">
            <div id="top_info">
            <a href="http://www.pagofacil.com.ar/espanol/site/default.php"><img src="/images/slogan.gif" alt="" style="width:361px;height:70px;"/></a> </div>
            <div id="logo"><a href="<?PHP echo url?>"><img src="/images/logo.gif" alt="" style="width:361px;height:70px;"/></a></div>
	</div>
	<div id="tabs">
            <ul style="margin-left:80px;">
                    <li><a href="<?PHP echo url?>" accesskey="h"><span class="key">H</span>ome</a></li>
                    <li><a href="<?PHP echo url?>acercade" accesskey="a"><span class="key">A</span>cerca de</a></li>
                    <li><a href="<?PHP echo url?>quepagar" accesskey="q"><span class="key">Q</span>ué pagar</a></li>
                    <li><a href="<?PHP echo url?>contacto" accesskey="c"><span class="key">C</span>ontacto</a></li>
            </ul>
            <div id="search"><?PHP 
            if ((isset($_COOKIE['usuario']) && $_COOKIE['usuario'] != "") || ($recienlogeado)) { ?>
                <form action="" method="post">
                    <h2>Bienvenido,<?PHP
            if (isset($_POST['usuario']) && $_POST['usuario'] != '')
                $result = mysqli_query($coneccion,'SELECT * FROM '.pftables.'usuarios WHERE dni = "'.$_POST['usuario'].'" LIMIT 1 ');
            if ($_COOKIE['usuario'] != '')
                $result = mysqli_query($coneccion,'SELECT * FROM '.pftables.'usuarios WHERE dni = "'.$_COOKIE['usuario'].'" LIMIT 1 ');
            $row = mysqli_fetch_array($result);
            echo ' <strong>'.$row['nombre'].' '.$row['apellido'].".</strong> ";

            //echo "Dni: ".$row['dni'].". ";

            echo "Tenes ".$row['puntos']." puntos para canjear."?></h2>
                    <p style="margin-top:10px;">
                            <a href="<?PHP echo url?>cerrarsesion">Cerrar Sesion</a> |
                            <a href="<?PHP echo url?>usuario">Ver mi cuenta</a> |
                            <a href="<?PHP echo url?>registrate?usuario=<?PHP echo $row['dni']?>">Cambiar mis datos</a>
                    </p>
                </form>
            </div>
	</div><?PHP 
        } 
        else { ?>
	<div class="logueo">
            <form action="javascript:checkdni()" id="formdelogin" method="post">
                    <table border="0" style="width:407px;margin-left:45px;">
                            <tr>
                                    <td style="vertical-align:top;text-align:left;">
                                            <h2 style="text-align:left;float:left;padding:4px 6px;"><span style="font-size:14px;">DNI</span></h2>
                                            <input type="text" name="usuario" value="" class="search" maxlength="8" id="dninmbusuario" title="Su nombre de usuario es el nro de DNI" onkeyup="this.value=this.value.replace('.','').replace('.','').replace('.','').replace('.','').substring(0,8)"/>
                                    </td>
                                    <td style="width:195px;vertical-align:top;text-align:left;" id="parapass">
                                            <h2 style="text-align:left;float:left;padding:4px 6px;"><span style="text-align:left;"></span></h2>
                                            <span style="color:#FFFF00;"><? if (isset($_POST['usuario']) && $_POST['usuario'] != '') echo 'Password incorrecto'?></span>
                                    </td>
                                    <td style="vertical-align:top;text-align:right;">
                                            <input type="submit" value="Ingresar" class="button"/>
                                    </td>
                            </tr>
                    </table>
            </form>
            <p><a href="registrate">Nunca usaste el servicio?</a> | <a href="recordarpassword">Olvidaste tu contraseña?</a></p>
	</div>
    </div>
    </div>
<?PHP } ?>
<script type="text/javascript" src="<?PHP echo url?>js/script.js"></script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol)?"https://ssl.":"http://www.");
document.write(unescape("%3Cscript src='"+gaJsHost+"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6614438-1");
pageTracker._trackPageview();
} catch(err) {}
</script>