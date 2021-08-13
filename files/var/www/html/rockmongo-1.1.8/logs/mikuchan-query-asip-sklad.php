<?php exit("Permission Denied"); ?>
2017-07-25 18:35:13
array (
  'db' => 'asip',
  'collection' => 'sklad',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
owner: "ramazan_zaure"
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
2017-07-25 18:35:22
array (
  'db' => 'asip',
  'collection' => 'sklad',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
owner: {$ne:"ramazan_zaure"}
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
2017-07-25 18:35:36
array (
  'db' => 'asip',
  'collection' => 'sklad',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
owner: null
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
