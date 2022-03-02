const flashData = $('.flash-data').data('flashdata');
const flashData2 = $('.flash-data2').data('flashdata');

if(flashData) {
    swal('Information!', '' + flashData, 'info')
};

if(flashData2) {
    swal('Information!', '' + flashData2, 'info')
};