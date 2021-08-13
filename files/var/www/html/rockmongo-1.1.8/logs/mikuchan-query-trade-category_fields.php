<?php exit("Permission Denied"); ?>
2017-07-04 13:55:27
array (
  'db' => 'trade',
  'collection' => 'category_fields',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
category_pkid:1444902104902646
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
