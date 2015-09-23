<?php
/**
 * Created by unkown ide ps.
 * User: deliang
 * DateTime: 9/23/15 3:49 PM
 */
class Test_model
{

    public function __construct() {
        echo 'hello world';
    }

    public function test() {
        echo <<<TEST
hello world
TEST;

    }

}