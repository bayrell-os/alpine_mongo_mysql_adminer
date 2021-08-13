<?php exit("Permission Denied"); ?>
2017-09-21 11:00:03
array (
  'db' => 'cabinet',
  'collection' => 'bonus',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
"user_pkid": NumberLong(208705)
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
