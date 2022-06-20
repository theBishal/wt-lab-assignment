### How I install Xampp at Ubuntu
* From Google I download the installer of xampp file
* [Click Here to download xampp file](https://www.apachefriends.org/index.html)
* After, That i install the xampp with the help of Terminal using following command. <br>
  #### Making the installation package executable
  1) cd /home/[username]/Downloads  <br>
  2) chmod 755 [package name] <br>
  3) chmod 755 xampp-linux-*-installer.run <br>
  ####  Confirm execute permission <br>
  4) ls -l [package name] <br>
  5) ls -l xampp-linux-x64-8.0.3-0-installer.run <br>
  #### Launch the Setup Wizard  <br>
  6) sudo ./[package name] <br>
  #### Work through the graphical setup wizard <br>
  #### After the completetion of graphical setup wizard Launch Xampp through terminal <br>
  7) sudo /opt/lampp/lampp start
  #### To check the xampp sucessfully installed.
  8) Open Browser and type http://localhost
  
  # Terminology <br>
  
  What Can PHP Do?
  * PHP can generate dynamic page content.
  * PHP can create, open, read, write, delete, and close files on the server.
  * PHP can collect form data.
  * PHP can send and receive cookies.
  * PHP can add, delete, modify data in your database.
  * PHP can be used to control user-access.
  * PHP can encrypt data.
  
  Syntax:-
    `<?php
        // PHP code goes here 
    ?>`
  
  echo :- The echo is used to display the output of parameters that are passed to it.
