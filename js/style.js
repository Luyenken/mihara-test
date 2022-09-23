window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

function menu_nav() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function menu_icon(x) {
  x.classList.toggle("change");

}

/*button top */
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});


/*silde anime */
function effect_anima() {
  var reveals = document.querySelectorAll(".effect_anima");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("none");
    }
  }
}

window.addEventListener("scroll", effect_anima);

/*image silder*/
  $('.slider').each(function(slider_idx) { // Use each, so you can have multiple sliders

  let curr = 0;             // Set current index
  let itv = null;           // The interval holder
  
  const $slider = $(this);
  const $nav    = $('.slider-nav', $slider);
  const $items  = $('.slider-items', $slider);
  const $item   = $('.slider-item', $slider);
  const tot = $item.length; // How many
  const btns = [...new Array(tot)].map((_, i) => $('<input>', {
    type: 'radio',
    name: `slider-btn-${slider_idx}`,
    checked: curr == i,
    change() { // On button change event
      curr = i; // Set current index to this button index
      anim();
    }
  })[0]);
    
  function anim() {
    $items.css({transform: `translateX(-${curr*100}%)`}); // Animate
    btns[curr].checked = true; // Change nav btn state
  }

  function play() {
    itv = setInterval(() => {
      curr = ++curr % tot; // increment curr and reset to 0 if exceeds tot
      anim(); // and animate!
    }, 3000); // Do every 3sec
  }
  
  function stop() {
    clearInterval(itv);
  }

  $nav.empty().append(btns);   // Insert buttons
  $slider.hover(stop, play);   // Handle hover state
  play();                      // Start autoplay!

});
/*<============ Box Dialog START ============>*/
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

/*<============ Box Dialog END ============>*/
/*<============ Dropdown START ============>*/

// function myFunction() {
//   document.getElementById("myDropdown").classList.toggle("show");
// }

// Close the dropdown if the user clicks outside of it
// window.onclick = function(event) {
//   if (!event.target.matches('.dropbtn')) {
//     var dropdowns = document.getElementsByClassName("dropdown-content");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//       }
//     }
//   }
// }
function click_dropdown() {
  document.getElementById("myDropdown").classList.toggle("dropdown_show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('dropdown_show')) {
      myDropdown.classList.remove('dropdown_show');
    }
  }
}



/*<============ Dropdown START END ============>*/
