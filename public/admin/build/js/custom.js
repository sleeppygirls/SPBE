$(document).on("click", "#user_pilih", function() {
    var eventId = $(this).data('id');
    console.log(eventId);
});
function pilih_user(id_user, username, nama_instansi) {
    $("#user_pilih").html(nama_instansi);
    $('#modal-xl').modal('hide');
    $("#txtnama_username").val(username);
    $("#txtnama_instansi").val(nama_instansi);
}

// document.getElementById('year').addEventListener('input', function (e) {
//             let value = e.target.value;
//             if (value.length > 4) {
//                 e.target.value = value.slice(0, 4);
//             }
//         });