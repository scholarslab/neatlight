
/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 cc=76; */

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

module.exports = function(grunt) {

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-stylus');

  grunt.initConfig({

    stylus: {
      dist: {
        files: {
          'css/payloads/style.css': 'css/**/*.styl'
        }
      }
    },

    watch: {
      dist: {
        files: 'css/*.styl',
        tasks: ['stylus']
      }
    }

  });

};
