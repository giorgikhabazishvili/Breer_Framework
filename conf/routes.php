<?php
use src\Controllers\DefaultController;

return [
    ["GET", "/", [DefaultController::class, "index"]]
];