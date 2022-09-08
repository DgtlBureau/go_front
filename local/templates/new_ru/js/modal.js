class ModalWindow {
    formMethod = 'GET';
    formAction = '';
    content = [];
    fields = [];
    buttons = [];
    name = '';
    title = '';

    constructor(name, title = '') {
        this.name = name;
        this.title = title;
    }

    setFormMethod(method) {
        this.formMethod = method;
    }

    addField(name, type, placeholder = null, id = null, value = null) {
        this.fields.push({name, type, placeholder, value, id});
    }

    addButton(name, className, value, onClick = null, type = null) {
        this.buttons.push({name, className, value, onClick, type});
    }

    addContent(string) {
        this.content.push(string);
    }

    setButtons(buttons) {
        buttons.forEach(el => {
            this.buttons.push({
                name: el.name,
                type: el.type,
                className: el.className,
                value: el.value,
                onClick: el.onClick,
            });
        });
    }

    setFields(fields) {
        fields.forEach(el => {
            this.fields.push({
                name: el.name,
                type: el.type,
                value: el.value,
                placeholder: el.placeholder,
                id: el.id,
            });
        });
    }

    drawFields() {
        let res = `<form class="modalForm" id="${this.name + '-form'}">`;
        this.fields.forEach(el => {
            switch (el.type) {
                case 'textarea':
                    res += `<textarea name="${el.name || ''}" placeholder="${el.placeholder || ''}" ></textarea>`;
                    break;

                case 'phone':
                    res += `<input type="text" data-phone="true" name="${el.name || ''}" value="${el.value || ''}" placeholder="${el.placeholder || ''}" required/>`;
                    break;


                default:
                    res += `<input type="${el.type || 'text'}" name="${el.name || ''}" value="${el.value || ''}" placeholder="${el.placeholder || ''}" required/>`;
                    break;
            }
        });
        res += '</form>';
        return res;
    }

    drawButtons() {
        let res = '';
        this.buttons.forEach(el => {
            res += `<button name="${el.name}" type="${el.type}" class="${el.className?.join(' ')}" form="${this.name + '-form'}">${el.value}</button>`;
        });
        return res;
    }

    drawContent() {
        return this.content.join('');
    }

    init() {
        if (document.querySelector('#' + this.name)) {
            return;
        }
        let template = this.getTemplate();
        template = template.replace('##FORM_PLACEHOLDER##', this.drawFields());
        template = template.replace('##CONTENT_PLACEHOLDER##', this.drawContent());
        template = template.replace('##BUTTONS_PLACEHOLDER##', this.drawButtons());
        const wrap = document.createElement('div');
        wrap.innerHTML = template;
        wrap.querySelectorAll('.closeIcon, .closeIconContainer').forEach(el => {
            el.addEventListener('click', ev => {
                this.hide();
            });
        });
        this.buttons.forEach(el => {
            wrap.querySelector(`[name="${el.name}"]`)?.addEventListener('click', ev => {
                el.onClick();
            });
        });
        this.fields.forEach(el => {
            if (el.type === 'phone' && window.Inputmask) {
                $(wrap).find(`[name="${el.name}"]`).inputmask({ mask: '+7 (999) 999-99-99' });
            }
        });
        document.body.appendChild(wrap);
    }

    getTemplate() {
        return `
            <div id="${this.name}" class="modalWrapper">
                <div class="container">
                    <img class="closeIcon" src="/local/templates/new_ru/assets/go-fight/css/images/close.svg" />
                    <div class="containerModal">
                        <div class="modalHeader">
                            <span>${this.title}</span>
                            <img class="closeIconContainer" src="/local/templates/new_ru/assets/go-fight/css/images/close.svg" />
                        </div>
                        <div class="modalContent">
                            ##FORM_PLACEHOLDER##
                            ##CONTENT_PLACEHOLDER##
                        </div>
                        <div class="modalControls">
                            ##BUTTONS_PLACEHOLDER##
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    show() {
        document.querySelector('body').classList.add('disableScroll');
        document.querySelector(`#${this.name}`).classList.add('isOpenModal');
    }

    hide() {
        document.querySelector('body').classList.remove('disableScroll');
        document.querySelector(`#${this.name}`).classList.remove('isOpenModal');
    }
}

export default ModalWindow;
