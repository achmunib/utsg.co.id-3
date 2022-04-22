<?php
use GuzzleHttp\Client;

class News_model extends CI_Model
{
  private $_client;

  public function __construct()
  {
    $this->_client = new Client([
      'base_uri' => 'http://10.30.8.192/rest_api/api/',
      'auth' => ['admin','1234']
    ]);
  }

  public function getNews()
  {
    $response = $this->_client->request('GET', 'Market_news', [
      'query' => [
        'utsg-key' => 'utsg123',
        'limit' => 4,
        'start' => 0
      ]
    ]);

    $result = json_decode($response->getBody()->getContents(), true);
    return $result['news'];
  }

  public function getPageNews()
  {
    $response = $this->_client->request('GET', 'Market_news', [
      'query' => [
        'utsg-key' => 'utsg123',
      ]
    ]);

    $result = json_decode($response->getBody()->getContents(), true);
    return $result;
  }

  public function getAllNews($limit, $start)
  {
    $response = $this->_client->request('GET', 'Market_news', [
      'query' => [
        'utsg-key' => 'utsg123',
        'limit' => $limit,
        'start' => $start
      ]
    ]);

    $result = json_decode($response->getBody()->getContents(), true);
    return $result['perpage'];
  }

  public function getDetailNews($id)
  {
    $response = $this->_client->request('GET', 'Market_news', [
      'query' => [
        'utsg-key' => 'utsg123',
        'id' => $id
      ]
    ]);

    $result = json_decode($response->getBody()->getContents(), true);
    return $result;
  }
}
