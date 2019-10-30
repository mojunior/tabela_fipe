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
            <form>
                <table class="tb-main">
                    <tr>
                        <td>Email</td>
                        <td>
                            <select id="selectMarca" name="selectMarca" class="st-main" 
                            onchange="fetch_marca(this.value)">
                                <option value="">Selecione</option>
                              <?php //comboMarca(); ?> 
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nome</td>
                        <td>
                            <select id="selectModelo" name="selectModelo" class="st-main" 
                            onchange="fetch_modelo(this.value)">
                                <option value="">Selecione</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>CPF</td>
                        <td>
                            <select id ="selectAno" name="selectAno" class="st-main" 
                            onchange="fetch_ano(this.value)">>
                                <option value="">Selecione</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Celular</td>
                        <td>
                            <input id ="url" type="hidden" class="txt-main" required />
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Ano da Fabricação</td>
                        <td>
                            <input id ="url" type="hidden" class="txt-main" required />
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Combustível</td>
                        <td>
                            <input id ="url" type="hidden" class="txt-main" required />
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Portas</td>
                        <td>
                            <input id ="url" type="hidden" class="txt-main" required />
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Placa</td>
                        <td>
                            <input id ="url" type="hidden" class="txt-main" required />
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Preço</td>
                        <td>
                            <input id ="url" type="hidden" class="txt-main" required />
                            <input id ="email" type="text" class="txt-main" required />
                        </td>
                    </tr>
                    <tr>
                        <td>Segurança<br><br>
                            <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                    </td>
                        <td>Conforto<br><br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        </td>
                        <td>Sistema de Som<br><br>  
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>I have a bike 2<br>
                        </td>
                    </tr>
                    <tr>
                        <td>Observações</td>
                        <td colspan="2"><br>
                        <textarea rows="10" cols="60"></textarea>
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