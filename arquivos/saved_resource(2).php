<?php
	
	echo "
	<!DOCTYPE html>
<html class=\" js csstransitions\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
	<head>
		<title>Festival</title>
		
		<!--meta-->
		<meta name=\"viewport\" content=\"initial-scale=1.0, width=device-width\">
	
		<!--link-->
		<link type=\"text/css\" rel=\"stylesheet\" href=\"./style-head.css\">
		<link type=\"text/css\" rel=\"stylesheet\" href=\"./css\">
		<link href=\"./bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
		<link href=\"./font-awesome.css\" rel=\"stylesheet\" type=\"text/css\">
		<link href=\"./prettyPhoto.css\" rel=\"stylesheet\" type=\"text/css\">
		<link href=\"./jquery.bxslider.css\" rel=\"stylesheet\">
		<link href=\"./jquery.countdown.css\" rel=\"stylesheet\" type=\"text/css\">
		<link href=\"./style.css\" rel=\"stylesheet\" type=\"text/css\">
		<link href=\"./responsive.css\" rel=\"stylesheet\" type=\"text/css\">
		<link rel=\"stylesheet\" href=\"./animate.css\">
		<link href=\"./owl.carousel.css\" rel=\"stylesheet\" type=\"text/css\">
		<link href=\"./owl.transitions.css\" rel=\"stylesheet\" type=\"text/css\">
	
		<style>
			table 
			{
				border-collapse: collapse;
				width: 100%;
			}

			th, td 
			{
				padding: 8px;
				text-align: left;
				border-bottom: 1px solid #ddd;
			}
		
			tr:hover{background-color:#f5f5f5}
		</style>
		
		<!--noscript-->
		<noscript>
			&lt;link rel=\"stylesheet\" type=\"text/css\" href=\"css/noJS.css\"/&gt;
		</noscript>
		
		<!--script-->
		<script type=\"text/javascript\" charset=\"UTF-8\" src=\"./common.js.download\"></script>
		
		<script type=\"text/javascript\" charset=\"UTF-8\" src=\"./map.js.download\"></script>
		
		<script type=\"text/javascript\" charset=\"UTF-8\" src=\"./util.js.download\"></script>
		
		<script type=\"text/javascript\" charset=\"UTF-8\" src=\"./marker.js.download\"></script>
		
		<script async type=\"text/javascript\" src=\"http://a.adroll.com/j/roundtrip.js\"></script>
		
		<script type=\"text/javascript\" charset=\"UTF-8\" src=\"./infowindow.js.download\"></script>
		
		<script type=\"text/javascript\" charset=\"UTF-8\" src=\"./onion.js.download\"></script>
		
		<script type=\"text/javascript\" charset=\"UTF-8\" src=\"./ViewportInfoService.GetViewportInfo\"></script>
		
		<script type=\"text/javascript\" charset=\"UTF-8\" src=\"./controls.js.download\"></script>
		
		<script type=\"text/javascript\" charset=\"UTF-8\" src=\"./stats.js.download\"></script>
		
		<script type=\"text/javascript\" charset=\"UTF-8\" src=\"./AuthenticationService.Authenticate\"></script>
		
		<script type=\"text/javascript\" charset=\"UTF-8\" src=\"./vt\"></script>
		
		<script type=\"text/javascript\" charset=\"UTF-8\" src=\"./QuotaService.RecordEvent\"></script>
				
		<script type=\"text/javascript\" src=\"jquery-3.2.1.min.js\"></script>
        
        <script type=\"text/javascript\" src=\"teste.js\"></script>
		
	  </head>

	  <body>
		<body id=\"wrapper\" data-spy=\"scroll\" data-target=\"#bs-example-navbar-collapse-1\"/>
		
		<!--div-->
		<div id=\"loader\" style=\"display: none;\">
			<div class=\"loader\"></div>
		</div>

		<!-- Banner inicial -->
		<div id=\"banner\" class=\"module parallax parallax-header\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"banner-inner\">                
						<div id=\"header-slider\" class=\"owl-carousel owl-theme\" style=\"opacity: 1; display: block;\"> 
							
							<!--div 1 Botões de info e ver vídeo-->
							<div class=\"owl-wrapper-outer\">
								<div class=\"owl-wrapper\" style=\"width: 9040px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px); transform-origin: 565px center 0px; perspective-origin: 565px center;\">
									<div class=\"owl-item\" style=\"width: 1130px;\">
										<div class=\"item col-xs-12\">
											<h1 class=\"title title-lines\">
												<span>03 de Outubro de 2017</span>
											</h1>								
											<h3 class=\"subtitle\">LIVE & IN COLORS</h3>
										</div>	
									</div>				
								</div>
							</div>
													
								</div>
							</div>
						</div>
					</div>
                             
					<div class=\"owl-controls clickable\">
						<div class=\"owl-pagination\">
							<div class=\"owl-page active\">
								<span class=\"\"></span>
							</div>
							<div class=\"owl-page\">
								<span class=\"\"></span>
							</div>
							<div class=\"owl-page\">
								<span class=\"\"></span>
							</div>
							<div class=\"owl-page\">
								<span class=\"\"></span>
							</div>
						</div>
						<div class=\"owl-buttons\">
							<div class=\"owl-prev\">
								<i class=\"fa fa-chevron-left\"></i>
							</div>
							<div class=\"owl-next\">
								<i class=\"fa fa-chevron-right\"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--Div com conteúdos-->
		<div class=\"row banner-bottom hidden-xs\">
			<div class=\"concert-info\">
			
				<!--Data-->
				<div class=\"col-xs-12 col-sm-3 col-md-3 no-left-padding\">
					<div class=\"concert-info-body\">
						<span class=\"pull-left\">
							<i></i>
						</span>
						<div class=\"concert-info-text\">
						</div>
					</div>
				</div>
				
				<!--Horário-->
				<div class=\"col-xs-12 col-sm-3 col-md-3 no-left-padding\">
					<div class=\"concert-info-body\">
						<span class=\"pull-left\">
							<i></i>
						</span>
						<div class=\"concert-info-text\">
						</div>
					</div>
				</div>
				
				<!--Localização-->
				<div class=\"col-xs-12 col-sm-3 col-md-3 no-left-padding\">
					<div class=\"concert-info-body\">
						<span class=\"pull-left\">
							<i></i>
						</span>
						<div class=\"concert-info-text\">
						</div>
					</div>
				</div>   
					
				<!--Ingressos-->
				<div class=\"col-xs-12 col-sm-3 col-md-3 no-left-padding\">
					<div class=\"concert-info-body\">
						<span class=\"pull-left\">
							<i></i>
						</span>
						<div class=\"concert-info-text\">
						</div>
					</div>
				</div>
						            
			</div>
		</div>
		<!-- Fim do banner -->

		<!-- Cabeçalho -->
		<header id=\"header\" data-spy=\"affix\" data-offset-top=\"2\" class=\"affix-top\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-md-10 col-sm-9 col-xs-12 header-right affix-header-right\">
						<nav class=\"navbar navbar-default col-xs-12 text-center\">
							<div class=\"navbar-header\">
								<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
									<span class=\"sr-only\">Toggle navigation</span>
									<span class=\"icon-bar\"></span>
									<span class=\"icon-bar\"></span>
									<span class=\"icon-bar\"></span>
								</button>
							</div>
							<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
								<ul class=\"nav navbar-nav\">
									<li class=\"hvr-underline-from-center active\">
										<a href=\"http://localhost/Live%20&%20In%20Colors/Live%20&%20In%20Colors.html\"> VOLTAR PARA HOME </a>
									</li>									
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- Cabeçalho -->
		
		<br>
		<br>
		<!-- Serviços -->
		<div id=\"servicos\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"services-inner col-md-12 text-center\">
						<h1 class=\"wow fadeInUp\" data-wow-duration=\"2s\" style=\"visibility: hidden; animation-duration: 2s; animation-name: none;\">CONSULTA DE INSCRITOS</h1>
						<br>
							
						<br>
						<div class=\"servicebox col-md-4 wow fadeIn\" data-wow-delay=\"1s\" data-wow-duration=\"2s\" 
							 style=\"visibility: hidden; animation-duration: 2s; animation-delay: 1s; animation-name: none;\">
							<div class=\"servicebox-inner text-left wow slideInLeft\" style=\"visibility: hidden; animation-name: none;\">";
							
							
							include('_php/consulta_inscrito.php');		
							
														
						echo	"</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Serviços -->
		
		<br>
		<br>
		<!--Div com conteúdos-->
		<div class=\"row banner-bottom hidden-xs\">
			<div class=\"concert-info\">
			
				<!--Data-->
				<div class=\"col-xs-12 col-sm-3 col-md-3 no-left-padding\">
					<div class=\"concert-info-body\">
						<span class=\"pull-left\">
							<i></i>
						</span>
						<div class=\"concert-info-text\">
						</div>
					</div>
				</div>
				
				<!--Horário-->
				<div class=\"col-xs-12 col-sm-3 col-md-3 no-left-padding\">
					<div class=\"concert-info-body\">
						<span class=\"pull-left\">
							<i></i>
						</span>
						<div class=\"concert-info-text\">
						</div>
					</div>
				</div>
				
				<!--Localização-->
				<div class=\"col-xs-12 col-sm-3 col-md-3 no-left-padding\">
					<div class=\"concert-info-body\">
						<span class=\"pull-left\">
							<i></i>
						</span>
						<div class=\"concert-info-text\">
						</div>
					</div>
				</div>   
					
				<!--Ingressos-->
				<div class=\"col-xs-12 col-sm-3 col-md-3 no-left-padding\">
					<div class=\"concert-info-body\">
						<span class=\"pull-left\">
							<i></i>
						</span>
						<div class=\"concert-info-text\">
						</div>
					</div>
				</div>
						            
			</div>
		</div>
		<!-- Fim do banner -->
		
		<br>
		<br>
		<!-- Serviços -->
		<div id=\"servicos\">
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"services-inner col-md-12 text-center\">
						<h1 class=\"wow fadeInUp\" data-wow-duration=\"2s\" style=\"visibility: hidden; animation-duration: 2s; animation-name: none;\">CONSULTA DE EMAILS DO NEWSLETTER</h1>
						<br>
						<br>
						<div class=\"servicebox col-md-4 wow fadeIn\" data-wow-delay=\"1s\" data-wow-duration=\"2s\" 
							 style=\"visibility: hidden; animation-duration: 2s; animation-delay: 1s; animation-name: none;\">";
							 
							 include('_php/consulta_email.php');		
							
					echo "</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Serviços -->

	
		

		<!-- Rodapé -->
		<div id=\"footer\" class=\"module parallax parallax-footer\">    
			<div class=\"container\">
				<div class=\"row\">
					<div class=\"col-md-3 col-sm-12 text-center footer-info wow fadeInUp\" data-wow-duration=\"1s\" 
						 style=\"visibility: hidden; animation-duration: 1s; animation-name: none;\">
					</div>
					<div class=\"col-md-3 col-sm-4 text-center footer-info wow fadeIn\" data-wow-duration=\"2s\" data-wow-delay=\"1s\" 
						 style=\"visibility: hidden; animation-duration: 2s; animation-delay: 1s; animation-name: none;\">
						
						<p class=\"footer-text\">Salto, São Paulo, Brasil</p>
					</div>
					<div class=\"col-md-3 col-sm-4 text-center footer-info wow fadeIn\" data-wow-duration=\"2s\" data-wow-delay=\"1s\" 
						 style=\"visibility: hidden; animation-duration: 2s; animation-delay: 1s; animation-name: none;\">	
						<p class=\"footer-text\">
							info@liveincolorsfestival.com <br>
						</p> 
					</div>
					<div class=\"col-md-3 col-sm-4 text-center footer-info wow fadeIn\" data-wow-duration=\"2s\" data-wow-delay=\"1s\" 
						 style=\"visibility: hidden; animation-duration: 2s; animation-delay: 1s; animation-name: none;\">
						<p class=\"footer-text\">
							(11) 6862-1286
							<br>
							(11) 91892-0000
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Rodapé -->

		<!--Direitos autorais-->
		<div id=\"copy-right\">
			<div class=\"container\">
				<div class=\"row text-center\">
					<p>CopyRight © 2017 LIVE & IN COLORS Festival, direitos reservados. Desenvolvido por HANSEN </p>
				</div>
			</div>
		</div>
		<!--Direitos autorais-->

		<!--Scripts-->
		<script src=\"./wow.min.js.download\"></script>
		<script type=\"text/javascript\" src=\"./jquery.js.download\"></script>
		<script type=\"text/javascript\" src=\"./bootstrap.min.js.download\"></script>
		<script type=\"text/javascript\" src=\"./jquery.smoothwheel.js.download\"></script>
		<script type=\"text/javascript\" src=\"./respond.js.download\"></script>
		<script type=\"text/javascript\" src=\"./jquery-migrate.min.js.download\"></script>
		<script type=\"text/javascript\" src=\"./jquery.prettyPhoto.js.download\"></script>
		<script type=\"text/javascript\" src=\"./jquery.bxslider.min.js.download\"></script>
		<script src=\"./js\"></script>
		<script type=\"text/javascript\" src=\"./jquery.mixitup.js.download\"></script>
		<script type=\"text/javascript\" src=\"./owl.carousel.js.download\"></script>
		<script type=\"text/javascript\" src=\"./jquery.plugin.js.download\"></script>
		<script type=\"text/javascript\" src=\"./jquery.countdown.min.js.download\"></script>
		<script type=\"text/javascript\" src=\"./modernizr.custom.97074.js.download\"></script>
		<script type=\"text/javascript\" src=\"./jquery.hoverdir.js.download\"></script>
		<script type=\"text/javascript\" src=\"./jquery.validate.min.js.download\"></script>
		<script type=\"text/javascript\" src=\"./script.js.download\"></script>
 

<script type=\"text/javascript\">
    adroll_adv_id = \"SA5ULTTHYNE2NKTXD5PMRP\";
    adroll_pix_id = \"TPHFLAMAMBDANEFZRZF6IL\";
    /* OPTIONAL: provide email to improve user identification */
    /* adroll_email = \"username@example.com\"; */
    (function () {
        var _onload = function(){
            if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
            if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
            var scr = document.createElement(\"script\");
            var host = ((\"https:\" == document.location.protocol) ? \"https://s.adroll.com\" : \"http://a.adroll.com\");
            scr.setAttribute('async', 'true');
            scr.type = \"text/javascript\";
            scr.src = host + \"/j/roundtrip.js\";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {window.addEventListener('load', _onload, false);}
        else {window.attachEvent('onload', _onload)}
    }());
</script>


	</body>
</html>"
					 
?>