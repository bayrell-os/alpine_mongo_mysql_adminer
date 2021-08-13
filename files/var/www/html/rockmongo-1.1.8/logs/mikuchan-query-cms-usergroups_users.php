<?php exit("Permission Denied"); ?>
2018-01-11 16:11:59
array (
  'db' => 'cms',
  'collection' => 'usergroups_users',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
pkid:1509603540101946
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
