<?php 
function prime_last_digits($max=1000)
{
    // $max = 100000000; 
    $prime_start = 0;
    $counter = 0;
    $counter_1 = 0;
    $counter_3 = 0;
    $counter_7 = 0;
    $counter_9 = 0;
    $counter_2 = 0; // one time
    $counter_5 = 0; // one time

    $started_at_time = time();
    echo 'Max number: '.$max.PHP_EOL;
    echo 'Calculating ...'.PHP_EOL;
    echo 'Started at '.date('d/m/Y H:i:s', $started_at_time).PHP_EOL;

    while ($prime_start <= $max) {
        
        $prime_start = gmp_nextprime($prime_start);
        
        $counter++;
        $last_num = substr($prime_start, -1);
        
        $c = 'counter_'.$last_num;
        
        $$c++;

    }

    echo PHP_EOL;
    echo 'Total: '.$counter.PHP_EOL;
    echo 'Total 1: '.$counter_1.'/'.number_format($counter_1 / $counter * 100, 3).'%'.PHP_EOL;
    echo 'Total 3: '.$counter_3.'/'.number_format($counter_3 / $counter * 100, 3).'%'.PHP_EOL;
    echo 'Total 7: '.$counter_7.'/'.number_format($counter_7 / $counter * 100, 3).'%'.PHP_EOL;
    echo 'Total 9: '.$counter_9.'/'.number_format($counter_9 / $counter * 100, 3).'%'.PHP_EOL;
    $finished_at_time = time();
    echo 'Finished at '.date('d/m/Y H:i:s', $finished_at_time).PHP_EOL;
    $seconds = $finished_at_time - $started_at_time;
    $h = floor($seconds / 3600); 
    $m = floor(($seconds % 3600) / 60); 
    $s = $seconds - ($h * 3600) - ($m * 60); 
    $string_duration = sprintf('%02d:%02d:%02d', $h, $m, $s); 
    echo 'Duration '.$string_duration.PHP_EOL;
}