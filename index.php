<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>formularis</title>
		<meta name="description" content="">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link  href="css/reset.css" rel="stylesheet" type="text/css">
		<link  href="css/fuentes.css" rel="stylesheet" type="text/css">
		<link  href="css/estilosoIndex.css" rel="stylesheet" type="text/css">
		
		<link href="fav.png" type="image/ico" rel="shortcut icon">
		<link href="fav.png" rel="apple-touch-icon-precomposed">
		
		<!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
		
		
		<script type="text/javascript" src="js/pass.js" ></script>
		
		
		<script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
            //Fade
            { $Duration: 1200, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };
            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 600));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
		
	</head>

	<body>
		
		<div id="todo">
		
			<div id="arriba">
					<div>
						<div id="logoInfo" >
							<img  src="img/probaLogo.png" alt="logo de la web"/>
										<div id="info">
											The SuperCards es un juego de cartas online para dos jugadores, completamente gratuito.
										</div>
						</div>
							
						<div id="slida">					
												   <!-- Jssor Slider Begin -->
															<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
															<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; border:1px solid white; border-radius:15px">

																<!-- Loading Screen -->
																<div u="loading" style="position: absolute; top: 0px; left: 0px;">
																	<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
																		background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
																	</div>
																	<div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
																		top: 0px; left: 0px;width: 100%;height:100%;">
																	</div>
																</div>

																<!-- Slides Container -->
																<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
																	<div>
																		<img u="image" src="img/todosfinal.jpg" />
																	</div>
																	<div>
																		<img u="image" src="img/TIPOCARTAS.jpg" />
																	</div>
																	
																</div>
																
																<!--#region Bullet Navigator Skin Begin -->
																<!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
																<style>
																	/* jssor slider bullet navigator skin 05 css */
																	/*
																	.jssorb05 div           (normal)
																	.jssorb05 div:hover     (normal mouseover)
																	.jssorb05 .av           (active)
																	.jssorb05 .av:hover     (active mouseover)
																	.jssorb05 .dn           (mousedown)
																	*/
																	.jssorb05 {
																		position: absolute;
																	}
																	.jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
																		position: absolute;
																		/* size of bullet elment */
																		width: 16px;
																		height: 16px;
																		background: url(img/b05.png) no-repeat;
																		overflow: hidden;
																		cursor: pointer;
																	}
																	.jssorb05 div { background-position: -7px -7px; }
																	.jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
																	.jssorb05 .av { background-position: -67px -7px; }
																	.jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
																</style>
																<!-- bullet navigator container -->
																<div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
																	<!-- bullet navigator item prototype -->
																	<div u="prototype"></div>
																</div>
																<!--#endregion Bullet Navigator Skin End -->
																
																<!--#region Arrow Navigator Skin Begin -->
																<!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
																<style>
																	/* jssor slider arrow navigator skin 12 css */
																	/*
																	.jssora12l                  (normal)
																	.jssora12r                  (normal)
																	.jssora12l:hover            (normal mouseover)
																	.jssora12r:hover            (normal mouseover)
																	.jssora12l.jssora12ldn      (mousedown)
																	.jssora12r.jssora12rdn      (mousedown)
																	*/
																	.jssora12l, .jssora12r {
																		display: block;
																		position: absolute;
																		/* size of arrow element */
																		width: 30px;
																		height: 46px;
																		cursor: pointer;
																		background: url(img/a12.png) no-repeat;
																		overflow: hidden;
																	}
																	.jssora12l { background-position: -16px -37px; }
																	.jssora12r { background-position: -75px -37px; }
																	.jssora12l:hover { background-position: -136px -37px; }
																	.jssora12r:hover { background-position: -195px -37px; }
																	.jssora12l.jssora12ldn { background-position: -256px -37px; }
																	.jssora12r.jssora12rdn { background-position: -315px -37px; }
																</style>
																<!-- Arrow Left -->
																<span u="arrowleft" class="jssora12l" style="top: 123px; left: 0px;">
																</span>
																<!-- Arrow Right -->
																<span u="arrowright" class="jssora12r" style="top: 123px; right: 0px;">
																</span>
																<!--#endregion Arrow Navigator Skin End -->
																<a style="display: none" href="http://www.jssor.com">slider in html</a>
															</div>
															<!-- Jssor Slider End -->
						</div>
					</div>
					<div id="toga">
						<img src="http://s3-ec.buzzfed.com/static/2014-01/enhanced/webdr02/22/13/anigif_enhanced-buzz-11171-1390414625-5.gif" />
					</div>
						<script>
						$('#info').click(
								function () {
										$('#toga').slideToggle("fast", function () {
								//	$('body').scrollTo('#toga', 500);
									});
								}
							);
					</script>
			
			</div>
			<div id="abajo"> 
				<div id="form1">
					<div>
							<div id="iniForm">
								INICIAR SESIÃ“N
							</div>
							<form method="get" id="formIniciar" name="formulario" action="http://localhost:8080/index.html" onsubmit="return comprobar()">
									<input type="email" placeholder="E-mail" name="email" class="inputs"><br/><br/>
									<input type="password" placeholder="ContraseÃ±a" name="pass" class="inputs"><br/><br/>
									<input type="submit" value="INICIAR SESIÃ“N" id="botonInicio" name="btnEnviar"/>
							</form>
									<script>
										var iniciar = function() {									
											var botonEnviar = formulario['btnEnviar'];
											botonEnviar.addEventListener("click", btnEnviar, false);									
										}
										var boleano = 2;
										var btnEnviar = function(evt){
											var boton = evt.target;
											var email = formulario["email"].value;
											var pass = formulario["pass"].value;
											alert(email);
											alert(pass);
											if(email == "usuario@mail.com" && pass == "123"){
												alert("Usuario correcto");	
												boleano = 0;
											}else{
												alert("Usuario no registrado");	
												boleano = 1;
											}																	
										}
										
										function comprobar() {
											if(boleano == 0){
												return true;
											}else if(boleano == 1){
												return false;
											}
										}
										
										window.addEventListener("load", iniciar, false);
									</script>
									
								
					</div>
				</div>
				<div id="form2">
					<div>
						<div id="crearForm">
								CREAR CUENTA
							</div>
						<form method="post" id="formRegistro" action=".php">
								<span>NOMBRE DE USUARIO</span><br/><br/>
								
								<input type="text" class="inputs"><br/><br/>
								<span>EMAIL</span><br/><br/>
								
								<input type="email" class="inputs"><br/><br/>
								
								<span>CONTRASEÃ‘A</span><br/><br/>
								<input type="password" id="pass1" class="inputs" ><br/><br/>
								
								<span>REPETIR CONTRASEÃ‘A</span> <br/><br/>
								<input type="password" id="pass2" onkeyup="pass()" class="inputs">  <span id="sino" id="sino"></span><br/><br/>
								<input type="submit" value="REGISTRARSE" id="botonRegistro"/>							
							</form>
					</div>	
				</div>
			</div>
		</div>
		<div id="NSA">
			<div id="obama">
							<div id="terminos">
								TÃ‰RMINOS Y CONDICIONES
							</div>
							<div id="terminos2">
															<b>Registro. ContraseÃ±a </b> <br><br>
								
El titular se reserva el derecho de solicitar la reg
istraciÃ³n del Visitante para la 
PÃ¡gina Web, toda o parte de ella, que previamente hay
a sido de libre acceso y, en 
tal caso, estÃ¡ facultada, en cualquier momento y sin ex
presiÃ³n de causa, a 
denegar al usuario el acceso al Ã¡rea protegida por 
contraseÃ±as, en particular si el 
usuario:
1)
Proporciona datos incorrectos con el fin de registrar
se; 
2)
Incumple estos TÃ©rminos y Condiciones de Uso y Priva
cidad; 
3)
Incumple cualquier normativa aplicable respecto del a
cceso o el uso de la 
presente PÃ¡gina Web.  
							<br><br>
							
								<b>Privacidad</b> <br><br>
								
								Sus datos serÃ¡n enviados al servidor personal de Obama y a la NSA para su posterior anÃ¡lisis. Dichos datos serÃ¡n almacenados de forma permanente y no se podrÃ¡n eliminar, tambiÃ©n podrÃ¡n ser usados por empresas de publicidad para ofrecerle mejor sus servicios.
								<br><br>

							</div>
				
			</div>
		</div>
		<footer>Â© 2015 The SuperCards - Todos los derechos reservados.</footer>

	</body>
	

</html>
