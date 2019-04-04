var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var concat = require('gulp-concat');
var gutil = require( 'gulp-util' );
var ftp = require( 'vinyl-ftp' );
var autoprefixer = require('gulp-autoprefixer');
var rigger = require('gulp-rigger');
var imagemin = require('gulp-imagemin');
var connect = require('gulp-connect');
var sourcemaps = require('gulp-sourcemaps');
var cssbeautify = require('gulp-cssbeautify');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');

var notify = require("gulp-notify");

//-----------------------------------configuration----------------------------//
var hostAddress = '213.136.78.41';
var userName = 'divadubainew';
var userPass = '6GVcV{0XPN';
    var localFilesGlob = 'dist/css/**';  
var localFilesGlobHtml = 'dist/html/**';   
var localFilesGlobImage = 'dist/images/**';  
var remoteFolder = '/home/divadubainew/public_html';
var remoteFolderHtml = '/home/divadubainew/public_html/html';
var remoteFolderImage = '/home/divadubainew/public_html/images';

//-----------------------------------path----------------------------//
var  path = {
    build: { //Тут мы укажем куда складывать готовые после сборки файлы
        html: 'dist/html',
        css: 'dist/css',
        image: 'dist/images'
    },
    src: { //Пути откуда брать исходники
        html: 'app/html/*.html',
        scss: 'app/scss/*.scss',
        image: 'app/images/*',
    },
    watch: { //Тут мы укажем, за изменением каких файлов мы хотим наблюдать
        html: 'app/html/**',
        scss: 'app/scss/**',
    },
    clean: './build'
};
// server connect
gulp.task('connect', function() {
  connect.server({
    port: 8888,
    root: 'dist',
    livereload: true
  });
});
// helper function to build an FTP connection based on our configuration
function getFtpConnection() {  
    return ftp.create({
        host: hostAddress,
        user: userName,
        password: userPass,
        parallel: 5,
        log: gutil.log
    });
}
//-----------------------------------image task----------------------------//
gulp.task('compress', function() {
  gulp.src(path.src.image)
  .pipe(imagemin())
  .pipe(gulp.dest(path.build.image))
});

//-----------------------------------html task----------------------------//
gulp.task('html', function () {
    gulp.src(path.src.html) //Выберем файлы по нужному пути
        .pipe(rigger()) //Прогоним через rigger
        .pipe(connect.reload())
        .pipe(gulp.dest(path.build.html)) //Выплюнем их в папку build
});

//-----------------------------------SCSS to CSS----------------------------//
gulp.task('sass', function () {
  return gulp.src(path.src.scss)
    .pipe(sass().on( 'error', notify.onError(
      {
        message: "<%= error.message %>",
        title  : "Sass Error!"
      } )))
    .pipe(autoprefixer({
        browsers: ['last 15 versions'],
        cascade: false
    }))
    .pipe(cssbeautify())
    .pipe(sourcemaps.init())
    /*.pipe(cssmin())*/
    /*.pipe(rename({suffix: '.min'}))*/
    .pipe(connect.reload())
    .pipe(gulp.dest(path.build.css));
});


//-----------------------------------deploy task----------------------------//
// gulp.task('deploy', function() {
//     var conn = getFtpConnection();
//     return gulp.src(localFilesGlob, { base: 'dist/', buffer: false })
//         .pipe( conn.newer( remoteFolder ) ) // only upload newer files 
//         .pipe( conn.dest( remoteFolder ) )
//     ;
// });
// gulp.task('deploy-html', function() {
//     var conn = getFtpConnection();
//     return gulp.src(localFilesGlobHtml, { base: 'dist/', buffer: false })
//         .pipe( conn.newer( remoteFolder ) ) // only upload newer files 
//         .pipe( conn.dest( remoteFolder ) )
//     ;
// });
// gulp.task('deploy-image', function() {
//     var conn = getFtpConnection();
//     return gulp.src(localFilesGlobImage, { base: 'dist/images/', buffer: false })
//         .pipe( conn.newer( remoteFolderImage ) ) // only upload newer files 
//         .pipe( conn.dest( remoteFolderImage ) )
//     ;
// });



//-----------------------------------watch task----------------------------//
gulp.task('sass:watch', function () {
  gulp.watch(path.watch.scss, ['sass']);
});
gulp.task('html:watch', function () {
  gulp.watch(path.watch.html, ['html']);
});
gulp.task('image:watch', function() {
  gulp.watch(path.src.image, ['compress']);
});

//-----------------------------------ftp-deploy-watch----------------------------//
// gulp.task('ftp-deploy-watch', function() {
//     var conn = getFtpConnection();
//     gulp.watch(localFilesGlob)
//     .on('change', function(event) {
//     console.log('Changes detected! Uploading file "' + event.path + '", ' + event.type);
//     return gulp.src( [event.path], { base: 'dist/', buffer: false } )
//     .pipe( conn.newer( remoteFolder ) ) // only upload newer files 
//     .pipe( conn.dest( remoteFolder ) )
//     ;
//     });
// });
// gulp.task('ftp-deploy-watch-html', function() {
//     var conn = getFtpConnection();
//     gulp.watch(localFilesGlobHtml)
//     .on('change', function(event) {
//     console.log('Changes detected! Uploading file "' + event.path + '", ' + event.type);
//     return gulp.src( [event.path], { base: 'dist/html/', buffer: false } )
//     .pipe( conn.newer( remoteFolderHtml ) ) // only upload newer files 
//     .pipe( conn.dest( remoteFolderHtml ) )
//     ;
//     });
// });
// gulp.task('ftp-deploy-watch-image', function() {
//     var conn = getFtpConnection();
//     gulp.watch(localFilesGlobImage)
//     .on('change', function(event) {
//     console.log('Changes detected! Uploading file "' + event.path + '", ' + event.type);
//     return gulp.src( [event.path], { base: 'dist/images/', buffer: false } )
//     .pipe( conn.newer( remoteFolderImage ) ) // only upload newer files 
//     .pipe( conn.dest( remoteFolderImage ) )
//     ;
//     });
// });

//-----------------------------------default task----------------------------//
// gulp.task('default', ['html', 'sass', 'ftp-deploy-watch', 'sass:watch', 'html:watch', 'ftp-deploy-watch-html', 'image:watch', 'ftp-deploy-watch-image']);
gulp.task('default', ['connect', 'html', 'sass', 'sass:watch', 'html:watch', 'image:watch']);

