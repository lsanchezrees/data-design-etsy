<?php
/**
 * Seller profile for an Etsy transaction
 *
 * This is a shortened example of a seller class in Etsy
 *
 * @author Leonora Sanchez-Rees <lsanchezrees@cnm.edu>
 * @version 1.0
 *
 **/
class Seller {
	/**
	 * id for this Seller; this is the primary key
	 * @var int $sellerId
	 *
	 **/
	private $sellerId;
	/**
	 * name for the Seller;
	 * @var string $sellerName
	 **/
	private $sellerName;
	/**
	 * store name for the seller
	 * @var string $sellerStoreName
	 **/
	private $sellerStoreName;
	/**
	 * seller location
	 * @var string $sellerLocation
	 **/
	private $sellerLocation;
	/**
	 * phone number of the seller
	 * @var string $sellerPhone
	 **/
	private $sellerPhone;
	/**
	 * email of the seller
	 * @var string $sellerEmail
	 **/
	private $sellerEmail;
	/**
	 * hash of the seller's password
	 * @var string $sellerHash
	 **/
	private $sellerHash;
	/**
	 * salt used for seller
	 * @var string $sellerSalt
	 **/
	private $sellerSalt;

	/**
	 * Accessor method for seller id
	 *
	 * @return int | null value of seller id
	 *
	 **/
	public function getSellerId() : int {
		return($this->sellerId);
	}
	/**
	 * mutator method for seller id
	 * @param int | null $newSellerId new value of seller id
	 * @throws \RangeException if $newSellerId is not positive
	 * @throws \TypeError if $newSellerId is not an integer
	 *
	 **/

}