Simple Conference Web App

https://github.com/nilesjohnson/simple-conference

version 0.0

September 2015

Copyright (C) 2015 Niles Johnson <http://www.nilesjohnson.net>

Licensed under GNU GPL v.3 or later.  See LICENSE.txt for a copy of
the license.

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.


DESCRIPTION
-----------

Simple Conference is a web application for a lightweight conference website.
Its basic functions are:

* Static page(s) to display conference info.
* An interface (Create/Read/Update/Display) for participant registration.
* Admin interface for viewing and sorting additional details of registrants.

The application is based on the Cake PHP framework (version 2.4.5):  http://cakephp.org/


CONFIGURATION
-------------

Begin by cloning the git repository, e.g:

    git clone https://github.com/nilesjohnson/simple-conference.git

If you don't yet have cake available, clone that too:

    git clone https://github.com/cakephp/cakephp.git cakephp

Then there are five basic configuration steps necessary to get the app running:

1. Point to a copy of cakephp library:  Put a copy (or symbolic link) of 
'cakephp/lib' at 'simple-conference/Lib/cakephp-lib'

    ln -s /path/to/cakephp/lib /path/to/simple-conference/Lib/cakephp-lib

1. Create a private configuration file by copying the default one:

    cd simple-conference/Config/
    cp conflistConfigDefault.php conflistConfigPrivate.php

1. Set up a database and put the connection information 
(user, password, etc.) in the private configuration file from step 2.

1. Update the rest of the settings in the private configuration file 
from step 2.

1. Create the necessary database table.  This can be done with the following MySQL commands (see `db_create_2.php`):


        CREATE TABLE registrants (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        date DATE,
        edit_key VARCHAR(10),
        first_name VARCHAR(200),
        last_name VARCHAR(200),
        email VARCHAR(200),
        affiliation VARCHAR(200),
        webpage VARCHAR(400),
        request_pub TINYINT(1),
        request_fund TINYINT(1),
        request_a TINYINT(1),
        request_b TINYINT(1),
        request_c TINYINT(1),
        comment TEXT
        );




ADMINISTRATION
--------------

Site administrators receive a copy of every confirmation email.  If this is lost or the edit keys there are invalid for some reason, you can get the edit/delete url for registrant number `N` as follows:  Navigate to `registrants/admin/N` and use the admin key from your private config file.  You can also use registrant-specific edit key there.

