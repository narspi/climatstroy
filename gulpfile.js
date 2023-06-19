import gulp from "gulp";
import panini from "panini";
import browserSync from "browser-sync";
import concat from "gulp-concat";
import sourcemaps from "gulp-sourcemaps";
import dartSass from "sass";
import gulpSass from "gulp-sass";
// import rename from "gulp-rename";

const scss = gulpSass(dartSass);

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

const transportLibs = () => {
  return src([
    "node_modules/modern-normalize/modern-normalize.css",
    "node_modules/@fancyapps/ui/dist/fancybox/fancybox.css",
    "node_modules/swiper/swiper-bundle.css",
  ])
    .pipe(concat("_libs.scss"))
    .pipe(dest("src/scss"));
};

const createCss = () => {
  return src("src/scss/**/*.scss")
    .pipe(sourcemaps.init())
    .pipe(
      scss({
        outputStyle: "expanded",
      })
    )
    .pipe(sourcemaps.write())
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
    "src/js/main.js"
    ])
    .pipe(concat('libs.js'))
    .pipe(dest("dist/js"))
    .pipe(sync.stream());
};

const server = () => {
  sync.init({
    server: "./dist",
    tunnel: "my-private-site"
  });
  watch("./src/fonts/**/*.*", transportFonts);
  watch("./src/img/**/*.*", transportImg);
  watch("./src/html/**/*.html", htmlInclude);
  watch("./src/scss/**/*.scss", createCss);
  watch("./src/js/**/*.js", jsLibs);
};

export default series(
  htmlInclude,
  transportLibs,
  jsLibs,
  createCss,
  transportFonts,
  transportImg,
  server
);
