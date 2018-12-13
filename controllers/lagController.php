<?php
require_once ('models/game.php');
if ($action == 'home')
{
    $games = Game::getAll();
    
}
elseif ($action == 'login_form')
{

}
elseif($action == 'game')
{

}
elseif($action == 'find_coach')
{
    
}
elseif($action == 'session_summary')
{
    
}