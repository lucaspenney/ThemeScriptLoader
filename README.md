Theme Script Loader
==============

Theme Script Loader lets you specify script files inside of WordPress pages/posts to be inserted from your active theme's 'scripts' directory.

To load a script, insert the themescript shortcode specifying the name of the file, including the .js file extension.

	[themescript name=myscript.js]

This will load the file named myscript.js in your currently active theme's 'scripts' directory (this directory does not exist by default, you may have to create it). 