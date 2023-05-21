$(document).ready(function() {
    const swalWithBootstrapButtons = swal.mixin({
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false,
    });
    $('#btn1').on('click', function() {
        swalWithBootstrapButtons.fire("Here's your text message in the sweet alert!");
    });
    $('#btn2').on('click', function() {
        swalWithBootstrapButtons.fire("Here's your text message in the sweet alert!");
    });
    $('#btn3').on('click', function() {
        swalWithBootstrapButtons.fire('Good job!', 'You clicked the button!', 'success');
    });
    $('#btn4').on('click', function() {
        swalWithBootstrapButtons
            .fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
            })
            .then(result => {
                if (result.value) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    );
                }
            });
    });
    $('#btn5').on('click', function() {
        swalWithBootstrapButtons
            .fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true,
            })
            .then(result => {
                if (result.value) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    );
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swalWithBootstrapButtons.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    );
                }
            });
    });
    $('#btn6').on('click', function() {
        swalWithBootstrapButtons.fire({
            title: 'Sweet!',
            text: 'Modal with a custom image.',
            imageUrl: image,
            imageAlt: 'Custom image',
            animation: false,
        });
    });
    $('#btn7').on('click', function() {
        swalWithBootstrapButtons.fire({
            title: 'Sweet!',
            text: 'Modal with a custom image.',
            imageUrl: image1,
            imageAlt: 'Custom image',
            animation: false,
        });
    });
    $('#btn8').on('click', function() {
        let timerInterval;
        swalWithBootstrapButtons
            .fire({
                title: 'Auto close alert!',
                html: 'I will close in <strong></strong> seconds.',
                timer: 2000,
                onBeforeOpen: () => {
                    Swal.showLoading();
                    timerInterval = setInterval(() => {
                        Swal.getContent().querySelector('strong').textContent = Swal.getTimerLeft();
                    }, 100);
                },
                onClose: () => {
                    clearInterval(timerInterval);
                },
            })
            .then(result => {
                if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.timer
                ) {
                    console.log('I was closed by the timer');
                }
            });
    });
    $('#btn9').on('click', function() {
        swalWithBootstrapButtons.fire(
            {
                title: 'Ajax request example',
                text: 'Submit to run ajax request',
                type: 'info',
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function() {
                setTimeout(function() {
                    swalWithBootstrapButtons.fire('Ajax request finished!');
                }, 2000);
            }
        );
    });
    $('#btn10').on('click', function() {
        swalWithBootstrapButtons.fire({
            title: 'Custom animation with Animate.css',
            animation: false,
            customClass: 'animated tada',
        });
    });
    $('#btn11').on('click', function() {
        swalWithBootstrapButtons.fire({
            title: 'Custom animation with Animate.css',
            animation: false,
            customClass: 'animated rubberBand',
        });
    });
    $('#btn12').on('click', function() {
        swalWithBootstrapButtons.fire({
            title: 'Custom animation with Animate.css',
            animation: false,
            customClass: 'animated swing',
        });
    });
    $('#btn16').on('click', function() {
        swalWithBootstrapButtons.fire({
            position: 'top-end',
            type: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500,
        });
    });
    $('#btn17').on('click', function() {
        swalWithBootstrapButtons.fire({
            position: 'bottom-start',
            type: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500,
        });
    });
    $('#btn14').on('click', function() {
        swalWithBootstrapButtons
            .mixin({
                input: 'text',
                confirmButtonText: 'Next &rarr;',
                showCancelButton: true,
                progressSteps: ['1', '2', '3'],
            })
            .queue(['What is your name?', 'How old are you?', 'Which city you are from?'])
            .then(result => {
                if (result.value) {
                    swalWithBootstrapButtons.fire({
                        title: 'All done!',
                        html:
                            'Your answers: <pre><code>' +
                            JSON.stringify(result.value) +
                            '</code></pre>',
                        confirmButtonText: 'Lovely!',
                    });
                }
            });
    });
    $('#btn15').on('click', function() {
        const ipAPI = 'https://api.ipify.org?format=json';
        swalWithBootstrapButtons.queue([
            {
                title: 'Your public IP',
                confirmButtonText: 'Show my public IP',
                text: 'Your public IP will be received ' + 'via AJAX request',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    return fetch(ipAPI)
                        .then(response => response.json())
                        .then(data => Swal.insertQueueStep(data.ip))
                        .catch(() => {
                            swalWithBootstrapButtons.insertQueueStep({
                                type: 'error',
                                title: 'Unable to get your public IP',
                            });
                        });
                },
            },
        ]);
    });
});
