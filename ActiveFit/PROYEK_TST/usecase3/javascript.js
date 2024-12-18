document.getElementById('trackerButton').addEventListener('click', async function() {
  const trackerUsed = confirm("Apakah Anda sudah menggunakan Tracker Olahraga?");

  const soapRequest = `<?xml version="1.0" encoding="UTF-8"?>
  <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:web="http://localhost/ActiveFit/PROYEK_TST/usecase3/aksesSistemAsupanMakan.php">
    <soapenv:Header/>
    <soapenv:Body>
      <web:getAkses>
        <web:penggunaaanTrackerOlahraga>${trackerUsed}</web:penggunaaanTrackerOlahraga>
      </web:getAkses>
    </soapenv:Body>
  </soapenv:Envelope>`;

  try {
    const response = await fetch('http://localhost/ActiveFit/PROYEK_TST/usecase3/server.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'text/xml',
      },
      body: soapRequest,
    });

    const text = await response.text();
    const parser = new DOMParser();
    const xmlDoc = parser.parseFromString(text, 'text/xml');

    const status = xmlDoc.getElementsByTagName('status')[0].textContent;
    const message = xmlDoc.getElementsByTagName('pesan')[0].textContent;

    document.getElementById('response').innerHTML = `<p>Status: ${status}</p><p>Pesan: ${message}</p>`;

    if (status === 'Diizinkan') {
      document.getElementById('response').innerHTML += '<p>Anda dapat mengakses Sistem Asupan Makan sekarang.</p>';
    }

  } catch (error) {
    console.error('Error:', error);
    document.getElementById('response').innerHTML = 'Terjadi kesalahan dalam memeriksa akses.';
  }
});

document.getElementById('foodButton').addEventListener('click', function() {
  document.getElementById('response').innerHTML = 'Anda sedang mengakses Sistem Asupan Makan.';
});
