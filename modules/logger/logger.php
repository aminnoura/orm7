<?php
namespace modules\logger;

class Logger {
    public function addLog($log) {
        var_dump($log);
        echo "<br/>";
        file_put_contents('./logs/log_'.date("j.n.Y").'.log', $log, FILE_APPEND);
    }
}
