<?php

namespace Increment\Finance\FundTransferCharge;

use Illuminate\Support\ServiceProvider;

class FundTransferChargeProvider extends ServiceProvider{

  public function boot(){
    $this->loadMigrationsFrom(__DIR__.'/migrations');
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
  }

  public function register(){
  }
}