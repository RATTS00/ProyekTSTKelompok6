$(() => {
    let isAksesGranted = false;

    $('#aks').on('click', () => {
        $.ajax({
            url: 'client-akses.php',
            method: 'POST',
            data: { trackerUsed: true }
        })
        .done((response) => {
            let html = '';
            if (response.status === 'success' && response.data) {
                isAksesGranted = true;
                html += `<p>Status: ${response.data.status_akses}</p>`;
                html += `<p>Pesan: ${response.data.pesan}</p>`;
                $('#his').removeClass('disabled'); 
            } else {
                html = `<p>Error: ${response.message}</p>`;
            }
            $('#output').html(html);
        })
        .fail((xhr, status, error) => {
            $('#output').html(`<p>Error: ${error}</p>`);
        });
    });

    $('#his').on('click', (e) => {
        e.preventDefault();

        if (!isAksesGranted) {
            $('#output').html('<p>Silakan cek Sistem Tracker Olahraga terlebih dahulu.</p>');
            return;
        }

        $.ajax({
            url: 'client-history.php',
            method: 'POST'
        })
        .done((response) => {
            let html = '<h3>Data Makanan:</h3>';
            if (response.status === 'success' && response.data) {
                for (let makanan of response.data) {
                    html += `<p>ID: ${makanan.id}, Nama: ${makanan.nama}, Kalori: ${makanan.kalori} kcal</p>`;
                }
            } else {
                html = '<p>Tidak ada data makanan ditemukan.</p>';
            }
            $('#output').html(html);
        })
        .fail((xhr, status, error) => {
            $('#output').html(`<p>Error: ${error}</p>`);
        });
    });
});
