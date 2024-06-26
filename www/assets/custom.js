$(window).on('load', function() {
    //
    naja.initialize();

    naja.addEventListener('complete', (event) => {
        console.log("completed");
        console.log(event);

    });
});