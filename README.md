# Project Title

qr_gen

## Table of Content

-   Project description
-   Features requested
-   Design
-   documentation
-   Figma
-   Data Schema
-   Frameworks used in project
-   Contributors

### Description

A platform that allows users generate QR code
that specifically does something when scanned.

### Features requested

#### User: Unauthenticated

Visit the platform to view basic information about it
View and Interact with the documentation
Register to view more details
No access to use until registered

#### User: Authenticated

Full access to the platform
Allow setting on what should happen when qr is scanned - give at least 2 options
Allow user to download (allow png, jpeg and pdf download format), or share code by email or social media
Allow user save data and come back to it.

### Design

#### Documentation

##### Project Scope

A QR code (quick response code) is a type of two dimensional (2D) barcode consisting of an array of black and white squares that is used to provide easy access to online information through a digital camera on a smartphone or tablet. QR code generator is an online software that is used to generate or create QR codes for storing any digital information. This project aims to make sure QR codes are generated quickly and easily. QR codes let’s you create memorable marketing campaigns with trackable QR codes designed by you, by uploading a file or Link then the generator converts them into a url and embeds the link to the QR code. With QR-Gen we hope to promote interaction, engagement and also create a landing Page after our user Research.

##### PROBLEM STATEMENT

QR codes are used to track product information, and many smartphones include built-in QR scanners. QR codes are used for marketing and advertising by a variety of industries, including restaurants, for product packaging, postal services,banks, libraries, and retail stores.

QR codes are meant to be simple and easy to use that is why it is called “Quick Response” but secondary research has shown that a lot of these QR platforms are difficult and frustrating for new users and they do not allow users to access information instantly. Also, Some of these platforms request for payment before users can generate a QR code.

To solve this, we will create a free QR platform that would give users a smooth experience when they generate QR codes.

The generated QR code can be downloaded as PDF, among other features, and when scanned will take you to the user's website.

##### RESEARCH BACKGROUND.

Currently in the project phase under the Zuri training, user research is being carried out on the project topic assigned to our group as part of the requirement of the programme.

Technological advances brought an easy way to store, access, share and download digital information. The QR (quick response) codes are one of these innovations.

Why type when you can scan?
We aim to design and build a platform that generates a QR code when users upload a link or PDF.
QR codes consist of black modules arranged in a square pattern on a white background, the color of the modules can be customize.
QR codes can be two dimensional, meaning it can be scanned in two directions (horizontal or vertical) or a one dimensional barcode, this requires a more sophisticated reader.
There are two types of QR codes; static and dynamic. The digital information in static QR codes are hard-coded and cannot be changed but in dynamic QR codes, the information can be edited even after the QR code is deployed.For this project,we will be using the Static QR code.

QR_gen is a website that is used to create or generate these QR codes that store digital information. The user upload the PDF file or a link to generate the QR code, which can be shared or downloaded. The user can also save data for download later.

##### Modalities for QR_gen

A. Features for unauthenticated users

1. Landing Page:
   Displaying Basic information about the site- header
   Nav bar
   QR code generator itself etc. 2. Demo button to a page that demonstrates how the QR code works( to allow viewers interact with the documentation)
   “Get more” ( for maybe more design options)button that will lead to
2. An alert which says users would have to sign up before gaining access to the feature.

3. A register/ sign up page

Authenticated Users

1. Full access to the site
2. New dashboard with: a new set of nav bars( just two- url,pdf)
3. A download button that would enable users to share with other platforms such as email or Social Media
4. A page for users to track all their generated codes therefore a “saved” documents folder that they can come back to.

##### User case Scenario

I am a HR manager, I set up my account with the application. Then I paste my LinkedIn link and a QR code is generated for me. I have the option of downloading the code as PNG,JPEG,PDF or sharing code by email or social media.

#### Figma

[figma link to access the design sketch and mood board](https://www.figma.com/file/MU63D4eol1BFrkcQOwnYqD/Qr-Gen?node-id=0%3A1&t=PzYInRi6d6QxAnz7-1)

### Data Schema

[data schema link outlining what we are trying to achieve with this project](https://drawsql.app/teams/gr-gen/diagrams/database-schema)

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
languages used in this project includes 
HTML,CSS,JS,PHP

TOOLS/FRAMEWORK USED INCLUDES
FIGMA,GOGGLEDOC,LARAVEL,DRAWSQL,BOOTSTRAP

Framework/QR Code Implementation
A QR Code software was used and installed on Laravel on the vs studio terminal, the vs studio
is an app used for coding. Laravel is the framework used on vs studio that enabled us
implement every single step and process initiated from the backend.
Laravel also helped ensure everything arranged on the data schema/project structure was
implemented thereby ensuring the right data base structure was achieved.
Link to the QR Code Software used; https://www.simplesoftware.io/#/docs/simple-qrcode
We also made our own Login and Registration files using Laravel MVC structure

# Cockroach_qr_generator

## Getting started

Assuming you've already installed on your machine: PHP (>= 7.0.0), [Laravel](https://laravel.com) and [Composer](https://getcomposer.org)

Clone the repository

```bash
git clone https://github.com/zuri-training/Cockroach_qr_generator.git
```

Switch to the repo folder

```bash
cd Cockroach_qr_generator
```

Install all the dependencies using composer

```bash
composer install
```

Create .env file, copy and paste the content of .env.example to the created .env file and adjust the required configurations accordingly, run the database migrations (**Set the database connection and the mail configuration in .env before migrating**)

```bash
php artisan migrate
```

Generate an an app key for your .env file using

```bash
php artisan key:generate
```

Then launch the server:

```bash
php artisan serve
```

The Laravel sample project is now up and running! Access it at http://127.0.0.1:8000.


      USABILITY TESTING
After properly implementing all neccessary to ensure a very comfortable user experience both on the frontend and backend as well as the product design Users  were able to upload url and pdf files to derive qr codes specifically for their url accounts and pdf files and were also able to go back to saved files on the site and all this done after registration as instructed ,users were also able to most importantly scan the qr codes both for url and pdf ,they also felt totally safe in terms of password input and reset which is a very important part of every website/company

CONCLUSION
The whole project was a great learning experince for us,working as a team was amazing,based on the feedback we concluded that the website is effective and ready.
we are sure our users will have a smooth experince when using the website

                              CONTRIBUTORS
FULL-NAME                                                    
Olalere olalekan khalid                                      
GITHUB-USERNAME
Khalid8789

FULL-NAME 
Adebowale Femi Samson 
GITHUB-USERNAME
afemsonic

FULL-NAME 
Aminu Shaibu 

GITHUB-USERNAME
elameen37
FULL-NAME 
Ligali Sekinat Itunu 
GITHUB-USERNAME
kiinat

FULL-NAME
jeremiah Ezarafe
GITHUB-USERNAME
 Shooga0007
 
FULL-NAME
farouk yusuf abiola                                           
GITHUB-USERNAME
FabioTECH1

Adepoju adeyemi Samuel                                       
GITHUB-USERNAME
Sammydepoj

Omojole aishat eniola                                        
GITHUB-USERNAME
 Omojole
 
 FULL-NAME
Biragbara Baridoo Saro                                       
GITHUB-USERNAME
Sarodcreator

FULL-NAME
zoe frempong 
GITHUB-USERNAME
sakyifrempong

FULL-NAME
faith adeoye  
GITHUB-USERNAME
ephhay1

FULL-NAME
oyetunde adeola antonia
GITHUB-USERNAME
 webathonic
