<?php exit("Permission Denied"); ?>
2018-05-30 11:10:24
array (
  'db' => 'cms',
  'collection' => 'menu',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
site_pkid:1481338143226573
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
