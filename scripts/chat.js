const chatModal = document.getElementById('chat_modal');
const chat_btn = document.getElementById('chat_btn');


function openChatModal() 
{
    chatModal.style.display = 'block';
    chatModal.style.zIndex = '700';
    document.body.style.overflowY = 'auto';

    chat_btn.style.display = 'none';
}
function closeChatModal() 
{
    chatModal.style.display = 'none';
    document.body.style.overflowY = 'auto';

    chat_btn.style.display = 'block';
}