var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
    // the public path you will use in Symfony's asset() function - e.g. asset('build/some_file.js')
    .setManifestKeyPrefix('build/')

    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())

    // the following line enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // uncomment to define the assets of the project
    .addEntry('js/jquery', './assets/js/jquery.js')
    .addEntry('js/app', './assets/js/config.js')
    .addEntry('js/popper', './assets/js/popper.min.js')
    .addEntry('js/leaflet', './assets/leaflet/leaflet.js')
    .addEntry('js/bootstrap', './assets/js/bootstrap.min.js')

    //.addStyleEntry('css/app', './assets/css/app.scss')
    .addStyleEntry('css/bootstrap', './assets/css/bootstrap.css')
    .addStyleEntry('css/bootstrap-datetimepicker', './assets/css/bootstrap-datetimepicker.css')
    .addStyleEntry('css/bootstrap-social', './assets/css/bootstrap-social.css')
    .addStyleEntry('css/leaflet', './assets/leaflet/leaflet.css')
    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment if you use Sass/SCSS files
    //.enableSassLoader()

    // uncomment for legacy applications that require $/jQuery as a global variable
    .autoProvidejQuery()

    .configureFilenames({

        images: 'img/[name].[ext]'

    })
;

module.exports = Encore.getWebpackConfig();
