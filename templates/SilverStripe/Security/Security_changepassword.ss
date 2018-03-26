<!DOCTYPE html>
<html lang="$ContentLocale">
<head>
	<% base_tag %>
	<title><% if MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="<% if MetaDescription %>$MetaDescription<% else %>$Content.FirstParagraph<% end_if %>">
	$MetaTags(false)
	<link rel="stylesheet" href="{$BaseURL}resources/vendor/feejin/silverstripe-securitytemplates/css/login.css" type="text/css" />
	<link rel="shortcut icon" href="{$BaseURL}favicon.ico" />
</head>
<body class="$ClassName">

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

</body>
</html>
