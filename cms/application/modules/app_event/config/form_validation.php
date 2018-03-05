<?php

/***********************************************************
@date 21/06/2014
@desc Configuration form validation field
      This config will use for every form submit
***********************************************************/
$config = array(
          'app_event' => array(
           array(
                    'field' => 'event_title',
                    'label' => 'Event Title',
                    'rules' => 'required|max_length[50]|xss_clean'
                 ),
           array(
                    'field' => 'event_place',
                    'label' => 'Event Place',
                    'rules' => 'required|max_length[50]|xss_clean'
                 ),
           array(
                    'field' => 'event_date_start',
                    'label' => 'Event Date Start',
                    'rules' => 'required|max_length[50]|xss_clean'
                 )
            )
        )
?>