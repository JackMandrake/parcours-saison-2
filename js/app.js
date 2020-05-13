var exos = [
  {nav: '#1', title: 'Exo #1', file: 'exo1.php'},
  {nav: '#2', title: 'Exo #2', file: 'exo2.php'},
  {nav: '#3', title: 'Exo #3', file: 'exo3.php'},
  {nav: '#4', title: 'Exo #4', file: 'exo4.php'},
  {nav: '#5', title: 'Exo #5', file: 'exo5.php?game=Kamoulox&player2=Herbert+Mollard&player1=Steve+Nathalie'},
  {nav: '#6', title: 'Exo #6', file: 'exo6.php'},
  {nav: '#7', title: 'Exo #7', file: 'exo7.php'},
  {nav: '#8', title: 'Exo #8', file: 'exo8-bonus.php'},
  {nav: '#9', title: 'Exo #9', file: 'exo9-bonus.php'},
];

var app = {
  init: function () {
    var target = $('#nav');
    $('<a href="index.php">Home</a>').appendTo(target);

    $.each(exos, function(index) {
      var uri = 'exo'+(index+1)+'.php';
      $('<a>', {
        href: exos[index].file || uri,
        text: exos[index].nav || 'Exo'+(index+1),
      }).appendTo(target);
      if ($('.exo').length) {
        var link = $('<a>', {
          href: exos[index].file || uri,
          class: 'lien-epreuve',
          text: exos[index].title || 'Lancer le test',
        });
        $('.exo').eq(index).append(link);
      }
    });

    //active
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/')+1);
    $('#nav a').each(function(i,e) {
      var cur = $(e);
      var href = cur.attr('href').replace(/\?.*/,'');
      if (href === filename) cur.addClass('active');
    });
  }
};

var check = {
  default: function() {
    var success = false;

    check.display(success);
  },
  display: function(success) {
    $('#test').removeClass().addClass(success ? 'success' : 'error');
  }
};

$(app.init);
