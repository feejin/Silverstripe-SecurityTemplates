<% include SilverStripe\Security\Includes\SecurityHead %>

<div id="top">
	<header>
		<h1><%t Security.CHANGEPASSWORDHEADER "Choose a New Password" %><span><!-- for logo --></span></h1>
	</header>
	<% if $Content %>
	<div class="content">
		$Content
	</div>
	<% end_if %>
	$Form
</div>

<% include SilverStripe\Security\Includes\SecurityFooter %>
