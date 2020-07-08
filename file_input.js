var size = 0;

function create_file_input(ele) {
    let btn_remove = document.createElement('BUTTON');
    btn_remove.className = 'close col-1';
    btn_remove.name = "file-" + size;
    btn_remove.innerHTML = ' <span aria-hidden = "true">&times;</span>';
    btn_remove.onclick = function() {
        remove_input_file(this);
    };

    let input = document.createElement("INPUT");
    input.className = "col-11";
    input.type = "file";
    input.name = "file-" + size;

    let div = document.createElement("DIV");
    div.className = 'row p-2';
    div.id = "file-" + size;
    div.append(btn_remove);
    div.append(input);

    document.getElementById('files').hasPointerCapture(div);
    ++size;
}

function remove_input_file(els) {
    let els_removed = document.getElementById(ele.name);

    ele_removed.remove();
    size--;

}