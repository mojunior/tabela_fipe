<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="author" content="mojunior">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="fetch.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="bg">
<div class="barra">
    <ul class="tabs">
        <div style ="margin-left: -26px; float: left;"><img src="http://motortotal.com.br/wp-content/uploads/2019/03/cropped-logo-png-1.png" width="130px" height="35px"></div>
        <div style="text-align: right;">
            <li><a href='#tab1'>Comprar</a></li>
            <li><a href='#tab2'>Vender</a></li>
            <li><a href='#tab3'>Serviços</a></li>
            <li><a href='#tab4'>Entrar   </a></li><div>
    </ul>
</div>
    <div style="margin-top: 70px;">
        <div>
            <h2>Anúncie aqui. É fácil vender seu carro!</h2>
            <h2>Anúncio publicado fácil e rápido</h3>
        </div>

        <div>
            <form action="/action_page.php">
                <table class="tb-main">
                    <tr>
                        <td>Email</td>
                        <td>
                            <input id ="url" type="hidden" class="txt-main" required />
                            <input id ="email" type="text" class="txt-main" required />
                        </td>t>
                        </td>
                    </tr>
                    <tr>
                        <td>CEP</td>
                        <td>
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Logradouro</td>
                        <td>
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Bairro</td>
                        <td>
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td>
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Cidade</td>
                        <td>
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Telefone</td>
                        <td>
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Celular</td>
                        <td>
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Km</td>
                        <td>
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Cor</td>
                        <td>
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Continuar" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>

<?php
/*
function comboMarca()
{    
    $url1 = 'http://fipeapi.appspot.com/api/1/carros/marcas.json';  

    $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url1);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    

    $json = json_decode(curl_exec($ch), true); 
    
    foreach($json as $i => $item) { 

        $name = $json[$i]['name'];
        $fipe_id = $json[$i]['id']; 

       echo "<option value=\"$fipe_id\">$name</option>";
    
    }

}
*/
?>