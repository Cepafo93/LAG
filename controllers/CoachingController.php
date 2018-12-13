<?php

if ($action == 'order_coaching')
{

}
elseif ($action == 'list_coaching')
{
	// utiliser le modele
	$coachings = Coaching::getAll();
}