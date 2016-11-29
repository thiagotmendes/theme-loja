module.exports = function(grunt){
  // config
  grunt.initConfig({
    // sass
    sass:{
      options: {
				sourceMap: true,
				outputStyle: 'compressed'
			},
      dist:{
        files:{
          'assets/css/bootstrap.min.css' : 'componentes/bootstrap/dist/css/bootstrap.css',
          'assets/css/estilo.min.css' : 'devglob/css/main.scss'
        }
      }
    },
    // concatenar e minificar js
    uglify: {
      my_target: {
        files: {
          'assets/js/bootstrap.min.js': ['componentes/bootstrap/dist/js/bootstrap.js'],
          'assets/js/funcoes.min.js' : ['devglob/js/funcoes.js']
        }
      }
    }
  });

  //load plugins
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // register tasks
  grunt.registerTask('site', ['sass','uglify']);

}
