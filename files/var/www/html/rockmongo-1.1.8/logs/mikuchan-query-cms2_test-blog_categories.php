<?php exit("Permission Denied"); ?>
2017-07-26 16:58:26
array (
  'db' => 'cms2_test',
  'collection' => 'blog_categories',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
"site_pkid": 0
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
2017-07-26 16:58:32
array (
  'db' => 'cms2_test',
  'collection' => 'blog_categories',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
site_pkid: 0
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
2017-07-26 16:58:40
array (
  'db' => 'cms2_test',
  'collection' => 'blog_categories',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
site_pkid: {$ne: 0}
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
2017-07-26 16:58:47
array (
  'db' => 'cms2_test',
  'collection' => 'blog_categories',
  'action' => 'collection.index',
  'format' => 'json',
  'criteria' => '{
site_pkid: {$ne: 0}
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
  'command' => 'remove',
)
================
