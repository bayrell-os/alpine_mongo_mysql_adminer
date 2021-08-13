<?php exit("Permission Denied"); ?>
2017-05-18 18:19:20
array (
  'db' => 'cabinet',
  'collection' => 'bonus_history',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
count:10
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
