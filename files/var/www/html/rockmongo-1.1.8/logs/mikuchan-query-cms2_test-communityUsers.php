<?php exit("Permission Denied"); ?>
2017-05-23 11:33:23
array (
  'db' => 'cms2_test',
  'collection' => 'communityUsers',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
pkid:1495516099811495
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
2017-05-23 11:33:51
array (
  'db' => 'cms2_test',
  'collection' => 'communityUsers',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
communityPkid:1495516099811495
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
