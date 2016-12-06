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
          'assets/css/hover.min.css'     : 'componentes/hover/css/hover.css',
          'assets/css/slick.min.css'     : 'componentes/slick-carousel/slick/slick.css',
          'assets/css/slick-theme.min.css' : 'componentes/slick-carousel/slick/slick-theme.css',
          'assets/css/font-awesome.css' : 'componentes/font-awesome/css/font-awesome.css',
          'assets/css/estilo.min.css'    : 'devglob/css/main.scss'
        }
      }
    },
    // concatenar e minificar js
    uglify: {
      my_target: {
        files: {
          'assets/js/bootstrap.min.js': ['componentes/bootstrap/dist/js/bootstrap.js'],
          'assets/js/slick.min.js': ['componentes/slick-carousel/slick/slick.js'],
          'assets/js/funcoes.min.js' : ['devglob/js/funcoes.js']
        }
      }
    },
    // copia os arquivos de font para os devidos locais
    copy: {
      main: {
        files: [
          {expand: true,flatten: true, src: 'componentes/slick-carousel/slick/fonts/*', dest: 'assets/css/fonts'},
          {expand: true,flatten: true, src: 'componentes/bootstrap/fonts/*', dest: 'assets/fonts',},
          {expand: true,flatten: true, src: 'componentes/font-awesome/fonts/*', dest: 'assets/fonts',}
        ]
      },
    },

  });

  //load plugins
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-copy');

  // register tasks
  grunt.registerTask('site', ['sass','uglify','copy']);

}
