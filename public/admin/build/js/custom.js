$(document).on("click", "#user_pilih", function() {
    var eventId = $(this).data('id');
    console.log(eventId);
});
function pilih_user(id_user, username) {
    $("#user_pilih").html('Dipilih : ' + username);
    $('#modal-xl').modal('hide');
    $("#txtusername").val(username);
}

// document.getElementById('year').addEventListener('input', function (e) {
//             let value = e.target.value;
//             if (value.length > 4) {
//                 e.target.value = value.slice(0, 4);
//             }
//         });