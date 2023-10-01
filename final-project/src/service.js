// view sevice section - model
const portfolioModals = document.querySelectorAll(".portfolio-model");
const imgCards = document.querySelectorAll(".img-card");
const portfolioCloseBtns = document.querySelectorAll(".portfolio-close-btn");

var portfolioModal = function(modalClick){
    portfolioModals[modalClick].classList.add("active");
}

imgCards.forEach((imgCard, i) => {
    imgCard.addEventListener("click", () => {
        portfolioModal(i);
    });
});

portfolioCloseBtns.forEach((portfolioCloseBtns) => {
    portfolioCloseBtns.addEventListener("click", () => {
        portfolioModals.forEach((portfolioModalView) => {
            portfolioModalView.classList.remove("active");
        });
    });
});