<?php
require_once __DIR__.'/vendor/autoload.php';

use GO\Scheduler;

// Create a new scheduler
$scheduler = new Scheduler();

// ... configure the scheduled jobs (see below) ...
$scheduler->php('activity-notification.php')->everyMinute();

// Let the scheduler execute jobs which are due.
$scheduler->run();