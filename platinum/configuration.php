<?php
class SystemConfiguration {
    // General Settings
    public static $base_url    = 'http://url-to-easyappointments-folder/';
    
    // Database Settings
    public static $db_host     = 'localhost';
    public static $db_name     = 'platinum';
    public static $db_username = 'platadmin';
    public static $db_password = 'dale4152';
    
    // Google Calendar API Settings
    public static $google_sync_feature  = FALSE; // Enter TRUE or FALSE;
    public static $google_product_name  = '';
    public static $google_client_id     = '';
    public static $google_client_secret = '';
    public static $google_api_key       = '';
}

/* End of file configuration.php */
/* Location: ./configuration.php */