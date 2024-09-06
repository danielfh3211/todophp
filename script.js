function confirmDelete(key) {
  Swal.fire({
    title: 'Apakah kamu yakin?',
    text: "Kamu tidak bisa mengembalikan item yang sudah dihapus!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, hapus saja!',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = 'todo.php?hapus=1&key=' + key;
    }
  })
}
