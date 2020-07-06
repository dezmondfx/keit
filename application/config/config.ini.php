; <?php exit(); ?>

[db]
port            = 3306

; MySQL host
server 			= localhost

; DB username
user 			= admin_malina

; DB password
password		= "7OTv3qIIPC"

; DB name
name			= admin_keiAlina

; Prefix for tables
prefix			= keitaro_

; Optional
[db_slave]
; MySQL host
server 			=

; DB username
user 			=

; DB password
password		=

; DB name
name			=

; Prefix for tables
prefix			=

[redis]

; Leave it empty in order to show that field on the Settings page (password_sha@x.x.x.x/DBID)
uri = 127.0.0.1:6379/1

[system]

; Custom postback Key (leave empty to generate value based on salt)
postback_key =

; Debug mode (false or true)
debug			= true

; Max size of log files
log_max_size	= 10000000

; Salt for passwords
salt			= "14147442265f02e8bc91ce13.13137821"

; Login attempts before block
max_auth_tries	= 5

; Default charset of keywords
keywords_charset = "utf-8"

; Charset for csv reports
csv_charset = "utf-8"

; Demo mode
demo = false

; UserAgent for monitoring client
monitoring_user_agent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.0.5) Gecko/2008120122 Firefox/3.0.5"

; Enable logging to file /var/log/postbacks.log
postback_log = true

; Comma-separated list (https://v9.help.keitaro.io/en/vcm) or leave it empty
vcm_engines = ""

; Comma-separated list of vcm engines to ignore
vcm_ignore_engines = ""

; Set value of objects that will be checked by one request according your tariff plan https://viruscheckmate.com/tariffs/
vcm_objects_per_request = 1

; UA Profile or leave empty to check with all available
vcm_ua = "Chrome 33 on Windows 7"

; Enable logging to file /var/log/vcm.log
vcm_log = false

; Engines that are used to check in avscan.ru (available: kis, nod, avt, dwb)
avscan_engines = kis, nod, avt, dwb

; IP resolve method (domain/server)
resolve_method = domain

; Data processing settings
data_processor_chunk_size = 4000
data_processor_limit = 50

; Back compatibility
compatibility_v6 = false
compatibility_v7 = false
compatibility_v8 = false

; Logging options
;log_level = debug|info|notice|warning|error|critical|alert|emergency
log_level = warning

;The maximal amount of log files to keep (0 means unlimited)
max_log_files = 10

; Subid generation algorithm (uuid/random)
subid_algorithm = uuid

; https://help.keitaro.io/ru/multiserver
slave_mode = false

; allow to change referrer from parameters
allow_change_referrer = false

; Save commands to additional queue
additional_redis_queue =

; Sandbox engine can be forced to simple, cgi
sandbox_engine =

; Custom path for fcgi
sandbox_fcgi_path =
sandbox_fpm_path =

[dev]
webpack_server_port = 8080
webpack_server_host =

;