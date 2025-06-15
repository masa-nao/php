<?php
// 時間取得等の関数の定義（ブラウザ表示なし）
function searchCityTime($city_name, $cities)
{
  foreach($cities as $city) {
    if ($city["name"] === $city_name) {
      $date_time = new DateTime("", new DateTimeZone($city["time_zone"]));
      $time = $date_time->format("H:i");
      $city["time"] = $time;

      return $city;
    }
  }
}