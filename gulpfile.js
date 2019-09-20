const gulp = require('gulp');
const uglify = require('gulp-uglify');
const sass = require('gulp-sass');
const concatjs = require('gulp-concat');
const browserSync = require('browser-sync').create();

/*
 --- Gulp Top Level Functions ---
   gulp.task - Define Tasks
   gulp.src - Point ToFiles To Use
   gulp.dest - Points To Folder To Output
   gulp.watch - Watch Files And Folder To Changes
   */


// Log Meassages
gulp.task('message',function(){
	return console.log('Gulp is running....');
});

// Compile HTML
gulp.task('copyhtml',function(){
	gulp.src('src/*.html')
	.pipe(gulp.dest('dist'));
});

// Minify JS
gulp.task('minify',function(){
	gulp.src('src/js/*.js')
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'));
});

// Compile SASS
gulp.task('sass',function(){
	return gulp.src('src/sass/*.scss')
	.pipe(sass())
	.pipe(sass().on('error',sass.logError))
	.pipe(gulp.dest('dist/css'))
	.pipe(browserSync.stream());
});

// Concat-js
gulp.task('concat-js',function(){
	return gulp.src('src/js/*.js')
	.pipe(concatjs('main.js'))
	.pipe(uglify())
	.pipe(gulp.dest('dist/js'))
	.pipe(browserSync.stream());

});

// Browser-sync
// Static Server + watching scss/html files
	gulp.task('browser-sync',function() {
		browserSync.init({
			proxy: 'http://localhost/gulpexapp/'
		});
		gulp.watch('src/sass/*.scss',['sass']);
		gulp.watch('src/js/*.js',['concat-js']);
		gulp.watch("src/*.html").on('change', browserSync.reload);
		gulp.watch("src/js/*.js").on('change', browserSync.reload);
	});
// Default
/*gulp.task('default',['copyhtml','sass','message','scripts']);*/
gulp.task('default',['message','browser-sync']);

/*// Watch
gulp.task('watch',function(){
	gulp.watch('src/js/*.js',['scripts']);
	gulp.watch('src/sass/*.scss',['sass']);
	gulp.watch('src/*.html',['copyhtml']);
});*/