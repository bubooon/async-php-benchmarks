<?php
use Swoole\Http\Server;

$http = new Server('0.0.0.0', 8000, SWOOLE_BASE);
$http->set(['reactor_num' => swoole_cpu_num(),	'worker_num' => swoole_cpu_num() * 2]);
$http->on("request", function ($request, $response) {
    $rand = rand(10, 10000);
    for ($i = 0; $i < $rand; $i++) {
        hash('sha256', $rand . $i . $rand);
    }
    $response->end('Hello World!');
});
$http->start();
