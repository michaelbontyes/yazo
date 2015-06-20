module.exports = function(grunt){

    //Configuro Grunt
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            options: {
                separator: "\n", //add a new line after each file
                banner: "(function($){", //added before everything
                footer: "})(jQuery);" //added after everything
            },
            dist: {
                // the files to concatenate
                src: [
                    'materialize/js/bin/materialize.js'
                ],
                // the location of the resulting JS file
                dest: 'js/materialize.js'
            }
        },
        sass: {
            dist: {
                files: {
                    'css/materialize.theme.css' : 'materialize/sass/materialize.scss'
                }
            }
        },
        watch: {
            css: {
                files: '**/*scss',
                tasks: ['sass']
            },
            scripts: {
                files: ['materialize/*.js'],
                tasks: ['concat'],
                options: {
                    interrupt: true
                }
            }
        }
    });

    //Creo i Task da Eseguire
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default',['watch']);
}
