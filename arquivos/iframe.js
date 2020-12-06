//calculando a altura do cabeçalho
var calAltura = function() 
{
	var cabecalhoDimensoes = $('.preview__header').height();
        
	$('.full-screen-preview__frame').height($(window).height() - cabecalhoDimensoes);
}

$(document).ready(function() 
{
	calAltura();
});

$(window).resize(function() 
{
	calAltura();
}).load(function() 
{
	calAltura();
});