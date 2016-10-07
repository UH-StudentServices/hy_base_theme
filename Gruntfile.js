'use strict';

module.exports = function (grunt) {

  grunt.initConfig({
    compass: {
      dist: {
        options: {
          config: 'config.rb',
          sassDir: 'scss',
          cssDir: 'css',
          bundleExec: true
        }
      }
    },
    bower: {
      dev: {
        dest: '/',
        css_dest: 'css/',
        scss_dest: 'scss/',
        fonts_dest: 'fonts/',
        options: {
          packageSpecific: {
            'Styleguide': {
              keepExpandedHierarchy: true,
              stripGlobBase: true,
              files: [
                "sass/**/*",
                "fonts/*"
              ]
            }
          }
        }
      }
    }

  });

  grunt.loadNpmTasks('grunt-bower');
  grunt.loadNpmTasks('grunt-contrib-compass');

};
