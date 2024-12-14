Website aspects completed:
- Home Page 
- About Me Page
- Art Gallery
- HTML CSS Javascript for respective files
- Nav links properly + Instagram
- Connecting PHP to MySQL to process form information from commission requests
- Website Responsiveness + Errors

HOW TO BOOT UP WEBSITE:
Hello! While the link on GitHub provides a static version of my website,
 I set up a way to process the commission form using XAMPP. Here are some instructions: 
 (phpMyAdmin login: user, password: website)

1. Download and install XAMPP (https://www.apachefriends.org).
2. Start the Apache and MySQL services. (Both should glow green.)
3. Place the project folder (Comms_Website) in the "htdocs" directory (located in the XAMPP installation directory).
4. Create a new database using phpMyAdmin with the name 'art_commissions'.
5. Import the information from 'art_commissions.sql' file into the database.
6. Open the project by navigating to http://localhost/Comms_Website in your browser.
7. Test the form submission. An order confirmation will be displayed.
8. There should be a new data entry in phpMyAdmin in the art_commissions database. 