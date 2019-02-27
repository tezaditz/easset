$(document).ready(function(){
    var checkedValue = $('.messageCheckbox:checked').val();

    $('#printall').on('click' , function(){
        var inputs = document.querySelectorAll("input[type='checkbox']:checked");
        console.log(inputs.length);
       
    });
});