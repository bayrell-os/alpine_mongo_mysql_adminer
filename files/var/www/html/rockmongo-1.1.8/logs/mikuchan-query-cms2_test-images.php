<?php exit("Permission Denied"); ?>
2017-04-12 12:24:45
array (
  'db' => 'cms2_test',
  'collection' => 'images',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
site_pkid:1459272007929444
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
