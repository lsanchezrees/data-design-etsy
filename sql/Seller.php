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

		if(empty($newSellerStoreName) ===true) {
			throw(new \InvalidArgumentException("seller store name is empty or insecure"));
		}
		// verify the seller name will fit in the database
		if(strlen($newSellerStoreName) > 128){
			throw(new \RangeException("seller store name too large"));
		}
		//store the seller store name
		$this->sellerStoreName = $newSellerStoreName;
	}
	/**
	 * accessor method for seller location
	 * @return string value of seller location
	 *
	 **/
	public function getSellerLocation() : string {
		return($this->sellerLocation);
	}
	/**
	 * mutator method for seller location
	 * @param string $newSellerLocation new value of seller location
	 * @throws \InvalidArgumentException if $newSellerLocation is not a string or is not secure
	 * @throws \RangeException if $newSellerLocation > 128 characters
	 * @throws \TypeError if $newSellerLocation is not an string
	 *
	 **/
	public function setSellerLocation(string $newSellerLocation) : void {
		//verify seller name is secure
		$newSellerLocation = trim($newSellerLocation);
		$newSellerLocation = filter_var($newSellerLocation, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		if(empty($newSellerLocation) ===true) {
			throw(new \InvalidArgumentException("seller location is empty or insecure"));
		}
		// verify the seller location will fit in the database
		if(strlen($newSellerLocation) > 128){
			throw(new \RangeException("seller location too large"));
		}
		//store the seller location
		$this->sellerLocation = $newSellerLocation;
	}

	/**
	 * accessor method for seller phone
	 * @return string value of seller phone
	 *
	 **/
	public function getSellerPhone() : string {
		return($this->sellerPhone);
	}
	/**
	 * mutator method for seller phone
	 * @param string $newSellerPhone new value of seller phone
	 * @throws \InvalidArgumentException if $newSellerPhone is not a string or is not secure
	 * @throws \RangeException if $newSellerPhone > 32 characters
	 * @throws \TypeError if $newSellerPhone is not an string
	 *
	 **/
	public function setSellerPhone(string $newSellerPhone) : void {
		//verify seller name is secure
		$newSellerPhone = trim($newSellerPhone);
		$newSellerPhone = filter_var($newSellerPhone, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		if(empty($newSellerPhone) ===true) {
			throw(new \InvalidArgumentException("seller phone is empty or insecure"));
		}
		// verify the seller location will fit in the database
		if(strlen($newSellerPhone) > 32){
			throw(new \RangeException("seller phone too large"));
		}
		//store the seller phone
		$this->sellerPhone = $newSellerPhone;
	}
	/**
	 * accessor method for seller email
	 * @return string value of seller email
	 *
	 **/
	public function getSellerEmail() : string {
		return($this->sellerEmail);
	}
	/**
	 * mutator method for seller email
	 * @param string $newSellerEmail new value of seller email
	 * @throws \InvalidArgumentException if $newSellerEmail is not a string or is not secure
	 * @throws \RangeException if $newSellerEmail > 128 characters
	 * @throws \TypeError if $newSellerEmail is not an string
	 *
	 **/
	public function setSellerEmail(string $newSellerEmail) : void {
		//verify seller email is secure
		$newSellerEmail = trim($newSellerEmail);
		$newSellerEmail = filter_var($newSellerEmail, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		if(empty($newSellerEmail) ===true) {
			throw(new \InvalidArgumentException("seller email is empty or insecure"));
		}
		// verify the seller location will fit in the database
		if(strlen($newSellerEmail) > 128){
			throw(new \RangeException("seller email too large"));
		}
		//store the seller email
		$this->sellerEmail = $newSellerEmail;
	}
	/**
	 * accessor method for sellerHash
	 *
	 * @return string value of seller hash
	 */
	public function getSellerHash(): string {
		return $this->sellerHash;
	}
	/**
	 * mutator method for seller hash password
	 *
	 * @param string $newSellerHash
	 * @throws \InvalidArgumentException if the hash is not secure
	 * @throws \RangeException if the hash is not 128 characters
	 * @throws \TypeError if profile hash is not a string
	 */
	public function setSellerHash(string $newSellerHash): void {
		//enforce that the hash is properly formatted
		$newSellerHash = trim($newSellerHash);
		$newSellerHash = strtolower($newSellerHash);
		if(empty($newSellerHash) === true) {
			throw(new \InvalidArgumentException("seller password hash empty or insecure"));
		}
		//enforce that the hash is a string representation of a hexadecimal
		if(!ctype_xdigit($newSellerHash)) {
			throw(new \InvalidArgumentException("seller password hash is empty or insecure"));
		}
		//enforce that the hash is exactly 128 characters.
		if(strlen($newSellerHash) !== 128) {
			throw(new \RangeException("seller hash must be 128 characters"));
		}
		//store the hash
		$this->sellerHash = $newSellerHash;
	}

	/**
	 *accessor method for seller salt
	 *
	 * @return string representation of the salt hexadecimal
	 */
	public function getSellerSalt(): string {
		return $this->sellerSalt;
	}
	/**
	 * mutator method for seller salt
	 *
	 * @param string $newSellerSalt
	 * @throws \InvalidArgumentException if the salt is not secure
	 * @throws \RangeException if the salt is not 64 characters
	 * @throws \TypeError if seller salt is not a string
	 */
	public function setSellerSalt(string $newSellerSalt): void {
		//enforce that the salt is properly formatted
		$newSellerSalt = trim($newSellerSalt);
		$newSellerSalt = strtolower($newSellerSalt);
		//enforce that the salt is a string representation of a hexadecimal
		if(!ctype_xdigit($newSellerSalt)) {
			throw(new \InvalidArgumentException("seller password salt is empty or insecure"));
		}
		//enforce that the salt is exactly 64 characters.
		if(strlen($newSellerSalt) !== 64) {
			throw(new \RangeException("seller salt must be 64 characters"));
		}
		//store the salt
		$this->sellerSalt = $newSellerSalt;
	}








}