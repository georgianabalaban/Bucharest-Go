


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
