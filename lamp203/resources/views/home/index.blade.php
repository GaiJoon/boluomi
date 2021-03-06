@extends('extends.home')
@section('title','集市')
@section('content')
        <div class="header-three">
            <!-- header-three -->
            <div class="container">
                <div class="menu">
                    <div class="cd-dropdown-wrapper">
                        <a class="cd-dropdown-trigger" href="#0">Store Categories</a>
                        <nav class="cd-dropdown">
                            <a href="#0" class="cd-close">Close</a>
                            <ul class="cd-dropdown-content">
                                <li><a href="offers.html">Today's Offers</a></li>
                                <li class="has-children">
                                    <a href="#">Electronics</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products.html">All Electronics</a></li>
                                        <li class="has-children">
                                            <a href="#">MOBILE PHONES</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Electronics</a></li>
                                                <li class="has-children">
                                                    <a href="#0">SmartPhones</a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back"><a href="#"> </a></li>
                                                        <li><a href="products.html">Android</a></li>
                                                        <li><a href="products.html">Windows</a></li>
                                                        <li><a href="products.html">Black berry</a></li>
                                                    </ul>
                                                </li>
                                                <li> <a href="products.html">IPhones</a> </li>
                                                <li><a href="products.html">Tablets</a></li>
                                                <li><a href="products.html">IPad</a></li>
                                                <li><a href="products.html">Feature Phones</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">LARGE APPLIANCES</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Electronics </a></li>
                                                <li><a href="products.html">Refrigerators</a></li>
                                                <li><a href="products.html">Washing Machine</a></li>
                                                <li><a href="products.html">Office Technology</a></li>
                                                <li><a href="products.html">Air conditioner</a></li>
                                                <li><a href="products.html">Home Automation</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">ENTERTAINMENT</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Electronics</a></li>
                                                <li><a href="products.html">Tv & Accessories</a></li>
                                                <li><a href="products.html">Digital Camera</a></li>
                                                <li><a href="products.html">Gaming</a></li>
                                                <li><a href="products.html">Home Audio & Theater</a></li>
                                                <li class="has-children">
                                                    <a href="#">Computer</a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back"><a href="#"> </a></li>
                                                        <li><a href="products.html">Laptop </a></li>
                                                        <li><a href="products.html">Gaming PC</a></li>
                                                        <li><a href="products.html">Monitors</a></li>
                                                        <li><a href="products.html">Networking</a></li>
                                                        <li><a href="products.html">Printers & Supplies</a></li>
                                                        <li><a href="products.html">Accessories</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">HOME APPLIANCES</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#0">All Electronics </a></li>
                                                <li class="has-children"><a href="#">Kitchen appliances</a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back"><a href="#0"> </a></li>
                                                        <li><a href="products.html">Rice Cookers</a></li>
                                                        <li><a href="products.html">Mixer Juicer</a></li>
                                                        <li><a href="products.html">Grinder</a></li>
                                                        <li><a href="products.html">Blenders & Choppers</a></li>
                                                        <li><a href="products.html">Microwave Oven</a></li>
                                                        <li><a href="products.html">Food Processors</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="products.html">Purifiers</a></li>
                                                <li><a href="products.html">Geysers</a></li>
                                                <li><a href="products.html">Gas Stove</a></li>
                                                <li><a href="products.html">Vacuum Cleaner</a></li>
                                                <li><a href="products.html">Sewing Machine</a></li>
                                                <li><a href="products.html">Heaters & Fans</a></li>
                                            </ul>
                                            </li>
                                        <li class="has-children">
                                            <a href="#">SMALL DEVICES</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#0">All Electronics </a></li>
                                                <li><a href="products.html">Wifi Dongle</a></li>
                                                <li><a href="products.html">Router & Modem</a></li>
                                                <li class="has-children"><a href="#">Storage Devices</a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back"><a href="#0"> </a></li>
                                                        <li><a href="products.html">Cloud Storage</a></li>
                                                        <li><a href="products.html">Hard Disk</a></li>
                                                        <li><a href="products.html">SSD</a></li>
                                                        <li><a href="products.html">Pen Drive</a></li>
                                                        <li><a href="products.html">Memory card</a></li>
                                                        <li><a href="products.html">Security Devices</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="products.html">Office Supplies</a></li>
                                                <li><a href="products.html">Cut the Cable</a></li>
                                                <li><a href="products.html">Auto Electronics</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">PERSONAL CARE</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#0">All Electronics </a></li>
                                                <li><a href="products.html">Epilator</a></li>
                                                <li><a href="products.html">Hair Styler</a></li>
                                                <li><a href="products.html">Trimmer & Shaver</a></li>
                                                <li><a href="products.html">Health Care</a></li>
                                                <li><a href="products.html">cables</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <!-- .has-children -->
                                <li class="has-children">
                                    <a href="#">Fashion Store</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products1.html">All Fashion Stores</a></li>
                                        <li class="has-children">
                                            <a href="#">GIRLS' CLOTHING</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                                <li><a href="products1.html">Ethnic wear </a></li>
                                                <li><a href="products1.html">Maternity wear</a></li>
                                                <li><a href="products1.html">inner & nightwear </a></li>
                                                <li><a href="products1.html">casual wear </a></li>
                                                <li><a href="products1.html">formal wear</a></li>
                                                <li><a href="products1.html">Sports wear</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">BOYS' CLOTHING</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                                <li><a href="products1.html">Jeans</a></li>
                                                <li><a href="products1.html">Casual wear</a></li>
                                                <li><a href="products1.html">Shorts</a></li>
                                                <li><a href="products1.html">T-Shirts & Polos</a></li>
                                                <li><a href="products1.html">Trousers & Chinos</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">JACKETS</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                                <li><a href="products1.html">Blazers</a></li>
                                                <li><a href="products1.html">Bomber jackets</a></li>
                                                <li><a href="products1.html">Denim Jackets</a></li>
                                                <li><a href="products1.html">Duffle Coats</a></li>
                                                <li><a href="products1.html">Leather Jackets</a></li>
                                                <li><a href="products1.html">Parkas</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">ACCESSORIES </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                                <li><a href="products1.html">Watches </a></li>
                                                <li><a href="products1.html">Eyewear </a></li>
                                                <li><a href="products1.html">Jewellery </a></li>
                                                <li class="has-children">
                                                    <a href="#">Footwear </a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back"><a href="#"> </a></li>
                                                        <li><a href="products1.html">Ethnic</a></li>
                                                        <li><a href="products1.html">Casual wear</a></li>
                                                        <li><a href="products1.html">Sports Shoes</a></li>
                                                        <li><a href="products1.html">Boots</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="products1.html">Stoles & Scarves</a></li>
                                                <li><a href="products1.html">Handbags</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">BEAUTY</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                                <li><a href="products1.html">Perfumes & Deos</a></li>
                                                <li><a href="products1.html">Lipsticks & Nail Polish</a></li>
                                                <li><a href="products1.html">Beauty Gift Hampers</a></li>
                                                <li><a href="products1.html">Personal Grooming</a></li>
                                                <li><a href="products1.html">Travel bags</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="products1.html">PERSONAL CARE</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Fashion Stores</a></li>
                                                <li><a href="products1.html">Face Care</a></li>
                                                <li><a href="products1.html">Nail Care</a></li>
                                                <li><a href="products1.html">Hair Care</a></li>
                                                <li><a href="products1.html">Body Care</a></li>
                                                <li><a href="products1.html">Bath & Spa</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <!-- .has-children -->
                                <li class="has-children">
                                    <a href="products2.html">Kids Fashion & Toys</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products2.html">All Kids Fashions</a></li>
                                        <li class="has-children">
                                            <a href="products2.html">KIDS CLOTHING</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                                <li><a href="products2.html">Ethnic wear </a></li>
                                                <li><a href="products2.html">inner & Sleepwear </a></li>
                                                <li><a href="products2.html">Dresses & Frocks </a></li>
                                                <li><a href="products2.html">Winter wear</a></li>
                                                <li><a href="products2.html">Diaper & Accessories</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children"><a href="#">KIDS FASHION</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                                <li><a href="products2.html">Footwear</a></li>
                                                <li><a href="products2.html">Sunglasses </a></li>
                                                <li><a href="products2.html">School & Stationery</a></li>
                                                <li><a href="products2.html">Jewellery</a></li>
                                                <li><a href="products2.html">Hair bands & Clips</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children"><a href="#">Baby Care</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                                <li><a href="products2.html">Lotions, Oil & Powder </a></li>
                                                <li><a href="products2.html">Soaps, Shampoo </a></li>
                                                <li><a href="products2.html">Bath Towels</a></li>
                                                <li class="has-children">
                                                    <a href="#">Feeding</a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back"><a href="#"> </a></li>
                                                        <li><a href="products2.html">Baby Food </a></li>
                                                        <li><a href="products2.html">Bottle Feeding </a></li>
                                                        <li><a href="products2.html">Breast Feeding</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="products2.html">Toddlers' Rooms</a></li>
                                            </ul>
                                            <!-- .cd-secondary-dropdown -->
                                        </li>
                                        <!-- .has-children -->
                                        <li class="has-children"><a href="#">TOYS & GAMES </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                                <li><a href="products2.html">Art & Crafts</a></li>
                                                <li><a href="products2.html">Educational Toys </a></li>
                                                <li><a href="products2.html">Baby Toys</a></li>
                                                <li><a href="products2.html">Outdoor Play </a></li>
                                                <li><a href="products2.html">Musical Instruments</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#">All Kids Fashions</a></li>
                                                <li><a href="products2.html">Toy Tips & Trends</a></li>
                                                <li><a href="products2.html">Preschool Toys</a></li>
                                                <li><a href="products2.html">Musical Instruments</a></li>
                                                <li><a href="products2.html">Bikes & Ride-Ons</a></li>
                                                <li><a href="products2.html">Video Games</a></li>
                                                <li><a href="products2.html">PC & Digital Gaming</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <!-- .has-children -->
                                <li class="has-children">
                                    <a href="#">Home, Furniture & Patio</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products3.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">Kitchen Uses</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products3.html">Dinner Sets </a></li>
                                                <li><a href="products3.html">Cookware & Bakeware </a></li>
                                                <li><a href="products3.html">Containers & Jars </a></li>
                                                <li><a href="products3.html">Kitchen Tools </a></li>
                                                <li><a href="products3.html">Food Storage</a></li>
                                                <li><a href="products3.html">Casseroles</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Furniture </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products3.html">Bedroom </a></li>
                                                <li><a href="products3.html">Dining Room </a></li>
                                                <li><a href="products3.html">Kids' Furniture </a></li>
                                                <li><a href="products3.html">Living Room</a></li>
                                                <li><a href="products3.html">Office</a></li>
                                                <li><a href="products3.html">Mattresses</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Home Decor </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products3.html">Lighting</a></li>
                                                <li><a href="products3.html">Painting</a></li>
                                                <li><a href="products3.html">Curtains & Blinds</a></li>
                                                <li><a href="products3.html">Patio Furniture</a></li>
                                                <li><a href="products3.html">Wardrobes & Cabinets</a></li>
                                                <li><a href="products3.html">Mattresses</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Gardening & Lawn </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"> </a></li>
                                                <li><a href="products3.html">Gardening </a></li>
                                                <li><a href="products3.html">Landscaping </a></li>
                                                <li><a href="products3.html">Sheds</a></li>
                                                <li><a href="products3.html">Outdoor Storage  </a></li>
                                                <li><a href="products3.html">Garden & Ideas </a></li>
                                                <li><a href="products3.html">Patio Tips</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Garage Storage</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products3.html">Baskets & Bins </a></li>
                                                <li><a href="products3.html">Garage Door Openers</a></li>
                                                <li><a href="products3.html">Free Standing Shelves </a></li>
                                                <li><a href="products3.html">Floor cleaning</a></li>
                                                <li><a href="products3.html">Tool Kits</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <!-- .has-children -->
                                <li class="has-children">
                                    <a href="#">Sports, Fitness & Outdoor</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products4.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">Single Sports </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products4.html">Bikes </a></li>
                                                <li><a href="products4.html">Fishing  </a></li>
                                                <li><a href="products4.html">Cycling </a></li>
                                                <li><a href="products4.html">Musical Instruments</a></li>
                                                <li><a href="products4.html">Archery </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Team Sports</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products4.html">Cricket </a></li>
                                                <li><a href="products4.html">Badminton </a></li>
                                                <li><a href="products4.html">Swimming Gear </a></li>
                                                <li><a href="products4.html">Sports Apparel </a></li>
                                                <li><a href="products4.html">Indoor games</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Fitness </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products4.html">Fitness Accessories </a></li>
                                                <li><a href="products4.html">Exercise Machines </a></li>
                                                <li><a href="products4.html">Ellipticals </a></li>
                                                <li><a href="products4.html">Home Gyms</a></li>
                                                <li><a href="products4.html">Exercise Bikes</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Camping </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products4.html"> Airbeds</a></li>
                                                <li><a href="products4.html">Tents </a></li>
                                                <li><a href="products4.html">Gazebo's & Shelters</a></li>
                                                <li><a href="products4.html">Coolers </a></li>
                                                <li><a href="products4.html">Canopies</a></li>
                                                <li><a href="products4.html">Sleeping Bags</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Camping Tools</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products4.html">Shooting </a></li>
                                                <li><a href="products4.html">Knives & Tools </a></li>
                                                <li><a href="products4.html">Optics & Binoculars </a></li>
                                                <li><a href="products4.html">Lights & Lanterns </a></li>
                                                <li><a href="products4.html">Hunting Clothing </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Other</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products4.html">Riding Gears & More </a></li>
                                                <li><a href="products4.html">Body Massagers </a></li>
                                                <li><a href="products4.html">Health Monitors </a></li>
                                                <li><a href="products4.html">Health Drinks </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <!-- .has-children -->
                                <li class="has-children">
                                    <a href="#">Grocery store</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products5.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">Veggies & Fruits </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products5.html">Vegetables </a></li>
                                                <li><a href="products5.html">Fruits </a></li>
                                                <li><a href="products5.html">Dry Fruits</a></li>
                                                <li><a href="products5.html">Snacks & Cookies </a></li>
                                                <li><a href="products5.html">Breakfast & Cereal</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Packet Food</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products5.html">Beverages </a></li>
                                                <li><a href="products5.html">Baking </a></li>
                                                <li><a href="products5.html">Emergency Food </a></li>
                                                <li><a href="products5.html">Candy & Gum </a></li>
                                                <li><a href="products5.html">Meals & Pasta </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Shop All Pets </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products5.html">Dogs </a></li>
                                                <li><a href="products5.html">Fish </a></li>
                                                <li><a href="products5.html">Cats</a></li>
                                                <li><a href="products5.html">Birds </a></li>
                                                <li><a href="products5.html">Pet Food </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Household Essentials </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products5.html">Laundry Room </a></li>
                                                <li><a href="products5.html">Paper & Plastic</a></li>
                                                <li><a href="products5.html">Pest Control </a></li>
                                                <li><a href="products5.html">Batteries </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Food Shops </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products5.html">Fresh Food</a></li>
                                                <li><a href="products5.html">Food Gifts </a></li>
                                                <li><a href="products5.html">Frozen Food </a></li>
                                                <li><a href="products5.html">Organic </a></li>
                                                <li><a href="products5.html">Gluten Free </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Tips </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products5.html">Pets Growth</a></li>
                                                <li><a href="products5.html">Recipes </a></li>
                                                <li><a href="products5.html">Snacks</a></li>
                                                <li><a href="products5.html">Nutrition</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <!-- .has-children -->
                                <li class="has-children">
                                    <a href="#">Photo, Gifts & Office Supplies</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products6.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">Trending Now </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products6.html">Best Priced</a></li>
                                                <li><a href="products6.html">Chocolates </a></li>
                                                <li><a href="products6.html">Gift Cards </a></li>
                                                <li><a href="products6.html">Fashion & Accessories </a></li>
                                                <li><a href="products6.html">Decorative Plants </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Photos </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products6.html">Shelf animation </a></li>
                                                <li><a href="products6.html">3D-rendered </a></li>
                                                <li><a href="products6.html">gift builder </a></li>
                                                <li><a href="products6.html">Frames</a></li>
                                                <li><a href="products6.html">Wall Decor</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Gifts </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products6.html">Personalized Gifts </a></li>
                                                <li><a href="products6.html">Flowers </a></li>
                                                <li><a href="products6.html">Cards & Toys</a></li>
                                                <li><a href="products6.html">Show pieces </a></li>
                                                <li><a href="products6.html">Photo Books</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Favourite Brands </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products6.html">Archies </a></li>
                                                <li><a href="products6.html">Jewel Fuel </a></li>
                                                <li><a href="products6.html">Ferns N Petals </a></li>
                                                <li><a href="products6.html">Happily Unmarried</a></li>
                                                <li><a href="products6.html">Chumbak</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Office</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products6.html">Calendars</a></li>
                                                <li><a href="products6.html">Mousepads</a></li>
                                                <li><a href="products6.html">Phone Cases</a></li>
                                                <li><a href="products6.html">Tablet & Laptop Cases</a></li>
                                                <li><a href="products6.html">Mounted Photos</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Combos </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products6.html">Chocolates </a></li>
                                                <li><a href="products6.html">Dry Fruits</a></li>
                                                <li><a href="products6.html">Sweets</a></li>
                                                <li><a href="products6.html">Snacks</a></li>
                                                <li><a href="products6.html">Cakes</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <li class="has-children">
                                    <a href="#">Health, Beauty & Pharmacy</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products7.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">Health</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products7.html">Home Health Care </a></li>
                                                <li><a href="products7.html">Sports Nutrition </a></li>
                                                <li><a href="products7.html">Vision </a></li>
                                                <li><a href="products7.html">Vitamins </a></li>
                                                <li><a href="products7.html">Diet & Nutrition </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Health Tips</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products7.html">Diet</a></li>
                                                <li><a href="products7.html">Exercise Tips  </a></li>
                                                <li><a href="products7.html">Vitamin Balance</a></li>
                                                <li><a href="products7.html">Health Insurance</a></li>
                                                <li><a href="products7.html">Funeral</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Beauty </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products7.html">Massage & Spa </a></li>
                                                <li><a href="products7.html">Face Wash</a></li>
                                                <li><a href="products7.html">Facial Cleanser</a></li>
                                                <li><a href="products7.html">Makeup </a></li>
                                                <li><a href="products7.html">Beauty Tips</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Pharmacy </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products7.html">Home Delivery </a></li>
                                                <li><a href="products7.html">History & Reports </a></li>
                                                <li><a href="products7.html">Transfer Prescriptions </a></li>
                                                <li><a href="products7.html">Health CheckUp</a></li>
                                                <li><a href="products7.html">Mobile App</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Pharmacy Center </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products7.html">Diabetes Shop </a></li>
                                                <li><a href="products7.html">Medicine Cabinet </a></li>
                                                <li><a href="products7.html">Vitamin Selector</a></li>
                                                <li><a href="products7.html">Pharmacy Help</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <li class="has-children">
                                    <a href="#">Automotive</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products8.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">All Motors </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products8.html">Bikes </a></li>
                                                <li><a href="products8.html">Yachts </a></li>
                                                <li><a href="products8.html">Scooters </a></li>
                                                <li><a href="products8.html">Autos</a></li>
                                                <li><a href="products8.html">Bus</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Accessories </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products8.html">Vehicle Electronics</a></li>
                                                <li><a href="products8.html">Stereos & Monitors</a></li>
                                                <li><a href="products8.html">Bluetooth Devices</a></li>
                                                <li><a href="products8.html">GPS Navigation</a></li>
                                                <li><a href="products8.html">Speakers & Tweeters</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Safety & Security </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products8.html">Anti-Theft Devices </a></li>
                                                <li><a href="products8.html">Helmets</a></li>
                                                <li><a href="products8.html">Sensors</a></li>
                                                <li><a href="products8.html">Auto Repair Tools </a></li>
                                                <li><a href="products8.html">Antifreeze & Coolants </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Car Interiors</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products8.html">Stereos </a></li>
                                                <li><a href="products8.html">Floor Mats </a></li>
                                                <li><a href="products8.html">Seat Covers</a></li>
                                                <li><a href="products8.html">Chargers </a></li>
                                                <li><a href="products8.html">Audio Finder </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Exterior Accessories </a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products8.html">Wheel covers </a></li>
                                                <li><a href="products8.html">Car Lighting </a></li>
                                                <li><a href="products8.html">Polish & Waxes</a></li>
                                                <li><a href="products8.html">Cargo Management</a></li>
                                                <li><a href="products8.html">Car Decoration </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Car Care</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products8.html">Auto Tips & Advice </a></li>
                                                <li><a href="products8.html">Car Washes & Cleaners </a></li>
                                                <li><a href="products8.html">Car Wax & Polish</a></li>
                                                <li><a href="products8.html">Cleaning Tools</a></li>
                                                <li><a href="products8.html">Detailing Kits </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <li class="has-children">
                                    <a href="#">Books, Music & Movies</a>
                                    <ul class="cd-secondary-dropdown is-hidden">
                                        <li class="go-back"><a href="#">Menu</a></li>
                                        <li class="see-all"><a href="products9.html">All Products</a></li>
                                        <li class="has-children">
                                            <a href="#">Books</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li class="has-children"><a href="#">Exam books </a>
                                                    <ul class="is-hidden">
                                                        <li class="go-back"><a href="#"> </a></li>
                                                        <li><a href="products9.html">CAT/MAT/XAT</a></li>
                                                        <li><a href="products9.html">Civil Services</a></li>
                                                        <li><a href="products9.html">AFCAT</a></li>
                                                        <li><a href="products9.html">New Releases</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="products9.html">Academic Text </a></li>
                                                <li><a href="products9.html">Romance Books </a></li>
                                                <li><a href="products9.html">Journals </a></li>
                                                <li><a href="products9.html">Children's & Teen Books </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Music</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products9.html">New Releases </a></li>
                                                <li><a href="products9.html">Country Music </a></li>
                                                <li><a href="products9.html">Musical Instruments </a></li>
                                                <li><a href="products9.html">Collections</a></li>
                                                <li><a href="products9.html">Boxed Sets </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Music Combo</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products9.html">Pop </a></li>
                                                <li><a href="products9.html">Preorders </a></li>
                                                <li><a href="products9.html">Album Songs</a></li>
                                                <li><a href="products9.html">Top 50 CDs </a></li>
                                                <li><a href="products9.html">Music DVDs </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Movies</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products9.html">New Releases </a></li>
                                                <li><a href="products9.html">Children & Family </a></li>
                                                <li><a href="products9.html">Action</a></li>
                                                <li><a href="products9.html">Classic Movies </a></li>
                                                <li><a href="products9.html">Bollywood Movies </a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">Movies Combo</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products9.html">Hollywood Movies </a></li>
                                                <li><a href="products9.html">Digital Movies </a></li>
                                                <li><a href="products9.html">Boxed Sets</a></li>
                                                <li><a href="products9.html">Animated</a></li>
                                                <li><a href="products9.html">Adventure</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="#">TV Shows</a>
                                            <ul class="is-hidden">
                                                <li class="go-back"><a href="#"></a></li>
                                                <li><a href="products9.html">Serials</a></li>
                                                <li><a href="products9.html">Best Programs</a></li>
                                                <li><a href="products9.html">Celebrations</a></li>
                                                <li><a href="products9.html">Top Shows</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- .cd-secondary-dropdown -->
                                </li>
                                <li><a href="sitemap.html">Full Site Directory </a></li>
                            </ul>
                            <!-- .cd-dropdown-content -->
                        </nav>
                        <!-- .cd-dropdown -->
                    </div>
                    <!-- .cd-dropdown-wrapper -->
                </div>
                <div class="move-text">
                    <div class="marquee"><a href="offers.html"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
                    <script type="text/javascript" src="/homes/js/jquery.marquee.min.js"></script>
                    <script>
                    $('.marquee').marquee({ pauseOnHover: true });
                    //@ sourceURL=pen.js
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- //header -->
    <!-- banner -->
    <div class="banner">
        <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
            <!-- Wrapper-for-Slides -->
          
            <div class="carousel-inner" role="listbox">
                
                <div class="item active">
                    <!-- First-Slide -->

                    <img src="{{$Lunbo['url'][0]}}" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated flipInX">Flat <span>50%</span> Discount</h3>
                        <h4 data-animation="animated flipInX">Hot Offer Today Only</h4>
                    </div>
                </div>
              
                <div class="item">
                    <!-- Second-Slide -->
                    <img src="{{$Lunbo['url'][1]}}" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated fadeInDown">Our Latest Fashion Editorials</h3>
                        <h4 data-animation="animated fadeInUp">cupidatat non proident</h4>
                    </div>
                </div>
                <div class="item">
                    <!-- Third-Slide -->
                    <img src="{{$Lunbo['url'][2]}}" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated fadeInLeft">End Of Season Sale</h3>
                        <h4 data-animation="animated flipInX">cupidatat non proident</h4>
                    </div>
                </div>


                 
            </div>
            
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <script src="/homes/js/custom.js"></script>
    </div>
    <!-- //banner -->
    <div class="tlinks">Collect from <a href="http://www.cssmoban.com/" title="网站模板">网站模板</a></div>
    <!-- welcome -->
    <div class="welcome">
        <div class="container">
            <div class="welcome-info">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class=" nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab">
							<i class="fa fa-laptop" aria-hidden="true"></i> 
							<h5>Electronics</h5>
						</a></li>
                        <li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab"> 
							<i class="fa fa-female" aria-hidden="true"></i>
							<h5>Fashion</h5>
						</a></li>
                        <li role="presentation"><a href="#james" role="tab" id="james-tab" data-toggle="tab"> 
							<i class="fa fa-gift" aria-hidden="true"></i>
							<h5>Photo & Gifts</h5>
						</a></li>
                        <li role="presentation"><a href="#decor" role="tab" id="decor-tab" data-toggle="tab"> 
							<i class="fa fa-home" aria-hidden="true"></i>
							<h5>Home Decor</h5>
						</a></li>
                        <li role="presentation"><a href="#sports" role="tab" id="sports-tab" data-toggle="tab"> 
							<i class="fa fa-motorcycle" aria-hidden="true"></i>
							<h5>Sports</h5>
						</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                    <h3 class="w3ls-title">Featured Products</h3>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                            <div class="tabcontent-grids">
                                <div id="owl-demo" class="owl-carousel">
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products.html"><img src="/homes/images/e1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products.html">Audio speaker</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$100</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Audio speaker" />
                                                    <input type="hidden" name="amount" value="200.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>Sale</h6></div>
                                            <a href="products.html"><img src="images/e2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products.html">Refrigerator</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$300</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Refrigerator" />
                                                    <input type="hidden" name="amount" value="700.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products.html"><img src="images/e3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products.html">Smart Phone</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$70</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                                    <input type="hidden" name="amount" value="300.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products.html"><img src="images/e4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products.html">Digital Camera</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$80</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Digital Camera" />
                                                    <input type="hidden" name="amount" value="100.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products.html"><img src="/homes/images/e1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products.html">Audio speaker</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$100</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Audio speaker" />
                                                    <input type="hidden" name="amount" value="200.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>Sale</h6></div>
                                            <a href="products.html"><img src="/homes/images/e2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products.html">Refrigerator</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$300</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Refrigerator" />
                                                    <input type="hidden" name="amount" value="700.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products.html"><img src="/homes/images/e3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products.html">Smart Phone</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$70</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                                    <input type="hidden" name="amount" value="300.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products.html"><img src="/homes/images/e4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products.html">Digital Camera</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$80</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Digital Camera" />
                                                    <input type="hidden" name="amount" value="100.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
                            <div class="tabcontent-grids">
                                <script>
                                $(document).ready(function() {
                                    $("#owl-demo1").owlCarousel({

                                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                                        items: 4,
                                        itemsDesktop: [640, 5],
                                        itemsDesktopSmall: [414, 4],
                                        navigation: true

                                    });

                                });
                                </script>
                                <div id="owl-demo1" class="owl-carousel">
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products1.html"><img src="/homes/images/f1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">T Shirt</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$10</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="T Shirt" />
                                                    <input type="hidden" name="amount" value="10.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>20% <br> Off</h6></div>
                                            <a href="products1.html"><img src="/homes/images/f2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">Women Sandal</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$20</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Women Sandal" />
                                                    <input type="hidden" name="amount" value="20.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products1.html"><img src="/homes/images/f3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">Jewellery</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$60</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Jewellery" />
                                                    <input type="hidden" name="amount" value="60.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products1.html"><img src="/homes/images/f4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">Party dress</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$15</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Party dress" />
                                                    <input type="hidden" name="amount" value="15.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products1.html"><img src="/homes/images/f1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">T Shirt</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$10</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="T Shirt" />
                                                    <input type="hidden" name="amount" value="10.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>20% <br> Off</h6></div>
                                            <a href="products1.html"><img src="/homes/images/f2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">Women Sandal</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$20</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Women Sandal" />
                                                    <input type="hidden" name="amount" value="20.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products1.html"><img src="/homes/images/f3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">Jewellery</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$60</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Jewellery" />
                                                    <input type="hidden" name="amount" value="60.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products1.html"><img src="/homes/images/f4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products1.html">Party dress</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$15</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Party dress" />
                                                    <input type="hidden" name="amount" value="15.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
                            <div class="tabcontent-grids">
                                <script>
                                $(document).ready(function() {
                                    $("#owl-demo2").owlCarousel({

                                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                                        items: 4,
                                        itemsDesktop: [640, 5],
                                        itemsDesktopSmall: [414, 4],
                                        navigation: true

                                    });

                                });
                                </script>
                                <div id="owl-demo2" class="owl-carousel">
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products6.html"><img src="/homes/images/p1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Coffee Mug</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$14</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Coffee Mug" />
                                                    <input type="hidden" name="amount" value="14.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>20% <br> Off</h6></div>
                                            <a href="products6.html"><img src="/homes/images/p2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Teddy bear</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$20</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Teddy bear" />
                                                    <input type="hidden" name="amount" value="20.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>Sale</h6></div>
                                            <a href="products6.html"><img src="/homes/images/p3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Chocolates</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$60</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Chocolates" />
                                                    <input type="hidden" name="amount" value="60.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products6.html"><img src="/homes/images/p4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Gift Card</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$22</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Gift Card" />
                                                    <input type="hidden" name="amount" value="22.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products6.html"><img src="/homes/images/p1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Coffee Mug</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$14</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Coffee Mug" />
                                                    <input type="hidden" name="amount" value="14.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>20% <br> Off</h6></div>
                                            <a href="products6.html"><img src="/homes/images/p2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Teddy bear</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$20</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Teddy bear" />
                                                    <input type="hidden" name="amount" value="20.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>Sale</h6></div>
                                            <a href="products6.html"><img src="/homes/images/p3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Chocolates</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$60</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Chocolates" />
                                                    <input type="hidden" name="amount" value="60.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products6.html"><img src="/homes/images/p4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products6.html">Gift Card</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$22</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Gift Card" />
                                                    <input type="hidden" name="amount" value="22.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="decor" aria-labelledby="decor-tab">
                            <div class="tabcontent-grids">
                                <script>
                                $(document).ready(function() {
                                    $("#owl-demo3").owlCarousel({

                                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                                        items: 4,
                                        itemsDesktop: [640, 5],
                                        itemsDesktopSmall: [414, 4],
                                        navigation: true

                                    });

                                });
                                </script>
                                <div id="owl-demo3" class="owl-carousel">
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>Sale</h6></div>
                                            <a href="products3.html"><img src="/homes/images/h1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">Wall Clock</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$80</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Wall Clock" />
                                                    <input type="hidden" name="amount" value="80.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>10%<br>Off</h6></div>
                                            <a href="products3.html"><img src="/homes/images/h2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">Plants & Vases</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$40</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Plants & Vases" />
                                                    <input type="hidden" name="amount" value="40.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products3.html"><img src="/homes/images/h3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">Queen Size Bed</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$250</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Queen Size Bed" />
                                                    <input type="hidden" name="amount" value="250.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products3.html"><img src="/homes/images/h4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">flower pot</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$30</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="flower pot" />
                                                    <input type="hidden" name="amount" value="30.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>Sale</h6></div>
                                            <a href="products3.html"><img src="/homes/images/h1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">Wall Clock</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$80</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Wall Clock" />
                                                    <input type="hidden" name="amount" value="80.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>10%<br>Off</h6></div>
                                            <a href="products3.html"><img src="/homes/images/h2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">Plants & Vases</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$40</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Plants & Vases" />
                                                    <input type="hidden" name="amount" value="40.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products3.html"><img src="/homes/images/h3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">Queen Size Bed</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$250</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Queen Size Bed" />
                                                    <input type="hidden" name="amount" value="250.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products3.html"><img src="/homes/images/h4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products3.html">flower pot</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$30</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="flower pot" />
                                                    <input type="hidden" name="amount" value="30.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="sports" aria-labelledby="sports-tab">
                            <div class="tabcontent-grids">
                                <script>
                                $(document).ready(function() {
                                    $("#owl-demo4").owlCarousel({

                                        autoPlay: 3000, //Set AutoPlay to 3 seconds

                                        items: 4,
                                        itemsDesktop: [640, 5],
                                        itemsDesktopSmall: [414, 4],
                                        navigation: true

                                    });
                                });
                                </script>
                                <div id="owl-demo4" class="owl-carousel">
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products4.html"><img src="/homes/images/s1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Roller Skates</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$180</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Roller Skates" />
                                                    <input type="hidden" name="amount" value="180.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products4.html"><img src="/homes/images/s2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Football</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$70</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Football" />
                                                    <input type="hidden" name="amount" value="70.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>20% <br>Off</h6></div>
                                            <a href="products4.html"><img src="/homes/images/s3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Nylon Shuttle</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$56</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Nylon Shuttle" />
                                                    <input type="hidden" name="amount" value="56.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products4.html"><img src="/homes/images/s4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Cricket Kit</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$80</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Cricket Kit" />
                                                    <input type="hidden" name="amount" value="80.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>New</h6></div>
                                            <a href="products4.html"><img src="/homes/images/s1.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Roller Skates</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$180</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Roller Skates" />
                                                    <input type="hidden" name="amount" value="180.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products4.html"><img src="/homes/images/s2.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Football</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$70</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Football" />
                                                    <input type="hidden" name="amount" value="70.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <div class="new-tag">
                                                <h6>20% <br>Off</h6></div>
                                            <a href="products4.html"><img src="/homes/images/s3.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Nylon Shuttle</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$56</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Nylon Shuttle" />
                                                    <input type="hidden" name="amount" value="56.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="glry-w3agile-grids agileits">
                                            <a href="products4.html"><img src="/homes/images/s4.png" alt="img"></a>
                                            <div class="view-caption agileits-w3layouts">
                                                <h4><a href="products4.html">Cricket Kit</a></h4>
                                                <p>Lorem ipsum dolor sit amet consectetur</p>
                                                <h5>$80</h5>
                                                <form action="#" method="post">
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="w3ls_item" value="Cricket Kit" />
                                                    <input type="hidden" name="amount" value="80.00" />
                                                    <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //welcome -->
    <!-- add-products -->
    <div class="add-products">
        <div class="container">
            <div class="add-products-row">
                <div class="w3ls-add-grids">
                    <a href="products1.html">
                        <h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
                        <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                    </a>
                </div>
                <div class="w3ls-add-grids w3ls-add-grids-mdl">
                    <a href="products1.html">
                        <h4>SUNDAY SPECIAL DISCOUNT FLAT <span>40%</span> OFF</h4>
                        <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                    </a>
                </div>
                <div class="w3ls-add-grids w3ls-add-grids-mdl1">
                    <a href="products.html">
                        <h4>LATEST DESIGNS FOR YOU <span> Hurry !</span></h4>
                        <h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                    </a>
                </div>
                <div class="clerfix"> </div>
            </div>
        </div>
    </div>
    <!-- //add-products -->
    <!-- coming soon -->
    <div class="soon">
        <div class="container">
            <h3>Mega Deal Of the Week</h3>
            <h4>Coming Soon Don't Miss Out</h4>
            <div id="countdown1" class="ClassyCountdownDemo"></div>
        </div>
    </div>
    <!-- //coming soon -->
    <!-- deals -->
    <div class="deals">
        <div class="container">
            <h3 class="w3ls-title">DEALS OF THE DAY </h3>
            <div class="deals-row">
                <div class="col-md-3 focus-grid">
                    <a href="products.html" class="wthree-btn">
                        <div class="focus-image"><i class="fa fa-mobile"></i></div>
                        <h4 class="clrchg">Mobiles</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products.html" class="wthree-btn wthree1">
                        <div class="focus-image"><i class="fa fa-laptop"></i></div>
                        <h4 class="clrchg"> Electronics & Appliances</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products4.html" class="wthree-btn wthree2">
                        <div class="focus-image"><i class="fa fa-wheelchair"></i></div>
                        <h4 class="clrchg">Furnitures</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products3.html" class="wthree-btn wthree3">
                        <div class="focus-image"><i class="fa fa-home"></i></div>
                        <h4 class="clrchg">Home Decor</h4>
                    </a>
                </div>
                <div class="col-md-2 focus-grid w3focus-grid-mdl">
                    <a href="products9.html" class="wthree-btn wthree3">
                        <div class="focus-image"><i class="fa fa-book"></i></div>
                        <h4 class="clrchg">Books & Music</h4>
                    </a>
                </div>
                <div class="col-md-2 focus-grid w3focus-grid-mdl">
                    <a href="products1.html" class="wthree-btn wthree4">
                        <div class="focus-image"><i class="fa fa-asterisk"></i></div>
                        <h4 class="clrchg">Fashion</h4>
                    </a>
                </div>
                <div class="col-md-2 focus-grid w3focus-grid-mdl">
                    <a href="products2.html" class="wthree-btn wthree2">
                        <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                        <h4 class="clrchg">Kids</h4>
                    </a>
                </div>
                <div class="col-md-2 focus-grid w3focus-grid-mdl">
                    <a href="products5.html" class="wthree-btn wthree">
                        <div class="focus-image"><i class="fa fa-shopping-basket"></i></div>
                        <h4 class="clrchg">Groceries</h4>
                    </a>
                </div>
                <div class="col-md-2 focus-grid w3focus-grid-mdl">
                    <a href="products7.html" class="wthree-btn wthree5">
                        <div class="focus-image"><i class="fa fa-medkit"></i></div>
                        <h4 class="clrchg">Health</h4>
                    </a>
                </div>
                <div class="col-md-2 focus-grid w3focus-grid-mdl">
                    <a href="products8.html" class="wthree-btn wthree1">
                        <div class="focus-image"><i class="fa fa-car"></i></div>
                        <h4 class="clrchg">Automotive</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products5.html" class="wthree-btn wthree2">
                        <div class="focus-image"><i class="fa fa-cutlery"></i></div>
                        <h4 class="clrchg">Food</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products4.html" class="wthree-btn wthree5">
                        <div class="focus-image"><i class="fa fa-futbol-o"></i></div>
                        <h4 class="clrchg">Sports</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products2.html" class="wthree-btn wthree3">
                        <div class="focus-image"><i class="fa fa-gamepad"></i></div>
                        <h4 class="clrchg">Games & Toys</h4>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="products6.html" class="wthree-btn ">
                        <div class="focus-image"><i class="fa fa-gift"></i></div>
                        <h4 class="clrchg">Gifts</h4>
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //deals -->
@endsection