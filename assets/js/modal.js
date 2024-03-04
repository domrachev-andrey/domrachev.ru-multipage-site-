class Modal {
  constructor(options) {
    let defaultOptions = {
      isOpen: () => { },
      isClose: () => { },
    };
    this.options = Object.assign(defaultOptions,options);
    const fixBlocks = document.querySelectorAll(".fix-block");
    fixBlocks.forEach((modal) => {
      this.modal = modal;
    });

    this.speed = false;
    this.animation = false;
    this.isOpen = false;
    this.modalContainer = false;
    this.previousActiveElement = false;

    this.focusElements = [
      "a[href]",
      "input",
      "button",
      "select",
      "textarea",
      "[tabindex]",
    ];
    this.disableScroll = () => {
      let paddingOffset = window.innerWidth - document.body.offsetWidth + "px";
      let pagePosition = window.scrollY;
      fixBlocks.forEach((el) => {
        el.style.paddingRight = paddingOffset;
      });
      document.body.style.paddingRight = paddingOffset;
      document.body.classList.add("disable-scroll");
      document.body.dataset.position = pagePosition;
      document.body.style.top = -pagePosition + "px";
    };

    this.enableScroll = () => {
      let pagePosition = parseInt(document.body.dataset.position,10);
      document.body.style.top = "auto";
      document.body.classList.remove("disable-scroll");
      fixBlocks.forEach((el) => {
        el.style.paddingRight = "0px";
      });
      document.body.style.paddingRight = "0px";
      window.scroll({ top: pagePosition,left: 0 });
      document.body.removeAttribute("data-position");
    };
    this.events();
  }

  events() {
    if (this.modal) {
      document.addEventListener(
        "click",
        function (e) {
          const clickedElement = e.target.closest("[data-path]");
          if (clickedElement) {
            let target = clickedElement.dataset.path;
            let animation = clickedElement.dataset.animation;
            let speed = clickedElement.dataset.speed;
            this.animation = animation ? animation : "fade";
            this.speed = speed ? parseInt(speed) : 300;
            this.modalContainer = document.querySelector(
              `[data-target="${target}"]`
            );
            this.open();
            return;
          }

          if (e.target.closest(".popup-close")) {
            this.close();
            return;
          }
        }.bind(this)
      );

      window.addEventListener(
        "keydown",
        function (e) {
          if (e.keyCode == 27) {
            if (this.isOpen) {
              this.close();
            }
          }

          if (e.keyCode == 9 && this.isOpen) {
            this.focusCatch(e);
            return;
          }
        }.bind(this)
      );

      this.modal.addEventListener(
        "click",
        function (e) {
          if (
            !e.target.classList.contains("popup-card") &&
            !e.target.closest(".popup-card") &&
            this.isOpen
          ) {
            this.close();
          }
        }.bind(this)
      );
    }
  }

  open() {
    this.previousActiveElement = document.activeElement;
    this.modal.style.setProperty("--transition-time",`${this.speed / 1000}s`);
    this.modal.classList.add("is-open");
    this.disableScroll()
    this.modalContainer.classList.add("modal-open");
    this.modalContainer.classList.add(this.animation);
    this.options.isOpen(this);
    this.modalContainer.classList.add("animate-open");
    this.isOpen = true;
    this.focusTrap();
  }

  close() {
    if (this.modalContainer) {
      this.modalContainer.classList.remove("animate-open");
      this.modalContainer.classList.remove(this.animation);
      this.modal.classList.remove("is-open");
      this.modalContainer.classList.remove("modal-open");
      this.enableScroll()
      this.options.isClose(this);
      this.isOpen = false;
      this.focusTrap();
    }
  }

  focusCatch(e) {
    const focusable = this.modalContainer.querySelectorAll(this.focusElements);
    const focusArray = Array.prototype.slice.call(focusable);
    const focusedIndex = focusArray.indexOf(document.activeElement);

    if (e.shiftKey && focusedIndex === 0) {
      focusArray[focusArray.length - 1].focus();
      e.preventDefault();
    }

    if (!e.shiftKey && focusedIndex === focusArray.length - 1) {
      focusArray[0].focus();
      e.preventDefault();
    }
  }

  focusTrap() {
    const focusable = this.modalContainer.querySelectorAll(this.focusElements);
    if (this.isOpen) {
      focusable[0].focus();
    } else {
      this.previousActiveElement.focus();
    }
  }

}

const modal = new Modal();