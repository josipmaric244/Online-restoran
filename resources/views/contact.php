<!DOCTYPE html>
<html>
<title>Online Restoran</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    body {font-family: "Times New Roman", Georgia, Serif;}
    h1, h2, h3, h4, h5, h6 {
        font-family: "Playfair Display";
        letter-spacing: 5px;
    }
</style>
<body>

<div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
        <a href="/" class="w3-bar-item w3-button">No Name Restoran</a>
        <div class="w3-right w3-hide-small">
            <a href="about-us" class="w3-bar-item w3-button">O nama</a>
            <a href="foods" class="w3-bar-item w3-button">Meni</a>
            <a href="register" class="w3-bar-item w3-button">Registracija</a>
            <a href="contact" class="w3-bar-item w3-button">Kontakt</a>
        </div>
    </div>
</div>

</header>

<div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Catering Service, 42nd Living St, 43043 New York, NY</b></p>
    <p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People"></p>
        <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
        <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
</div>

</div>

<footer class="w3-center w3-light-grey w3-padding-32">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
