# WordPress HP Cloud CDN Plugin (Alpha)
WordPress HP Cloud CDN or OpenStack Shell Plugin Adds a Web Shell to the instance running WordPress to upload the objects to a container and run all OpenStack Python Client Commands. Compatible With All OpenStack installations except setups which do not support Python Client Tools.

USE a TAGGED Version to install inside WordPress Plugin.

This is an Alpha release.
This is release bears no credit as it is for testing vulnerabilities. All credits will be given. 
This does not uses the PHP library.
This uses OpenStack Python Clients.
This is not for the newbies. Mnimum idea about shell, OpenStack etc. is needed. It is a beutiful way to invite hacking attempts if used by a noob who has ssh access. 

Visit our website https://thecustomizewindows.com/ > Cloud Computing to see the latest posts about it. 

You need a shell access to remane the dot file `.index.php` to `index.php` and chgrp rightly. You need to uncomment the user and password in `index.php` file, use tight username-password combo using vim or nano to activate it. The console will be located at `your-domain.tld/wp-content/plugins/WordPress-HP-Cloud-CDN-Plugin-0.9/index.php`. 

You need to install Python Swift Client on the instance but no need to configure the `bash profile` file. To run `swidt list`, you need to run command with this format :

`swift --os-auth-url https://region-b.geo-1.identity.hpcloudsvc.com:35357/v2.0/ --os-tenant-name tenant --os-username user --os-password password list`

https://region-b.geo-1.identity.hpcloudsvc.com:35357/v2.0/ is for HP Cloud. Change `tenant`, `user`, `password` to real values. 

Other docs will match with Official doc - http://docs.openstack.org/cli-reference/content/swiftclient_commands.html

WordPress has a Plugin editor located at `domain.tld/wp-admin/plugin-editor.php` ; WE SUGGEST TO COMMENT OUT THE USER AND PASSWORD TO MAKE THE SHELL UNUSABLE AT `your-domain.tld/wp-content/plugins/WordPress-HP-Cloud-CDN-Plugin-0.9/index.php` WHEN YOU ARE NOT USING.

Sadly, it has a higher privilage now! You can factually run `apt-get update`! We will limit the access level to OpenStack specific commands only. 


