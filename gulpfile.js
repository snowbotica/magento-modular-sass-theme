var gulp = require('gulp')
,   plumber = require('gulp-plumber')
,   sass = require('gulp-sass')
,   sourcemaps = require('gulp-sourcemaps')
,   prefix = require('gulp-autoprefixer')
,   concat = require('gulp-concat')
,   order = require('gulp-order')

// Set the Magento theme name
var themeTemplate = 'magento-foundation-sass'

var path = {
	scss       : 'skin/frontend/'+themeTemplate+'/default/scss',
	// js         : 'public/bower_components',
	stylesheet : 'skin/frontend/'+themeTemplate+'/default/stylesheet'
}
// set up default routing for AngularBonfire
var config = {
	// jsGlobOrder: [ // You can add your own dependancies here as you build out your app
	//     path.assets  +"/angular/angular.js",
	//     // path.assets  +"/angular-ui/build/angular-ui.js",
	//     path.assets  +"/angular-ui-router.js",
	//     path.assets  +"/angular-animate/angular-animate.js",
	//     path.assets  +"/ng-file-upload/ng-file-upload-all.js",
	//     path.assets  +"/angular-sanitize/angular-sanitize.js",
	//     path.assets  +"/jquery-simple-weather.js",
	//     // path.assets  +"/showdown/src/showdown.js",
	//     // path.assets  +"/showdown/src/ng-showdown.js",
	//     // path.assets  +"/angular-markdown-directive/markdown.js",
	//     path.assets  +"/marked/lib/marked.js",
	//     path.assets  +"/angular-marked/angular-marked.js",
 //    	path.template+"/ng/angular-bonfire.js",
 //    	path.template+"/ng/**.js",
 //    	path.modules +"/ng/**.js",
	// ],
	sassGlobOrder: [
		path.scss+'/foundation.scss', 
		path.scss+'/style.scss', 
	]
}
		// './'+path.assets  +'/bootstrap-sass-official/assets/stylesheets/**.*',
// Require all tasks in gulp/tasks, including subfolders
// requireDir('gulp/tasks', { recurse: true })

gulp.task('sass', function() {
	// accepts an array of paths, with a second argument being an object in which the base path is set
	// currently set to include all files from each module, and then add compiled manifest
	gulp.src(config.sassGlobOrder, {base: './'})
	// This give us error handling, it fixes pipes
	.pipe(plumber())
	// Sass command with argument object
	.pipe(sass({
		errLogToConsole: true}
	))
	// Automatically generates vendor prefixes
	.pipe(prefix('last 2 version', '> 1%', 'ie 8', 'ie 9'))
	.pipe(concat('style.css'))
	.pipe(gulp.dest(path.stylesheet));
})


// gulp.task('ng-bonfire', function() {
// 	// accepts an array of paths, with a second argument being an object in which the base path is set
// 	// currently set to include all files from each module, and then add compiled manifest
// 	gulp.src(config.jsGlobOrder, {base: './'})
// 	// This give us error handling, it fixes pipes
// 	.pipe(plumber())
// 	// Stops gulp from ordering them alphabetically
// 	.pipe(order(config.jsGlobOrder)) //, { base: './' }))
// 	// Automatically generates vendor prefixes
// 	.pipe(concat('angular-bonfire.js'))
// 	.pipe(gulp.dest(path.template + '/js'));
// })
        // .pipe(ngAnnotate())
        // .pipe(uglify())

// Watch scss folder for changes
gulp.task('watch', function() {
  // Watches the sass folders for all .scss and .sass files
  // If any file changes, run the sass task
  // gulp.watch([path.modules+'/sass/**.*', path.template+'/sass/**.*'], ['sass'])
  // If any file changes, run the ng-bonfire task
  gulp.watch(
  	[path.scss+'/**/**.*'],
  	['sass']
  	)
  	// path.modules+'/ng/**.*', 
  	// path.template+'/ng/**.*'], 
  	// ['ng-bonfire'])
})

// Creating a default task
gulp.task('default', [
	// 'ng-bonfire', 
	'sass', 
	'watch']);