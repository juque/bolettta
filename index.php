<!DOCTYPE HTML> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <title>bolettta / calcula tu boleta de honorarios</title> 
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements --> 
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]
    --> 
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="c/bolettta.css" />
        
</head> 
<body> 
<div class="contenedor">
    <h1>Bolettta</h1>
    <p class="slogan">Calcula tu boleta de honorarios</p>
    <form id="bolettta">
        <label for="valor">$</label>
        <input type="text" name="valor" id="valor" />
    </form>
    <div id="resultado" class="cf">
        <div class="col">
            <div id="liquido">
            <h2>Líquido</h2>
            <p>Si lo pactado fue en valores líquidos, deberás hacer la boleta por <span id="lqd-recibir"></span> y recibirás:</p>
            <p><span id="lqd-hacer"></span></p>
            <p>en efectivo.</p>
            </div>
        </div>
        <div class="col last">
            <div id="bruto">
            <h2>Bruto</h2>
            <p>Si lo pactado fue en valores brutos, deberás hacer la boleta por <span id="brt-recibir"></span> y recibirás:</p>
            <p><span id="brt-hacer"></span></p>
            <p>en efectivo.</p>
            </div>
        </div>
    </div>
    <div id="twt"><a href="https://twitter.com/intent/tweet?text=http://silogismo.com/bolettta%20%3C--%20calcula%20tu%20boleta%20de%20honorarios%20%23bolettta">Pasa la voz</a></div>
<footer>
    <p>Bolettta es un proyecto <a href="http://silogismo.com">silogismo.com</a> y no tiene ninguna relación con el SII.cl</p>
    <p>Desarrollado por <a href="http://twitter.com/juque">@juque</a></p>
</footer>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script> 
<script defer src="j/jquery.formatCurrency-1.4.0.pack.js"></script>
<script defer src="j/jquery.hotkeys.js"></script>
<script defer src="j/script.js"></script> 

</body> 
</html> 
