<?php

namespace willGragam\DigitalCep;

class Search
{
  private $_url = 'https://viacep.com.br/ws/';

  public function getAddressFromZipcode(string $zipCode): array
  {
    $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

    $get = file_get_contents($this->url . $zipCode . "/json");

    // print_r($get);

    return (array) json_decode($get);
  }
}
