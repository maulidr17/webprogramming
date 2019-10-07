$(function () {

    $('.tombolTambahData').on('click', function () {
        $('#insertModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
    });

    $('.tampilModalUbah').on('click', function () {

        $('#insertModalLabel').html('Update Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Update Data');
        $('.modal-body form').attr('action', 'http://localhost/crud-app/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/crud-app/public/mahasiswa/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#npm').val(data.npm);
                $('#jenis_kelamin').val(data.jenis_kelamin);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
            }
        });


    });
});