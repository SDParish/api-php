<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 */
class PropertyOutbound extends Property
{
	/**
	 * a unique reference to the property which will not change
	 *
	 * @var string
	 */
	protected $property_id;

	/**
	 * One or more Room objects
	 * @var Room[]
	 */
	protected $room_details;

	/**
	 * One or more Contracts (will not show contracts which have
	 * been subject to a DELETE request and which show as "disabled"
	 * in GET /contracts requests)
	 *
	 * @var ContractWithRooms[]
	 */
	protected $contracts;

	/**
	 * @var Media
	 */
	protected $media;


	/**
	 * @return string
	 */
	public function getPropertyId()
	{
		return $this->property_id;
	}


	/**
	 * @param string $property_id
	 *
	 * @return $this
	 */
	public function setPropertyId($property_id)
	{
		$this->property_id = $property_id;

		return $this;
	}


	/**
	 * @return Room[]
	 */
	public function getRoomDetails()
	{
		return $this->room_details;
	}


	/**
	 * @param Room[] $room_details
	 *
	 * @return $this
	 */
	public function setRoomDetails(array $room_details)
	{
		$this->room_details = $room_details;

		return $this;
	}


	/**
	 * @param Room $room_detail
	 *
	 * @return $this
	 */
	public function addRoomDetail(Room $room_detail)
	{
		$this->room_details[] = $room_detail;

		return $this;
	}


	/**
	 * @return ContractWithRooms[]
	 */
	public function getContracts()
	{
		return $this->contracts;
	}


	/**
	 * @param ContractWithRooms[] $contracts
	 *
	 * @return $this
	 */
	public function setContracts(array $contracts)
	{
		$this->contracts = $contracts;

		return $this;
	}


	/**
	 * @param ContractWithRooms $contract
	 *
	 * @return $this
	 */
	public function addContract(ContractWithRooms $contract)
	{
		$this->contracts[] = $contract;

		return $this;
	}


	/**
	 * @return Media
	 */
	public function getMedia()
	{
		return $this->media;
	}


	/**
	 * @param Media $media
	 *
	 * @return $this
	 */
	public function setMedia(Media $media)
	{
		$this->media = $media;

		return $this;
	}
}

