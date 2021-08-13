<?php exit("Permission Denied"); ?>
2017-08-17 12:36:47
array (
  'db' => 'cms2_test',
  'collection' => 'system.profile',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
 "count":"domaint"
}',
  'newobj' => '{
	\'$set\': {
		//your attributes
	}
}',
  'field' => 
  array (
    0 => '_id',
    1 => '',
    2 => '',
    3 => '',
  ),
  'order' => 
  array (
    0 => 'desc',
    1 => 'asc',
    2 => 'asc',
    3 => 'asc',
  ),
  'limit' => '0',
  'pagesize' => '10',
  'command' => 'findAll',
)
================
2017-08-17 12:36:54
array (
  'db' => 'cms2_test',
  'collection' => 'system.profile',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
 "count":"domains"
}',
  'newobj' => '{
	\'$set\': {
		//your attributes
	}
}',
  'field' => 
  array (
    0 => '_id',
    1 => '',
    2 => '',
    3 => '',
  ),
  'order' => 
  array (
    0 => 'desc',
    1 => 'asc',
    2 => 'asc',
    3 => 'asc',
  ),
  'limit' => '0',
  'pagesize' => '10',
  'command' => 'findAll',
)
================
2017-08-17 12:37:25
array (
  'db' => 'cms2_test',
  'collection' => 'system.profile',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
"command": {
"count": "domains"
}
}',
  'newobj' => '{
	\'$set\': {
		//your attributes
	}
}',
  'field' => 
  array (
    0 => '_id',
    1 => '',
    2 => '',
    3 => '',
  ),
  'order' => 
  array (
    0 => 'desc',
    1 => 'asc',
    2 => 'asc',
    3 => 'asc',
  ),
  'limit' => '0',
  'pagesize' => '10',
  'command' => 'findAll',
)
================
