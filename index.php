<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>jQuery Mobile: Theme Download</title>
	<link rel="stylesheet" href="themes/green_theme.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role="page" id="login">
        <div data-role="header" data-theme="a">
            <h1>TecnoVentas</h1>
        </div><!-- /header -->
        <div role="main" class="ui-content">
            <h3>Iniciar Sesion</h3>
            <label for="txt-email" >Usuario</label>
            <input type="text"  id="usuario" >
            <label for="txt-password">Contra</label>
            <input type="password"  id="pass" >
            
            <a   id="btnlogin" class="ui-btn ui-btn-b ui-corner-all mc-top-margin-1-5">Iniciar Sesion</a>
            
            <div data-role="popup" id="dlg-invalid-credentials" data-dismissible="false" style="max-width:400px;">
                <div role="main" class="ui-content">
                    <h3 class="mc-text-danger">Ups!</h3>
                    <p>Ingresaste correctamente las credenciales?</p>
                    <div class="mc-text-center"><a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-b mc-top-margin-1-5">OK</a></div>
                </div>
            </div>
        </div><!-- /content -->
    </div><!-- /page -->


    <div data-role="page" id="ListaProducts">
        <div data-role="header" style="overflow:hidden;">
        <h1>TecnoVentas</h1>
        <div data-role="navbar" >
            <ul>
                <li><a href="#ListaProducts" data-icon="bars">Productos</a></li>
                <li><a href="#carrito" data-icon="shop">Carrito</a></li>
                <li><a href="#comprados" onClick="obtener_historico();" data-icon="clock">Comprados </a></li>
                <li><a href="#contacto" data-icon="mail">Contacto</a></li>
            </ul>
        </div><!-- /navbar -->
        </div><!-- /header -->
        <div role="main" class="ui-content" id="Prods">

            <ul data-role='listview' data-filter='true' data-filter-placeholder='Buscar Productos' data-inset='true' id='product' class='ui-header ui-bar-inherit'>
            </ul>

           <!-- <ul data-role="listview" data-filter="true" data-filter-placeholder="Buscar Productos" data-inset="true" >
               
                <li><a href="#popupLogin" data-rel="popup" data-position-to="window" data-transition="pop">
                <img src="imagenes/deee.jpg">
                <h2>Broken Bells</h2>
                <p>Broken Bells</p></a>
                </li>
                <li><a href="#">
                    <img src="imagenes/yoyo.jpg">
                <h2>Warning</h2>
                <p>Hot Chip</p></a>
                </li>
                <li><a href="#">
                    
                <h2>Wolfgang Amadeus Phoenix</h2>
                <p>Phoenix</p></a>
                </li>
                
            </ul> -->
        </div><!-- /content -->
    
    <!-- <div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">    
    <form>
        <div style="padding:10px 20px;" id="productespecifico">
            <h3>Producto</h3>
            <img src="imagenes/yoyo.jpg" style="width:50%; height:50%;" >
            <center>iraa una descripcion del producto</center>
            <input type="text" name="user" id="un" value="" placeholder="Cantidad" data-theme="a">
            <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-shop">Añadir a carrito</button>
        </div>
    </form>
    	</div> -->
	
     </div><!-- /page -->

    <div data-role="page" id="contacto">
        <div data-role="header" style="overflow:hidden;">
        <h1>TecnoVentas</h1>
        <div data-role="navbar">
            <ul>
                <li><a href="#ListaProducts" data-icon="bars">Productos</a></li>
                <li><a href="#carrito" data-icon="shop">Carrito</a></li>
                <li><a href="#comprados" onClick="obtener_historico();" data-icon="clock">Comprados </a></li>
                <li><a href="#contacto" data-icon="mail">Contacto</a></li>
            </ul>
        </div><!-- /navbar -->
        </div><!-- /header -->
        <div role="main" class="ui-content">
           <label for="textinput-hide" >Correo electronico:</label>
            <input type="text" name="textinput-hide" id="textinput-hide" placeholder="ejemplo@gmail.com" >
            <label for="textarea">Cuentanos tu duda o sugerencia:</label>
            <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
            </br>
            <a href="#" class="ui-btn">Enviar!</a>
        </div><!-- /content -->

    
    </div><!-- /page -->

    <div data-role="page" id="carrito">
        <div data-role="header" style="overflow:hidden;">
        <h1>TecnoVentas</h1>
        <div data-role="navbar">
            <ul>
                <li><a href="#ListaProducts" data-icon="bars">Productos</a></li>
                <li><a href="#carrito" data-icon="shop">Carrito</a></li>
                <li><a href="#comprados" onClick="obtener_historico();" data-icon="clock">Comprados </a></li>
                <li><a href="#contacto" data-icon="mail">Contacto</a></li>
            </ul>
        </div><!-- /navbar -->
        </div><!-- /header -->
        <div role="main" class="ui-content">
           <ul data-role="listview" >
                <li>
                <img src="imagenes/deee.jpg">
                <h2>Broken Bells</h2>
                <p>Broken Bells</p>
                </li>
                <li>
                    <img src="imagenes/yoyo.jpg">
                <h2>Warning</h2>
                <p>Hot Chip</p>
                </li>
                <li>
                <h2>Wolfgang Amadeus Phoenix</h2>
                <p>Phoenix</p>
                </li>
            </ul>
        </div><!-- /content -->

    
    </div><!-- /page -->

    <div data-role="page" id="comprados">
        <div data-role="header" style="overflow:hidden;">
        <h1>TecnoVentas</h1>
        <div data-role="navbar">
            <ul>
                <li><a href="#ListaProducts" data-icon="bars">Productos</a></li>
                <li><a href="#carrito" data-icon="shop">Carrito</a></li>
                <li><a href="#comprados" onClick="obtener_historico();" data-icon="clock">Comprados </a></li>
                <li><a href="#contacto" data-icon="mail">Contacto</a></li>
            </ul>
        </div><!-- /navbar -->
        </div><!-- /header -->
        <div role="main" class="ui-content">
           <ul data-role='listview' data-filter='true' data-filter-placeholder='Buscar Productos' data-inset='true' id='compradoslista' class='ui-header ui-bar-inherit'>
                <li>
                <img src="imagenes/deee.jpg">
                <h2>Broken Bells</h2>
                <p>Broken Bells</p>
                </li>
                <li>
                    <img src="imagenes/yoyo.jpg">
                <h2>Warning</h2>
                <p>Hot Chip</p>
                </li>
                <li>
                <h2>Wolfgang Amadeus Phoenix</h2>
                <p>Phoenix</p>
                </li>
            </ul>
        </div><!-- /content -->

    
    </div><!-- /page -->

    <script>
		function verificar_login()
		{
			var resultado="";
			$.get("http://pymesv.com/cliente02w/API/login/", { user: $("#usuario").val(), pass: $("#pass").val() })
			.done(function( jsonws ) {				
				$.each(jsonws ,function(indice, valor){
					if(valor=="error" && indice=="autoriza")
					{
						resultado="0";
					}
					else
					{
						resultado=resultado+indice+"="+valor+"&";
					}												
				})	
				if(resultado=="0")
				{
					window.location.href="#dlg-invalid-credentials";
				}
				else
				{
					window.location.href="#ListaProducts?"+resultado;		
				}								
			});				
		}
		$("#btnlogin").click(function(){
			if($("#usuario").val() == "" || $("#pass").val() =="")
			{
				
			}
			else
			{
				verificar_login();
			}			
		});
		$( "#pass" ).keypress(function(event){
			if ( event.which == 13 ) {
				verificar_login();
			}
		});

			function ver_carrito()
			{
					 var html="<ul data-role='listview' data-filter='true' data-filter-placeholder='Buscar Productos' data-inset='true'>";
					$.each(carrito ,function(indice,valor){
						subtotal=subtotal+parseFloat(valor.precio);
						html=html+"<li><a href='#popupLogin' data-rel='popup' data-position-to='window' data-transition='pop'><img src='"+valor.url+"' width='40' height='40'><<h3>"+valor.nombre+"</h3><h2>$"+valor.precio+"</h2></li>";					
					});
					html=html+"</ul>";
					$("#product").html(html);
			}

            $(document).ready(obtener_productos);

            function obtener_productos()
            {
                $("#areaproductos").html("");
                
                //OBTENIENDO INFORMACION DE WS
                $.get("http://pymesv.com/cliente02w/API/TODOS/")
                .done(function(jsonws){                                     
                    $.each(jsonws ,function(indice,valor){
                        if(indice=="error" && valor=="0")
                        {
                            
                        }
                        else if(indice=="error" && valor=="1")
                        {
                           
                        }
                        else
                        {   $("#product").append("");
                            var html=""; 
                            html="<li class='ui-li-has-thumb'><a href='#"+valor.idproductos+"' data-rel='popup' data-position-to='window' data-transition='pop'><img src='"+valor.url+"' width='40' height='40'><h3>"+valor.nombre+"</h3><h2>$"+valor.precio+"</h2></li>";                  
                           
                            $("#product").append(html);

                            $("#Prods").append("");
                            var html2=""; 
                            html2=" <div data-role='popup' id='"+valor.idproductos+"' data-theme='a' class='ui-corner-all'><form><div style='padding:10px 20px;'><h3>"+valor.nombre+"</h3><img src='"+valor.url+"' style='width:50%; height:50%;' ><center>"+valor.descripcion+"</center><input type='text' name='user' id='cantidad_"+valor.idproducto+"'  placeholder='Cantidad' data-theme='a'> <button type='submit' id='btn_"+valor.idproductos+"' class='ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-shop'>Añadir a carrito</button></div></form></div></div>";
                            $("#Prods").append(html2);
                            
                        }
                    })
                });
            }

                var idcliente=1;
      
      //CARRITOS HISTORICOS DE COMPRAS
            function obtener_historico()
            {
                
                    $("#compradoslista").html("");               
                    $.get("http://pymesv.com/cliente02w/API/mostrarcarrito/", { idclientes: idcliente})
                    .done(function(jsonws){ 
                        var html;
                        $.each(jsonws ,function(indice,valor){
                         html =html+"<li><img src='"+valor.url+"'' width='50%' height='50%' ><h2>"+valor.nombre+"</h2><p>cantidad: "+valor.cantidad+"</p><h3>$"+valor.subtot+"</h3><p>"+valor.fecha+"</p></li>";
             })
                        
                        $("#compradoslista").html(html);
                    });         
                                
            }
            //AGREGAR PARCIALMENTE AL CARRITO
            function agregar_carrito(cliente,idproducto,nombre,precio,imagen)
            {               
                var nuevo;
                nuevo={"idcliente":cliente,"idproductos":idproducto,"nombre":nombre,"precio":precio,"url":imagen};
                carrito.push(nuevo);
                cantidad=carrito.length;
                $("#contadorproductos").html(cantidad).fadeIn();
                
            }
		</script>
</body>
</html>