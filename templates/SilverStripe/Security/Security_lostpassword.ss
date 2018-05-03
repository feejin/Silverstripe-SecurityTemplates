<% include SilverStripe\Security\Includes\SecurityHead %>

<div id="top">
	<header>
		<h1><%t Security.LOSTPASSWORDHEADER "Password Reset" %><span><!-- for logo --></span></h1>
	</header>
	<div class="content">
        {$Content}
        <br />
        $Form
    </div>
</div>

<% include SilverStripe\Security\Includes\SecurityFooter %>
