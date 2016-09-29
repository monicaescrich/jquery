<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
            <label for="txt-email" id="usuario">Usuario</label>
            <input type="text" name="txt-email" id="txt-email" value="">
            <label for="txt-password">Contra</label>
            <input type="password" name="txt-password" id="pass" value="">
            
            <a href="#ListaProducts"  id="btnlogin" class="ui-btn ui-btn-b ui-corner-all mc-top-margin-1-5">Iniciar Sesion</a>
            
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
        <div data-role="navbar">
            <ul>
                <li><a href="#ListaProducts">Productos</a></li>
                <li><a href="#carrito">Carrito</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </div><!-- /navbar -->
        </div><!-- /header -->
        <div role="main" class="ui-content" id="product">
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
                    <img src="../_assets/img/album-p.jpg">
                <h2>Wolfgang Amadeus Phoenix</h2>
                <p>Phoenix</p></a>
                </li>
                
            </ul> -->
        </div><!-- /content -->

    <div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">    
    <form>
        <div style="padding:10px 20px;" id="productespecifico">
            <h3>Producto</h3>
            <img src="imagenes/yoyo.jpg" style="width:50%; height:50%;" >
            <center>iraa una descripcion del producto</center>
            <input type="text" name="user" id="un" value="" placeholder="Cantidad" data-theme="a">
            <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-shop">Añadir a carrito</button>
        </div>
    </form>
    	</div>
	</div>
    </div><!-- /page -->

    <div data-role="page" id="carrito">
        <div data-role="header" style="overflow:hidden;">
        <h1>TecnoVentas</h1>
        <div data-role="navbar">
            <ul>
                <li><a href="#ListaProducts" onClick="ver_carrito();">Productos</a></li>
                <li><a href="#carrito">Carrito</a></li>
                <li><a href="#contacto">Contacto</a></li>
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
                    <img src="../_assets/img/album-p.jpg">
                <h2>Wolfgang Amadeus Phoenix</h2>
                <p>Phoenix</p>
                </li>
            </ul>
        </div><!-- /content -->

    
	</div>
    </div><!-- /page -->

    <script>
		function verificar_login()
		{
			var resultado="";
			$.blockUI({ 
				message: '<center><img src="dist/images/loading.GIF" width="50px"  height="50px"><br><h4>Iniciando sesi&oacute;n . . .</h4></center>',
				css: { 
					border: "none", 
					padding: "8px", 
					backgroundColor: "none", 										
					color: "#fff"
				} 
			});
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
					$.unblockUI();
					toastr.options = {
						"positionClass": "toast-bottom-right"
					}
					window.location.href="#dlg-invalid-credentials";
				}
				else
				{
					window.location.href="#ListaProducts"+resultado;		
				}								
			});				
		}
		$("#btnlogin").click(function(){
			if($("#usuario").val() == "" || $("#pass").val() =="")
			{
				toastr.options = {
					"positionClass": "toast-bottom-right"
				}
				toastr.error("<h5>CAMPOS VACIOS. . .</h5>");
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
					$("#product").append(html);
			}
		</script>
</body>
</html>