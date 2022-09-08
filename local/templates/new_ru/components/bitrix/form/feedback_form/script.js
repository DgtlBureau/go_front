document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.feedbackForm').addEventListener('submit', async ev => {
        ev.preventDefault();
        let data = new FormData(ev.target);
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
                    ajaxAction: 'mail.sendFeedback',
                    data,
                }),
            }
        )
            .then(res => res.json())
            .catch(err => console.log(err));
        if (res.data?.success) {
            console.log(res.data);
            const successModal = new ModalWindow('feedbackSuccess', 'Ваш вопрос успешно отправлен');
            successModal.addContent(`
                <div class="containerModal">
                    <span>Спасибо за обращение! Нас специалист свяжется с вами</span>
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
    });
});
