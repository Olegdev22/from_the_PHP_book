<?php

//var_dump(time());

// 1771581811

//echo date('l jS \of F Y h:i:s A');
echo date('Y-m-d H:i:s', 1771581811);
echo '<br>';
echo date('Y-m-d H:i:s', time());
echo '<br>';
var_dump(date_default_timezone_get());
echo '<br>';
echo date('Y-m-d H:i:s', strtotime('2 days 3 hours'));
echo '<br>';
echo 'Вывод с микросекундами<br>';
echo date(microtime(true));