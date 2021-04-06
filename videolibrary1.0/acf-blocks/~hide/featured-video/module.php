<?php
	acf_register_block_type(array(
    'name'     => 'feature-video-fields',
    'title'    => 'Feature Video Fields',
    'mode'     => 'edit',
    'category' => 'theme',
    'parent'   => array('feature-video'),
    'supports' => array(
      'align'    => false,
      'mode'     => false,
      'inserter' => false,
      'reusable' => false
	 )
));	