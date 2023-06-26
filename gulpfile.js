import gulp from "gulp";
import panini from "panini";
import browserSync from "browser-sync";
import concat from "gulp-concat";
import sourcemaps from "gulp-sourcemaps";
import dartSass from "sass";
import gulpSass from "gulp-sass";
import gulpMode from "gulp-mode";

import uglifyGulp from 'gulp-uglify-es';

const scss = gulpSass(dartSass);
const mode = gulpMode();
const uglify = uglifyGulp.default;

const isProduction = mode.production();

const { src, dest, watch, series } = gulp;
const sync = browserSync.create();

const htmlInclude = () => {
  panini.refresh();
  return src("src/html/pages/**/*.html")
    .pipe(
      panini({
        root: "src/html/pages",
        layouts: "src/html/layouts",
        partials: "src/html/partials",
        helpers: "src/html/helpers/",
        data: "src/html/data/",
      })
    )
    .pipe(dest("dist/"))
    .pipe(sync.stream());
};

const transportCssLibs = () => {
  return src([
    "node_modules/modern-normalize/modern-normalize.css",
    "node_modules/@fancyapps/ui/dist/fancybox/fancybox.css",
    "node_modules/swiper/swiper-bundle.css",
    "node_modules/simplebar/dist/simplebar.css",
  ])
    .pipe(concat("_libs.scss"))
    .pipe(dest("src/scss"));
};

const createCss = () => {
  return src("src/scss/**/*.scss")
    .pipe(mode.development(sourcemaps.init()))
    .pipe(
      scss({
        outputStyle: isProduction? "compressed": "expanded",
      })
    )
    .pipe(mode.development(sourcemaps.write()))
    .pipe(dest("dist/css"))
    .pipe(sync.stream());
};

const transportFonts = () => {
  return src("./src/fonts/**/*.*").pipe(dest("dist/fonts"));
};

const transportImg = () => {
  return src("./src/img/**/*.*").pipe(dest("dist/img"));
};

const jsLibs = () => {
  return src([
    "node_modules/swiper/swiper-bundle.js",
    "node_modules/lazysizes/lazysizes.min.js",
    "node_modules/@fancyapps/ui/dist/index.umd.js",
    "node_modules/dragscroll/dragscroll.js",
    "node_modules/inputmask/dist/inputmask.min.js",
    "node_modules/simplebar/dist/simplebar.js",
  ])
    .pipe(concat("libs.js"))
    .pipe(uglify())
    .pipe(dest("dist/js"))
    .pipe(sync.stream());
};

const transportJs = () => {
  return src(["src/js/main.js"])
  .pipe(mode.production(uglify()))
  .pipe(dest("dist/js"))
  .pipe(sync.stream());
};

const server = () => {
  sync.init({
    server: "./dist",
    tunnel: "my-private-site",
  });
  watch("./src/fonts/**/*.*", transportFonts);
  watch("./src/img/**/*.*", transportImg);
  watch("./src/html/**/*.html", htmlInclude);
  watch("./src/scss/**/*.scss", createCss);
  watch("./src/js/**/*.js", transportJs);
};

const build = series(
  htmlInclude,
  transportCssLibs,
  jsLibs,
  createCss,
  transportFonts,
  transportImg,
  transportJs
);

const defaultGulp = series(
  htmlInclude,
  transportCssLibs,
  jsLibs,
  createCss,
  transportFonts,
  transportImg,
  transportJs,
  server
);

export { build, defaultGulp as default };
