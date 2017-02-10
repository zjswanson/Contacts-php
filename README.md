# _Contact Lister_

#### _Application to demonstrate routing and templating in php.  Created February 2017._

#### By _**Zach Swanson**_

## Description

_This is a simple application designed to demonstrate several techniques in php using the Silex and framework and Twig templating engine.  The application allows users to input contacts into a list, and can save into the the session superglobal and navigate between several urls to display or edit._

## Application Behaviors
```
Behavior: User enters data into contact forms and clicks submit, app navigates to Add Contact page and displays details of new contact.
Sample Input: name: Zach, phone: 555-555-5000, address: here
Sample Output: Add Contact page shows entry with with: Zach, 555-555-5000, here
```
```
Behavior: User enters data into contact forms on Add Contact page, page displays details of new contact.
Sample Input: name: Sam, phone: 555-555-5001, address: there
Sample Output: Add Contact page shows entry with with: Sam, 555-555-5001, address: there
```
```
Behavior: user clicks home, page displays list of all contacts entered.
Sample Input: click "back to contact list"
Sample Output: navigate to root directory, display list of all previously entered contacts.
```
```
Behavior: user clicks Edit contact list, page navigates to edit confirmation page.
Sample Input: click "edit contact list"
Sample Output: navigate to edit confirmation page.
```
```
Behavior: user clicks Add Contacts, page navigates to Add Contacts page.
Sample Input: click "Add Contacts"
Sample Output: navigate to Add Contacts page.
```
```
Behavior: user clicks Delete All Contacts, page navigates to delete confirmation page.
Sample Input: click "Delete All Contacts"
Sample Output: navigate to delete confirmation page.
```
```
Behavior: user clicks Delete button below a contact, contact is deleted from list.
Sample Input: click delete below "name: Sam, phone: 555-555-5001, address: there".
Sample Output: "name: Sam, phone: 555-555-5001, address: there" is deleted from list.
```
```
Behavior: user clicks Edit button below a contact, page navigates to Edit Contact page with current contact details filled into form.
Sample Input: click edit below "name: Sam, phone: 555-555-5001, address: there".
Sample Output: "name: Sam, phone: 555-555-5001, address: there" is displayed in forms on Edit Contact page
```
```
Behavior: User enters data into contact forms on Edit Contact page, page navigates to Add Contact page and displays details of new contact.
Sample Input: name: Ed, phone: 555-555-5002, address: where?
Sample Output: Add Contact page shows entry with with: Ed, 555-555-5002, address: where?
```
```
Behavior: user clicks "back to home" on Delete Confirmation page, page returns to root and displays empty contact list.
Sample Input: click "back to home"
Sample Output: navigate to root directory, display prompt to enter contacts.
```

## Setup/Installation Requirements

* This application requires the Silex framework and Twig templating engine, as well as the Composer dependency manager.
* To install, make sure that you have composer installed (https://getcomposer.org/), clone this repository from github, and run "composer install" from the project directory in terminal.  This will install the required dependencies in the project directory.
* To run the applicaiton, you will need to run a local server running php in the "web" folder of the project directory (Application was tested usin MAMP: https://www.mamp.info/en/.  Then direct any browser to your local server to run.


## Known Bugs

 _No known bugs.  Modest functionality at best, but it isn't buggy._

## Support and contact details

_Created by Zach Swanson, zach.j.swanson@gmail.com.  No ongoing support planned, but questions or comments are welcome._

## Technologies Used

_Written in Atom text editor, using PHP, Silex, and Twig.  Tested on a local server with MAMP._

### License

*MIT license*

Copyright (c) 2017 **_Zach Swanson_**
