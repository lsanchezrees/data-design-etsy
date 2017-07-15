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
			<li>After the user has logged into their store, user adds a new item</li>
			<li>Add item's name/title</li>
			<li>Add item's description</li>
			<li>Add the item's photo</li>
			<li>User may add additional photo(s) if desired</li>
			<li>User adds "about this listing" to pick from the three Etsy categories</li>
			<li>User adds number available (inventory)</li>
			<li>User determines category of item</li>
			<li>Add options/attributes for item (color, size, material, for example)</li>
			<li>User sets up renewal options (auto or manual)</li>
			<li>Choose the item type (physical vs digital)</li>
			<li>User adds price</li>
			<li>User adds tax, if necessary</li>
			<li>Add shipping costs for item</li>
			<li>Add shipping country of origin</li>
			<li>Add processing time for item</li>
			<li>If someone else helped create the item, add their name</li>
			<li>Add shop section to item if necessary</li>
			<li>Add tags to item to help in searching</li>
			<li>Publish listing</li>
		</ol>

		<h2>Conceptual Model</h2>
		<h3>Entities and Attributes</h3>
		<p>Seller</p>
		<ul>
			<li>sellerId</li>
			<li>sellerName</li>
			<li>storeName</li>
			<li>sellerLocation</li>
		</ul>

		<p>Item</p>
		<ul>
			<li>itemId</li>
			<li>itemName</li>
			<li>itemDescription</li>
			<li>aboutListingCategory</li>
			<li>quantity</li>
			<li>itemCategory</li>
			<li>autoRenew</li>
			<li>itemType</li>
			<li>itemPrice</li>
			<li>tax</li>
			<li>shippingCosts</li>
			<li>shippingCountryOfOrigin</li>
			<li>processingTime</li>
			<li>coProducer</li>
			<li>storeSection</li>
		</ul>

		<p>Photo</p>
		<ul>
			<li>photoId</li>
			<li>itemId</li>
		</ul>

		<p>ItemAttributes</p>
		<ul><li>itemId</li>
			<li>attributeId</li>
			<li>attributeType</li>
			<li>attributeDescription</li>
		</ul>


		<p>Tags</p>
		<ul>
			<li>tagId</li>
			<li>tagDescription</li>
			<li>itemId</li>
		</ul>

		<h3>Relations</h3>
		<ul>
			<li>One seller can have many items (1 to n)</li>
			<li>One item can have many photos (1 to n)</li>
			<li>One item can have many attributes (t to n)</li>
			<li>One item can have many tags (1 to n) </li>
		</ul>

	</body>
</html>