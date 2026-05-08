# Ryan's Archive
Music archive project
by Ryan J. Brady
5/6/2026

## Overview

Ryan's Archive is a collection of music, separated by genre, displayed in an HTML document with
CSS styling and added functionality thorugh JavaScript and PHP. Ryan's Archive
currently displays 12 albums, each one clickable which displays the album cover,
artist and album name, description, release date, and tracklist. PHP allows
users to submit album recommendations which are kept in recommendations.txt for
review and addition to the website. Each album displayed on the page is draggable
to allow for genre re-classification, done through JavaScript.

## Technologies Used

Ryan's Archive implements HTML (ryansArchive.html) for the text and image content of the index page as
well as each album page ("albums" and "images" directories). musicView.css contains the styling content
for each of these pages, providing flexbox functionality to each genre box. Each album is a flexbox card,
and is draggable via the dragdrop.js file. dragdrop.js contains code for the functions dragStartHandler,
dragOverHandler, and dropHandler. PHP forms allows for input of text fields for album name and artist name,
so that users can submit album recommendations to recommendations.txt. This is done through the recommend.php
file.

## How to Use

To run this project, download all files to a folder. This folder must be moved to the C: -> xampp -> htdocs folder
in order to use PHP functionality. Run Apache in the XAMPP Control Panel and open ryansArchive.html. Try clicking
each album to see description, release date, cover, name, and tracklist. Try dragging albums from one genre to another.
Type an album name and artist name in the "Album Name" and "Artist Name" text fields at the bottom of the page. Click
"Recommend It!" and see the PHP response. Check "recommendations.txt" to ensure that your recommendation has been 
saved.
