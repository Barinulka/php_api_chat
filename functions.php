<?php
function dd(mixed $data): void {
    EA($data);
}
function dump(mixed $data): void {
    EA($data, false);
}
function EA(mixed $data, $ex = true) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    if ($ex) exit;
}
