#sPHPf (Simple PHP Framework)
### Making your life simple and better.

sPHPf is a PHP 5.3 based framework that allows you to initiate a fast developement
to whatever application you're interested using my personal view of MVC implementation.

The point features of this framework is the use of the Twig template manager and RedBean database
management. A good feature is also that due to it's simplicity you can always
switch between other template engines or database engines in an easy way.

You can obviously see more information of this framework in the webpage.
http://sphpf.coldstarstudios.com

##TODO

- Security improvements
- Session control
- Forms validation

##Changelog

v 1.1.0

- Added support for different upload checks in the application.

- Added support for sqlite database type.

- Changed the main test page title.

- checker.php corrected to allow different checks on install.

- Changed the location of the framework files to coldstarstudios\framework namespace.

- Added default favicon.

- Added two interfaces for coldstarstudios\framework\Application and Response.

- Changed the name Loader.php to Application.php

- Added an example vendor.

- Now you can enter directly to /install folder to check if the installation is fine.

v 1.0.1

- Added empty index.html in each resource folder.

- Added cache/ folder out of gitignore but without any contents.

- Added production on/off in config. (Shows errors when something fails or not)

- Error control is in the new Error class.

- Added an error in order to know if cache folder is writable or not.

- Added check-readyness script into the install folder to know if you're ready to use sPHPf.

v 1.0.0

- First version

##License

Please refer to license.txt

Twig, RedBean and Spyc are used by sPHPf but it's not maintained or builded by us. Please
refer to the LICENSE file inside each source code folders or in the code itself.