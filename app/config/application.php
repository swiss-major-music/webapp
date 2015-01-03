<?php
    /**
     * Define Subfolder if your application is not in
     * the root of a webserver for example if your app
     * is placed under http://host.com/app you have to
     * define this configuration setting to 'app' Please
     * don't add the trailing slash at the end of the URL to
     * prevent other failures in the software.
     */
    define('APP_SUBFOLDER', 'smm-web');


    /**
     * Define a default title for a view if theres no
     * parameter avaible which will set the title of it
     * during the runtime of kickbone. Default value is
     * an empty string -> ''.
     */
    define('DEFAULT_VIEW_TITLE', 'Site');

    /**
     * Trace every users IP which will enter the site
     * and log it into the temp directory in a seperate
     * logfile. Just enable if you want to check for security
     * issues, due the logfile will grow too fast.
     */
    define('ENABLE_TRACE', false);

    define('DB_USERNAME', 'db_smm_admin');

    define('DB_PASSWORD', '$2a$06$4Lfk8OO8nYxzOVvWFSPXx.EfJ4pqW9g5Cxhd1BBubh1KIx0lCmC2W');

    define('DB_HOST', 'localhost');

    define('DB_SELECT', 'smm');
