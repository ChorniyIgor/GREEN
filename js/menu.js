
fetch(((window.location.origin == 'http://localhost:8888') ? 'http://localhost:8888/getg2' : 'https://getg.me') + '/wp-json/menus/getg__main_menu') //https://dev.getg.me/wp-json/menus/getg__main_menu
    .then(response => response.json())
    .then(response => initMenu(response))
    .catch((error) => {
        console.error('Error:', error);
    });

function initMenu(menuData){
    const Menu = new MainMenu(
        reduceMenuData(menuData),
        document.querySelector('#main_site_header'),
        document.querySelector('#main_menu_toggle'),
        document.getElementById('site-navigation'));
    Menu.init();
}

class MainMenu{
    constructor(menuData, mainSiteHeader, mainMenuToggle, menuContainer) {
        this.data = menuData;
        this.mainSiteHeader = mainSiteHeader;
        this.mainMenuToggle = mainMenuToggle;
        this.menuHamburger = mainMenuToggle.querySelector('.hamburger');
        this.menuContainer = menuContainer;
        this.isMenuOpen = false;

        this.firstLevel = document.querySelector('.main_menu__first_level ul');
        this.secondLevel = document.querySelector('.main_menu__second_level ul');
        this.thirdLevel = document.querySelector('.main_menu__third_level ul');
        this.firstLevelTitle = document.getElementById('mobile_title__first_level');
        this.secondLevelTitle = document.getElementById('mobile_title__second_level');
        this.secondScreenBackBtn = document.getElementById('second_level_back_btn');
        this.thirdScreenBackBtn = document.getElementById('third_level_back_btn');
    }

    init(){
        this.generateFirstScreenItems();
        this.mainMenuToggle.addEventListener('click', this.onMainMenuToggleBtnClickHandler);
        this.firstLevel.addEventListener('click', this.onFirstListItemClick);
        this.secondLevel.addEventListener('click', this.onSecondListItemClick);
        this.initSmallMenuOnScroll();
        this.menuContainer.querySelector('.container').addEventListener('click', (evt)=>{
            if (evt.target.classList.contains('container')) {
                this.closeMenu();
            }
        });
        document.addEventListener('keyup',(evt)=>{
            if (evt.keyCode == 27) { //if escape pressed
                this.closeMenu()
            }
        });
        this.secondScreenBackBtn.addEventListener('click', ()=>{
            this.menuContainer.classList.remove('main_menu--open-second');
            this.cleanAllActiveScreensElements();
        });
        this.thirdScreenBackBtn.addEventListener('click', ()=>{
            this.menuContainer.classList.remove('main_menu--open-third');
            this.cleanSecondScreenElements();
        });
        this.firstLevelTitle.addEventListener('click', ()=>{
            this.menuContainer.classList.remove('main_menu--open-third');
            this.cleanSecondScreenElements();
            this.menuContainer.classList.remove('main_menu--open-second');
            this.cleanAllActiveScreensElements();

        });
        this.secondLevelTitle.addEventListener('click', ()=>{
            this.menuContainer.classList.remove('main_menu--open-third');
            this.cleanSecondScreenElements();
        });
    }

    onMainMenuToggleBtnClickHandler = (evt) => {
        if (this.isMenuOpen){
            this.closeMenu();
        } else {
            this.openMenu();
        }
    }

    openMenu = () =>{
        this.isMenuOpen = true;
        this.mainSiteHeader.classList.add('site-header--open');
        this.menuContainer.classList.add('main_menu--open-first');
        this.mainMenuToggle.classList.add('main_menu_toggle--open');
        this.menuHamburger.classList.add('is-active');
    }

    closeMenu = () =>{
        this.isMenuOpen = false;
        this.mainSiteHeader.classList.remove('site-header--open');
        this.menuContainer.classList.remove('main_menu--open-first');
        this.menuContainer.classList.remove('main_menu--open-second');
        this.menuContainer.classList.remove('main_menu--open-third');
        this.mainMenuToggle.classList.remove('main_menu_toggle--open');
        this.menuHamburger.classList.remove('is-active');
        this.cleanAllActiveScreensElements();
    }

    cleanAllActiveScreensElements = () => {
        [...this.firstLevel.querySelectorAll('li')].forEach(item => {
            if (item.classList.contains('menu_item--active')) item.classList.remove('menu_item--active');
        });
    }

    cleanSecondScreenElements = () => {
        [...this.secondLevel.querySelectorAll('li')].forEach(item => {
            if (item.classList.contains('menu_item--active')) item.classList.remove('menu_item--active');
        });
    }

    markActiveScreenElement = (elem) => {
        [...elem.parentElement.querySelectorAll('li')].forEach(item => {
            if (item.classList.contains('menu_item--active')) item.classList.remove('menu_item--active');
        });
        elem.classList.add('menu_item--active');
    }

    //First screen functions

    generateFirstScreenItems = () => {
        let html = ``;
        for (const key in this.data) {
            const current = this.data[key];
            html += `<li style="order: ${current.elementOrder};" class="${ current.hasChildren ? 'main_menu__item--has-children ' : ''}menu_item--${current.ID}"><a href="${current.url}" tabindex="${current.elementOrder}" data-menu_item_id='${current.ID}'>${current.title}</a></li>`;
        }
        this.firstLevel.innerHTML = html;
    }

    onFirstListItemClick = (evt) => {
        if (evt.target.tagName == 'A') {
            if (evt.target.parentElement.classList.contains('main_menu__item--has-children')){
                evt.preventDefault();

                if (evt.target.parentElement.classList.contains('menu_item--active')){
                    this.menuContainer.classList.remove('main_menu--open-second');
                    this.menuContainer.classList.remove('main_menu--open-third');
                    evt.target.parentElement.classList.remove('menu_item--active');
                } else {
                    const currMenuItemId = evt.target.dataset.menu_item_id;
                    this.generateSecondScreenItems(currMenuItemId);
                    this.showSecondScreen();
                    this.menuContainer.classList.remove('main_menu--open-third');
                    this.markActiveScreenElement(evt.target.parentElement);
                }
            }
        }
    }

    //Second screen functions

    generateSecondScreenItems = (id) => {
        let html = ``;
        html += `<li class="main_menu__second_level__item main_menu__second_level--category"><a href="${this.data[id].url}">${this.data[id].title}<span class="view_all__category_link">View all &gt;</span></a></li>`;
        for (const key in this.data[id].children) {
            const current = this.data[id].children[key];
            html += `<li style="order: ${current.elementOrder};" class="${ current.hasChildren ? 'main_menu__item--has-children ' : ''} main_menu__second_level__item menu_item--${current.ID}"><a href="${current.url}" data-parent_id='${id}' data-menu_item_id='${current.ID}'>${current.title}</a></li>`;
        }
        this.secondLevel.innerHTML = html;
    }

    showSecondScreen = () => {
        this.menuContainer.classList.add('main_menu--open-second');
    }

    onSecondListItemClick = (evt) => {
        if (evt.target.tagName == 'A') {
            if (evt.target.parentElement.classList.contains('main_menu__item--has-children')){
                evt.preventDefault();

                if (evt.target.parentElement.classList.contains('menu_item--active')){
                    this.menuContainer.classList.remove('main_menu--open-third');
                    evt.target.parentElement.classList.remove('menu_item--active');
                } else {
                    const mainScreenId = evt.target.dataset.parent_id;
                    const currMenuItemId = evt.target.dataset.menu_item_id;
                    this.markActiveScreenElement(evt.target.parentElement);
                    this.generateThirdScreenItems(mainScreenId,currMenuItemId);
                    this.showThirdScreen();
                }
            }
        }
    }

    generateThirdScreenItems = (firstID, secondID) => {
        let html = ``;
        const currentElem = this.data[firstID].children[secondID];
        this.secondLevelTitle.innerHTML = currentElem.title;

        html += `<li class="main_menu__third_level__item main_menu__third_level--category"><a href="${currentElem.url}">${currentElem.title}<span class="view_all__category_link">View all &gt;</span></a></li>`;


        for (const key in currentElem.children) {
            const current = currentElem.children[key];
            html += `<li style="order: ${current.elementOrder};"  class="main_menu__third_level__item"><a href="${current.url}">${current.title}</a></li>`;
        }
        this.thirdLevel.innerHTML = html;
    }

    showThirdScreen = () => {
        this.menuContainer.classList.add('main_menu--open-third');
    }

    initSmallMenuOnScroll = () =>{
        this.toggleMenuClassesOnScroll();
        window.addEventListener('scroll', () => {
            this.toggleMenuClassesOnScroll();
        });
    }

    toggleMenuClassesOnScroll = () => {
        if (window.pageYOffset > 20 && !this.mainSiteHeader.classList.contains('site-header--small')) {
            this.mainSiteHeader.classList.add('site-header--small');
            document.body.classList.add('header--small');
        } else if (window.pageYOffset <= 20 && this.mainSiteHeader.classList.contains('site-header--small')){
            this.mainSiteHeader.classList.remove('site-header--small');
            document.body.classList.remove('header--small');
        }
    }


}

function reduceMenuData(data){
    const dataCopy = [...data];
    const newObj = {};

    //create parentsMap
    const parentsMap = {};
    dataCopy.forEach(item =>{
        if (item.menu_item_parent != "0"){ //if element not from first level
            if (!parentsMap[item.menu_item_parent]){
                parentsMap[item.menu_item_parent] = {};
            }
            parentsMap[item.menu_item_parent][item.ID] = {
                title : item.title,
                url : item.url,
                elementOrder : item['menu_order'],
                ID : item.ID,
                hasChildren : false
            }
        }
    });

    //build first level with children
    dataCopy.forEach(item =>{
        if (item.menu_item_parent == "0"){
            newObj[item.ID] = {
                title : item.title,
                url : item.url,
                elementOrder : item['menu_order'],
                ID : item.ID,
                hasChildren : false
            }
            //check children
            if (!!parentsMap[item.ID]){
                newObj[item.ID].hasChildren = true;
                newObj[item.ID].children = parentsMap[item.ID];
            }
        }
    });

    //build second level with children
    for (const key in newObj) {
        const currElem = newObj[key];
        if (!!currElem.children){
            for (const key in currElem.children) {
                const item = currElem.children[key];
                if (!!parentsMap[item.ID]){
                    item.children = parentsMap[item.ID];
                    item.hasChildren = true;
                }
            }
        }
    }

    return newObj;
}
