import { src, dest, watch, series } from "gulp";
import sass from "gulp-sass";
import cleanCss from "gulp-clean-css";
import prefix from "gulp-autoprefixer";
import uglify from "gulp-uglify";
import concat from "gulp-concat";
import browserSync from "browser-sync";

const server = browserSync.create();

export const styles = () =>
	src("scss/**/bundle.scss")
		.pipe(sass().on("error", sass.logError))
		.pipe(prefix())
		.pipe(cleanCss({ compatibility: "ie8" }))
		.pipe(dest("./css/"));

export const scripts = () => {
	return src(["js/common/header.js", "js/home/hero.js"])
		.pipe(uglify())
		.pipe(concat("bundle.js"))
		.pipe(dest("./dist/"));
};

export const serve = (done) => {
	server.init({
		proxy: 'http://localhost/desktop',
		browser: 'google chrome',
	});
	done();
};

export const reload = (done) => {
	server.reload();
	done();
};

export const watchFiles = () => {
	watch(["scss/**/*.scss", "scss/**/*scss"], series(styles, reload));
	watch(["js/**/*.js"], series(scripts, reload));
	watch(["**/*.php"], series(reload));
};

export const dev = series(serve, watchFiles);

export default dev;
