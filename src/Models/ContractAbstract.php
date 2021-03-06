<?php
namespace SturentsLib\Api\Models;

/**
 * ** This file was generated automatically, you might want to avoid editing it **
 *
 * Basic contract details which are extended by both inbound and outbound
 * data with objects which extend ContractBasic
 */
class ContractAbstract extends SwaggerModel
{
	/**
	 * The name given to this contract
	 * @var string
	 */
	protected $title;

	/**
	 * The earliest date at which it is possible to move in to the property
	 * in yyyy-mm-dd format
	 *
	 * @var string
	 */
	protected $start_date;

	/**
	 * The latest date at which it is possible to vacate the property
	 * in yyyy-mm-dd format
	 *
	 * @var string
	 */
	protected $end_date;

	/**
	 * The minimum time a tenant may rent the property for in days
	 *
	 * @var integer
	 */
	protected $min_contract_days;

	/**
	 * A contract may be temporarily unavailable for some reason; this field
	 * allows setting or reading that status. API consumers may want to discard
	 * contracts with this setting, or may want to display a different status to
	 * users. Book Now URLs will not work for "paused=true" contracts. API senders
	 * might tie this to a similar internal status, but this should not be used to
	 * permanently remove a Contract - use the DELETE method instead for that purpose.
	 *
	 * @var boolean
	 */
	protected $paused;

	/**
	 * @var Utilities
	 */
	protected $utilities;

	/**
	 * Zero or more restrictions
	 * @var Restriction[]
	 */
	protected $restrictions;


	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}


	/**
	 * @param string $title
	 *
	 * @return $this
	 */
	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->start_date;
	}


	/**
	 * @param string $start_date
	 *
	 * @return $this
	 */
	public function setStartDate($start_date)
	{
		$this->start_date = $start_date;

		return $this;
	}


	/**
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->end_date;
	}


	/**
	 * @param string $end_date
	 *
	 * @return $this
	 */
	public function setEndDate($end_date)
	{
		$this->end_date = $end_date;

		return $this;
	}


	/**
	 * @return integer
	 */
	public function getMinContractDays()
	{
		return $this->min_contract_days;
	}


	/**
	 * @param integer $min_contract_days
	 *
	 * @return $this
	 */
	public function setMinContractDays($min_contract_days)
	{
		$this->min_contract_days = $min_contract_days;

		return $this;
	}


	/**
	 * @return boolean
	 */
	public function getPaused()
	{
		return $this->paused;
	}


	/**
	 * @param boolean $paused
	 *
	 * @return $this
	 */
	public function setPaused($paused)
	{
		$this->paused = $paused;

		return $this;
	}


	/**
	 * @return Utilities
	 */
	public function getUtilities()
	{
		return $this->utilities;
	}


	/**
	 * @param Utilities $utilities
	 *
	 * @return $this
	 */
	public function setUtilities(Utilities $utilities)
	{
		$this->utilities = $utilities;

		return $this;
	}


	/**
	 * @return Restriction[]
	 */
	public function getRestrictions()
	{
		return $this->restrictions;
	}


	/**
	 * @param Restriction[] $restrictions
	 *
	 * @return $this
	 */
	public function setRestrictions(array $restrictions)
	{
		$this->restrictions = $restrictions;

		return $this;
	}


	/**
	 * @param Restriction $restriction
	 *
	 * @return $this
	 */
	public function addRestriction(Restriction $restriction)
	{
		$this->restrictions[] = $restriction;

		return $this;
	}
}

