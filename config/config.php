<?php

/*
|--------------------------------------------------------------------------
| Bot Token
|--------------------------------------------------------------------------
|
| Change this to your Bot API Token
| It can be obtained from https://telegram.dog/BotFather
|
*/
$config['botToken'] = $_ENV['BOT_TOKEN'];

/*
|--------------------------------------------------------------------------
| Admin User ID
|--------------------------------------------------------------------------
|
| Change this to Admin's Numeric User ID
| ID can be obtained from https://telegram.dog/username_to_id_bot
|
*/
$config['adminID'] = $_ENV['ADMIN_ID'];

/*
|--------------------------------------------------------------------------
| Logs Channel ID
|--------------------------------------------------------------------------
|
| Create a New Channel/Group for logging data
| ID can be obtained from https://telegram.dog/BotFather
|
*/
$config['logsID'] =  $_ENV['LOGS_DUMP_ID'];

/*
|--------------------------------------------------------------------------
| Timezone
|--------------------------------------------------------------------------
|
| Current timezone for Logging Activities with time
| It can be obtained from http://1min.in/content/international/time-zones
| By Default it's in IST
|
*/
$config['timeZone'] =  $_ENV['TIMEZONE'];

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
| Database to Store User Data
|
*/
$config['db']['hostname'] =  $_ENV['DB_HOST'];
$config['db']['username'] =  $_ENV['DB_USERNAME'];
$config['db']['password'] =  $_ENV['DB_PASSWORD'];
$config['db']['database'] =  $_ENV['DB_NAME'];

/*
|--------------------------------------------------------------------------
| Anti-Spam Timer
|--------------------------------------------------------------------------
|
| Anti-Spam Timer to prevent Spammers from Spamming the Checker
| Value is in Seconds. "20" = 20seconds
|
*/
$config['anti_spam_timer'] =  $_ENV['ANTISPAM_TIMER'];

/*
|--------------------------------------------------------------------------
| SK Keys
|--------------------------------------------------------------------------
|
| SK Keys for !sm checker gate
| Add a Live SK Key here. You can Also add Multiple SK Keys
| array('sk1','sk2','sk3')
|
*/
$config['sk_keys'] =  explode('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','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','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', $_ENV['SK_KEYS']);
?>