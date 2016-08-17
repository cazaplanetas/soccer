<?php

if (! function_exists('getConnectedUserId')) {
    
    function getConnectedUserId()
    {
        if (! isset($_COOKIE['phpbb3_aap97_u'])) {
            $_COOKIE['phpbb3_aap97_u'] = 1;
        }
        return $_COOKIE['phpbb3_aap97_u'];
    }
    
    function getConnectedUser()
    {
        return \App\Models\User::find(getConnectedUserId());
    }
}

if (! function_exists('getTeamsfromSofifa')) {

    function getTeamsfromSofifa()
    {
        $teams ='';
        require 'teams.php';
        $teams = explode("\r", $teams);
        foreach ($teams as $team) {
            $sub[] = explode("\t", trim($team));
        }

        return $sub;
    }
}
