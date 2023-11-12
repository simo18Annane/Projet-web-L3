const form = document.querySelector('form');

const errorMsg = document.getElementById('error-msg');
errorMsg.style.color = 'var(--text-red)';
errorMsg.style.display = 'none';

form.addEventListener('submit', 
function(event) 
{
    event.preventDefault();
    if (checkAllQuestionsAnswered()) 
    {
        form.submit();
    } 
    else 
    {
        errorMsg.style.display = 'block';
    }
});

function checkAllQuestionsAnswered() {

    const questions = document.querySelectorAll('.question');
  
    for (let i = 0; i < questions.length; i++) {
        const radioButtons = questions[i].querySelectorAll('input[type="radio"]');
        let answered = false;
        for (let j = 0; j < radioButtons.length; j++) {
            if (radioButtons[j].checked) {
                answered = true;
                break;
            }
        }
        if (!answered) {
            return false;
        }
    }
    return true;
}