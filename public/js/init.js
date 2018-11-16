$(document).ready(() => {
  $('.sidenav')
    .sidenav()
    .on('click tap', 'li a', () => {
      $('.sidenav').sidenav('close');
    });
  $('.materialboxed').materialbox();
  $('.scrollspy').scrollSpy();
});
