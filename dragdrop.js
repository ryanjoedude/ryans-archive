function dragstartHandler(ev) {
    ev.dataTransfer.setData("album", ev.currentTarget.id);
}

function dragoverHandler(ev) {
    ev.preventDefault();
}

function dropHandler(ev) {
    ev.preventDefault();
    const data = ev.dataTransfer.getData("album");
    const dragged = document.getElementById(data);
    const dropTarget = ev.target.closest(".albums");
    if (dropTarget && dragged) {
        dropTarget.appendChild(dragged);
    }
}