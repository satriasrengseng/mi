<?php

/***********************************************************
@date 21/06/2014
@desc Configuration form validation field
      This config will use for every form submit
***********************************************************/
$config = array(
          'app_jadwal' => array(
           array(
                    'field' => 'id_kelas_jurusan',
                    'label' => 'Kelas',
                    'rules' => 'required|max_length[50]'
                 ),
           array(
                    'field' => 'tahun_ajar',
                    'label' => 'Tahun Ajar',
                    'rules' => 'required|max_length[50]'
                 ),
            )
        )
?>