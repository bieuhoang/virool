<?php
  include_once dirname(BASEPATH).'/sparks/googleapi/libraries/Google_Client.php';
  include_once dirname(BASEPATH).'/sparks/googleapi/libraries/contrib/Google_YouTubeService.php';
  Class Googleapi{
    public $youtube;
    public function __construct(){
      $DEVELOPER_KEY = 'AIzaSyBfhkasYXSwwUNjNU-nts2zsvWuVdvmdXg';
      $client = new Google_Client();
      $client->setDeveloperKey($DEVELOPER_KEY);
      $this->youtube = new Google_YoutubeService($client);
    }
  }
