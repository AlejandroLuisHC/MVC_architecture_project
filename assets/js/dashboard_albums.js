const 
    tbody           = document.getElementById('tBody'),
    deleteModalBox  = document.getElementById('deleteModalBox'),
    tableTitle      = document.getElementById('tableTitle'),
    Band            = tableTitle.textContent;

dashboardPrint();

function list(data){

    while(tbody.hasChildNodes()) {
        tbody.removeChild(tbody.firstChild);
    }

    deleteModalBox.innerHTML = '';

    for (let i = 0; i < data.length; i++) {
        
        let tr = document.createElement('tr');
        tr.innerHTML = `
            <td>${data[i]['album_id']}</td>
            <td>${data[i]['album_name']}</td>
            <td>${data[i]['album_year']}</td>
            <td>
                <a class='btn btn-warning' href='?C=Bands&action=readalbum&id=${data[i]['album_id']}&band=${Band}'>
                    <i class='fa-solid fa-pen'></i>
                </a> or 
                <button class='btn btn-danger' data-bs-toggle="modal" data-bs-target="#deleteModal${data[i]['album_id']}">
                    <i class='fa-solid fa-trash'></i>
                </button>
            </td>"
            `;
        tbody.appendChild(tr);
        prepareModal(data[i].album_id);
    }
}

function dashboardPrint(){
    fetch (`index.php?displayAlbums&C=Bands&band=${Band}`)
        .then(res => res.json())
        .then(data => {
            list(data);
        })
}

function deleteItem(b, id) {
    setTimeout(() => {
        fetch(`index.php?C=Bands&action=deletealbum&band=${b}&id=${id}`)
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
                        <button type="button" class="btn btn-danger" onclick="deleteItem('${Band}', ${id})" data-bs-dismiss="modal">Delete</button>
                    </div>
                </div>
            </div>
        </div>`;
}
            