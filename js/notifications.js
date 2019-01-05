$(function() {
    $.bootstrapGrowl("We're looking for staff! Apply <a target='_blank' href='https://docs.google.com/forms/d/e/1FAIpQLSc9rsPlmX7Bbrudk0I6puXZWMxKTo-f9B0xlFWDGLxj3r1HOg/viewform'>here</a>", {
        ele: 'body', // which element to append to
        type: 'info', // (null, 'info', 'danger', 'success')
        offset: {from: 'bottom', amount: 20}, // 'top', or 'bottom'
        align: 'center', // ('left', 'right', or 'center')
        width: 600, // (integer, or 'auto')
        delay: 7000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
        allow_dismiss: false, // If true then will display a cross to close the popup.
        stackup_spacing: 10 // spacing between consecutively stacked growls.
      });
});
