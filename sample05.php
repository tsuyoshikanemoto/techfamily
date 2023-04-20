<?php
$today = new Datetime();
$today->setTimezone(new DateTimeZone('Asia/Tokyo'));
echo '現在は'. $today->format('G時 i分 s秒').'です';
