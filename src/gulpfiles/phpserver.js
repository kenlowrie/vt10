/*
** I use this gulpfile to run the PHP app locally in my browser.
** From the root of the project, I type: gulp --gulpfile build/RELTYPE/phpserver.js
*/

var gulp = require('gulp'),
	browserSync = require('browser-sync'),
	php = require('gulp-connect-php'),
	fs = require('fs-extra');

/*
** helper function to allow me to overwrite credential files in the distribution area.
** Any files that need to have credentials put inside them can be copied to the root
** area of the project (where the gulpfile.js and package.json live), and then below
** in the override-auth task, you simply put the names of the files you want copied
** from the root area to the build area. This way, I don't accidentally check in source
** files with hard coded credentials to Github...
*/
function checkForAuthOverride(authFilename) {

	var sourceName = '../../' + authFilename;
	
	try {
		fs.copySync(sourceName, authFilename)
		console.log("Auth override for " + authFilename + " successful!");
	} catch (err) {
		console.error("Autho override for " + authFilename + " failed.\r\n" + err);
	}
}

/*
**  Any files you want to overwrite in the distribution area listed below. See description
** for checkForAuthOverride(<#authFilename#>) above for details.
*/
gulp.task('override-auth', function(){
	checkForAuthOverride('users.logininfo.php');
	checkForAuthOverride('sql.logininfo.php');
});

gulp.task('php', ['override-auth'], function() {
    php.server({}, function () {
        browserSync({ proxy: '127.0.0.1:8000'});
    });
    
    gulp.watch(['*','css/*', 'js/*','images/*','inc/*']).on('change', function () {
        browserSync.reload();
    });
});

gulp.task('default', ['php']);
