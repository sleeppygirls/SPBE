$(document).on("click", "#user_pilih", function() {
    var eventId = $(this).data('id');
    console.log(eventId);
});
function pilih_user(id_user, username) {
    $("#user_pilih").html('Dipilih : ' + username);
    $('#modal-xl').modal('hide');
    $("#txtusername").val(username);
}