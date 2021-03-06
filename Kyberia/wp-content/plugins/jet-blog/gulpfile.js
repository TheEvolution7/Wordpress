'use strict';

let gulp            = require('gulp'),
	rename          = require('gulp-rename'),
	notify          = require('gulp-notify'),
	autoprefixer    = require('gulp-autoprefixer'),
	sass            = require('gulp-sass'),
	uglify          = require('gulp-uglify'),
	plumber         = require('gulp-plumber'),
	checktextdomain = require('gulp-checktextdomain');

//frontend
gulp.task('jet-blog', () => {
	return gulp.src('./assets/scss/jet-blog.scss')
		.pipe(
			plumber( {
				errorHandler: function ( error ) {
					console.log('=================ERROR=================');
					console.log(error.message);
					this.emit( 'end' );
				}
			})
		)
		.pipe(sass( { outputStyle: 'compressed' } ))
		.pipe(autoprefixer({
				browsers: ['last 10 versions'],
				cascade: false
		}))

		.pipe(rename('jet-blog.css'))
		.pipe(gulp.dest('./assets/css/'))
		.pipe(notify('Compile Sass Done!'));
});

gulp.task('jet-blog-editor', () => {
	return gulp.src('./assets/scss/editor.scss')
		.pipe(
			plumber( {
				errorHandler: function ( error ) {
					console.log('=================ERROR=================');
					console.log(error.message);
					this.emit( 'end' );
				}
			})
		)
		.pipe(sass( { outputStyle: 'compressed' } ))
		.pipe(autoprefixer({
			browsers: ['last 10 versions'],
			cascade: false
		}))

		.pipe(rename('editor.css'))
		.pipe(gulp.dest('./assets/css/'))
		.pipe(notify('Compile Sass Done!'));
});

gulp.task( 'jet-blog-admin', () => {
	return gulp.src( './assets/scss/admin.scss' )
		.pipe(
			plumber( {
				errorHandler: function( error ) {
					console.log( '=================ERROR=================' );
					console.log( error.message );
					this.emit( 'end' );
				}
			} )
		)
		.pipe( sass( { outputStyle: 'compressed' } ) )
		.pipe( autoprefixer( {
			browsers: ['last 10 versions'],
			cascade:  false
		} ) )

		.pipe( rename( 'admin.css' ) )
		.pipe( gulp.dest( './assets/css/' ) )
		.pipe( notify( 'Compile Sass Done!' ) );
});

gulp.task('jet-blog-rtl', () => {
	return gulp.src('./assets/scss/jet-blog-rtl.scss')
		.pipe(
			plumber( {
				errorHandler: function ( error ) {
					console.log('=================ERROR=================');
					console.log(error.message);
					this.emit( 'end' );
				}
			})
		)
		.pipe(sass( { outputStyle: 'compressed' } ))
		.pipe(autoprefixer({
			browsers: ['last 10 versions'],
			cascade: false
		}))

		.pipe(rename('jet-blog-rtl.css'))
		.pipe(gulp.dest('./assets/css/'))
		.pipe(notify('Compile Sass Done!'));
});

gulp.task( 'jet-blog-icons', () => {
	return gulp.src( './assets/scss/jet-blog-icons.scss' )
		.pipe(
			plumber( {
				errorHandler: function( error ) {
					console.log( '=================ERROR=================' );
					console.log( error.message );
					this.emit( 'end' );
				}
			} )
		)
		.pipe( sass( { outputStyle: 'compressed' } ) )
		.pipe( autoprefixer( {
			browsers: ['last 10 versions'],
			cascade:  false
		} ) )

		.pipe( rename( 'jet-blog-icons.css' ) )
		.pipe( gulp.dest( './assets/css/' ) )
		.pipe( notify( 'Compile Sass Done!' ) );
} );

// Minify JS
gulp.task( 'jet-blog-js-minify', function() {
	return gulp.src( './assets/js/jet-blog.js' )
		.pipe( uglify() )
		.pipe( rename( { extname: '.min.js' } ) )
		.pipe( gulp.dest( './assets/js/' ) )
		.pipe( notify( 'js Minify Done!' ) );
} );

//watch
gulp.task('watch', () => {
	gulp.watch('./assets/scss/**', gulp.series( ...['jet-blog', 'jet-blog-editor', 'jet-blog-rtl', 'jet-blog-icons'] ) );
	gulp.watch('./assets/scss/admin.scss', gulp.series( ...['jet-blog-admin'] ) );

	gulp.watch( './assets/js/jet-blog.js', gulp.series( ...['jet-blog-js-minify'] ) );
});

gulp.task( 'checktextdomain', () => {
	return gulp.src( ['**/*.php', '!cherry-framework/**/*.php'] )
		.pipe( checktextdomain( {
			text_domain: 'jet-blog',
			keywords:    [
				'__:1,2d',
				'_e:1,2d',
				'_x:1,2c,3d',
				'esc_html__:1,2d',
				'esc_html_e:1,2d',
				'esc_html_x:1,2c,3d',
				'esc_attr__:1,2d',
				'esc_attr_e:1,2d',
				'esc_attr_x:1,2c,3d',
				'_ex:1,2c,3d',
				'_n:1,2,4d',
				'_nx:1,2,4c,5d',
				'_n_noop:1,2,3d',
				'_nx_noop:1,2,3c,4d',
				'translate_nooped_plural:1,2c,3d'
			]
		} ) );
} );
