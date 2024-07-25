<?php
// File: src/cronjob.php

// Log file path
$logFile = __DIR__ . '/cronjob.log';

// Get current timestamp
$timestamp = date('Y-m-d H:i:s');

// Write timestamp to log file
file_put_contents($logFile, "Cron job executed at: $timestamp\n", FILE_APPEND);

echo "Cron job executed successfully.\n";
