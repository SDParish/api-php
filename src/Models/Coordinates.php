<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class Coordinates extends SwaggerModel
{
	/**
	 * @var number
	 */
	protected $lat;

	/**
	 * @var number
	 */
	protected $lng;


	/**
	 * @return number
	 */
	public function getLat()
	{
		return $this->lat;
	}


	/**
	 * @param number $lat
	 *
	 * @return $this
	 */
	public function setLat($lat)
	{
		$this->lat = $lat;

		return $this;
	}


	/**
	 * @return number
	 */
	public function getLng()
	{
		return $this->lng;
	}


	/**
	 * @param number $lng
	 *
	 * @return $this
	 */
	public function setLng($lng)
	{
		$this->lng = $lng;

		return $this;
	}
}

