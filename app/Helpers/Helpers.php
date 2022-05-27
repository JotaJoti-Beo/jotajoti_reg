<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;

class Helpers
{
  public static function formatDateFromDB($date)
  {
      $carbon_birthday = Carbon::createFromFormat('Y-m-d', $date);

      return $carbon_birthday->format('d.m.Y');
  }
}
