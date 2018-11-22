const pngquant = require('imagemin-pngquant');
const grunt = require('grunt');

grunt.initConfig({
  imagemin: {
    options: {
      use: [
        pngquant({ quality: '50' }),
      ],
    },
    dynamic: {
      files: [{
        cwd: 'public/images/',
        expand: true,
        src: ['**/*.{png, jpg}'],
      }],
    },
  },
});
grunt.loadNpmTasks('grunt-contrib-imagemin');
grunt.registerTask('default', ['imagemin']);
