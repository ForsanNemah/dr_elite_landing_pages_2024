<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Places Search Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>

<div class="container mt-5">
    <h2>Search Places</h2>
    <form action="index.php" method="POST">
        <!-- Latitude Input -->
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Enter Latitude" value="26.29512108585685" required>
        </div>



     


        <!-- Longitude Input -->
        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Enter Longitude" value="50.20409725411967" required>
        </div>



        <div class="form-group">
            <label for="radius">Radius (meters):</label>
            <input type="number" class="form-control" id="radius" name="radius" value="50000" required>
        </div>

        


        <div class="form-group">
            <label for="radius">Keyword</label>
            <input type="text" class="form-control" id="radius" name="keyword" value="medical center" required>
        </div>
        <!-- Type Select (Categories) -->

<!-- 
        <div class="form-group">
            <label for="type">Select Place Type</label>
            <select class="form-control select2" id="type" name="keyword" required>
                <option value="">-- Select a Place Type --</option>
                <option value="employment_agency">employment agency </option>
                <option value="accounting">Accounting</option>
                <option value="Recruitment">Recruitment</option>
                <option value="marketing_agency">Marketing agency</option>
                <option value="airport">Airport</option>
                <option value="amusement_park">Amusement Park</option>
                <option value="aquarium">Aquarium</option>
                <option value="art_gallery">Art Gallery</option>
                <option value="atm">ATM</option>
                <option value="bakery">Bakery</option>
                <option value="bank">Bank</option>
                <option value="bar">Bar</option>
                <option value="beauty_salon">Beauty Salon</option>
                <option value="bicycle_store">Bicycle Store</option>
                <option value="book_store">Book Store</option>
                <option value="bowling_alley">Bowling Alley</option>
                <option value="bus_station">Bus Station</option>
                <option value="cafe">Cafe</option>
                <option value="campground">Campground</option>
                <option value="car_dealer">Car Dealer</option>
                <option value="car_rental">Car Rental</option>
                <option value="car_repair">Car Repair</option>
                <option value="car_wash">Car Wash</option>
                <option value="casino">Casino</option>
                <option value="cemetery">Cemetery</option>
                <option value="church">Church</option>
                <option value="city_hall">City Hall</option>
                <option value="clothing_store">Clothing Store</option>
                <option value="convenience_store">Convenience Store</option>
                <option value="courthouse">Courthouse</option>
                <option value="dentist">Dentist</option>
                <option value="department_store">Department Store</option>
                <option value="doctor">Doctor</option>
                <option value="electrician">Electrician</option>
                <option value="electronics_store">Electronics Store</option>
                <option value="embassy">Embassy</option>
                <option value="fire_station">Fire Station</option>
                <option value="florist">Florist</option>
                <option value="funeral_home">Funeral Home</option>
                <option value="furniture_store">Furniture Store</option>
                <option value="gas_station">Gas Station</option>
                <option value="gym">Gym</option>
                <option value="hair_care">Hair Care</option>
                <option value="hardware_store">Hardware Store</option>
                <option value="hindu_temple">Hindu Temple</option>
                <option value="hospital">Hospital</option>
                <option value="insurance_agency">Insurance Agency</option>
                <option value="jewelry_store">Jewelry Store</option>
                <option value="laundry">Laundry</option>
                <option value="lawyer">Lawyer</option>
                <option value="library">Library</option>
                <option value="light_rail_station">Light Rail Station</option>
                <option value="liquor_store">Liquor Store</option>
                <option value="local_government_office">Local Government Office</option>
                <option value="locksmith">Locksmith</option>
                <option value="lodging">Lodging</option>
                <option value="meal_delivery">Meal Delivery</option>
                <option value="meal_takeaway">Meal Takeaway</option>
                <option value="mosque">Mosque</option>
                <option value="movie_rental">Movie Rental</option>
                <option value="movie_theater">Movie Theater</option>
                <option value="moving_company">Moving Company</option>
                <option value="museum">Museum</option>
                <option value="night_club">Night Club</option>
                <option value="park">Park</option>
                <option value="parking">Parking</option>
                <option value="pet_store">Pet Store</option>
                <option value="pharmacy">Pharmacy</option>
                <option value="physiotherapist">Physiotherapist</option>
                <option value="plumber">Plumber</option>
                <option value="police">Police</option>
                <option value="post_office">Post Office</option>
                <option value="real_estate_agency">Real Estate Agency</option>
                <option value="restaurant">Restaurant</option>
                <option value="roofing_contractor">Roofing Contractor</option>
                <option value="rv_park">RV Park</option>
                <option value="school">School</option>
                <option value="secondary_school">Secondary School</option>
                <option value="shoe_store">Shoe Store</option>
                <option value="shopping_mall">Shopping Mall</option>
                <option value="spa">Spa</option>
                <option value="stadium">Stadium</option>
                <option value="storage">Storage</option>
                <option value="store">Store</option>
                <option value="subway_station">Subway Station</option>
                <option value="supermarket">Supermarket</option>
                <option value="synagogue">Synagogue</option>
                <option value="taxi_stand">Taxi Stand</option>
                <option value="tourist_attraction">Tourist Attraction</option>
                <option value="train_station">Train Station</option>
                <option value="transit_station">Transit Station</option>
                <option value="travel_agency">Travel Agency</option>
                <option value="university">University</option>
                <option value="veterinary_care">Veterinary Care</option>
                <option value="zoo">Zoo</option>
            </select>
        </div> -->

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Search Places</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Initialize Select2 -->
<script>
    $(document).ready(function() {
        $('.select2').select2({
            width: '100%' // Make it responsive
        });
    });
</script>

</body>
</html>
