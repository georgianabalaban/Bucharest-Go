


///// Section-1 CSS-Slider /////    
  // Auto Switching Images for CSS-Slider
  function bannerSwitcher() {
    next = $('.sec-1-input').filter(":checked").next('.sec-1-input');
    if (next.length) next.prop('checked', true);
    else $('.sec-1-input').first().prop('checked', true);
  }

  var bannerTimer = setInterval(bannerSwitcher, 5000);

  $('nav .controls label').click(function() {
    clearInterval(bannerTimer);
    bannerTimer = setInterval(bannerSwitcher, 5000)
  });

//---------------------MODAL----------------------------
const login = document.getElementById('login');
const signup = document.getElementById('signup');
const loginButton=document.getElementById('loginButton');

const signupBtn=document.getElementById('signupBtn');
const loginBtn=document.getElementById('loginBtn');

login.addEventListener('click', (e) => {
	$('.error').hide();
 	$('.feedback').hide();
 	$('input').val('');
	let parent = e.target.parentNode.parentNode;
	Array.from(e.target.parentNode.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			signup.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});

signup.addEventListener('click', (e) => {
	$('.error').hide();
 	$('.feedback').hide();
 	$('input').val('');
	let parent = e.target.parentNode;
	Array.from(e.target.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			login.parentNode.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});
 

 loginButton.addEventListener('click', (e) => {
 	$('.error').hide();
 	$('.feedback').hide();
 	$('input').val('');
 });


loginBtn.addEventListener('click', function(e) {

   $("#loginMsg").show().animate({"opacity":"1", "bottom":"-50px"}, 400);
});



//--------------------------DROPDOWN USER MENU----------------------------------------------
var activeDropdown = {};
document.getElementById('icecream-dropdown').addEventListener('click',showDropdown);
function showDropdown(event){
  if (activeDropdown.id && activeDropdown.id !== event.target.id) {
    activeDropdown.element.classList.remove('active');
  }
  //checking if a list element was clicked, changing the inner button value
  if (event.target.tagName === 'LI') {
    for (var i=0;i<event.target.parentNode.children.length;i++){
      if (event.target.parentNode.children[i].classList.contains('check')) {
        event.target.parentNode.children[i].classList.remove('check');
      }
    }
    //timeout here so the check is only visible after opening the dropdown again
    window.setTimeout(function(){
          event.target.classList.add('check');
    },500)
  }
  for (var i = 0;i<this.children.length;i++){
    if (this.children[i].classList.contains('dropdown-selection')){
        activeDropdown.id = this.id;
        activeDropdown.element = this.children[i];
        this.children[i].classList.add('active');
     }
    //adding the dropdown-button to our object
    else if (this.children[i].classList.contains('dropdown-button')){
      activeDropdown.button = this.children[i];
    }
  }

  $(window).click(function(event) {
  if (!event.target.classList.contains('dropdown-button')) {
    activeDropdown.element.classList.remove('active');
  }
});
}


//-----------------------------------alerts------------------------------------------

var Alert = undefined;

(function(Alert) {
  var alert, error, info, success, warning, _container;
  info = function(message, title, options) {
    return alert("info", message, title, "icon-info-sign", options);
  };
  warning = function(message, title, options) {
    return alert("warning", message, title, "icon-warning-sign", options);
  };
  error = function(message, title, options) {
    return alert("error", message, title, "icon-minus-sign", options);
  };
  success = function(message, title, options) {
    return alert("success", message, title, "icon-ok-sign", options);
  };
  alert = function(type, message, title, icon, options) {
    var alertElem, messageElem, titleElem, iconElem, innerElem, _container;
    if (typeof options === "undefined") {
      options = {};
    }
    options = $.extend({}, Alert.defaults, options);
    if (!_container) {
      _container = $("#alerts");
      if (_container.length === 0) {
        _container = $("<ul>").attr("id", "alerts").appendTo($("body"));
      }
    }
    if (options.width) {
      _container.css({
        width: options.width
      });
    }
      alertElem = $("<li>").addClass("alert").addClass("alert-" + type);
      setTimeout(function() {
         alertElem.addClass('open');
      }, 1);
    if (icon) {
      iconElem = $("<i>").addClass(icon);
      alertElem.append(iconElem);
    }
    innerElem = $("<div>").addClass("alert-block");
    alertElem.append(innerElem);
    if (title) {
      titleElem = $("<div>").addClass("alert-title").append(title);
      innerElem.append(titleElem);
    }
    if (message) {
      messageElem = $("<div>").addClass("alert-message").append(message);
      innerElem.append(messageElem);
    }
    if (options.displayDuration > 0) {
      setTimeout((function() {
        leave();
      }), options.displayDuration);
    } else {
      innerElem.append("<em>Click to Dismiss</em>");
    }
    alertElem.on("click", function() {
      leave();
    });
     function leave() {
         alertElem.removeClass('open');
          alertElem.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',  function() { return alertElem.remove(); });
    }
    return _container.prepend(alertElem);
  };
  Alert.defaults = {
    width: "",
    icon: "",
    displayDuration: 3000,
    pos: ""
  };
  Alert.info = info;
  Alert.warning = warning;
  Alert.error = error;
  Alert.success = success;
  return _container = void 0;
    
   
})(Alert || (Alert = {}));

this.Alert = Alert;

$('#test').on('click', function() {
  Alert.info('Message');
  });


$(document).ready(function() {
  
  var scrollLink = $('.scroll');
  
  // ---------------------------Smooth scrolling-------------
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000 );
  });
  
  //------------------------ Active link switching------------
  $(window).scroll(function() {
    var scrollbarLocation = $(this).scrollTop();
    
    scrollLink.each(function() {
      
      var sectionOffset = $(this.hash).offset().top - 20;
      
      if ( sectionOffset <= scrollbarLocation ) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    })
    
  })
  
})

//-------------------smooth scroll with aos library-------------
AOS.init({
  duration: 1200,
})

//-------------------procentajul destinațiilor celor mai votate---------
$(function() {

  var polar_to_cartesian, svg_circle_arc_path, animate_arc;

  polar_to_cartesian = function(cx, cy, radius, angle) {
    var radians;
    radians = (angle - 90) * Math.PI / 180.0;
    return [Math.round((cx + (radius * Math.cos(radians))) * 100) / 100, Math.round((cy + (radius * Math.sin(radians))) * 100) / 100];
  };

  svg_circle_arc_path = function(x, y, radius, start_angle, end_angle) {
    var end_xy, start_xy;
    start_xy = polar_to_cartesian(x, y, radius, end_angle);
    end_xy = polar_to_cartesian(x, y, radius, start_angle);
    return "M " + start_xy[0] + " " + start_xy[1] + " A " + radius + " " + radius + " 0 0 0 " + end_xy[0] + " " + end_xy[1];
  };

  animate_arc = function(ratio, svg, perc) {
    var arc, center, radius, startx, starty;
    arc = svg.path('');
    center = 500;
    radius = 450;
    startx = 0;
    starty = 450;
    return Snap.animate(0, ratio, (function(val) {
      var path;
      arc.remove();
      path = svg_circle_arc_path(500, 500, 450, -90, val * 180.0 - 90);
      arc = svg.path(path);
      arc.attr({
        class: 'data-arc'
      });
      perc.text(Math.round(val * 100) + '%');
    }), Math.round(2000 * ratio), mina.easeinout);
  };

  $('.metric').each(function() {
    var ratio, svg, perc;
    ratio = $(this).data('ratio');
    svg = Snap($(this).find('svg')[0]);
    perc = $(this).find('text.percentage');
    animate_arc(ratio, svg, perc);
  });
});