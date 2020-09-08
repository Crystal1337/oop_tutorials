<?php

interface Newsletter
{
  public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
  /*protected $apiKey

  public function __construct($apiKey)
  {
    $this->apiKey = $apiKey;
  }*/

  public function subscribe($email)
  {
    die('subscribing with campaign monitor');
  }
}

class Drip implements Newsletter
{
  public function subscribe($email)
  {
    die('subscribing with drip');
  }
}


class NewsletterSubscriptionController
{
  public function store(Newsletter $newsletter)
  {
    $email = 'michal.nowak@email.com';

    $newsletter->subscribe($email);
  }
}

$controller = new NewsletterSubscriptionController();

$controller->store(new Drip());

 ?>
