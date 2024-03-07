function openAcc(elem, pid) 
{
    let panel = document.getElementById(pid);
    let btn = elem.querySelector('i');

    if (btn.classList.contains("fa-caret-down")) {
        panel.hidden = false;
        btn.classList.replace("fa-caret-down", "fa-caret-up");
    } else {
        panel.hidden = true;
        btn.classList.replace("fa-caret-up", "fa-caret-down");
    }
}
