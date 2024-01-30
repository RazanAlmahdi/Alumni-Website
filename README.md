# AlumniWebsite

## Purpose
<!--Purpose of the project-->
This poject is a website dedicated for Effat University Alumni Department. 

<img src="https://github.com/AichaSidiya/AlumniWebsite/blob/main/demoAlumni.gif"/>

<!--Header 2 description of the project-->
## Description

<p style="text-align: justify;"> This project includes a full documentation and feasability study provided in the repisotory. The project also includes a requirenment analysis document with multiple UML diagrams and test cases. The aim of this project is to  digitise the process for storing alumni information, and the clearance process.</p>

## Enhancement
* Add notification system for when clearance is sybmitted and verified.
* Validate all forms before submitting to the database.
* Link alumni profiles to their linked in.
* Integrate the website with Effat website.

<!--Header 3 front end-->
## FRONT-END

### Website Layout

#### Home
* Main activities of the alumni department. 
* Signing up or logging in.
* Contact the alumni department. 
##### Sign up 
##### Log In
###### Profile
* Edit/Delete option.
* **Note**: admin can't delete her account she can only update it.
* The profile also includes information about experience and community service done by the alumni.

###### Add Activity
* Alumnis can add new experiences by filling this form.
#### Edit Activity

#### About Us
* Breif about the alumni department, and their mission, vision and objective with a "Be Part of Our Family" button that will take her to the sign up form. 

#### Alumni List
* A list of all almni with a **more** button for more information about them. 

#### Clearance
* Clearance form.
* Admin can view alumni clearance and verify it and add comments
##### Edit Clearance
##### View Clearance 
* Alumni can view if his clearance was verified and if their is any comments on it

##### View Messages
* Admin can view messages sent through contact form

## Back-END

We have 4 tables in our database

### Members
* Includes all the member information extracted from the sign up form.
### Clearance
* Includes all the clearance information exctracted from the clearance form.
### Activity
* Includes all the activity information exctracted from the add activity form.
### Messages
* Includes the message and the the contact information of the user who left the message.


## Files


### Documentation

* Feasability study
* Requiremnet Analysis

### CSS

* ourstyle.css
* alumniProfile.css
* clubMembers.css
* styles.css
* contactUs.css


### Javascript

* myScript.js
* contact.js
* logIn
* scripts.js

<!--Header 3 installation and launching the project-->
## Intallation

### Dependencies

<!--Link to install the latest version of g++-->
* This project is hosted on xampp and phpmyadmin. You will need to download xxamp to see it. a link is provided.
* [xampp](https://www.apachefriends.org/download.html)

<!--Header 3 installation and launching the project-->
## Installation
* Clone the repository to your local machine:
```
git clone https://github.com/AichaSidiya/AlumniWebsite.git
``` 
* Install [xampp](https://www.apachefriends.org/download.html)
* Import the alumnidatabase.sql file to [phpmyadmin](localhost/phpmyadmin/)
* Update the **databaseConnection.php** to match your database crendentials.
* Host the files on a web server and access the website using your preferred browser.


## Authors
<!-- The contributors to the project-->
* [Aicha Sidiya](https://github.com/AichaSidiya)
* [Hanin AlZaher](https://github.com/hanin-az)
* [Razan AlMahdi](https://github.com/RazanAlmahdi)
* Layal Ghiryani


## Acknowledgments
<!-- Insparation files, codes, and general refrences used in writing the code of the project-->
* [BootStrap used](https://startbootstrap.com/previews/agency)
* [CSS grid style](https://stackoverflow.com/questions/47587892/how-does-css-grid-layout-works)
* [Readme Template](https://gist.github.com/DomPizzie/7a5ff55ffa9081f2de27c315f5018afc)
* [Readme Content Table](https://ecotrust-canada.github.io/markdown-toc/)
