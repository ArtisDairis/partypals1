// Pasutijumi Modal
const openModulePas = document.getElementById('open_pas_modal');
const pasutijumiModal = document.getElementById('pasutijumi_modal');

openModulePas.addEventListener('click', openPasutijumiModal);

function openPasutijumiModal() 
{
    pasutijumiModal.style.display = 'block';
    pasutijumiModal.style.zIndex = '700';
    document.body.style.overflowY = 'auto';
}

function closePasutijumiModal() 
{
    pasutijumiModal.style.display = 'none';
    document.body.style.overflowY = 'auto';
}

window.addEventListener('click', function (event) 
{
    if (event.target === pasutijumiModal) 
    {
        closePasutijumiModal();
    }
});