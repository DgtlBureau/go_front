const openTrainerInfoModal = (el) => {
    document.querySelector('body').classList.add('disableScroll');
    const modal = document.querySelector('#trainerModal');
    modal.classList.add('isOpenModal');
    const name = el.attributes['data-name'].value;
    const type = el.attributes['data-type'].value;
    const description = el.querySelector('.trainerInfo').innerHTML;
    const src = el.querySelector('.trainerImageWrapper img').attributes['src'].value;
    modal.querySelector('.modalTrainerInfoDetails').innerHTML = description;
    modal.querySelector('.modalTrainerAvatar').attributes['src'].value = src;
    modal.querySelector('.modalTrainerInfoName').innerHTML = `${name}<span>(${type})</span>`;
};

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.trainerCard').forEach(el => {
        el.addEventListener('click', ev => {
            openTrainerInfoModal(el);
        });
    });
});
