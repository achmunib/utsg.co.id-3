const flashData = $('.flash-data').data('flashdata');
const flashData2 = $('.flash-data2').data('flashdata');

if(flashData) {
    swal('Information!', '' + flashData, 'info')
};

if(flashData2) {
    swal('Information!', '' + flashData2, 'info')
};

// const news1= $('#news1').text();
// const news2= $('#news2').text();
// const news3= $('#news3').text();
// const news4= $('#news4').text();
// if(news1.length > 85 && news2.length > 85 && news3.length > 85 && news4.length > 85)
//   $('#news1').text(news1.substring(0,150) + '...');
//   $('#news2').text(news2.substring(0,180) + '...');
//   $('#news3').text(news3.substring(0,200) + '...');
//   $('#news4').text(news4.substring(0,90) + '...');