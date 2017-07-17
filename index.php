<!doctype html>
<html>
	<head>
		<title>Data Design Project</title>
	</head>
	<body>
		<h1>Data Design Project</h1>
		<p>This document contains all the information for the data design project.</p>
		<h2>Persona</h2>
		<p>Name: Sally Merlot</p>
		<p>Age: 65</p>
		<p>Profession: Artist and Craftsperson.  Sally creates her own jewelry.  She's been doing this for 30 years and is eager to increase her sales by selling online.</p>
		<p>Technology: MacBook Pro that her son bought for her. </p>
		<p>Attitudes and Behaviors:  She is not really comfortable with technology and wants everything to be easy and simple. Her focus is on her jewelry, and she really does not want this to take up more of her time than necessary.</p>
		<p>Frustrations and Needs: Sally wants to spend relatively little time online.  Everything needs to be clear, and the information needs to be concise and accurate.</p>
		<p>Goals: Her goal is to increase her income by selling her jewelry online.  She also hopes that selling online will expose her to new audiences and perhaps bring her some fame.</p>
		<p>User Story: As a user, Sally needs to be able to place products in her store, fill orders easily, and keep track of what's been sold.</p>
		<h2>Use Case</h2>
		<p>Sally has completed a new piece of jewelry, and she would like to make it available to sell.  It is 11:30 on a Wednesday morning.  She is in her home. She needs to take a picture with her camera.  (She prefers to use this and then upload it to her computer.) She already has a store on Etsy, so she will add the new piece of jewelry to her online store and make it available.  She wants to get this done by early afternoon. </p>
		<h2>Interaction Flow</h2>
		<ol>
			<li>User opens browser and goes to etsy.com</li>
			<li>After logs into her store</li>
			<li>User clicks button to add a new item</li>
			<li>User adds item's name/title</li>
			<li>User adds item's description</li>
			<li>User adds the item's photo</li>
			<li>User may add additional photo(s)</li>
			<li>User adds item number available (inventory)</li>
			<li>User adds options/attributes for item (color, size, material, for example)</li>
			<li>User sets up renewal options (auto or manual)</li>
			<li>User chooses the item type (physical vs digital)</li>
			<li>User adds price</li>
			<li>User adds tax, if necessary</li>
			<li>User adds tags to item to help in searching</li>
			<li>User clicks on button to publish listing</li>
		</ol>

		<h2>Conceptual Model</h2>
		<h3>Entities and Attributes</h3>
		<p>Seller</p>
		<ul>
			<li>sellerId (primary key)</li>
			<li>sellerName</li>
			<li>sellerStoreName</li>
			<li>sellerLocation</li>
			<li>sellerPhone</li>
			<li>sellerEmail</li>
			<li>sellerHash</li>
			<li>sellerSalt</li>

		</ul>

		<p>Item</p>
		<ul>
			<li>itemId (primary key)</li>
			<li>itemName</li>
			<li>itemDescription</li>
			<li>itemQuantity</li>
			<li>itemAutoRenew</li>
			<li>itemType</li>
			<li>itemPrice</li>
			<li>itemTax</li>
			<li>itemSellerId (foreign key)</li>
		</ul>

		<p>Photo</p>
		<ul>
			<li>photoId (primary key)</li>
			<li>photoItemId (foreign key)</li>
			<li>photoPath</li>
		</ul>



		<h3>Relations</h3>
		<ul>
			<li>One seller can have many items (1 to n)</li>
			<li>One item can have many photos (1 to n)</li>
		</ul>

	</body>
</html>