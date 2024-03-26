const feedbackInput = document.querySelectorAll('.feedback__input');
const messageFooter = document.getElementById('tinkoff-message');
const TPF = document.getElementById('payform-tinkoff');
const MessageText = document.querySelector('.tinkoff-message__text');
const errorLabel = document.querySelectorAll('.error-label');
const FeedbackInner = document.querySelectorAll('.feedback__inner');


document.addEventListener('DOMContentLoaded',function () {
  let selector = document.querySelectorAll('input[type="tel"]');
  selector.forEach(el=>{
    let im = new Inputmask('+7 (999) 999-99-99');
    im.mask(el);
  })
});

document.addEventListener('DOMContentLoaded',function () {
  if(TPF){
  const {
    description,
    amount,
    email,
    phone,
    receipt
} = TPF;

  TPF.receipt.value = JSON.stringify({
    "EmailCompany": "mail@mail.com",
    "Taxation": "patent",
    "Items": [{
        "Name": description.value || "Оплата",
        "Price": amount.value + '00',
        "Quantity": 1.00,
        "Amount": amount.value + '00',
        "PaymentMethod": "full_prepayment",
        "PaymentObject": "service",
        "Tax": "none"
    }]
});
  function send(event) {
    event.preventDefault();
    let error = formValidate();
    if (error === 0) {
      const req = new XMLHttpRequest();
      req.open('POST','/send.php',true);
      req.onload = function () {
        if (req.status === 200) {
            MessageText.textContent = 'Переходим на страницу оплаты';
            MessageText.classList.add('message-success');
            addMessage()
            setTimeout(() => {
              messageFooter.classList.remove('message-success');
              removeMessage()
              document.querySelector('.modal-open .popup-close').click();
              pay(TPF);
            },5000);
        } else {
          MessageText.innerHTML = 'Не удалось соедениться с банком<br>Ошибка сервера ' + req.status;
          MessageText.classList.add('error');
          addMessage()
          setInterval(() => {
            MessageText.classList.remove('error');
            removeMessage()
          },5000);
        }
      };
      req.onerror = function () {
        alert('Ошибка отправки запроса');
      };
      req.send(new FormData(event.target));
    } else {
    }
  }

  function addMessage() {
    messageFooter.classList.add('active');
    TPF.classList.add('hidden');
  }
  function removeMessage() {
    messageFooter.classList.remove('active');
    TPF.classList.remove('hidden');
    MessageText.textContent = ' ';
  }
  function formValidate() {
    let error = 0;
    let formReq = document.querySelectorAll('.req');
    for (let index = 0; index < formReq.length; index++) {
      const input = formReq[index];
      const errorCheckbox = document.querySelector('.error-label-checkbox');
      const errorLabel = input.nextElementSibling;
      formRemoveError(errorCheckbox);
      TPF.addEventListener('input',() => {
        errorLabel.textContent = '';
      });
      if (input.classList.contains('input-phone')) {
        if (!phoneTest(input)) {
          errorLabel.textContent = 'Введите корректный телефон';
          formAddError(errorLabel);
          formAddError(input);
          error++;
        }
      }
      if (input.classList.contains('email')) {
        if (!emailTest(input)) {
          errorLabel.textContent = 'Введите корректный адрес'
          formAddError(errorLabel);
          formAddError(input);
          error++;
        }
      } if (input.getAttribute('type') === 'checkbox' && input.checked === false) {
        formAddError(errorCheckbox);
        error++;
      }
      if (input.value === '') {
        formAddError(input);
        formAddError(errorLabel);
        errorLabel.textContent = 'Поле не может быть пустым'
        error++;
      }
    }
    return error;
  }
  function emailTest(input) {
    return /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/.test(input.value);
  }

  function phoneTest(input) {
    return /^((\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{10,12}$/.test(input.value);
  }

  function formAddError(input) {
    input.classList.add('error');
  }

  if (TPF) {
    TPF.addEventListener('submit',send);
  }
  function formRemoveError(input) {
    input.classList.remove('error');
  }
}
});


const feedbackForm = document.getElementById('feedback-form');
if(feedbackForm){
feedbackForm.addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(feedbackForm);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "/send.php", true);
    xhr.onload = function() {
        if (xhr.status === 200) {
           feedbackForm.reset();
            document.querySelector('.modal-open .popup-close').click();
            alert("Форма успешно  отправлена");
        } else {
            alert("Произошла ошибка" +  xhr.status +  "при отправке формы");
        }
    };

    xhr.send(formData);
});
}