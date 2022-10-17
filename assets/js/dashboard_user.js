const 
    tbody       = document.getElementById('tBody'),
    tableTitle  = document.getElementById('tableTitle'),
    C           = tableTitle.textContent;

dashboardPrint();

function list(data){

    while(tbody.hasChildNodes()) {
        tbody.removeChild(tbody.firstChild);
    }

    for (let i = 0; i < data.length; i++) {

        // Table rows templates: 

        let bandsTable = `<td>${data[i].band_id}</td>
            <td>${data[i].band_name}</td>
            <td>${data[i].no_members}</td>
            <td>${data[i].no_albums}</td>
            <td>${data[i].genre}</td>
            <td>${data[i].formed_in}</td>
            <td>
                <a class="btn btn-secondary" href='index.php?C=${C}&action=albums&band=${data[i].band_name}'>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </td>`;
            
        let genresTable = `<td>${data[i].genre_id}</td>
            <td>${data[i].genre}</td>`;

        let usersTable = `<td>${data[i].id}</td>
            <td>${data[i].user}</td>
            <td>${data[i].email}</td>
            <td>${data[i].role}</td>`; 

        // -----------------------------------

        let table = selectTable(C);
        
        function selectTable(c) {
            switch (c) {
                case 'Bands':
                    return bandsTable;
                    break;
                case 'Genres':
                    return genresTable;  
                    break;
                case 'Users':
                    return usersTable;
                    break;
            }
        }
        
        let tr = document.createElement('tr');
        tr.innerHTML = table;
        tbody.appendChild(tr);
        
    };
}

function dashboardPrint(){
    fetch (`index.php?display&C=${C}`)
        .then(res => res.json())
        .then(data => {
            list(data);
        })
}
