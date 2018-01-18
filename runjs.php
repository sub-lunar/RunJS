<?php

namespace SubLunar\RunJS;

function run ($script, array $args=array(), $return_exit_code=FALSE) {

    // our node binary will be in the same directory
    $dir = dirname(__FILE__);
    $uname = php_uname();

    // assume that servers are 64 bit linux and use the shipped
    // node binary in that case.
    if (preg_match('/^Linux.*x86_64/', $uname)) {

        $node_binary = $dir . '/node-v8.9.4-linux-x64';

        // make sure the node binary is executable
        $node_perms_oct = substr(sprintf('%o', fileperms($node_binary)), -4);
        if ($node_perms_oct !== '0755') {
            $success = chmod($node, 0755);
            if (!$success) {
                throw new Exception('Unable to set permissions on node binary.');
            }
        }

    } else {

        // assume a node in path otherwise, which should be ok for
        // development.
        $node_binary = 'node';
    }

    // build up the command line, making sure args are not split up
    $command = escapeshellarg($node_binary);
    $command .= ' ' . escapeshellarg($script);
    foreach ($args as $arg) {
        $command .= ' ' . escapeshellarg($arg);
    }

    // run the command line and return all the output
    $output = array();
    $exit_code = 0;
    exec($command, $output, $exit_code);
    if ($return_exit_code) {
        return array($output, $exit_code);
    }
    return $output;
}
