// Get references to the modal and the element that opens it
const openModulePas = document.getElementById('open_pas_modal');
const pasutijumiModal = document.getElementById('pasutijumi_modal');

// Function to open the modal
function openPasutijumiModal() 
{
    pasutijumiModal.style.display = 'block';
    document.body.style.overflowY = 'hidden';
}

// Function to close the modal
function closePasutijumiModal() 
{
    pasutijumiModal.style.display = 'none';
    document.body.style.overflowY = 'auto';
}

openModulePas.addEventListener('click', openPasutijumiModal);

window.addEventListener('click', function (event) 
{
    if (event.target === pasutijumiModal) 
    {
        closePasutijumiModal();
    }
});
