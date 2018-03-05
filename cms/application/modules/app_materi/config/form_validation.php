<?php

/***********************************************************
@desc Configuration form validation field
      This config will use for every form submit
***********************************************************/
$config = array(
          'app_materi' => array(
           array(
                    'field' => 'materi_ajar',
                    'label' => 'Nama Pelajaran',
                    'rules' => 'required|max_length[50]|xss_clean'
                 )
            )
        )
?>