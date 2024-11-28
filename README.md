## xdebug sample project

This is a project that I got working with xdebug locally. 

Here is a brief overview of the steps that I took:

- Install php 8.3, as this is the latest php version that is compatible with the latest version of xdebug and the latest Laravel version (nothing for php 8.4 yet). 
- Update composer and the laravel installer (haven't updated my local things in a while!), as well as use the latest stable version of node.
- Install pecl as well as a few other requirements that were listed on the xdebug website. This was said to be the best way to install xdebug.
- Add some lines at the end of my /etc/php/8.3/cli/php.ini file pertaining to xdebug.
- Set up the new Laravel project- generate the application key, run the migrations, install npm and composer dependencies.
- Go into VSCode and select the debugger from the command console. From here, set up the launch.json file. 
- Actually set a breakpoint on my application and refresh localhost in the browser.
- At this point debugging works! You can see the value of a variable at different times in the execution of the code! Absolutely incredible! 

- Side notes: updated the project to require php 8.3 or higher. This should actually be JUST php 8.3, since php 8.4 probably won't work well with xdebug. 

## Next steps

Getting closer to a real-world example, additional networking configuration will be required. Sail will probably abstract out a lot of the above steps. 
