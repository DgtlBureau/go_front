$(document).ready(function () {
  setSlickSlider()

  // set main image for hall block
  $('.hallImageItem').click(handlerClickHallImage);

  // $('.trainerCard').click(openTrainerInfoModal);
  $('#signUpWorkout').click(openWorkoutModal)
  $('#confirmButtonWorkout').click(openWorkoutConfirmModal)
  $('.closeIcon').click(closeModal);
  $('.modalWrapper').click(closeModal);
  $('.closeIconContainer').click(closeModal);
  $('.containerModal').click(clickStop)
  // $('.subscriptionsButton').click(openSubscriptionSelectModal)
  $('.workoutButton').click(openWorkoutSelectModal)
  $('#buttonSectionSubscriptionModalClose').click(closeModal);
  // $('#buttonSectionSubscriptionModalBuy').click(openSubscriptionSelectBuyModal);
  $('#buttonModalSuccessBuy').click(closeModal)
  $("#anchor").click(handlerGoSubscription);

  $("#phone1").inputmask({ "mask": "+7 (999) 999-99-99" });
  $("#phone2").inputmask({ "mask": "+7 (999) 999-99-99" });


})

function setSlickSlider() {
  const widthWindow = $(window).width()
  switch (true) {
    case (widthWindow > 1350):
      $('.trainersList').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: false,
      })

      $('.hallImageList').slick({
        slidesToShow: 4.3, arrows: false, centerMode: true,
      });
      break;

    case (widthWindow <= 1350 && widthWindow > 1024):
      $('.trainersList').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
      })

      $('.hallImageList').slick({
        slidesToShow: 4.3, arrows: false, centerMode: true,
      });
      break;

    case (widthWindow <= 1024 && widthWindow > 750):
      $('.trainersList').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
      })
      $('.hallImageList').slick({
        slidesToShow: 1, infinite: false, arrows: true
      });
      break;

    case (widthWindow <= 750):
      $('.hallImageList').slick({
        slidesToShow: 1, infinite: false, arrows: true
      });
      break;
  }

}

function handlerClickHallImage() {
  const slideIndex = $(this).data('slide-index');
  $('.hallImageList').slick('slickGoTo', slideIndex);
}

// function openTrainerInfoModal() {
//   disableScrollBody()
//   $('#trainerModal').addClass('isOpenModal')
// }

function openWorkoutModal() {
  closeModal()
  disableScrollBody()
  $('#workoutModal').addClass('isOpenModal')
}

function openWorkoutConfirmModal() {
  closeModal()
  disableScrollBody()
  $('#workoutConfirmModal').addClass('isOpenModal')
}

// function openSubscriptionSelectModal() {
//   disableScrollBody()
//   $('#selectSubscriptionModal').addClass('isOpenModal')
// }

function openWorkoutSelectModal() {
  disableScrollBody()
  $('#selectSubscriptionModal').addClass('isOpenModal')
}

// function openSubscriptionSelectBuyModal() {
//   closeModal()
//   disableScrollBody()
//   $('#successBuyModal').addClass('isOpenModal')
// }

function disableScrollBody() {
  $('body').addClass('disableScroll')
}

function closeModal() {
  $('.modalWrapper').removeClass('isOpenModal')
  $('body').removeClass('disableScroll')
}

function handlerGoSubscription() {
  const section = $('#subscription_Section')[0];
  section.scrollIntoView({ behavior: "smooth" });
}

function clickStop(event) {
  event.stopPropagation()
}
