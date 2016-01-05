<?php
require 'core.php';
if(loggedin())
{
$username=$_SESSION['username'];
$user_id=$_SESSION['user_id'];

?>

<html>
<head>
    <link rel="stylesheet" href="homepage.css">	
</head>
<body style = "margin: 0px"> 
               <?php

include 'header.htm';
?>
    <div id="about">
        
        <h2> Our vision</h2>
            <p>To be the most trusted, respected, valued, and successful bookstore in existence,
               and an unforgettable attribute of the user experience.</p>
        <h2> Our Provision</h2>
            <p>The Bookstore has book sections curated with deep research across genres, enviable 
            venue and ambience, world class amenities in keeping with international trends 
            quickly making it the favourite destination of every city it has expanded its footprint
            to.The bookstore overflows with a treasure trove of books waiting to be discovered 
            making it a universe that inspires people to read even as the brand remains a front runner 
            in the use of state-of-the-art technology nurturing its tradition of enterprise and vision.
            A strong selection of popular fiction and non-fiction, Indian and International, an unsurpassed
            source for illustrated books covering a vast range of topics including Design, Culture, Teens,
            Careers, Electronics, Gadgets, Computers, Cars, Music, Nature, Photography, Art, Architecture, 
            Fashion, Gardening and a wide range of Translations from India and the best of World Literature
            enrich its Book Sections.</p>
        <h2>Our Core Values</h2>
        <ul>
            <li>Community</li>
            <li>Diversity</li>
            <li>Knowledge</li>
            <li>Quality</li>
            <li>Collaboration</li>
            <li>Integrity</li>
            <li>Respect</li>
            <li>Independence</li>
            <li>Trust</li>
        
        </ul> </div>
    
       <?php }
    ?>
	
        </center>
        
	</body>
        </html>