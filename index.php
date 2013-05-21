<form method="GET">
	<label for="from">From</label>
	<input name="from" id="from" placeholder="http://www.old-domain.com" /><br/>
	<label for="to">To</label>
	<input name="to" id="to" placeholder="http://www.new-domain.com" /><br/>
	<input type="submit" />
</form>
<?php

if (isset($_GET['from'], $_GET['to'])) {
	// Create query
	
	$sql = str_replace(
		array('http://www.old-domain.com', 'http://www.new-domain.com'),
		array($_GET['from'], $_GET['to']),
		file_get_contents(dirname(__FILE__) . '/move.sql')
	);
	
	echo '<pre>' . $sql . '</pre>';
}
