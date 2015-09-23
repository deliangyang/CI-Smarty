<?php
/**
 * Created by unkown ide ps.
 * User: deliang
 * DateTime: 9/23/15 3:52 PM
 */
class Test extends Controller
{

    public function __construct() {

    }

    public function test() {


        $data = [
            'title'     => 'this is the title',
            'content'   => 'this is the content',
        ];

        $this->render('test.php', $data);
    }

}