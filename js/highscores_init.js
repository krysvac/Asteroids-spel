$(document).ready(function(){
    var dynatable = $('#highscores').dynatable({
        inputs: {
            processingText: 'Laddar <img src="img/loading.gif" />',
            paginationPrev: 'Föregående',
            paginationNext: 'Nästa',
            perPageText: 'Visa: ',
            recordCountText: 'Visar ',
            queryEvent: 'keyup',
        },
        params: {
            records: 'rader',
        },
    }).data('dynatable');
});