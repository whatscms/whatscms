<?php
use \LeanCloud\User;

function acl () {
	if (User::getCurrentUser() != null && User::getCurrentUser()->get('username') == 'youzan') {
		return true;
	}
	return false;
}