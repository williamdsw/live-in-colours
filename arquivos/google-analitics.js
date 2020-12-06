(function () 
{
    (function(i,s,o,g,r,a,m)
	{
		i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
		{
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
			a=s.createElement(o), m=s.getElementsByTagName(o)[0];
			a.async=1;
			a.src=g;
			m.parentNode.insertBefore(a,m)
    })

    (window,document,'script','//www.google-analytics.com/analytics.js','ga');

    var ACCOUNTS = ["m"];
	
    window._envGaTrackerNames = ACCOUNTS;

    ga("create", "UA-11834194-7", {"name":"m","allowLinker":true});

    for (var i = 0; i < ACCOUNTS.length; i++) 
	{
		t = ACCOUNTS[i];

		ga(t+'.require', 'linker');
		ga(t+'.linker:autoLink', ["activeden.net","audiojungle.net","themeforest.net","videohive.net","graphicriver.net","3docean.net","codecanyon.net","photodune.net","market.envato.com","market.styleguide.envato.com","elements.envato.com","build.envatohostedservices.com","author.envato.com"]);

		ga(t+'.require', 'ec');

		ga(t+'.require', 'displayfeatures');

		ga(t+'.require', 'linkid', 'linkid.js');
		
		if ('') 
		{
			ga(t+'.send', 
			{
				hitType: 'pageview',
				page: ''
			});
		} 
		else 
			if ('') 
			{
				// append the analytics_suffix to the page path so the flash alert/error type can be tracked
				var analyticsSuffix = $.trim('').replace(/([A-Z])/g, '$1').replace(/[-_\s]+/g, '-').toLowerCase();
				
				var uri = URI(window.location.pathname + window.location.search);
				
				uri.path(uri.path() + '/' + analyticsSuffix);
				
				var tracking_path = uri.path() + uri.search();
				
				ga(t+'.send', 
				{
					hitType: 'pageview',
					page: tracking_path,
				});
			} 
			else 
			{
				ga(t+'.send', 'pageview');
			}
	}
}());