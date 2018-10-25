<?php

public function getss($guid, $parameters) {
	$parastring = implode(" ",$parameters);
    if (strpos($parastring, "\\") !== false) {
        list($player, $parameters) = explode("\\", $parastring);
        $player = trim($player);
        $parameters = array(trim($parameters));
    }
    else {
	    $player = array_shift($parameters);
    }

	$player = $this->mod->findPlayerGuid($player);
	if (!$player) {
    	$this->players[$guid]->say($this->mod->getLngString("playerNotFound", array("<SEARCH>"), array($parastring)));
    	return false;
    }

    $this->players[$guid]->say('^2NOTICE: ^7Screenshot got requested!');
    $g_time = time();
    $this->mod->rconRcon("getss ".$this->players[$player]->getPID()." ".$player."_screen_".$g_time);
}