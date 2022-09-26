<html>
<head>
</head>
<body>
<?php

$servers = getenv("MONGO_CONFIG");
$servers = @json_decode($servers, true);

$username = "";
$password = "";

if (isset($servers[0]))
{
	$username = isset($servers[0]["mongo_login"]) ? $servers[0]["mongo_login"] : "";
	$password = isset($servers[0]["mongo_password"]) ? $servers[0]["mongo_password"] : "";
}

?>

<div>Redirect. Please wait...</div>
<form id="adminer_form" method="post" action="./rockmongo-1.1.8/index.php?action=login.index">
	<input type='hidden' name='host' value='0' />
	<input type='hidden' name='username' value='<?= htmlspecialchars($username) ?>' />
	<input type='hidden' name='password' value='<?= htmlspecialchars($password) ?>' />
	<input type='hidden' name='db' value='' />
</form>

<script>
	adminer_form.submit();
</script>

</body>
</html>