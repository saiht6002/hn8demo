<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Een persoon heeft iets ingevuld op jouw website ',
    'email_message' => 'Een klant heeft dit ingevuld:',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'www-data@dummy.matthiasvanduysen.eu',
    'to' => 'formontvangers@vdpro.be'
    ),
    'fields' => array(
    'naam' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'telefoon' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => '',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'\' is required.'
    )
    ),
    'bericht' => array(
    'order' => 4,
    'type' => 'string',
    'label' => '',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('6Le0MBQkAAAAAGH2cgc6azD1uZF2Q_Js5kQ56oq7');
    $processor->process($form);

    ?>