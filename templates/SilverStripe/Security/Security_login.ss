<% include SilverStripe\Security\Includes\SecurityHead %>

<div id="top">
	<header>
		<h1>{$SiteConfig.Title} Admin<span><!-- for logo --></span></h1>
	</header>
	<div class="content">
        {$Content}
        $Form
    </div>
</div>

<% include SilverStripe\Security\Includes\SecurityFooter %>
