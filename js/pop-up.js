// Create Events for creating the modals
if (document.addEventListener) {
    document.addEventListener("mouseover", handleClick, false);
}
else if (document.attachEvent) {
    document.attachEvent("mouseover", handleClick);
}

function handleClick(event) {
    event = event || window.event;
    event.target = event.target || event.srcElement;

    var element = event.target;

    // Climb up the document tree from the target of the event
    while (element) {
        if (element.nodeName === "BUTTON" && /akela/.test(element.className)) {
            // The user clicked on a <button> or clicked on an element inside a <button>
            // with a class name called "foo"
            openModalListen(element);
            break;
        } else if (element.nodeName === "BUTTON" && /close/.test(element.className)) {
            // The user clicked on a <button> or clicked on an element inside a <button>
            // with a class name called "foo"
            closeModalListen(element);
            break;
        } else if (element.nodeName === "DIV" && /close/.test(element.className)) {
            // The user clicked on a <button> or clicked on an element inside a <button>
            // with a class name called "foo"
            closeModalListen(element);
            break;
        }

        element = element.parentNode;
    }
}

function openModalListen(button) {
    openModal(button.id);
}

function closeModalListen(button) {
  var modalFooter = button.parentElement;
  var modalContent = modalFooter.parentElement;
  var modalElement = modalContent.parentElement;
  var backdrop = document.getElementById("modal-backdrop");
    closeModal(modalElement, backdrop);
}

// Open modal
function openModal(clicked_id) {
  var button = document.getElementById(clicked_id);
  var modal = button.getAttribute("data-modal");
  var modalElement = document.getElementById(modal);
  var backdrop = document.createElement('div');
  backdrop.id="modal-backdrop";
  backdrop.classList.add("modal-backdrop");
  document.body.appendChild(backdrop);
  var backdrop = document.getElementById("modal-backdrop");
  backdrop.className += " modal-open";
  modalElement.className += " modal-open";
}

// Close Modal
function closeModal (modalElement, backdrop) {
  modalElement.className = modalElement.className.replace(/\bmodal-open\b/, '');
      backdrop.className = backdrop.className.replace(/\bmodal-open\b/, '');
}