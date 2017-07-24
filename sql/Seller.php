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
	public function setSellerId(?int $newSellerId) : void {
		//if seller id is null immediately return it
		if($newSellerId === null) {
			$this->sellerId = null;
			return;
		}

		//verify the seller id is positive
		if($newSellerId <= 0) {
			throw(new \RangeException("seller id is not positive"));
		}

		//store the seller id
		$this->sellerId = $newSellerId;
	}
	/**
	 * accessor method for seller name
	 * @return string value of seller name
	 *
	 **/
	public function getSellerName() : string {
		return($this->sellerName);
	}
	/**
	 * mutator method for seller name
	 * @param string $newSellerName new value of seller name
	 * @throws \InvalidArgumentException if $newSellerName is not a string or is not secure
	 * @throws \RangeException if $newSellerName > 128 characters
	 * @throws \TypeError if $newSellerName is not an string
	 *
	 **/
	public function setSellerName(string $newSellerName) : void {
		//verify seller name is secure
		$newSellerName = trim($newSellerName);

		$newSellerName = filter_var($newSellerName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		if(empty($newSellerName) ===true) {
			throw(new \InvalidArgumentException("seller name is empty or insecure"));
			}
		// verify the seller name will fit in the database
		if(strlen($newSellerName) > 128){
			throw(new \RangeException("seller name too large"));
		}

		//store the seller name
		$this->sellerName = $newSellerName;

		}
	/**
	 * accessor method for seller store name
	 * @return string value of seller store name
	 *
	 **/
	public function getSelleStoreName() : string {
		return($this->sellerStoreName);
	}
	/**
	 * mutator method for seller store name
	 * @param string $newSellerStoreName new value of seller store name
	 * @throws \InvalidArgumentException if $newSellerStoreName is not a string or is not secure
	 * @throws \RangeException if $newSellerStoreName > 128 characters
	 * @throws \TypeError if $newSellerStoreName is not an string
	 *
	 **/
	public function setSellerStoreName(string $newSellerStoreName) : void {
		//verify seller name is secure
		$newSellerStoreName = trim($newSellerStoreName);
		$newSellerStoreName = filter_var($newSellerStoreName, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		if(empty($newSellerStoreNameName) ===true) {
			throw(new \InvalidArgumentException("seller store name is empty or insecure"));
		}
		// verify the seller name will fit in the database
		if(strlen($newSellerStoreName) > 128){
			throw(new \RangeException("seller store name too large"));
		}
		//store the seller store name
		$this->sellerStoreName = $newSellerStoreName;
	}






}