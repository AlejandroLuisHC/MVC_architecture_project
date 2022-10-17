const 
    tbody           = document.getElementById('tBody'),
    deleteModalBox  = document.getElementById('deleteModalBox'),
    tableTitle      = document.getElementById('tableTitle'),
    C               = tableTitle.textContent;

dashboardPrint();

function list(data){

    while(tbody.hasChildNodes()) {
        tbody.removeChild(tbody.firstChild);
    }

    deleteModalBox.innerHTML = '';

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
                </a> or 
                <a class="btn btn-warning" href='?C=Bands&action=read&id=${data[i].band_id}'>
                    <i class="fa-solid fa-pen"></i>
                </a> or 
                <button id='deleteBtn' data-bs-toggle="modal" data-bs-target="#deleteModal${data[i].band_id}" class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </td>`;
            
        let genresTable = `<td>${data[i].genre_id}</td>
            <td>${data[i].genre}</td>
            <td>
                <a class="btn btn-warning" href='?C=Genres&action=read&id=${data[i].genre_id}'>
                    <i class="fa-solid fa-pen"></i>
                </a> or 
                <button id='deleteBtn' data-bs-toggle="modal" data-bs-target="#deleteModal${data[i].genre_id}" class="btn btn-danger">
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
                <button id='deleteBtn' data-bs-toggle="modal" data-bs-target="#deleteModal${data[i].id}" class="btn btn-danger">
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

        if (C == 'Bands') { 
            prepareModal(data[i].band_id);
        } else if (C == 'Genres') { 
            prepareModal(data[i].genre_id);
        } else if (C == 'Users') { 
            prepareModal(data[i].id);
        }
    }
}

function dashboardPrint(){
    fetch (`index.php?display&C=${C}`)
        .then(res => res.json())
        .then(data => {
            list(data);
        })
}

function deleteItem(c, id) {
    console.log('deleting');
    setTimeout(() => {
        fetch(`index.php?C=${c}&action=delete&id=${id}`)
            .then(res => res.json())
            .then(data => {
                list(data);
            })
    }, 5);
}
function prepareModal(id) {
    deleteModalBox.innerHTML += `
        <div class="modal fade" id="deleteModal${id}" tabindex="-1" aria-labelledby="deleteModalLabel${id}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel${id}">Deleting information</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this information? 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="deleteItem('${C}', ${id})" data-bs-dismiss="modal">Delete</button>
                    </div>
                </div>
            </div>
        </div>`;
}
            