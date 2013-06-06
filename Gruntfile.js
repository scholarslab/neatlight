
/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 cc=76; */

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

module.exports = function(grunt) {

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');

  grunt.initConfig({

    sass: {
      dist: {
        files: {
          'css/style.css': 'css/*.scss'
        }
      }
    },

    watch: {
      dist: {
        files: 'css/*.scss',
        tasks: ['sass']
      }
    }

  });

};
