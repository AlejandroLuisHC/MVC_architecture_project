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
                <a class="btn btn-warning" href='?C=Bands&action=read&id=${data[i].band_id}'>
                    <i class="fa-solid fa-pen"></i>
                </a> or 
                <button id='deleteBtn' class="btn btn-danger" onClick="deleteItem('${C}', ${data[i].band_id})">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </td>`;
            
        let genresTable = `<td>${data[i].genre_id}</td>
            <td>${data[i].genre}</td>
            <td>
                <a class="btn btn-warning" href='?C=Genres&action=read&id=${data[i].genre_id}'>
                    <i class="fa-solid fa-pen"></i>
                </a> or 
                <button id='deleteBtn' class="btn btn-danger" onClick="deleteItem('${C}', ${data[i].genre_id})">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </td>`;

        let usersTable = `<td>${data[i].id}</td>
            <td>${data[i].user}</td>
            <td>${data[i].email}</td>
            <td>${data[i].role}</td>
            <td>
                <a class="btn btn-warning" href='?C=Users&action=read&id=${data[i].id}'>
                    <i class="fa-solid fa-pen"></i>
                </a> or 
                <button id='deleteBtn' class="btn btn-danger" onClick="deleteItem('${C}', ${data[i].id})">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </td>`; 

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

function deleteItem(c, id) {
    fetch(`index.php?C=${c}&action=delete&id=${id}`)
        .then(res => res.json())
        .then(data => {
            list(data)
        })
}