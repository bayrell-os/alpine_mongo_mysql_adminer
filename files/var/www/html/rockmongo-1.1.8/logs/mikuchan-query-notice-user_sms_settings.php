<?php exit("Permission Denied"); ?>
2017-07-26 17:11:50
array (
  'db' => 'notice',
  'collection' => 'user_sms_settings',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
user_pkid:57836
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
