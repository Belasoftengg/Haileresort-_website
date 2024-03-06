<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylesfile.css">
    <link rel="stylesheet" href="style0.css">
    <title>Document</title>


    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        .about {
            background-image: url('swimming pool.jpg');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
        }
        
        .title {
            margin: 20px;
            position: absolute;
            top: 600px;
            left: 640px;
            border: 2px solid white;
            border-radius: 10px;
            box-shadow: 2px 2px 2px 2px rgb(253, 253, 253);
            font-size: 20px;
            backdrop-filter: blur(10px);
            background-color: black;
            margin-top: 230px;
        }
        
        .title:hover {
            background-color: purple;
            color: white;
        }
        
        .title .my_title {
            font-size: 20px;
            padding-left: 10px;
            margin-top: 50px;
        }
        
        .button {
            background-color: rgb(133, 23, 114);
            padding: 15px 18px;
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.5);
            transition: 0.4s;
            color: white;
            text-transform: uppercase;
        }
        
        .button:hover {
            color: black;
            background-color: aliceblue;
        }
        
        .my_title {
            margin-bottom: 30px;
            display: inline-block;
            font-size: 25px;
            color: azure;
        }
        
        .my_title:first-letter {
            font-size: 120px;
        }
        
        #attract,
        #fddr,
        #trans {
            font-size: 10px;
            display: none;
            color: rgb(13, 14, 14);
        }
        
        #attract.active,
        #fddr.active,
        #trans.active {
            display: block;
        }
        
        .row {
            margin-top: 70px;
            display: flex;
            justify-content: space-around;
            width: 100%;
            height: 100%;
            margin-bottom: 100px;
        }
    </style>

    <script>
        function changeData(parameter) {
            if (parameter == 0) {
                document.getElementById('attract').classList.toggle('active');
            } else if (parameter == 1) {
                document.getElementById('fddr').classList.toggle('active');
            } else {
                document.getElementById('trans').classList.toggle('active');
            }
        }
    </script>
</head>

<body>
    <div class="main">
        <div class="home">
            <div class="img">
                <img src="HAILY.jpg">
            </div>
            <div class="navgate" id="navGate">
                <img src="images/close.png" onclick="hidebar()">
                <ul>
                    <li> <a href="">Home</a></li>
                    <li> <a href="#a1">About</a></li>
                    <li> <a href="#sr">Service</a></li>
                    <li> <a href="#r">Room and Price</a></li>
                    <li> <a href="reviews.html">Review</a></li>
                </ul>
            </div>
            <div class="bar">
                <img src="images/menu.png" width="20" height="20" onclick="showbar()">
            </div>

        </div>
        








        <div class="text">
            <h5>WEL COME TO HAILE RESORT ARBAMICH OFFICIAL WEBSITE.</h5>

        </div>
        <div class="btn1">
            <a href="#r">Room & price</a>
        </div>
    </div>
    <div>

        <div class="about" id="a1">
            <h1 style="color:azure; text-align: center; margin-left: 500px; ">About Us</h1>
            <div class="title">
                <p class="my_title">
                    <marquee behavior="scroll" direction="up" style="margin-top: 150px;"> Haile Resort-Arba Minch, set in Migie, 70 Secha, is a 110 room four-star resort located at a grand view overlooking the twin lakes of Abaya and Chamo along the beautiful evergreen vegetation, chain of mountains that form the most beautiful
                        pattern offering some units with mountain views. The resort is an all inclusive concept to its guests & offers a 4-star accomodation with a garden, a shared lounge and a bar, free shuttle service, room service and free Wi-Fi, an
                        outdoor swimming pool, fitness centre, sauna, evening entertainment and a kids club with children's playground.<br/><br/>At the resort all rooms include air conditioning, a desk, a terrace with a garden view, a private bathroom,
                        a flat-screen TV, bed linen & towels. All guest rooms will provide guests with a fridge.<br/><br/>Guests at the accomdation can enjoy a buffet breakfast in which the resort serves scrumptious American, French and Ethiopian Cuisine
                        (Vegetarian and Vegan options can also be requested as well.). The Nearest airport is Arba Minch Airport, which is 5 km away from the resort. </p>
                </marquee>
            </div>

        </div>
        <div class="row">
            <button class="button" onclick="changeData(0)">Attactions</button>
            <div id="attract">
                <h1>Top Attraction Sites</h1>
                <p><b>Crocodile Market Lake Chamo                11 km</b></p>
                <h1>What's Nearby?</h1>
                <p><b>Nechisar National Park 1.1 km</b></p>
                <p><b>Meskel Square 2.6km</b></p>
            </div>
            <button class="button" onclick="changeData(1)">Foods and Drinks</button>
            <div id="fddr">
                <h1>Restaurants and Bars</h1>
                <p>Lamabdina Bar & Restaurant</p>
                <p>Hore Bar & Restaurant</p>
                <p>Mami Bar & Restaurant</p>
                <h1>Cafes & Bars</h1>
                <p>Juice</p>
                <p>Cafeteria</p>
                <p>Zebib</p>
                <h1>Super Markets & Groceries</h1>
                <P>Whole Foods</P>
                <p>Market</p>
            </div>
            <button class=" button" onclick="changeData(2)">Transport</button>
            <div id="trans">
                <h1>Closest Airports</h1>
                <p>Arba Minch Airport(AMH)</p>

            </div>
        </div>
        <!-- end of about -->

        <header id="sr" style="background-color: hsl(163, 87%, 30%);">Haile Resort Service


        </header>

        <!-- <section class="services"> -->

        <div class="services-container">
            <div class="service">
                <img src="images/room1.jpg" alt="Service 1">
                <h3>Room booking and reservation </h3>
                <p>This service allows customers to book and reserve a room in the hotel through various channels such as phone, website and email. The hotel ensures that the booking process is smooth and hassle-free, providing customers with all necessary
                    information and options for choosing their preferred room type and dates of stay..</p>
            </div>
            <div class="service">
                <img src="images/main room.jpg" alt="Service 2">
                <h3>24-Hour Front Desk Service</h3>
                <p>The hotel offers 24/7 front desk service to assist guests with their needs or queries at any time of the day. This service includes providing information on local attractions, room service requests, luggage storage, and booking transportation
                    services..
                </p>
            </div>
            <div class="service">
                <img src="images/TED00801.jpg" alt="Service 3">
                <h3>Room Service and In-room Dining</h3>
                <p>Guests can enjoy a variety of dining options with the hotel's room service and in-room dining services. The hotel offersss an extensive menu of delicious and healthy food options that can be ordered from the comfort of their own room,
                    allowing guests to dine and relax in privacy..</p>
            </div>
            <div class="service">
                <img src="images/swi8.jpg" alt="Service 4">
                <h3>Swimming Pool</h3>
                <p>The hotel provides a clean and well-maintained swimming pool for guests to enjoy. The pool area is equipped with comfortable loungers, sun umbrellas, and towels, providing a perfect relaxation space for the traveler.</p>
            </div>
            <div class="service">
                <img src="images/gym.jpg" alt="Service 5">
                <h3>Fitness Center and Spa Service</h3>
                <p>Guests can maintain their fitness routine during their stay with access to the hotel's fitness and spa services. The fully-equipped fitness center caters to all styles of exercise, and the spa offers a range of luxury treatments such as
                    massages and facials to help guests unwind and feel rejuvenated.</p>
            </div>
            <div class="service">
                <img src="images/parking.jpg" alt="Service 6">
                <h3>Parking</h3>
                <p>The hotel provides safe and secure parking for guests with a car. On-site parking also gives guests peace of mind.</p>
            </div>
            <div class="service">
                <img src="images/dining room.jpg" alt="Service 7">
                <h3>Bar & Restaurant</h3>
                <p>The hotel's bar and restaurant is the perfect spot for guests to socialize and savor delicious cuisine. The menu includes a wide range of international and local dishes for all tastes and preferences.</p>
            </div>
            <div class="service">
                <img src="images/meeting hall.jpg" alt="Service 8">
                <h3>Conference Rooms</h3>
                <p>The hotel offers several conference rooms that can be reserved for business meetings and events. These rooms are equipped with modern technology to ensure a successful event and meeting experience..</p>
            </div>
            <div class="service">
                <img src="images/in15.jpg" alt="Service 9">
                <h3>24/7 Reception</h3>
                <p>The hotel has a team of professionals available 24/7 to meet the needs of its guests. The reception staff is always willing to provide guidance and assistance to guests.</p>
            </div>
            <div class="service">
                <img src="images/bu6.png" alt="Service 10">
                <h3>Massage Service</h3>
                <p>In-house therapists offer a range of massage services that help guests relax and reduce stress after a day of meetings, activities, and sightseeing..</p>
            </div>
            <div class="service">
                <img src="images/204136527.jpg" alt="Service 10">
                <h3>Shuttle and Transportation Service </h3>
                <p>The hotel provides shuttle and transportation services for guests who require assistance getting to and from the airport or other destinations. The hotel makes arrangements for licensed and insured vehicles to ensure a safe and reliable
                    experience..
                </p>
            </div>
            <div class="service">
                <img src="images/pic1.jpg" alt="Service 10">
                <h3>Free Wi-Fi </h3>
                <p>The hotel offers high-speed Wi-Fi throughout the building, allowing guests to stay connected and share their experiences with friends and family. They can also stay connected with work, communicate with colleagues or plan future activities.
                    The hotel provides complimentary Wi-Fi to its guests as part of its service commitment..</p>
            </div>
        </div>
        </section>

        <!-- end of service -->



    </div>

    <script>
        let navGate = document.getElementById("navGate");

        function showbar() {
            navGate.style.right = "0";
        }

        function hidebar() {
            navGate.style.right = "-200px";
        }
    </script>
    <div class="roomheader" id="r"> HERE IS OUR ROOMS</div>
    <div class="roomcontent">
        <div class="room1">
            <h2 class="insideroom">
                <h3>Single Room</h3>
                <p>Starting from $30/Night</p><br>
                <button style="height:40px; width:100px;background:rgb(12, 212, 219); "><a href="signin.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
        <div class="room2">
            <h2 class="insideroom">
                <h3>Single Room</h3>
                <p>Starting from $30/Night</p> <br>
                <button style="height:40px; width:100px;background:rgb(12, 212, 219); "><a href="signin.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
        <div class="room3">
            <h2 class="insideroom">
                <h3>Single Room</h3>
                <p>Starting from $30/Night</p> <br>
                <button style="height:40px; width:100px;background:rgb(12, 212, 219); "><a href="signin.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
    </div>

    <div class="roomcontent2">
        <div class="room11">
            <h2 class="insideroom">
                <h3>Double Room</h3>
                <p>Starting from $70/Night</p><br>
                <button style="height:40px; width:100px;background:rgb(12, 212, 219); "><a href="signin.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
        <div class="room22">
            <h2 class="insideroom">
                <h3>Double Room</h3>
                <p>Starting from $70/Night</p> <br>
                <button style="height:40px; width:100px;background:rgb(12, 212, 219); "><a href="signin.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
        <div class="room33">
            <h2 class="insideroom">
                <h3>Double Room</h3>
                <p>Starting from $70/Night</p> <br>
                <button style="height:40px; width:100px;background:rgb(12, 212, 219); "><a href="signin.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
    </div>
    <div class="roomcontent2">
        <div class="room111">
            <h2 class="insideroom">
                <h3>Family Room</h3>
                <p>Starting from $110/Night</p><br>
                <button class="roombutton" style="height:40px; width:100px;background:rgb(12, 212, 219); "><a href="signin.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
        <div class="room222">
            <h2 class="insideroom">
                <h3>Family Room</h3>
                <p>Starting from $110/Night</p> <br>
                <button style="height:40px; width:100px;background:rgb(12, 212, 219); "><a href="signin.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
        <div class="room333">
            <h2 class="insideroom">
                <h3>Family Room</h3>
                <p>Starting from $110/Night</p> <br>
                <button class="y" style="height:40px; width:100px;background:rgb(12, 212, 219); "><a href="signin.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
    </div>
    <div class="roomcontent2">
        <div class="room1111">
            <h2 class="insideroom">
                <h3>Exclusive Room</h3>
                <p>Starting from $140/Night</p><br>
                <button class="roombutton" style="height:40px; width:100px;background:rgb(12, 212, 219); "><a href="signin.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
        <div class="room2222">
            <h2 class="insideroom">
                <h3>Exclusive Room</h3>
                <p>Starting from $140/Night</p> <br>
                <button class="roombutton" style="height:40px; width:100px;background:rgb(12, 212, 219); "><a href="signin.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
        <div class="room3333">
            <h2 class="insideroom">
                <h3>Exclusive Room</h3>
                <p>Starting from $140/Night</p> <br>
                <button class="roombutton" style="height:40px; width:100px;background:rgb(12, 212, 219); "><a href="signin.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
    </div>
    <!-- <div class="roomcontent2">
        <div class="room1">
            <h2 class="insideroom">
                <h3>DSuite Room</h3>
                <p>Starting from $170/Night</p><br>
                <button style="height:40px; width:100px;background:rgb(212, 12, 219); "><a href="booking_single.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
        <div class="room2">
            <h2 class="insideroom">
                <h3>Suite Room</h3>
                <p>Starting from $170/Night</p> <br>
                <button style="height:40px; width:100px;background:rgb(212, 12, 219); "><a href="booking_single.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div>
        <div class="room2">
            <h2 class="insideroom">
                <h3>Suite Room</h3>
                <p>Starting from $170/Night</p> <br>
                <button style="height:40px; width:100px;background:rgb(212, 12, 219); "><a href="booking_single.php" style="color: white; text-decoration: none;">BOOK NOW</a></button>
        </div> -->
    </div>
    <footer>
        <div class="footer_grid">
            <div class="box">
                <a name="contact"></a>
                <h3>Contact info</h3>
                <dv class="font1">
                    <label class="icons"><img src="images/phone-solid.svg" class="icons"></label>
                    <a href="tel:+251974292929" style="text-decoration: none;">  +251-974-29-29-29 </a><br><br>
                    <label class="icons"><img src="images/phone-solid.svg" class="icons"></label>
                    <a href="tel:+251-116-92-20-56" style="text-decoration: none;">  +251-116-92-20-56</a><br><br>
                    <label class="icons"><img src="images/envelope-regular.svg" class="icons"></label>
                    <a href="bookingform.html" style="text-decoration: none;">  book@haileresorts.com</a><br><br>
                    <label class="icons"><img src="images/hotel-solid.svg" class="icons"></label>
                    <a href="https://en.wikipedia.org/wiki/Haile_Resorts" style="text-decoration: none;"> <i class="fas fa-map"></i> Haile Resorts, Ethiopia </a><br><br>
                </dv>
            </div>
            <div class="box">
                <h3>Extra links</h3>
                <a href="https://www.orbitz.com/Adama-Hotels-Haile-Resort-Adama.h66819172.Hotel-Information" style="text-decoration: none;"> Haile resort, Adama</a><br><br>
                <a href="https://www.infotel.co.uk/hotels/ethiopia/shashamane/haile-resort-shashemene" style="text-decoration: none;">  Haile resort, Shashamene</a><br><br>
                <a href="https://www.booking.com/hotel/et/haile-grand-addis-ababa.en-gb.html" style="text-decoration: none;">  Haile resort, Addis Ababa</a><br><br>
                <a href="https://www.haileresorts.com/gondar-resort/" style="text-decoration: none;"> Haile resort, Gonder</a><br><br>
                <a href="https://www.booking.com/hotel/et/haile-resort-ziway-batu.en-gb.html" style="text-decoration: none;">  Haile resort, Batu</a><br><br>
            </div>
            <div class="box">
                <h3>Social Media Links</h3>
                <label class="icons"><img src="images/facebook.svg" class="icons"></label>
                <a href="https://www.facebook.com/Hailehotelsandresorts/" style="text-decoration: none;">Facebook</a><br><br>
                <label class="icons"><img src="images/instagram.svg" class="icons"></label>
                <a href="https://www.instagram.com/hailehotelsandresorts/?hl=en" style="text-decoration: none;">Instagram</a><br><br>
                <label class="icons"><img src="images/twitter.svg" class="icons"></label>
                <a href="https://twitter.com/Haileresort" style="text-decoration: none;">Twitter</a><br><br>
                <label class="icons"><img src="images/pinterest.svg" class="icons"></label>
                <a href="https://www.pinterest.com/pin/761812093211588909/" style="text-decoration: none;">Interest</a><br><br>
            </div>
        </div>
</body>

</html>