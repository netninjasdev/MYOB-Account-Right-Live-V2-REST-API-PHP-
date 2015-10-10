**MYOB Account Right Live V2 REST API PHP**

**Get started**

Small sample PHP Class which can be used to connect and communicate with the MYOB AccountRightV2 RESTful API.

This script can Authorise your application and obtain oauth access and refresh tokens, select your Company File and make select items from the Inventory, Contacts and Sales (Invoices) in your MYOB Company File.

Tokens are saved to a MySQL database table where they are retrieved and updated.  Refresh tokens are used to update the access tokens once they expire.

**Installation**

 1. Create MySQL database
 2. Set database access details in /inc/includes.inc.php
 3. Set Myob, developer and company file access details in config.php
 4. Run start_oauth.php to initially authorise your application via my.Myob.  This will save the access token and refresh token to the database.  The tokens will automatically be refreshed after this first run


**Examples**

Examples for usage are provided in the index page, this includes get, set and delete for Inventory, Contacts and Sales Invoices / Invoice Line Items.  The examples also include how to filter contacts and items.

This class is very small and is not finalised for production use. If you want to contribute to the class please make a pull request and I'll be happy to merge.


