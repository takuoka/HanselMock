/*global module:false*/
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    lint: {
      files: ['grunt.js', 'js/*.js']
    },
    qunit: {
      files: ['*.html']
    },
    watch: {
      files: '<config:lint.files>',
      tasks: 'lint qunit'
    },
    jshint: {
      options: {
        curly: true,
        eqeqeq: true,
        immed: true,
        latedef: true,
        newcap: true,
        noarg: true,
        sub: true,
        undef: true,
        boss: true,
        eqnull: true,
        browser: true
      },
      globals: {}
    },
    coffee: {
      compile: {
          options:{
            bare:true
          },
          files: {
            'js/*.js': ['js/coffee/*.coffee']
          }
        }
    }
  });



  // Default task.
  grunt.registerTask('default', 'lint qunit');

};
