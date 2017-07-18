-- These statements drop the tables and re-add them.
DROP TABLE IF EXISTS photo;
DROP TABLE IF EXISTS item;
DROP TABLE IF EXISTS seller;

-- Create the tables
CREATE TABLE seller (
	sellerId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	sellerName VARCHAR(64) NOT NULL,
	sellerStoreName VARCHAR(128) NOT NULL,
	sellerLocation VARCHAR(128) NOT NULL,
	sellerPhone VARCHAR(32) NOT NULL,
	sellerEmail VARCHAR(128) NOT NULL,
	sellerHash VARCHAR(128) NOT NULL,
	sellerSalt VARCHAR(64) NOT NULL,
	-- create unique indexes
	UNIQUE(sellerEmail),
	PRIMARY KEY(sellerId)
);

CREATE TABLE item (
	itemId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	itemName VARCHAR(64) NOT NULL,
	itemDescription VARCHAR(128) NOT NULL,
	itemQuantity SMALLINT NOT NULL,
	itemAutoRenew TINYINT UNSIGNED NOT NULL,
	itemType VARCHAR(32) NOT NULL,
	itemPrice DECIMAL(9,2) NOT NULL,
	itemTax DECIMAL(5,3),
	itemSellerId INT UNSIGNED NOT NULL,
	-- create index on foreign key
	INDEX(itemSellerId),
	FOREIGN KEY(itemSellerId) REFERENCES seller(sellerId),
	PRIMARY KEY(itemId)
);

CREATE TABLE photo (
	photoId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	photoItemId INT UNSIGNED NOT NULL,
	photoPath VARCHAR(128),
	INDEX(photoItemId),
	FOREIGN KEY(photoItemId) REFERENCES item(itemId),
	PRIMARY KEY(photoId)
);