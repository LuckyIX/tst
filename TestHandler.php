<?php

class TestHandler
{
    public function issueHandler()
    {
        return true;
    }

    public function issue2Handler()
    {
        $a = 1 + 2;
        return $a;
    }
}
