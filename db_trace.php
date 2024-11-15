<?php
/**
 * Function tracer with DB
 *
 * author by sunpark@soongsil.ac.kr
 * This feature uses the wpdb class of the WordPress.
 */

// switch for trace on/off
$trace_turn_on = true;

/**
 * Save log to text file
 * INPUT : $tmp: message array, $log_path: file location
 * RETURN : None
 */
function func_log_out($tmp, $log_path) {
        global  $LOG_PATH;

        ob_start();
        echo var_dump($tmp);
        $db_t = ob_get_contents();
        ob_end_clean();
        error_log($db_t, 3, $log_path);
}

/**
 * Table name split from SQL statement.
 * INPUT : SQL
 * RETURN : Table name string or Empty string
 */
function func_split_tablename($sql) {

        $sql = str_replace( array( "\r\n", "\r", "\n" ), ' ', $sql );
        $sql = str_replace( array( "\t", '`' ), '', $sql );
        $sql = preg_replace( '/ +/', ' ', $sql );
        $sql = trim( $sql );
        $sql = rtrim( $sql, ';' );

        $a_sql = explode(" ", $sql);

        $find_table = false;

        foreach ($a_sql as $txt) {
                if($find_table == true) {
                        return $txt;
                } elseif(strcasecmp($txt, "FROM") == 0) {
                        $find_table = true;
                }
        }

        return "";
}

/** 
 * Logging data to DB or File
 * INPUT : array ([caller], [type], [file], [sql])
 * RETURN : None
 */
function func_db_tracking($arr) {
        global $trace_turn_on;

        $db_trace_on = true;            // true - Turn-On, false = Turn-off
        $db_trace_to_file = false;      // true - wirte to txt file, false = wirte to DB

        if ($db_trace_on == false) {    // No need backtrace
                return;
        }

        $arr['table'] = func_split_tablename( $arr['sql'] ); 

        if ($db_trace_to_file) {
                func_log_out($arr, "/var/www/db_trace.log");
        } else {
                $format = "INSERT INTO `db_trace`(`Call_Table`, `Call_Func`, `Call_File`, `Query`) VALUES ('%s','%s','%s','%s')";
                $new_sql = sprintf($format, $arr['table'], $arr['caller'], $arr['file'], $arr['sql']);

                global $wpdb;
                $results = $wpdb->get_results( $new_sql );
        }
}
?>
