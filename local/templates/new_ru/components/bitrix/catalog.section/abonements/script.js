const getAbonement = async (id) => {
    const modal = new ModalWindow('abonementModal', 'Купить абонемент');
    modal.setFields([
        { type: 'hidden', name: 'itemId', value: id },
        { type: 'text', name: 'name', placeholder: 'Имя*' },
        { type: 'text', name: 'lastName', placeholder: 'Фамилия*' },
        { type: 'phone', name: 'phone', placeholder: 'Телефон*' },
        { type: 'email', name: 'email', placeholder: 'Email*' },
        { type: 'textarea', name: 'comment', placeholder: 'Комментарий*' },
    ]);
    const sendForm = async () => {
        const form = document.querySelector('#abonementModal form');
        let data = new FormData(form);
        data = Object.fromEntries(data);
        const res = await fetch(
            '/',
            {
                method: 'POST',
                mode: 'cors',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    ajaxAction: 'mail.claimAbonement',
                    data,
                }),
            }
        )
            .then(res => res.json())
            .catch(err => console.log(err));
        if (res.data?.success) {
            modal.hide();

            const successModal = new ModalWindow('abonementSuccess', 'Спасибо за покупку');
            successModal.addContent(`
                <div class="modalSuccessBuyContainer containerModal">
                    <span class="modalSuccessBuNumber">Номер вашего заказа #${res.data.orderId}</span>
                    <span class="modalSuccessBuyText">Все данные по абонементу мы направили на почту ${data.email}</span>
                    <p class="modalWorkoutConfirmText">Мы проверим плотное расписание тренера и свяжемся с вами
                        в ближайшее время
                    </p>
                </div>
            `);
            successModal.addButton(
                'home',
                ['defaultButton'],
                'На главную',
                () => {
                    window.href = '/';
                }
            );
            successModal.init();
            successModal.show();
        }
    };
    modal.setButtons([
        { name: 'send', value: 'Отправить', className: [ 'defaultButton' ], onClick: () => sendForm()},
    ]);
    modal.init();
    modal.show();
    return;
};

const openSubscriptionSelectModal = (el) => {
    document.querySelector('body').classList.add('disableScroll');
    const parent = el.parentElement;
    const modal = document.querySelector('#selectSubscriptionModal');
    modal.classList.add('isOpenModal');
    const price = parent.querySelector('.priceSubscription').innerHTML;
    const src = parent.attributes['data-preview'].value;
    const id = parent.attributes['data-id'].value;
    const name = parent.attributes['data-name'].value;
    modal.querySelector('.subscriptionModalPrice').innerHTML = price;
    modal.querySelector('.subscriptionModalDescription').innerHTML = name;
    modal.querySelector('.subscriptionModalImage').attributes['src'].value = src;
    modal.querySelector('#buttonSectionSubscriptionModalBuy').addEventListener('click', ev => {
        ev.stopPropagation();
        modal.classList.remove('isOpenModal');
        getAbonement(id);
        return;
    });
};

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.subscriptionsButton').forEach(el => {
        el.addEventListener('click', ev => {
            openSubscriptionSelectModal(el);
        });
    });
});
