<?php

interface Provider
{
	public function authorize();
}

function login(Provider $provider)
{
	$provider->authorize();
}

Auth::attempt();

/*****************************/

interface Provider
{
	public function getAuthorizationUrl();
}


abstract class AbstractProvider
{
	protected function related()
	{
		
	}
}


class FacebookProvider implements Provider
{
	protected function getAuthorizationUrl()
	{
		return '';
	}
}
