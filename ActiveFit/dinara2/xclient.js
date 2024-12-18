$(()=>{
    $('#histor').on ('click',()=>{
        $.ajax({
            url: 'xclientHistory.php',
            method :'POST'
        }).done((history)=>{
            console.log(history);
            let html ='';
            for(let h of history) {
                html += `<p> ${h.diskon}`;
                html += `-${h.step}</p>`;
            }
            $('#output').html(html);
        });
    });

    $('#ds').on('click', () => {
        $.ajax({
            url: 'xclientDiskon.php',
            method: 'POST',
            data: { steps: 10000 }
        }).done((diskon) => {
            console.log(diskon);
            let html = `<p>${diskon.discount}% - ${diskon.step} - ${diskon.hargaAkhir}</p>`;
            $('#output').html(html);
        }).fail((jqXHR, textStatus, errorThrown) => {
            console.error('Error fetching discount:', textStatus, errorThrown);
        });
    });
});