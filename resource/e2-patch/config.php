<?
// write a log to user/log.txt? (it will get very large soon)
$_config['write_log'] = true;

// reset a log sometimes
$_config['write_log_reset'] = false;

// number of error after which E2 will stop
$_config['max_errors'] = 256;

// show call stack when displaying error?
$_config['show_call_stack'] = 2; /* 0 - no; 1 - when logged in; 2 - always */

// store backtrace in backtrace.psa?
$_config['store_backtrace'] = true;