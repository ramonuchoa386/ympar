module.exports = function(grunt) {

// build dist folder
grunt.initConfig({

sass: {
    dist: {
        options: {
            style: 'nested',
            sourcemap: 'none',
            noCache: true
        },
        files: {
            'sass/main.css': 'sass/main.sass',
        }
    }
}, // end sass

cssmin: {
    options: {
        mergeIntoShorthands: false,
        roundingPrecision: -1
    },
    target: {
        files: {
            'style.css': ['css/core.css', 'css/infinite-slider.css', 'sass/main.css']
        }
    }
},

// minify / uglify js
uglify: {
    my_target: {
        files: {
            'js/functions.min.js': ['js/jquery-2.2.0.min.js', 'js/navigation.js', 'js/skip-link-focus-fix.js', 'js/slick.js', 'js/bootstrap.min.js', 'js/default.js']
        }
    }
}, // end js minify

watch: {
    css: {
        files: ['**/*.sass', 'sass/*.css', 'css/*.css'],
        tasks: ['sass', 'cssmin'],
        options: {
            livereload: true,
        },
    },
    js: {
        files: 'js/default.js',
        tasks: ['uglify'],
    },
},
}); // end config

// tasks
grunt.loadNpmTasks('grunt-contrib-sass'); // convert sass to css
grunt.loadNpmTasks('grunt-contrib-cssmin');
grunt.loadNpmTasks('grunt-contrib-uglify'); // js uglify
grunt.loadNpmTasks('grunt-contrib-watch');

// put said tasks into default grunt task
grunt.registerTask('default', ['sass', 'cssmin', 'uglify', 'watch']);

};
