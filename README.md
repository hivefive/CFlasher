CFlasher a utility PHP class for creating simple flash messages
==================================
[![Build Status](https://travis-ci.org/hivefive/CFlasher.svg?branch=master)](https://travis-ci.org/hivefive/CFlasher)
License
----------------------------------

This software is free software and carries a MIT license.


Usage 
------------------
The module is written primarily for Anax-MVC, originally written by Mikael Roos. To include the module into your project use:

<code>$di->set('flasher', '\Hivefive\CFlasher\CFlasher');</code>


Use <code>setMessage()</code> for setting the message. The <code>setMessage()</code>method uses two parameters. First the type of flash message. The valid message types are:
'error',
'warning',
'info' and 'success'.
The second parameter is the message you want to send. If left out, it will default to 'This is an info message'.

Use <code>getMessage()</code> to get the message at required place. 

Use <code>clearFlash()</code> to clear the flash message out of the session. 

For styling set the class to the type of the message, then you can style the individual message types. Example in the flashtest.php testpage.

  
Christoffer Bäckström

