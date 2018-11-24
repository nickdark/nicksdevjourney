const pngquant = require('imagemin-pngquant');
const mozjpeg = require('imagemin-mozjpeg');
const grunt = require('grunt');

grunt.initConfig({
  imagemin: {
    options: {
      use: [
        pngquant({ quality: '70' }),
        mozjpeg({ quality: '70' }),
      ],
    },
    dynamic: {
      files: [{
        cwd: 'public/images/',
        expand: true,
        src: ['**/*.{png, jpg}'],
        dest: 'public/images/',
      }],
    },
  },
});
grunt.loadNpmTasks('grunt-contrib-imagemin', 'grunt-critical');
grunt.registerTask('default', ['imagemin']);
