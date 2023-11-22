AOS.init();

class MobileNavBar {
    constructor(mobileMenu, navList, navLinks) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeNav = "active-nav";
        this.activeMenu = "active-menu";
        this.handleClick = this.handleClick.bind(this);
    }
    handleClick() {
        this.navList.classList.toggle(this.activeNav);
        this.mobileMenu.classList.toggle(this.activeMenu);
    }

    addClickEvent() {
        this.mobileMenu.addEventListener('click', this.handleClick);

        this.navLinks.forEach(link => {
            link.addEventListener('click', () => {
                this.handleClick();
            });
        });
    }

    init() {
        if (this.mobileMenu) {
            this.addClickEvent();
        }
        return this;
    }
}

const mobileNavbar = new MobileNavBar(
    '.mobile-menu',
    '.nav-list',
    '.nav-list li'
);

mobileNavbar.init();

// Links das imagens dos Serviços
const link_1 = document.querySelector('.link-1');
const link_2 = document.querySelector('.link-2');

link_1.addEventListener('click', () => {
    window.location.href = "catalogo.html";
})
link_2.addEventListener('click', () => {
    window.location.href = "catalogo.html";
})

// PDF.js

const PDFStart = () => {
    let loadingTask = pdfjsLib.getDocument('../assets/files/catalogo-escoramento.pdf'),
    pdfDoc = null,
    canvas = document.querySelector('#cnv'),
    ctx = canvas.getContext('2d'),
    scale = 1.5,
    numPage = 1;
    
    const GeneratePDF = numPage => {
        pdfDoc.getPage(numPage).then(page => {
            console.log(page)
        })
    }
    loadingTask.promise.then(pdfDoc_ => {
        pdfDoc = pdfDoc_;
        document.querySelector('#npages').textContent = pdfDoc.numPages;
        GeneratePDF(numPage);
    })
}

const startPDF = () => {
    PDFStart();
}

window.addEventListener('load', startPDF);