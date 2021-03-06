<?php
namespace SturentsLib\Api\Requests;

/**
 * Returns tenancy templates for the authenticated property manager
 * The IDs of these templates will be required to set up Contract
 * entities using a specific tenancy template
 */
class GetTenancyTemplates extends SwaggerRequest
{
	const URI = '/api/tenancy-templates';
	const METHOD = 'GET';

	/**
	 * @param SwaggerClient $client
	 * @return string[]
	 */
	public function send(SwaggerClient $client)
	{
		return $client->send($this, [
			'200' => '\\SturentsLib\\Api\\Models\\TenancyTemplate',
			'401' => '\\SturentsLib\\Api\\Models\\AuthError',
			'404' => '\\SturentsLib\\Api\\Models\\GetError',
			'default' => '\\SturentsLib\\Api\\Models\\Error'
		]);
	}
}

