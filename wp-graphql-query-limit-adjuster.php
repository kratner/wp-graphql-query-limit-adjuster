<?php

/**
 * Plugin Name: WordPress GraphQL Query Limit Adjuster
 * Plugin URI: https://github.com/kratner/wp-graphql-query-limit-adjuster
 * Description: Adjust number of queries returnable by GraphQL
 * Version: 1.0
 * Author: Keith Ratner
 * Author URI: http://keithratner.live
 */

add_filter('graphql_connection_max_query_amount', function ($amount, $source, $args, $context, $info) {
    if (current_user_can('manage_options')) {
        $amount = 1000;
    }
    return $amount;
}, 10, 5);
