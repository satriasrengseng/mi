<?php

/***********************************************************
@date 21/06/2014
@desc Configuration form validation field
      This config will use for every form submit
***********************************************************/
$config = array(
          'app_lowongan' => array(
           array(
                    'field' => 'info_title',
                    'label' => 'Info Title',
                    'rules' => 'required|max_length[50]|xss_clean'
                 ),
           array(
                    'field' => 'info_desc',
                    'label' => 'Deskripsi Info',
                    'rules' => 'required|max_length[200]|xss_clean'
                 ),
           array(
                    'field' => 'info_date',
                    'label' => 'Info Tanggal',
                    'rules' => 'required|max_length[50]|xss_clean'
                 )
            )
        )
?>