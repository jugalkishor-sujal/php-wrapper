<?php

namespace demo;

class Price extends BaseWithoutId
{
  /*
   * float
   * amount
   * required
   */
  public $amount;

  /*
   * string
   * currency
   * optional, default to EUR
   */
  public $currency;
  
}

?>
