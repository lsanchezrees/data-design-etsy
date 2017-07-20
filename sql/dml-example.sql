-- insert three new sellers
INSERT INTO seller
	(sellerName,
	sellerStoreName,
	sellerLocation,
	sellerPhone,
	sellerEmail,
	sellerHash,
	sellerSalt )
	VALUES
	(
	"Sally Merlot",
	"Cute Things I Made",
	"Santa Fe, NM",
	"505-222-3333",
	"sallymerlot@yahoo.com",
	"JDODJWdjw98n2uf2kj30282k928fnk",
	"2j33ijth2o30IHi"
	);

	INSERT INTO seller
	(sellerName,
	sellerStoreName,
	sellerLocation,
	sellerPhone,
	sellerEmail,
	sellerHash,
	sellerSalt )
	VALUES
	(
	"Anna Banana",
	"Another Cute Store",
	"Albuquerque, NM",
	"505-111-2222",
	"annabanana@gmail.com",
	"DDJOENKDNw990jjdknjkK20dlnd",
	"JDOFjk2ji89"
	);

INSERT INTO seller
	(sellerName,
	sellerStoreName,
	sellerLocation,
	sellerPhone,
	sellerEmail,
	sellerHash,
	sellerSalt )
	VALUES
	("Jane Plain",
	"Kitsch and More",
	"Oklahome, OK",
	"505-555-9898",
	"pjane@yahoo.com",
	"JDOn89nlkn2NKL02nklnlA",
	"j29nkNKN128398u"
	);

-- insert items for the sellers
INSERT INTO item
	(itemName,
	itemDescription,
	itemQuantity,
	itemAutoRenew,
	itemType,
	itemPrice,
	itemTax,
	itemSellerId)
	VALUES
	("Multicolored Earrings",
	"Beautiful blue and green tear-drop shaped earrings",
	15,
	1,
	"Earrings",
	30.00,
	5.00,
	2
	);

INSERT INTO item
	(itemName,
	itemDescription,
	itemQuantity,
	itemAutoRenew,
	itemType,
	itemPrice,
	itemTax,
	itemSellerId)
	VALUES
	("Multicolored Necklace",
	"Beautiful blue and green tear-drop shaped pendant on a silver chain",
	15,
	1,
	"Necklace",
	35.00,
	5.00,
	2
	);

	INSERT INTO item
	(itemName,
	itemDescription,
	itemQuantity,
	itemAutoRenew,
	itemType,
	itemPrice,
	itemTax,
	itemSellerId)
	VALUES
	("Hello Kitty Scarf",
	"Beautiful scarf with Hello Kitty woven into it",
	1000,
	1,
	"Scarf",
	10.00,
	0,
	3
	);

	INSERT INTO item
	(itemName,
	itemDescription,
	itemQuantity,
	itemAutoRenew,
	itemType,
	itemPrice,
	itemTax,
	itemSellerId)
	VALUES
	("Ma Kettle Cutout",
	"Ma Kettle cutout for your front yard",
	15000,
	1,
	"Cutout",
	15.00,
	0,
	4
	);

-- insert item using a subquery to find the sellerName
	INSERT INTO item
	(itemName,
	itemDescription,
	itemQuantity,
	itemAutoRenew,
	itemType,
	itemPrice,
	itemTax,
	itemSellerId)
	VALUES
	("Wax Elvis Statue",
	"Beautiful lifesize statue of Elvis made completely out of wax",
	1000,
	1,
	"Statue",
	150.00,
	0,
	(SELECT sellerId FROM seller WHERE sellerName = "Jane Plain")
	);
-- insert a photo for each item, and insert two photos for
-- at least one item
-- yes, I know the photoPath is the path on Etsy's server,
-- but for simplicity's sake I put a local path.

INSERT INTO photo
	(photoItemId,
	photoPath)
	VALUES
	(1,
	"c:/documents/pictures/earrings.jpg"
	);

INSERT INTO photo
	(photoItemId,
	photoPath)
	VALUES
	(2,
	"c:/documents/pictures/necklace.jpg"
	);

	INSERT INTO photo
	(photoItemId,
	photoPath)
	VALUES
	(3,
	"c:/documents/pictures/scarf.jpg"
	);

	INSERT INTO photo
	(photoItemId,
	photoPath)
	VALUES
	(4,
	"c:/documents/pictures/ma-kettle.jpg"
	);

	INSERT INTO photo
	(photoItemId,
	photoPath)
	VALUES
	(5,
	"c:/documents/pictures/elvis-lives1.jpg"
	);

	INSERT INTO photo
	(photoItemId,
	photoPath)
	VALUES
	(5,
	"c:/documents/pictures/elvis-lives2.jpg"
	);
--  update a seller

--  update an item


--delete an item


-- delete


-- select statements

-- advanced queries