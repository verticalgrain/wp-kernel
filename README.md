# Dossier Creative 

## WP Kernel

WP Kernel is the boilerplate for Wordpress web projects at Dossier. 

WP Kernel includes:
* Gulp
* Browsersync for auto-reloading the browser during development
* SCSS with autoprefixer, and CSS minification
* JS concatenation + uglification
* Modernizr builder (Note: by default modernizr is commented out in index.html)

To use:
* If not already installed, install [Node and NPM](https://nodejs.org/en/download/)
* In terminal, navigate to the root of the kernel project and run `npm install`
* run `gulp`

After running `gulp` a browser window should open at localhost:3001. Saving a CSS, JS or HTML file should automatically refresh the browser.