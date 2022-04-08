const flashData = $('.flash-data').data('flashdata');
const flashData2 = $('.flash-data2').data('flashdata');

if(flashData) {
    swal('Information!', '' + flashData, 'info')
};

if(flashData2) {
    swal('Information!', '' + flashData2, 'info')
};

$('#pagination-container').pagination({
  dataSource: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 195],
  callback: (data) => {
    // template method of yourself
    var html = simpleTemplating(data);
    $('#data-container').html(html);
  }
})

function simpleTemplating(data) {
  var html = '<ul>';
  $.each(data, function(item){
      html += '<li>'+ item +'</li>';
  });
  html += '</ul>';
  return html;
}