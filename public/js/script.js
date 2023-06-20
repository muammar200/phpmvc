//  JQUERY
// Function di bawah berarti : ketika dokumennya sudah siap, jalankan fungsi di dalam nya. Ini untuk menggantikan method bernama ready()
$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('#nama').val('');
        $('#nim').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/tambah')

    })

    $('.tampilModalEdit').on('click', function(){
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah')
        
        const id = $(this).data('id');
        
        $.ajax({
            url : 'http://localhost/phpmvc/public/mahasiswa/getubah', 
            data: {id : id},
            method : 'post',
            dataType : 'json',
            success: function (data){
                // Mencetak setiap property yang ada di dalam json ke form. Penulisannya yaitu 'object.nama_property'. Berbeda dengan PHP yaitu 'object->nama_property' 
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        })        
    })


});