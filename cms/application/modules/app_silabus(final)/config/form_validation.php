<?php

/***********************************************************
@desc Configuration form validation field
      This config will use for every form submit
***********************************************************/
$config = array(
          'app_silabus' => array(
           array(
                    'field' => 'silabus_nm_pel',
                    'label' => 'Nama Pelajaran',
                    'rules' => 'required|max_length[50]|xss_clean'
                 )
            )
        )
?>